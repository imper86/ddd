<?php

namespace Imper86\DDD\Domain\ValueObject;

abstract class LocaleValueObject extends StringValueObject
{
    public function __construct(string $value)
    {
        parent::__construct(strtolower($value));

        if (2 !== strlen($value)) {
            throw new InvalidArgumentException(sprintf('<%s> does not allow value <%s>', static::class, $value));
        }
    }
}
