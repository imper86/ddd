<?php


namespace Imper86\DDD\Domain\Criteria;


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
     * @param Filter ...$filters
     */
    public function __construct(Filter ...$filters)
    {
        $this->filters = $filters;
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
}