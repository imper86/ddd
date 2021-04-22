<?php

namespace Imper86\DDD\Domain\Criteria;


/**
 * Class TermsFilter
 * @package Imper86\DDD\Domain\Criteria
 */
final class TermsFilter implements Filter
{
    /**
     * @var FilterField
     */
    private FilterField $field;
    /**
     * @var FilterValue[]
     */
    private array $values;

    /**
     * TermsFilter constructor.
     * @param FilterField $field
     * @param FilterValue ...$values
     */
    public function __construct(FilterField $field, FilterValue ...$values)
    {
        $this->field = $field;
        $this->values = $values;
    }

    /**
     * @return FilterField
     */
    public function field(): FilterField
    {
        return $this->field;
    }

    /**
     * @return FilterValue[]
     */
    public function values(): array
    {
        return $this->values;
    }

    /**
     * @param FilterValue $value
     */
    public function addValue(FilterValue $value): void
    {
        $this->values[] = $value;
    }
}
