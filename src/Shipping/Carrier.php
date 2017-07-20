<?php

namespace Stingus\SymfonyDI\Shipping;

/**
 * Class Carrier
 *
 * @package Stingus\SymfonyDI\Shipping
 */
class Carrier
{
    /** @var string */
    private $name;

    /**
     * Carrier constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
