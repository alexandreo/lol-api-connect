<?php

require 'vendor/autoload.php';

use Alexandreo\LolApiConnect\LeagueOfLegendsApiConnect;

$summonerName = $_POST['summoner-name'];

$apiConnect = new LeagueOfLegendsApiConnect('RGAPI-2c5ac41e-64f7-493f-b12d-049dc3be5eb4', 'BR');

$summoner = $apiConnect->Summoner()->byName($summonerName);
$league = $apiConnect->League()->bySummonerId($summoner['id']);
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Summoner</title>
</head>
    <body>
        <label for=""><strong>Summoner Info</strong></label>
        <br>
        <br>
        <div class="summoner">
            <table border="1" class="summoner-info" cellpadding="5">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Level</th>
                        <th>Queue</th>
                        <?php if ($league->count()){ ?>
                            <th>Elo</th>
                            <th>LP</th>
                            <th>Wins/Losses</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $summoner['name'] ?></td>
                        <td><?= $summoner['summonerLevel'] ?></td>
                        <td><?= $league->count() ? $league->first()->queueType : 'UNRANKED' ?></td>
                        <?php if ($league->count()){ ?>
                            <td><?= $league->first()->tier . ' ' . $league->first()->rank  ?></td>
                            <td><?= $league->first()->leaguePoints ?></td>
                            <td><?= $league->first()->wins . '/' . $league->first()->losses ?></td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <a href="index.php">Voltar</a>
    </body>
</html>
