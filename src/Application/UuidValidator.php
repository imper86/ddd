<?php


namespace Imper86\DDD\Application;


use Symfony\Component\Uid\Uuid;

final class UuidValidator
{
    public static function isValid(string $uuid): bool
    {
        return Uuid::isValid($uuid);
    }
}
