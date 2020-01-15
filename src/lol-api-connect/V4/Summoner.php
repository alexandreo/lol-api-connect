<?php


namespace Alexandreo\LolApiConnect\V4;

use Alexandreo\LolApiConnect\Client;
use Alexandreo\LolApiConnect\LeagueOfLegendsApiConnect;

/**
 * Class Summoner
 * @package Alexandreo\LolApiConnect\V4
 */
class Summoner
{
    /**
     * @var Client
     */
    private $client;

    /**
     * Summoner constructor.
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

    /**
     * @param $accountId
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function byAccount($accountId)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/summoner/v4/summoners/by-account/{$accountId}"));
    }

    /**
     * @param $puuid
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function byPuuid($puuid)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/summoner/v4/summoners/by-puuid/{$puuid}"));
    }

    /**
     * @param $summonerId
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public  function byId($summonerId)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/summoner/v4/summoners/{$summonerId}"));
    }
}