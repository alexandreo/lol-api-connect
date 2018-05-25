<?php

namespace Alexandreo\LolApiConnect\V3;

use Alexandreo\LolApiConnect\Client;
use Alexandreo\LolApiConnect\LeagueOfLegendsApiConnect;

/**
 * Class Match
 * @package Alexandreo\LolApiConnect\V3
 */
class Match
{

    /**
     * @var Client
     */
    private $client;

    /**
     * Match constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#match-v3/GET_getMatch
     * @detail Get match by match ID.
     * @param string $matchId
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function matcheById(string $matchId)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/match/v3/matches/{$matchId}"));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#match-v3/GET_getMatchlist
     * @detail Get matchlist for games played on given account ID and platform ID and filtered using given filter parameters, if any.
     * @param int $accountId
     * @param array $queryParameters
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function matchListByAccount(string $accountId, array $queryParameters = [])
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/match/v3/matchlists/by-account/{$accountId}", $queryParameters));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#match-v3/GET_getMatchTimeline
     * @detail Get match timeline by match ID.
     * @param string $matchId
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function timeLineByMatch(string $matchId)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/match/v3/timelines/by-match/{$matchId}"));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#match-v3/GET_getMatchIdsByTournamentCode
     * @detail Get match IDs by tournament code.
     * @param string $tournamentCode
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function matchByTournamentCode(string $tournamentCode)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/match/v3/matches/by-tournament-code/{$tournamentCode}/ids"));
    }

    /**
     * @api https://developer.riotgames.com/api-methods/#match-v3/GET_getMatchByTournamentCode
     * @detail Get match by match ID and tournament code.
     * @param string $matchId
     * @param string $tournamentCode
     * @return \Illuminate\Support\Collection|string
     * @throws \Exception
     */
    public function matchByIdAndByTournamentCode(string $matchId, string $tournamentCode)
    {
        return LeagueOfLegendsApiConnect::parseResult($this->client->get("/lol/match/v3/matches/{$matchId}/by-tournament-code/{$tournamentCode}"));
    }

}