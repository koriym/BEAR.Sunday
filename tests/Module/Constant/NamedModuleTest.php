<?php
/**
 * This file is part of the BEAR.Sunday package.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace BEAR\Sunday\Module\Constant;

use BEAR\Sunday\FakeApplication;
use PHPUnit\Framework\TestCase;
use Ray\Di\Injector;

class NamedModuleTest extends TestCase
{
    /**
     * @var FakeApplication
     */
    private $app;

    protected function setUp()
    {
        $names = [
            'path' => __DIR__,
            'id' => 'bear'
        ];
        $this->app = (new Injector(new NamedModule($names)))->getInstance(FakeApplication::class);
    }

    public function testNamed()
    {
        $this->assertSame(__DIR__, $this->app->dir);
        $this->assertSame('bear', $this->app->id);
    }
}
