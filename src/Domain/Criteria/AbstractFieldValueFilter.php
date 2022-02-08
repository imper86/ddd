<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\Criteria;

abstract class AbstractFieldValueFilter implements Filter
{
    public function __construct(private FilterField $field, private FilterValue $value)
    {
    }

    public function getField(): FilterField
    {
        return $this->field;
    }

    public function getValue(): FilterValue
    {
        return $this->value;
    }
}
