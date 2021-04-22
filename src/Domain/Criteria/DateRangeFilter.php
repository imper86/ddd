<?php


namespace Imper86\DDD\Domain\Criteria;


final class DateRangeFilter implements Filter
{
    public function __construct(
        private FilterField $field,
        private FilterRangeOperator $operator,
        private \DateTimeInterface $value
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

    public function value(): \DateTimeInterface
    {
        return $this->value;
    }
}
