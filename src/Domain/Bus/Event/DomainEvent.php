<?php

namespace Imper86\DDD\Domain\Bus\Event;

use DateTimeImmutable;
use Imper86\DDD\Domain\ValueObject\Uuid;

/**
 * Class DomainEvent
 * @package Imper86\DDD\Domain\Bus\Event
 */
abstract class DomainEvent
{
    /**
     * @var string
     */
    private string $aggregateId;
    /**
     * @var string
     */
    private string $eventId;
    /**
     * @var DateTimeImmutable
     */
    private DateTimeImmutable $occurredOn;

    /**
     * DomainEvent constructor.
     * @param string $aggregateId
     * @param string|null $eventId
     * @param DateTimeImmutable|null $occurredOn
     */
    public function __construct(
        string $aggregateId,
        ?string $eventId = null,
        ?DateTimeImmutable $occurredOn = null
    ) {
        $this->aggregateId = $aggregateId;
        $this->eventId = $eventId ?? Uuid::orderable()->value();
        $this->occurredOn = $occurredOn ?? new DateTimeImmutable();
    }

    /**
     * @return string
     */
    abstract public static function eventName(): string;

    /**
     * @return string
     */
    public function aggregateId(): string
    {
        return $this->aggregateId;
    }

    /**
     * @return string
     */
    public function eventId(): string
    {
        return $this->eventId;
    }

    /**
     * @return DateTimeImmutable
     */
    public function occurredOn(): DateTimeImmutable
    {
        return $this->occurredOn;
    }
}
