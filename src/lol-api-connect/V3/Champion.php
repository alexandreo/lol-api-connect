<?php

namespace Alexandreo\LolApiConnect\V3;

use Alexandreo\LolApiConnect\Client;
use Alexandreo\LolApiConnect\LeagueOfLegendsApiConnect;

/**
 * Class Champion
 * @package Alexandreo\LolApiConnect\V3
 */
class Champion
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
     * @api https://developer.riotgames.com/apis#champion-v3/GET_getChampionInfo
     * @detail Retrieve free week champions.
     * @param bool $freeToPlay
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function championRotations()
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/platform/v3/champion-rotations"));
    }
}