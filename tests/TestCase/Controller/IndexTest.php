<?php
declare(strict_types=1);

namespace App\Tests\TestCase\Controller;

use PhpSolution\FunctionalTest\TestCase\ApiTestCase;

/**
 * @see IndexController
 */
final class IndexTest extends ApiTestCase
{
    /**
     * @see IndexController::indexAction()
     */
    public function testCanAccessIndexEndpoint(): void
    {
        $response = static::createTester()->sendGet('/')->toArray();
        static::assertCount(1, $response);
        static::assertEquals('{{SERVICE-NAME}} service', $response['service']);
    }
}
