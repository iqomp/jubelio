<?php

/**
 * Guzzle handler
 * @package iqomp/jubelio
 * @version 0.0.1
 */

namespace Iqomp\Jubelio;

use GuzzleHttp\Client;

class Guzzle
{
    protected static $client;

    public static function getClient(): Client
    {
        if (self::$client) {
            return self::$client;
        }

        self::$client = new Client([
            'base_uri' => 'https://api.jubelio.com',
            'headers' => [
                'User-Agent' => 'iqomp/jubelio',
                'Accept' => 'application/json',
                'X-Version' => '1.0.0'
            ]
        ]);

        return self::$client;
    }
}
