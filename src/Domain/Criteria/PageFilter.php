<?php


namespace Imper86\DDD\Domain\Criteria;


/**
 * Class PageFilter
 * @package Imper86\DDD\Domain\Criteria
 */
final class PageFilter implements Filter
{
    /**
     * PageFilter constructor.
     * @param FilterField $field
     * @param FilterPageLimitValue $value
     */
    public function __construct(private FilterField $field, private FilterPageLimitValue $value)
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
     * @return FilterPageLimitValue
     */
    public function value(): FilterPageLimitValue
    {
        return $this->value;
    }
}
