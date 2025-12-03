<?php

declare(strict_types=1);

namespace App\MatchMaker\Lobby;

use App\MatchMaker\Player\AbstractPlayer;
use App\MatchMaker\Player\Player;
use App\MatchMaker\Lobby\QueuingPlayerInterface;

class QueuingPlayer extends Player implements QueuingPlayerInterface
{
    public function __construct(AbstractPlayer $player, protected int $range = 1)
    {
        parent::__construct($player->getName(), $player->getRatio());
    }

    public function getRange(): int
    {
        return $this->range;
    }

    public function upgradeRange(): void
    {
        $this->range = min($this->range + 1, 40);
    }
}
