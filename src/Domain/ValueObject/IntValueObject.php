<?php

namespace Imper86\DDD\Domain\ValueObject;

/**
 * Class IntValueObject
 * @package Imper86\DDD\Domain\ValueObject
 */
abstract class IntValueObject
{
    /**
     * @var int
     */
    protected int $value;

    /**
     * IntValueObject constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->value;
    }

    /**
     * @return int
     */
    public function value(): int
    {
        return $this->value;
    }

    /**
     * @param IntValueObject $other
     * @return bool
     */
    public function equals(IntValueObject $other): bool
    {
        return $this->value() === $other->value();
    }

    /**
     * @param IntValueObject $other
     * @return bool
     */
    public function isGreaterThan(IntValueObject $other): bool
    {
        return $this->value() > $other->value();
    }

    /**
     * @param IntValueObject $other
     * @return bool
     */
    public function isGreaterOrEqualThan(IntValueObject $other): bool
    {
        return $this->value() >= $other->value();
    }
}
