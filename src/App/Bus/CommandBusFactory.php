<?php

namespace App\Bus;

use League\Tactician\CommandBus;
use Interop\Container\ContainerInterface;
use League\Tactician\Handler\Locator\InMemoryLocator;
use League\Tactician\Handler\CommandHandlerMiddleware;
use League\Tactician\Handler\CommandNameExtractor\ClassNameExtractor;
use League\Tactician\Handler\MethodNameInflector\HandleClassNameInflector;

/**
 * Class CommandBusFactory
 * @package App\Bus
 */
class CommandBusFactory
{
    /**
     * @param ContainerInterface $container
     * @return CommandBus
     */
    public function __invoke(ContainerInterface $container)
    {
        $locator = new InMemoryLocator();

        $this->mapCommandHandlers($container, $locator);

        $handlerMiddleware = new CommandHandlerMiddleware(
            new ClassNameExtractor(),
            $locator,
            new HandleClassNameInflector()
        );

        return new CommandBus([$handlerMiddleware]);
    }

    /**
     * @param ContainerInterface $container
     * @param InMemoryLocator $locator
     */
    protected function mapCommandHandlers(ContainerInterface $container, InMemoryLocator $locator)
    {
        $config = $container->get('config');

        foreach ($config['dependencies']['commandHandlers'] as $command => $handler) {

            $locator->addHandler(new $handler($container), $command);

        }
    }
}