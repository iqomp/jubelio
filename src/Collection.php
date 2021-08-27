<?php

/**
 * Collection class
 * @package iqomp/jubelio
 * @version 1.0.0
 */

namespace Iqomp\Jubelio;

class Collection
{
    protected Jubelio $jubelio;
    protected string $name;
    protected array $options;

    public function __construct(Jubelio &$jubelio, string $name, array $options)
    {
        $this->jubelio = &$jubelio;
        $this->name = $name;
        $this->options = $options;
    }

    public function __call(string $name, array $args)
    {
        if (!isset($this->options[$name])) {
            throw new Exception\ActionNotFoundException($name, $this->name);
        }

        $options = $this->options[$name];

        if ($this->name === 'Authentication' && $name === 'Login') {
            $args[0] = [
                'email' => $this->jubelio->email,
                'password' => $this->jubelio->password
            ];
        }

        $opts = [];

        if ($options['auth']) {
            if (!isset($opts['headers'])) {
                $opts['headers'] = [];
            }

            $opts['headers']['Authorization'] = $this->jubelio->getToken();
        }

        if (isset($options['args'])) {
            foreach ($options['args'] as $index => $arg) {
                $value = $args[$index] ?? null;

                if ($arg === 'query') {
                    $value = (array)$value;
                    if (isset($options['query'])) {
                        $value = array_replace($options['query'], $value);
                    }
                }

                if (is_null($value)) {
                    break;
                }

                if (is_string($value) || is_numeric($value)) {
                    $path = $options['path'];
                    $path = str_replace('{' . $arg . '}', $value, $path);
                    $options['path'] = $path;
                }

                if (in_array($arg, ['query', 'body', 'json'])) {
                    if ($arg === 'body') {
                        $arg = 'json';
                    }

                    $opts[$arg] = $value;
                }
            }
        }

        $guzzle = Guzzle::getClient();
        $resp = $guzzle->request($options['method'], $options['path'], $opts);

        $body = (string)$resp->getBody();
        $headers = $resp->getHeader('Content-Type')[0];
        if (false !== strstr($headers, 'application/json')) {
            $body = json_decode($body);
        }

        return $body;
    }
}
