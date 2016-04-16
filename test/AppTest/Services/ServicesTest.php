<?php

namespace AppTest\Services;

use Joselfonseca\FonckToolbox\ServicesFactory;

/**
 * Class ServicesTest
 * @package AppTest\Services
 */
class ServicesTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_resolves_services_from_callback()
    {
        $container = require __DIR__.'/../../../config/container.php';

        $this->assertInstanceOf(ServicesFactory::class, $container->get('services'));
    }

}