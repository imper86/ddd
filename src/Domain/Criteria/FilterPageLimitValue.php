<?php


namespace Imper86\DDD\Domain\Criteria;


use Imper86\DDD\Domain\ValueObject\IntValueObject;
use Imper86\DDD\Domain\ValueObject\InvalidValueException;

final class FilterPageLimitValue extends IntValueObject
{
    public function __construct(int $value)
    {
        parent::__construct($value);

        if ($value < 1) {
            throw new InvalidValueException(sprintf('<%s> value must be greater than 0', self::class));
        }
    }
}
