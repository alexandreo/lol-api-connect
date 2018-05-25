<?php

namespace Alexandreo\LolApiConnect\V3;

use Alexandreo\LolApiConnect\Client;
use Alexandreo\LolApiConnect\LeagueOfLegendsApiConnect;

/**
 * Class ChampionMastery
 * @package Alexandreo\LolApiConnect\V3
 */
class ChampionMastery
{

    /**
     * @var Client
     */
    private $client;

    /**
     * ChampionMastery constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#champion-mastery-v3
     * @detail Get all champion mastery entries sorted by number of champion points descending,
     * @param int $summonerId Champion ID to retrieve Champion Mastery for
     * @return \Illuminate\Support\Collection
     * @throws \Exception
     */
    public function bySummoner(int $summonerId)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/champion-mastery/v3/champion-masteries/by-summoner/{$summonerId}"));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#champion-mastery-v3/GET_getChampionMastery
     * @detail Get a champion mastery by player ID and champion ID.
     * @param int $summonerId Champion ID to retrieve Champion Mastery for
     * @param int $championId Summoner ID associated with the player
     * @return \Illuminate\Support\Collection
     * @throws \Exception
     */
    public function bySummonerByChampion(int $summonerId, int $championId)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/champion-mastery/v3/champion-masteries/by-summoner/{$summonerId}/by-champion/{$championId}"));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#champion-mastery-v3/GET_getChampionMasteryScore
     * @detail Get a player's total champion mastery score, which is the sum of individual champion mastery levels.
     * @param int $summonerId
     * @return \Illuminate\Support\Collection
     * @throws \Exception
     */
    public function scoresBySummoner(int $summonerId)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/champion-mastery/v3/scores/by-summoner/{$summonerId}"), 'string');
    }




}