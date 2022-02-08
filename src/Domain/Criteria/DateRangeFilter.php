<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\Criteria;

use DateTimeInterface;

final class DateRangeFilter implements Filter
{
    public function __construct(
        private FilterField $field,
        private FilterRangeOperator $operator,
        private DateTimeInterface $value
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

    public function getValue(): DateTimeInterface
    {
        return $this->value;
    }
}
