<?php

namespace Imper86\DDD\Domain\ValueObject;

/**
 * Class FloatValueObject
 * @package Imper86\DDD\Domain\ValueObject
 */
abstract class FloatValueObject extends IntValueObject
{
    /**
     * @return int
     */
    abstract protected static function scale(): int;

    /**
     * @param float $value
     * @return static
     */
    public static function fromFloat(float $value): self
    {
        return new static((int) round(bcmul($value, pow(10, static::scale()), 1)));
    }

    /**
     * @return float
     */
    public function toFloat(): float
    {
        return round(bcdiv($this->value(), pow(10, static::scale()), static::scale() + 1), static::scale());
    }
}
