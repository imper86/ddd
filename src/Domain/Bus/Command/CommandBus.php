<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\Bus\Command;

interface CommandBus
{
    public function dispatch(Command $command): void;
}
