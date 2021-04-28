<?php

namespace Imper86\DDD\Domain\ValueObject;

/**
 * Class StringValueObject
 * @package Imper86\DDD\Domain\ValueObject
 */
abstract class StringValueObject
{
    /**
     * @var string
     */
    protected string $value;

    /**
     * StringValueObject constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->value;
    }

    /**
     * @param StringValueObject $other
     * @return bool
     */
    public function equals(StringValueObject $other): bool
    {
        return $this->value() === $other->value();
    }
}
