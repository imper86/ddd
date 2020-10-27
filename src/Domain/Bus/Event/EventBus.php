<?php

namespace Imper86\DDD\Domain\Bus\Event;

/**
 * Interface EventBus
 * @package Imper86\DDD\Domain\Bus\Event
 */
interface EventBus
{
    /**
     * @param DomainEvent ...$events
     */
    public function publish(DomainEvent ...$events): void;
}
