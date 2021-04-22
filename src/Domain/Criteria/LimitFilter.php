<?php


namespace Imper86\DDD\Domain\Criteria;


final class LimitFilter implements Filter
{
    public function __construct(private FilterField $field, private FilterPageLimitValue $value)
    {
    }

    public function field(): FilterField
    {
        return $this->field;
    }

    public function value(): FilterPageLimitValue
    {
        return $this->value;
    }
}
