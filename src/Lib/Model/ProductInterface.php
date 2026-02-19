<?php

declare(strict_types=1);

namespace Maxpay\Lib\Model;

/**
 * Interface ProductInterface
 * @package Maxpay\Lib\Model
 */
interface ProductInterface
{
    /**
     * @return array
     */
    public function toHashMap(): array;
}
