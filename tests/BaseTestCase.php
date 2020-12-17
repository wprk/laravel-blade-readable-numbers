<?php

namespace Wprk\Tests\ReadableNumbers;

use Orchestra\Testbench\TestCase;
use Wprk\Tests\ReadableNumbers\Concerns\RendersBlade;

abstract class BaseTestCase extends TestCase
{
    use RendersBlade;

    protected function getPackageProviders($app)
    {
        return ['Wprk\ReadableNumbers\ReadableNumbersServiceProvider'];
    }

    protected function withPackageMigrations()
    {
        // Example migration run
        // include_once __DIR__.'/database/migrations/CreateUsersTable.php';
        // (new \Wprk\Tests\Skeleton\Database\Migrations\CreateUsersTable())->up();
    }

    /**
     * Assert that blade markup and view data render HTML markup.
     *
     * @param string $expectedHtml
     * @param string $viewContent blade markup
     * @param array $viewData
     * @return void
     */
    protected function assertBladeRenders($expectedHtml, $viewContent, $viewData = [])
    {
        $this->assertEquals($expectedHtml, $this->renderBlade($viewContent, $viewData));
    }
}
