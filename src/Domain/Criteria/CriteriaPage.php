<?php


namespace Imper86\DDD\Domain\Criteria;


use Imper86\DDD\Domain\ValueObject\IntValueObject;
use Imper86\DDD\Domain\ValueObject\InvalidArgumentException;

final class CriteriaPage extends IntValueObject
{
    public function __construct(int $value)
    {
        parent::__construct($value);

        if ($value <= 0) {
            throw new InvalidArgumentException(
                sprintf(
                    '<%s> does not accept values lower than 1, given <%s>',
                    self::class,
                    $value
                )
            );
        }
    }

    public function toOffset(CriteriaLimit $limit): int
    {
        return ($this->value() - 1) * $limit->value();
    }
}
