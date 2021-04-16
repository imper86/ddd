<?php

namespace Imper86\DDD\Application;

use Symfony\Component\Uid\Uuid;

/**
 * Class UuidFactory
 * @package Imper86\DDD\Application
 */
final class UuidFactory
{
    /**
     * @return string
     */
    public static function random(): string
    {
        return Uuid::v4()->__toString();
    }

    /**
     * @param string $namespace
     * @param string $name
     * @return string
     */
    public static function namespaced(string $namespace, string $name): string
    {
        return Uuid::v5(new Uuid($namespace), $name)->__toString();
    }

    /**
     * @return string
     */
    public static function orderable(): string
    {
        return Uuid::v6()->__toString();
    }
}
