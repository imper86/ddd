<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\Bus\Query;

use Imper86\DDD\Domain\Bus\Exception\NoResponseException;

interface QueryBus
{
    /**
     * @param Query $query
     * @return Response|null
     * @throws NoResponseException
     */
    public function ask(Query $query): ?Response;
}
