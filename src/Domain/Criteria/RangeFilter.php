<?php


namespace Imper86\DDD\Domain\Criteria;


final class RangeFilter implements Filter
{
    public function __construct(
        private FilterField $field,
        private FilterRangeOperator $operator,
        private FilterIntValue $value
    ) {
    }

    public function field(): FilterField
    {
        return $this->field;
    }

    public function operator(): FilterRangeOperator
    {
        return $this->operator;
    }

    public function value(): FilterIntValue
    {
        return $this->value;
    }
}
