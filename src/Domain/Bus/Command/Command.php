<?php

namespace Imper86\DDD\Domain\Bus\Command;

use DateTimeImmutable;
use Imper86\DDD\Domain\ValueObject\OrderableUuid;

/**
 * Class Command
 * @package Imper86\DDD\Domain\Bus\Command
 */
abstract class Command
{
    /**
     * @var string
     */
    private string $commandId;
    /**
     * @var DateTimeImmutable
     */
    private DateTimeImmutable $dispatchedAt;

    /**
     * Command constructor.
     * @param string|null $commandId
     * @param DateTimeImmutable|null $dispatchedAt
     */
    public function __construct(?string $commandId = null, ?DateTimeImmutable $dispatchedAt = null)
    {
        $this->commandId = $commandId ?? OrderableUuid::create()->value();
        $this->dispatchedAt = $dispatchedAt ?? new DateTimeImmutable();
    }

    /**
     * @return string
     */
    public function commandId(): string
    {
        return $this->commandId;
    }

    /**
     * @return DateTimeImmutable
     */
    public function dispatchedAt(): DateTimeImmutable
    {
        return $this->dispatchedAt;
    }
}
