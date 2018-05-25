<?php

namespace Alexandreo\LolApiConnect\V3;

use Alexandreo\LolApiConnect\Client;
use Alexandreo\LolApiConnect\LeagueOfLegendsApiConnect;

/**
 * Class League
 * @package Alexandreo\LolApiConnect\V3
 */
class League
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
     * @api https://developer.riotgames.com/api-methods/#league-v3/GET_getChallengerLeague
     * @detail Get the challenger league for given queue.
     * @param string $queue
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function challengerLeaguesByQueue(string $queue)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/league/v3/challengerleagues/by-queue/{$queue}"));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#league-v3/GET_getLeagueById
     * @detail Get league with given ID, including inactive entries.
     * @param string $leagueId
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function byId(string $leagueId)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/league/v3/leagues/{$leagueId}"));
    }


    /**
     * @api https://developer.riotgames.com/api-methods/#league-v3/GET_getMasterLeague
     * @detail Get the master league for given queue.
     * @param string $queue
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function masterLeaguesByQueue(string $queue)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/league/v3/masterleagues/by-queue/{$queue}"));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#league-v3/GET_getAllLeaguePositionsForSummoner
     * @detail Get league positions in all queues for a given summoner ID.
     * @param string $summonerId
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function bySummonerId(string $summonerId)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/league/v3/positions/by-summoner/{$summonerId}"));
    }

}