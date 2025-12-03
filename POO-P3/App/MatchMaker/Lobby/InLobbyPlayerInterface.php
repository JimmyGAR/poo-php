<?php

declare(strict_types=1);

namespace App\MatchMaker\Lobby;

use App\MatchMaker\Lobby\QueuingPlayerInterface;
use App\MatchMaker\Player\PlayerInterface;

interface InLobbyPlayerInterface extends PlayerInterface, QueuingPlayerInterface
{
}