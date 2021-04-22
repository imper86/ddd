<?php


namespace Imper86\DDD\Domain\Criteria;


/**
 * Class AbstractFieldValueFilter
 * @package Imper86\DDD\Domain\Criteria
 */
abstract class AbstractFieldValueFilter implements Filter
{
    /**
     * AbstractFieldValueFilter constructor.
     * @param FilterField $field
     * @param FilterValue $value
     */
    public function __construct(private FilterField $field, private FilterValue $value)
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
     * @return FilterValue
     */
    public function value(): FilterValue
    {
        return $this->value;
    }
}
