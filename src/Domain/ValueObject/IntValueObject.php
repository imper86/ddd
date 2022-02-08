<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\ValueObject;

use Stringable;

abstract class IntValueObject implements Stringable
{
    public function __construct(protected int $value)
    {
    }

    public function __toString(): string
    {
        return (string) $this->value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function equals(IntValueObject $other): bool
    {
        return $this->getValue() === $other->getValue();
    }

    public function isGreaterThan(IntValueObject $other): bool
    {
        return $this->getValue() > $other->getValue();
    }

    public function isGreaterOrEqualThan(IntValueObject $other): bool
    {
        return $this->getValue() >= $other->getValue();
    }
}
