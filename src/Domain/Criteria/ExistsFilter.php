<?php


namespace Imper86\DDD\Domain\Criteria;


/**
 * Class ExistsFilter
 * @package Imper86\DDD\Domain\Criteria
 */
final class ExistsFilter implements Filter
{
    /**
     * ExistsFilter constructor.
     * @param FilterField $field
     * @param bool $value
     */
    public function __construct(private FilterField $field, private bool $value)
    {
    }

    /**
     * @return FilterField
     */
    public function field(): FilterField
    {
        return $this->field;
    }

    /**
     * @return bool
     */
    public function value(): bool
    {
        return $this->value;
    }
}
