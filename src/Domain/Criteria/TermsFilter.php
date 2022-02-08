<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\Criteria;

final class TermsFilter implements Filter
{
    private FilterField $field;
    /**
     * @var FilterValue[]
     */
    private array $values;

    public function __construct(FilterField $field, FilterValue ...$values)
    {
        $this->field = $field;
        $this->values = $values;
    }

    public function getField(): FilterField
    {
        return $this->field;
    }

    /**
     * @return FilterValue[]
     */
    public function getValues(): array
    {
        return $this->values;
    }

    public function addValue(FilterValue $value): void
    {
        $this->values[] = $value;
    }
}
