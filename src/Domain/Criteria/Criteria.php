<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\Criteria;

use Imper86\DDD\Domain\ValueObject\InvalidValueException;
use IteratorAggregate;
use Traversable;

/**
 * @implements IteratorAggregate<int, Filter>
 */
final class Criteria implements IteratorAggregate
{
    /**
     * @var Filter[]
     */
    private array $filters;

    public function __construct(
        private ?CriteriaLimit $limit = null,
        private ?CriteriaPage $page = null,
        Filter ...$filters
    ) {
        $this->filters = $filters ?: [];
        $this->assertPageWithLimit();
    }

    public function withLimit(CriteriaLimit $limit, ?CriteriaPage $page = null): self
    {
        return new self($limit, $page, ...$this->filters);
    }

    public function withoutLimit(): self
    {
        return new self(null, null, ...$this->filters);
    }

    private function assertPageWithLimit(): void
    {
        if ($this->page && !$this->limit) {
            throw new InvalidValueException(
                sprintf(
                    '<%s> you must include <%s> when providing <%s>',
                    self::class,
                    CriteriaLimit::class,
                    CriteriaPage::class
                )
            );
        }
    }

    public function add(Filter $filter): void
    {
        $this->filters[] = $filter;
    }

    public function getIterator(): Traversable
    {
        foreach ($this->filters as $filter) {
            yield $filter;
        }
    }

    /**
     * @param string $fqcn
     * @return Traversable<int, Filter>
     */
    public function getIteratorOfType(string $fqcn): Traversable
    {
        foreach ($this->filters as $filter) {
            if ($filter instanceof $fqcn) {
                yield $filter;
            }
        }
    }

    public function getLimit(): ?CriteriaLimit
    {
        return $this->limit;
    }

    public function getPage(): ?CriteriaPage
    {
        return $this->page;
    }
}
