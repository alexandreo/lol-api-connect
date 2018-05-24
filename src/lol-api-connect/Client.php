<?php
/**
 * @author Alexandre Oliveira
 * @author Alexandre Oliveira <contato@alexandreo.com.br>
 */

namespace Alexandreo\LolApiConnect;

use Exception;
use GuzzleHttp\Client as RequestClient;
use Psr\Http\Message\UriInterface;

/**
 * Class Client
 * @package Alexandreo\LolApiConnect
 */
class Client extends RequestClient
{

    /**
     * @var string
     */
    private $apiUri = 'https://%s.api.riotgames.com/';

    /**
     * @var string Stores locally client api key
     */
    private $apiKey;


    /**
     * Client constructor.
     */
    public function __construct($apiKey, $region)
    {
        LeagueOfLegendsApiConnect::existsRegion($region);

        parent::__construct([
            'base_uri' => sprintf($this->apiUri, data_get(LeagueOfLegendsApiConnect::regions(), $region, null))
        ]);

        $this->apiKey = $apiKey;
    }

    /**
     * @param UriInterface|string $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     * @throws Exception
     */
    public function get($uri, array $options = [])
    {
        return parent::get($uri . '?api_key=' . $this->apiKey, $options);
    }


}