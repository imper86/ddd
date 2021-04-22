<?php


namespace Imper86\DDD\Domain\Criteria;


/**
 * Class TermsNotFilter
 * @package Imper86\DDD\Domain\Criteria
 */
final class TermsNotFilter implements Filter
{
    /**
     * @var FilterValue[]
     */
    private array $values;

    /**
     * TermsNotFilter constructor.
     * @param FilterField $field
     * @param FilterValue ...$values
     */
    public function __construct(private FilterField $field, FilterValue ...$values)
    {
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
