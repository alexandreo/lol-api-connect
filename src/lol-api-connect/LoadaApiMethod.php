<?php
/**
 * @author Alexandre Oliveira
 * @author Alexandre Oliveira <contato@alexandreo.com.br>
 */

namespace Alexandreo\LolApiConnect;

use Exception;


/**
 * Class LoadaApiMethod
 * @package Alexandreo\LolApiConnect
 */
class LoadaApiMethod
{

    /**
     * @var string api version
     */
    private $version;

    /**
     * @var Client
     */
    private $client;

    /**
     * LoadaApiMethod constructor.
     * @param $version
     * @param Client $client
     */
    public function __construct($version, Client $client)
    {
        $this->version = $version;
        $this->client = $client;
    }

    /**
     * @param $class
     * @param $arguments
     * @return mixed
     * @throws Exception
     */
    public function __call($class, $arguments)
    {
        $class = $this->version . $class;

        if (class_exists($class)) {
            return new $class($this->client);
        }

        throw new Exception('Unable to load method');
    }


}