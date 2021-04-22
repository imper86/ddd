<?php

namespace Imper86\DDD\Domain\ValueObject;

/**
 * Class FloatValueObject
 * @package Imper86\DDD\Domain\ValueObject
 */
abstract class FloatValueObject extends IntValueObject
{
    /**
     * @param float $value
     * @return static
     */
    public static function fromFloat(float $value): self
    {
        return new static(
            (int)round(
                (float)bcmul(
                    (string)$value,
                    (string)pow(10, static::scale()),
                    1
                )
            )
        );
    }

    /**
     * @return int
     */
    abstract protected static function scale(): int;

    /**
     * @return float
     */
    public function toFloat(): float
    {
        return round(
            (float)bcdiv(
                (string)$this->value(),
                (string)pow(10, static::scale()),
                static::scale() + 1
            ),
            static::scale()
        );
    }
}
