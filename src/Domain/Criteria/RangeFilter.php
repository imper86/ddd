<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\Criteria;

final class RangeFilter implements Filter
{
    public function __construct(
        private FilterField $field,
        private FilterRangeOperator $operator,
        private FilterIntValue $value
    ) {
    }

    public function getField(): FilterField
    {
        return $this->field;
    }

    public function getOperator(): FilterRangeOperator
    {
        return $this->operator;
    }

    public function getValue(): FilterIntValue
    {
        return $this->value;
    }
}
