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
     * @api https://developer.riotgames.com/api-methods/#champion-v3/GET_getChampions
     * @detail Retrieve all champions.
     * @param bool $freeToPlay
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function champions(bool $freeToPlay = false)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/platform/v3/champions", [
            'freeToPlay' => $freeToPlay ? 'true' : 'false',
        ]));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#champion-v3/GET_getChampionsById
     * @detail Retrieve champion by ID.
     * @param int $id
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function championById(int $id)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/platform/v3/champions/{$id}"));
    }

}