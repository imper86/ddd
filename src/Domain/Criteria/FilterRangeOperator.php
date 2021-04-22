<?php


namespace Imper86\DDD\Domain\Criteria;


use Imper86\DDD\Domain\ValueObject\EnumValueObject;

/**
 * Class FilterRangeOperator
 * @package Imper86\DDD\Domain\Criteria
 *
 * @method static self GT()
 * @method static self GTE()
 * @method static self LT()
 * @method static self LTE()
 */
final class FilterRangeOperator extends EnumValueObject
{
    public const GT = 'gt';
    public const GTE = 'gte';
    public const LT = 'lt';
    public const LTE = 'lte';
}
