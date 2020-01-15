<?php

    namespace Alexandreo\LolApiConnect\V4;

use Alexandreo\LolApiConnect\Client;
use Alexandreo\LolApiConnect\LeagueOfLegendsApiConnect;

/**
 * Class Spectator
 * @package Alexandreo\LolApiConnect\V4
 * @deprecated
 */
class Spectator
{

    /**
     * @var Client
     */
    private $client;

    /**
     * Spectator constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @api https://developer.riotgames.com/apis#spectator-v4/GET_getCurrentGameInfoBySummoner
     * @detail Get current game information for the given summoner ID.
     * @param string $summonerId
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function activeGameBySummonerId(string $summonerId)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/spectator/v4/active-games/by-summoner/{$summonerId}"));
    }

    /**
     * @api https://developer.riotgames.com/apis#spectator-v4/GET_getFeaturedGames
     * @detail Get list of featured games.
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function featuredGames()
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/spectator/v4/featured-games"));
    }





}