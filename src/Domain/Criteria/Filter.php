<?php


namespace Imper86\DDD\Domain\Criteria;


/**
 * Interface Filter
 * @package Imper86\DDD\Domain\Criteria
 */
interface Filter
{
    /**
     * @return FilterField
     */
    public function field(): FilterField;
}
