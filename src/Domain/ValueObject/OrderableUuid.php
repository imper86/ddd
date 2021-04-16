<?php

namespace Imper86\DDD\Domain\ValueObject;

use Imper86\DDD\Application\UuidFactory;

/**
 * Class OrderableUuid
 * @package Imper86\DDD\Domain\ValueObject
 */
abstract class OrderableUuid extends Uuid
{
    /**
     * @return static
     */
    public static function create(): self
    {
        return new static(UuidFactory::orderable());
    }
}
