<?php

namespace Imper86\DDD\Domain\Aggregate;

use Imper86\DDD\Domain\Bus\Event\DomainEvent;

/**
 * Class AggregateRoot
 * @package Imper86\DDD\Domain\Aggregate
 */
abstract class AggregateRoot
{
    /**
     * @var DomainEvent[]
     */
    private array $domainEvents = [];

    /**
     * @return DomainEvent[]
     */
    final public function pullDomainEvents(): array
    {
        $events = $this->domainEvents;
        $this->domainEvents = [];

        return $events;
    }

    /**
     * @param DomainEvent $event
     */
    final protected function record(DomainEvent $event): void
    {
        $this->domainEvents[] = $event;
    }
}
