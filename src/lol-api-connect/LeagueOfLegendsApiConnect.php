<?php
namespace Alexandreo\LolApiConnect;

use Alexandreo\LolApiConnect\Constants\Region;
use Exception;


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
        'V3' => '\\Alexandreo\\LolApiConnect\\V3\\'
    ];

    /**
     * @var region
     */
    private $region;

    /**
     * LeagueOfLegendsApiConnect constructor.
     * @param $apiKey
     */
    public function __construct($apiKey, $region)
    {
        $this->apiKey = $apiKey;
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
     * @param $version
     * @param array $arguments
     * @return LoadaApiMethod
     */
    public function __call($version, array $arguments = [])
    {
        if (!array_key_exists($version, $this->apiVersions)) {//default version
            return $this->V3()->$version();
        }

        return new LoadaApiMethod(data_get($this->apiVersions, $version), new Client($this->apiKey, $this->region));
    }


}