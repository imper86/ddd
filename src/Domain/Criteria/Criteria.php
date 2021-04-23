<?php


namespace Imper86\DDD\Domain\Criteria;


use Imper86\DDD\Domain\ValueObject\InvalidArgumentException;

/**
 * Class Criteria
 * @package Imper86\DDD\Domain\Criteria
 * @implements \IteratorAggregate<int, Filter>
 */
final class Criteria implements \IteratorAggregate
{
    /**
     * @var Filter[]
     */
    private array $filters;

    /**
     * Criteria constructor.
     * @param CriteriaLimit|null $limit
     * @param CriteriaPage|null $page
     * @param Filter[]|null $filters
     */
    public function __construct(
        private ?CriteriaLimit $limit = null,
        private ?CriteriaPage $page = null,
        ?array $filters = null
    ) {
        $this->filters = $filters ?: [];
        $this->assertProperFilters();
        $this->assertPageWithLimit();
    }

    /**
     * @param CriteriaLimit $limit
     * @param CriteriaPage|null $page
     * @return $this
     */
    public function withLimit(CriteriaLimit $limit, ?CriteriaPage $page = null): self
    {
        return new self($limit, $page, $this->filters);
    }

    public function withoutLimit(): self
    {
        return new self(null, null, $this->filters);
    }

    private function assertProperFilters(): void
    {
        foreach ($this->filters as $filter) {
            if (!$filter instanceof Filter) {
                throw new InvalidArgumentException(
                    sprintf('<%s> supports only <%s> objects', self::class, Filter::class)
                );
            }
        }
    }

    private function assertPageWithLimit(): void
    {
        if ($this->page && !$this->limit) {
            throw new InvalidArgumentException(
                sprintf(
                    '<%s> you must include <%s> when providing <%s>',
                    self::class,
                    CriteriaLimit::class,
                    CriteriaPage::class
                )
            );
        }
    }

    /**
     * @param Filter $filter
     */
    public function add(Filter $filter): void
    {
        $this->filters[] = $filter;
    }

    /**
     * @return \Generator|Filter[]
     */
    public function getIterator(): \Generator
    {
        foreach ($this->filters as $filter) {
            yield $filter;
        }
    }

    /**
     * @template T
     * @param class-string<T> $fqcn
     * @return \Generator|T[]
     */
    public function getIteratorOfType(string $fqcn): \Generator
    {
        foreach ($this->filters as $filter) {
            if ($filter instanceof $fqcn) {
                yield $filter;
            }
        }
    }

    /**
     * @return CriteriaLimit|null
     */
    public function getLimit(): ?CriteriaLimit
    {
        return $this->limit;
    }

    /**
     * @return CriteriaPage|null
     */
    public function getPage(): ?CriteriaPage
    {
        return $this->page;
    }
}
