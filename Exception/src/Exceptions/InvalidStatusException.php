<?php
declare(strict_types=1);

namespace App\Domain\Exceptions;

class InvalidStatusException extends \RuntimeException
{
    public function __construct(array $allowedStatuses, string $givenStatus, int $code = 0, ?\Throwable $previous = null)
    {
        $message = sprintf(
            'Invalid status "%s". Must be one of: %s',
            $givenStatus,
            implode(', ', $allowedStatuses)
        );

        parent::__construct($message, $code, $previous);
    }
}
