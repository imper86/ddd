<?php

namespace Imper86\DDD\Domain\Bus\Query;

/**
 * Interface QueryBus
 * @package Imper86\DDD\Domain\Bus\Query
 */
interface QueryBus
{
    /**
     * @param Query $query
     * @return Response|null
     */
    public function ask(Query $query): ?Response;
}
