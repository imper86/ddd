<?php

namespace Imper86\DDD\Domain\ValueObject;

use Imper86\DDD\Application\UuidFactory;

/**
 * Class RandomUuid
 * @package Imper86\DDD\Domain\ValueObject
 */
abstract class RandomUuid extends Uuid
{
    /**
     * @return static
     */
    public static function create(): self
    {
        return new static(UuidFactory::random());
    }
}
