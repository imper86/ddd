<?php


namespace Imper86\DDD\Domain\Criteria;


use Imper86\DDD\Domain\ValueObject\InvalidArgumentException;
use Imper86\DDD\Domain\ValueObject\StringValueObject;

/**
 * Class FilterValue
 * @package Imper86\DDD\Domain\Criteria
 */
final class FilterValue extends StringValueObject
{
    /**
     * FilterValue constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        parent::__construct($value);

        if ('' === $value) {
            throw new InvalidArgumentException(sprintf('<%s> value cannot be blank', self::class));
        }
    }
}