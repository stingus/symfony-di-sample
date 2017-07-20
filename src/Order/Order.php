<?php

namespace Stingus\SymfonyDI\Order;

use Stingus\SymfonyDI\Shipping\Carrier;

/**
 * Class Order
 *
 * @package Stingus\SymfonyDI\Order
 */
class Order
{
    /** @var Carrier */
    private $carrier;

    /**
     * Order constructor.
     *
     * @param Carrier $carrier
     */
    public function __construct(Carrier $carrier)
    {
        $this->carrier = $carrier;
    }

    /**
     * @return Carrier
     */
    public function getCarrier(): Carrier
    {
        return $this->carrier;
    }
}
