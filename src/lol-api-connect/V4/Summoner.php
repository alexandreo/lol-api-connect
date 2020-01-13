<?php


namespace Alexandreo\LolApiConnect\V4;

use Alexandreo\LolApiConnect\Client;
use Alexandreo\LolApiConnect\LeagueOfLegendsApiConnect;

/**
 * Class Summoner
 * @package Alexandreo\LolApiConnect\V3
 */
class Summoner
{
    /**
     * @var Client
     */
    private $client;

    /**
     * Champion constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param $summonerName
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function byName($summonerName)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/summoner/v4/summoners/by-name/{$summonerName}"));
    }
}