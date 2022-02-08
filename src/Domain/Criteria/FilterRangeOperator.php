<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\Criteria;

enum FilterRangeOperator: string
{
    case GT = 'gt';
    case GTE = 'gte';
    case LT = 'lt';
    case LTE = 'lte';
}
