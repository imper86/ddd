<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\ValueObject;

use Stringable;
use Symfony\Component\Uid\Uuid as SymfonyUuid;

class Uuid implements Stringable
{
    final public function __construct(protected string $value)
    {
        $this->ensureIsValid($value);
    }

    public static function random(): static
    {
        return new static(SymfonyUuid::v4()->__toString());
    }

    public static function orderable(): static
    {
        return new static(SymfonyUuid::v6()->__toString());
    }

    public static function namespaced(string $namespace, string $name): static
    {
        return new static(SymfonyUuid::v5(new SymfonyUuid($namespace), $name)->__toString());
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function equals(Uuid $other): bool
    {
        return $this->getValue() === $other->getValue();
    }

    private function ensureIsValid(string $value): void
    {
        if (!SymfonyUuid::isValid($value)) {
            throw new InvalidValueException(
                sprintf('<%s> does not allow value <%s>', static::class, $value),
            );
        }
    }
}
