<?php

namespace App\Domain\Exceptions;

class PlayerNotInLobbyException extends \RuntimeException
{
    public $message = 'Ce joueur ne se trouve pas dans le lobby';
}