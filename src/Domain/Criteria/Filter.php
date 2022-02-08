<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\Criteria;

interface Filter
{
    public function getField(): FilterField;
}
