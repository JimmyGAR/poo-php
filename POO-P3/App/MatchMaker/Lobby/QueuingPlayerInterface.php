<?php

declare(strict_types=1);

namespace App\MatchMaker\Lobby;

interface QueuingPlayerInterface 
{
    public function getRange(): int;

    public function upgradeRange(): void;
}