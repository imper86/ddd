<?php

declare(strict_types=1);

namespace Imper86\DDD\Domain\Criteria;

use Imper86\DDD\Domain\ValueObject\IntValueObject;
use Imper86\DDD\Domain\ValueObject\InvalidValueException;

final class CriteriaLimit extends IntValueObject
{
    public function __construct(int $value)
    {
        parent::__construct($value);

        if ($value < 0) {
            throw new InvalidValueException(
                sprintf(
                    '<%s> does not accept values lower than 0, given <%s>',
                    self::class,
                    $value
                )
            );
        }
    }
}
