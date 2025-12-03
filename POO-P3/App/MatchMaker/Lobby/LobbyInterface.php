<?php

declare(strict_types=1);

namespace App\MatchMaker\Lobby;

// use App\MatchMaker\Player\PlayerInterface;
// use App\MatchMaker\Player\QueuingPlayer;

use App\MatchMaker\Player\Player;
use App\MatchMaker\Lobby\QueuingPlayer;

interface LobbyInterface 
{
    public function findOponents(QueuingPlayer $player);

    public function addPlayer(Player $player): void;
}