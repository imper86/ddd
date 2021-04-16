<?php

namespace Imper86\DDD\Domain\ValueObject;

use Imper86\DDD\Application\UuidFactory;

/**
 * Class NamespacedUuid
 * @package Imper86\DDD\Domain\ValueObject
 */
abstract class NamespacedUuid extends Uuid
{
    /**
     * @return string
     */
    abstract public static function namespace(): string;

    /**
     * @param string $name
     * @return static
     */
    public static function create(string $name): static
    {
        return new static(UuidFactory::namespaced(static::namespace(), $name));
    }
}
