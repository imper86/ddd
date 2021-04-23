<?php


namespace Imper86\DDD\Domain\Bus\Query;

/**
 * Interface CollectionResponse
 * @package Imper86\DDD\Domain\Bus\Query
 * @extends \IteratorAggregate<int, Response>
 */
interface CollectionResponse extends \IteratorAggregate, \Countable
{
    public function totalItems(): int;

    public function currentPage(): int;

    public function lastPage(): int;

    public function itemsPerPage(): int;
}
