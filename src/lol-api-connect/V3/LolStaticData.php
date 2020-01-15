<?php

namespace Alexandreo\LolApiConnect\V3;

use Alexandreo\LolApiConnect\Client;
use Alexandreo\LolApiConnect\LeagueOfLegendsApiConnect;

/**
 * Class LolStaticData
 * @package Alexandreo\LolApiConnect\V3
 * @deprecated
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
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
     * @deprecated
     */
    public function masteryById(int $id, array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/masteries/{$id}", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getProfileIcons
     * @detail Retrieve profile icons.
     * @param array $queryParameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     * @deprecated
     */
    public function profileIcons(array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/profile-icons", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getRealm
     * @detail Retrieve realm data.
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     * @deprecated
     */
    public function realms()
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/realms"));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getReforgedRunePaths
     * @detail Retrieves reforged rune path list.
     * @param array $queryParameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     * @deprecated
     */
    public function reforgedRunePaths(array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/reforged-rune-paths", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getReforgedRunePathById
     * @detail Retrieves reforged rune path by ID.
     * @param int $id
     * @param array $queryParameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     * @deprecated
     */
    public function reforgedRunePathById(int $id, array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/reforged-rune-paths/{$id}", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getReforgedRunes
     * @detail Retrieves reforged rune list.
     * @param array $queryParameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     * @deprecated
     */
    public function reforgedRunes(array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/reforged-runes", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getReforgedRuneById
     * @detail Retrieves reforged rune by ID
     * @param int $id
     * @param array $queryParameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     * @deprecated
     */
    public function reforgedRuneById(int $id, array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/reforged-runes/{$id}", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getRuneList
     * @detail Retrieves rune list
     * @param array $queryParameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     * @deprecated
     */
    public function runes(array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/runes", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getRuneById
     * @detail Retrieves rune by ID
     * @param int $id
     * @param array $queryParameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     * @deprecated
     */
    public function runeById(int $id, array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/runes/{$id}", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getSummonerSpellList
     * @detail Retrieves summoner spell list.
     * @param array $queryParameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     * @deprecated
     */
    public function summonerSpells(array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/summoner-spells", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getSummonerSpellById
     * @detail Retrieves summoner spell by ID
     * @param int $id
     * @param array $queryParameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     * @deprecated
     */
    public function summonerSpellById(int $id, array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/summoner-spells/{$id}", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getFullTarballLink
     * @detail Retrieves full tarball link.
     * @param array $queryParameters
     * @return string
     * @throws \Exception
     * @deprecated
     */
    public function tarballLinks(array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/tarball-links", $queryParameters), 'string');
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#lol-static-data-v3/GET_getVersions
     * @detail Retrieve version data
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     * @deprecated
     */
    public function versions()
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/static-data/v3/versions"));
    }

}