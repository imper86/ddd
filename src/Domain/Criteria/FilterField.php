<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\Criteria;

use Imper86\DDD\Domain\ValueObject\InvalidValueException;
use Imper86\DDD\Domain\ValueObject\StringValueObject;

final class FilterField extends StringValueObject
{
    public function __construct(string $value)
    {
        parent::__construct($value);

        if ('' === $value) {
            throw new InvalidValueException(sprintf('<%s> value cannot be blank', self::class));
        }
    }
}
