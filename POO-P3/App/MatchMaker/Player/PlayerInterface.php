<?php

declare(strict_types=1);

namespace App\MatchMaker\Player;

interface PlayerInterface
{
    public function getRatio();
    public function getName();
    public function updateRatioAgainst(self $player, int $result);
}