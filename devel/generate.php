<?php

$file = __DIR__ . '/jubelio.json';

$apis = file_get_contents($file);
$apis = json_decode($apis);

$result = [];

foreach ($apis->paths as $path => $methods) {
    foreach ($methods as $method => $opts) {
        $method = strtoupper($method);
        $collection = $opts->tags[0];
        $name = $opts->summary;
        $params = $opts->parameters ?? [];

        $collection = preg_replace('![^a-zA-Z0-9]!', '', $collection);
        $name = preg_replace('![^a-zA-Z0-9]!', '', $name);

        $auth = $path !== '/login';
        $args = [];
        $in_body = !!($opts->requestBody ?? null);
        $in_query = [];

        foreach ($params as $param) {
            if (isset($param->{'$ref'})) {
                $ref = trim($param->{'$ref'}, '#/');
                $refs = explode('/', $ref);
                $param = $apis;
                foreach ($refs as $ref) {
                    $param = $param->$ref;
                }
            }

            if ($param->in === 'header') {
                // jubelio docs is not trusted
                // we can't trust all in the docs.
                // if ($param->name === 'authorization') {
                //     $auth = true;
                // }

            } elseif ($param->in === 'path') {
                $args[] = $param->name;
            } elseif ($param->in === 'query') {
                if (!empty($param->required)) {
                    $def = $param->schema->minimum ?? null;
                    if ($param->name === 'pageSize') {
                        $def = 12;
                    }

                    $in_query[$param->name] = $def;
                }
            }
        }

        if ($in_body) {
            $args[] = 'body';
        }

        if ($in_query) {
            $args[] = 'query';
        }

        $api = [
            'auth'   => $auth,
            'method' => $method,
            'path'   => $path,
            'args'   => $args
        ];

        if ($in_query) {
            $api['query'] = $in_query;
        }

        if (!isset($result[$collection])) {
            $result[$collection] = [];
        }

        $result[$collection][$name] = $api;
    }
}

$res_file = dirname(__DIR__) . '/api.php';
$tx = '<?php' . PHP_EOL;
$tx .= 'return ' . var_export($result, true) . ';';

$f = fopen($res_file, 'w');
fwrite($f, $tx);
fclose($f);
