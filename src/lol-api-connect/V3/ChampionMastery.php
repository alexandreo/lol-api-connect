<?php

namespace Alexandreo\LolApiConnect\V3;


use Alexandreo\LolApiConnect\Client;

class ChampionMastery
{

    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }


    public function championMasteriesBySummoner(int $summonerId)
    {
        $ale = $this->client->get("/lol/champion-mastery/v3/champion-masteries/by-summoner/{$summonerId}");
        dd((string)$ale->getBody());
    }


}