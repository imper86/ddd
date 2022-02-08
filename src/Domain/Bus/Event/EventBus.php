<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\Bus\Event;

interface EventBus
{
    public function publish(DomainEvent ...$events): void;
}
