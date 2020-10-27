<?php

namespace Imper86\DDD\Domain\ValueObject;

use InvalidArgumentException;
use Symfony\Component\Uid\Uuid as SymfonyUuid;

/**
 * Class Uuid
 * @package Imper86\DDD\Domain\ValueObject
 */
class Uuid
{
    /**
     * @var string
     */
    protected string $value;

    /**
     * Uuid constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
        $this->ensureIsValid($value);
    }

    /**
     * @return static
     */
    public static function random(): self
    {
        return new static(SymfonyUuid::v4()->__toString());
    }

    /**
     * @param Uuid $namespace
     * @param string $id
     * @return static
     */
    public static function namespaced(Uuid $namespace, string $id): self
    {
        return new static(SymfonyUuid::v5(new SymfonyUuid($namespace->value()), $id));
    }

    /**
     * @return static
     */
    public static function orderable(): self
    {
        return new static(SymfonyUuid::v6()->__toString());
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
     * @param Uuid $other
     * @return bool
     */
    public function equals(Uuid $other): bool
    {
        return $this->value() === $other->value();
    }

    /**
     * @param string $value
     */
    private function ensureIsValid(string $value)
    {
        if (!SymfonyUuid::isValid($value)) {
            throw new InvalidArgumentException(
                sprintf('<%s> does not allow value <%s>', static::class, $value),
            );
        }
    }
}
