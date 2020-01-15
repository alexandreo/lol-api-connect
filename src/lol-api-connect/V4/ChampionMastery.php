<?php

namespace Alexandreo\LolApiConnect\V4;

use Alexandreo\LolApiConnect\Client;
use Alexandreo\LolApiConnect\LeagueOfLegendsApiConnect;

/**
 * Class ChampionMastery
 * @package Alexandreo\LolApiConnect\V4
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
     * @api https://developer.riotgames.com/apis#champion-mastery-v4/GET_getAllChampionMasteries
     * @detail Get all champion mastery entries sorted by number of champion points descending,
     * @param int $summonerId Champion ID to retrieve Champion Mastery for
     * @return \Illuminate\Support\Collection
     * @throws \Exception
     */
    public function bySummoner($summonerId)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/champion-mastery/v4/champion-masteries/by-summoner/{$summonerId}"));
    }

    /**
     * @api https://developer.riotgames.com/apis#champion-mastery-v4/GET_getChampionMastery
     * @detail Get a champion mastery by player ID and champion ID.
     * @param int $summonerId Champion ID to retrieve Champion Mastery for
     * @param int $championId Summoner ID associated with the player
     * @return \Illuminate\Support\Collection
     * @throws \Exception
     */
    public function bySummonerByChampion($summonerId, int $championId)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/champion-mastery/v4/champion-masteries/by-summoner/{$summonerId}/by-champion/{$championId}"));
    }

    /**
     * @api https://developer.riotgames.com/apis#champion-mastery-v4/GET_getChampionMasteryScore
     * @detail Get a player's total champion mastery score, which is the sum of individual champion mastery levels.
     * @param int $summonerId
     * @return \Illuminate\Support\Collection
     * @throws \Exception
     */
    public function scoresBySummoner($summonerId)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/champion-mastery/v4/scores/by-summoner/{$summonerId}"), 'string');
    }
}