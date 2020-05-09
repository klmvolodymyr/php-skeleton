<?php
declare(strict_types=1);

namespace App\Tests\TestCase;

use PhpSolution\FunctionalTest\TestCase\AppTestCase;
use PhpSolution\SwaggerUIGen\Component\DataProvider\DataProviderInterface;
use PhpSolution\SwaggerUIGen\Component\SwaggerProvider;

/**
 * SwaggerTest
 */
final class SwaggerTest extends AppTestCase
{
    /**
     * Test swagger on correct doc generation
     */
    public function testCanAccessSwaggerEndpoint(): void
    {
        $client = static::createClient();
        try {
            $configProvider = $client->getContainer()->get(DataProviderInterface::class);
            $schema = $client->getContainer()->get(SwaggerProvider::class)->getSwaggerData($configProvider);
            static::assertInternalType('array', $schema);
        } catch (\Exception $ex) {
            static::fail($ex->getMessage());
        }
    }
}
