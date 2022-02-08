<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\Bus\Event;

use DateTimeImmutable;
use Imper86\DDD\Domain\ValueObject\Uuid;

abstract class DomainEvent
{
    private string $aggregateId;
    private string $eventId;
    private DateTimeImmutable $occurredOn;

    public function __construct(
        string $aggregateId,
        ?string $eventId = null,
        ?DateTimeImmutable $occurredOn = null
    ) {
        $this->aggregateId = $aggregateId;
        $this->eventId = $eventId ?: Uuid::orderable()->getValue();
        $this->occurredOn = $occurredOn ?: new DateTimeImmutable();
    }

    public function getAggregateId(): string
    {
        return $this->aggregateId;
    }

    public function getEventId(): string
    {
        return $this->eventId;
    }

    public function getOccurredOn(): DateTimeImmutable
    {
        return $this->occurredOn;
    }
}
