<?php

namespace Imper86\DDD\Domain\ValueObject;

use Imper86\DDD\Application\UuidValidator;
use InvalidArgumentException;

/**
 * Class Uuid
 * @package Imper86\DDD\Domain\ValueObject
 */
abstract class Uuid
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
        if (!UuidValidator::isValid($value)) {
            throw new InvalidArgumentException(
                sprintf('<%s> does not allow value <%s>', static::class, $value),
            );
        }
    }
}
