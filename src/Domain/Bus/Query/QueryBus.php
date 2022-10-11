<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\Bus\Query;

use Imper86\DDD\Domain\Bus\Exception\InvalidResponseException;
use Imper86\DDD\Domain\Bus\Exception\NoResponseException;

interface QueryBus
{
    /**
     * @throws NoResponseException
     * @throws InvalidResponseException
     */
    public function ask(Query $query): mixed;
}
