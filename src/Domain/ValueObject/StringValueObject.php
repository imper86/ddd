<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\ValueObject;

use Stringable;

abstract class StringValueObject implements Stringable
{
    public function __construct(protected string $value)
    {
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function equals(StringValueObject $other): bool
    {
        return $this->getValue() === $other->getValue();
    }
}
