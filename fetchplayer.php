<?php

require_once __DIR__ . '/Query.php';

$ob = new Query();
// Fetches all the details of all players.
$player = $ob->fetchPlayer();
