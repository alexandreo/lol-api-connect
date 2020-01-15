<?php
namespace Alexandreo\LolApiConnect;

use Alexandreo\LolApiConnect\Constants\Region;
use Alexandreo\LolApiConnect\Constants\ResponseStatus;
use Exception;
use GuzzleHttp\Psr7\Response;


/**
 * Class LeagueOfLegendsApiConnect
 * @package Alexandreo\LolApiConnect
 */
class LeagueOfLegendsApiConnect
{

    /**
     * @var string Stores locally client api key
     */
    private $apiKey;

    /**
     * @var array Controle api version
     */
    private $apiVersions = [
        'V3' => '\\Alexandreo\\LolApiConnect\\V3\\',
        'V4' => '\\Alexandreo\\LolApiConnect\\V4\\'
    ];

    /**
     * @var region
     */
    private $region;

    /**
     * LeagueOfLegendsApiConnect constructor.
     * @param $apiKey
     */
    public function __construct($apiKey, $region = null)
    {
        $this->apiKey = $apiKey;
        $this->region = $region;
    }

    /**
     * @param Region $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return array
     */
    static function regions()
    {
        return Region::getConstants();
    }

    /**
     * @param $region
     * @return bool
     * @throws Exception
     */
    static function existsRegion($region)
    {
        if (!key_exists(strtoupper($region), self::regions())) {
            throw new Exception('Invalid Region param');
        }

        return true;
    }

    /**
     * @param Response $response
     * @param string $parse
     * @return \Illuminate\Support\Collection|string
     * @throws Exception
     */
    static function parseResult(Response $response, string $parse = 'array')
    {
        if ($response->getStatusCode() != 200) {
            throw new Exception(data_get(ResponseStatus::getConstants(), 'HTTP_' . $response->getStatusCode()));
        }

        switch ($parse) {
            default:
            case 'array':
                return collect(json_decode($response->getBody()));
            break;
            case 'string':
                return (string)$response->getBody();
            break;
        }
    }

    /**
     * @param $version
     * @param array $arguments
     * @return LoadApiMethod
     */
    public function __call($version, array $arguments = [])
    {
        if (!array_key_exists($version, $this->apiVersions)) {//default version
            return $this->V4()->$version();
        }

        return new LoadApiMethod(data_get($this->apiVersions, $version), new Client($this->apiKey, $this->region));
    }


}