<?php

namespace Imper86\DDD\Domain\ValueObject;

use MyCLabs\Enum\Enum;

/**
 * Class EnumValueObject
 * @package Imper86\DDD\Domain\ValueObject
 */
abstract class EnumValueObject extends Enum
{
    /**
     * @return string
     */
    public function value(): string
    {
        return (string) $this->getValue();
    }
}
