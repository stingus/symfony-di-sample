#!/usr/bin/env php
<?php

use Stingus\SymfonyDI\Order\Order;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

require_once __DIR__ . '/vendor/autoload.php';

$container = new ContainerBuilder();
$loader = new YamlFileLoader($container, new FileLocator(__DIR__));
$loader->load('services.yml');

$container->compile();

/** @var Order $orderService */
$orderService = $container->get(Order::class);

echo 'Carrier is ' . $orderService->getCarrier()->getName() . PHP_EOL;
