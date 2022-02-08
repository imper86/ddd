<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\Bus\Query;

interface QueryBus
{
    public function ask(Query $query): ?Response;
}
