<?php

namespace Imper86\DDD\Domain\Bus\Command;

/**
 * Interface CommandBus
 * @package Imper86\DDD\Domain\Bus\Command
 */
interface CommandBus
{
    /**
     * @param Command $command
     */
    public function dispatch(Command $command): void;
}
