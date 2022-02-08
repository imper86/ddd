<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\Criteria;

final class BooleanFilter implements Filter
{
    public function __construct(private FilterField $field, private bool $value)
    {
    }

    public function getField(): FilterField
    {
        return $this->field;
    }

    public function getValue(): bool
    {
        return $this->value;
    }
}
