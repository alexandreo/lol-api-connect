<?php

namespace Alexandreo\LolApiConnect\V4;

use Alexandreo\LolApiConnect\Client;
use Alexandreo\LolApiConnect\LeagueOfLegendsApiConnect;

/**
 * Class League
 * @package Alexandreo\LolApiConnect\V4
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
     * @api https://developer.riotgames.com/apis#league-v4/GET_getChallengerLeague
     * @detail Get the challenger league for given queue.
     * @param string $queue
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function challengerLeaguesByQueue(string $queue)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/league/v4/challengerleagues/by-queue/{$queue}"));
    }

    /**
     * @api https://developer.riotgames.com/apis#league-v4/GET_getLeagueById
     * @detail Get league with given ID, including inactive entries.
     * @param string $leagueId
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function byId(string $leagueId)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/league/v4/leagues/{$leagueId}"));
    }


    /**
     * @api https://developer.riotgames.com/apis#league-v4/GET_getMasterLeague
     * @detail Get the master league for given queue.
     * @param string $queue
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function masterLeaguesByQueue(string $queue)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/league/v4/masterleagues/by-queue/{$queue}"));
    }

    /**
     * @api https://developer.riotgames.com/apis#league-v4/GET_getLeagueEntriesForSummoner
     * @detail Get league positions in all queues for a given summoner ID.
     * @param string $summonerId
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function bySummonerId(string $summonerId)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/league/v4/entries/by-summoner/{$summonerId}"));
    }

    /**
     * @api https://developer.riotgames.com/apis#league-v4/GET_getLeagueEntries
     * @detail Get all the league entries.
     * @param string $queue
     * @param string $tier
     * @param string $division
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function byQueueByTierByDivision(string $queue, string $tier, string $division)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/league/v4/entries/{$queue}/{$tier}/{$division}"));
    }

    /**
     * @api https://developer.riotgames.com/apis#league-v4/GET_getGrandmasterLeague
     * @detail Get the grandmaster league of a specific queue.
     * @param string $queue
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function grandMasterLeaguesByQueue(string $queue)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/league/v4/grandmasterleagues/by-queue/{$queue}"));
    }
}