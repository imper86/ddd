<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\Bus\Query;

use Countable;
use IteratorAggregate;

/**
 * @template T
 * @extends IteratorAggregate<int, T>
 */
interface CollectionResponse extends Response, IteratorAggregate, Countable
{
    public function totalItems(): int;

    public function currentPage(): int;

    public function lastPage(): int;

    public function itemsPerPage(): int;
}
