<?php

namespace AppTest\Bus;

use App\Bus\CommandBusFactory;
use League\Tactician\CommandBus;
use Xtreamwayz\Pimple\Container;

class CommandBusFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_creates_a_command_bus()
    {
        $container = new Container();
        $container['config'] = [
            'dependencies' => [
                'commandHandlers' => []
            ]
        ];
        $busFactory = new CommandBusFactory();
        $this->assertInstanceOf(CommandBus::class, $busFactory($container));
    }

}