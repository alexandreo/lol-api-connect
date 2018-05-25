<?php

namespace Alexandreo\LolApiConnect\V3;

use Alexandreo\LolApiConnect\Client;
use Alexandreo\LolApiConnect\LeagueOfLegendsApiConnect;

/**
 * Class LolStaticData
 * @package Alexandreo\LolApiConnect\V3
 */
class LolStaticData
{

    /**
     * @var Client
     */
    private $client;

    /**
     * LolStaticData constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getChampionList
     * @detail Retrieves champion list
     * @param array $parameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function champions(array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/champions", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getChampionById
     * @detail Retrieves champion by ID
     * @param int $id
     * @param array $queryParameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function championByid(int $id, array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/champions/{$id}", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getItemList
     * @detail Retrieves item list.
     * @param array $queryParameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function items(array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/items", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getItemById
     * @detail Retrieves item by ID
     * @param int $id
     * @param array $queryParameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function itemById(int $id, array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/items/{$id}", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getLanguageStrings
     * @detail Retrieve language strings data.
     * @param array $queryParameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function languageStrings(array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/language-strings", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getLanguages
     * @detail Retrieve supported languages data.
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function languages()
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/languages"));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getMapData
     * @detail Retrieve map data.
     * @param array $queryParameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function maps(array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/maps", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getMasteryList
     * @detail Retrieves mastery list.
     * @param array $queryParameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function masteries(array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/masteries", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getMasteryById
     * @detail Retrieves mastery item by ID.
     * @param int $id
     * @param array $queryParameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function masteryById(int $id, array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/masteries/{$id}", $queryParameters));
    }





}