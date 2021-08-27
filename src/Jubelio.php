<?php

/**
 * Jubelio class
 * @package iqomp/jubelio
 * @version 0.0.1
 */

namespace Iqomp\Jubelio;

class Jubelio
{
    protected string $email;
    protected string $password;
    protected string $token;
    protected array $apis;
    protected object $collections;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
        $this->collections = (object)[];
        $this->token = '';

        $api_file = dirname(__DIR__) . '/api.php';
        $this->apis = include $api_file;
    }

    public function __get(string $name)
    {
        if (in_array($name, ['email', 'password'])) {
            return $this->$name;
        }

        if (isset($this->collections->$name)) {
            return $this->collections->$name;
        }

        if (!isset($this->apis[$name])) {
            throw new Exception\CollectionNotFoundException($name);
        }

        $opts = $this->apis[$name];

        $this->collections->$name = new Collection($this, $name, $opts);

        return $this->collections->$name;
    }

    public function getToken(): string
    {
        if ($this->token) {
            return $this->token;
        }

        $login = $this->Authentication->Login();
        if (!$login) {
            throw new Exception\InvalidLoginException();
        }

        $this->token = $login->token;

        return $this->token;
    }
}
