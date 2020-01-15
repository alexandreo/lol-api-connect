<?php

namespace Alexandreo\LolApiConnect\V3;

use Alexandreo\LolApiConnect\Client;
use Alexandreo\LolApiConnect\LeagueOfLegendsApiConnect;

/**
 * Class LolStatus
 * @package Alexandreo\LolApiConnect\V3
 */
class LolStatus
{

    /**
     * @var Client
     */
    private $client;


    /**
     * LolStatus constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @api https://developer.riotgames.com/apis#lol-status-v3/GET_getShardData
     * @detail Get League of Legends status for the given shard.
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function shardData()
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/status/v3/shard-data"));
    }

}