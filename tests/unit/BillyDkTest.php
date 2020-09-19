<?php

declare(strict_types=1);

class BillyDkTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function test_api_path_validation_1()
    {
        $this->expectExceptionMessageMatches('/No path is provided/');
        \Kenashkov\BillyDk\BillyDk::validate_api_path('');
    }

    public function test_api_path_validation_2()
    {
        $this->expectExceptionMessageMatches('/does not start with/');
        \Kenashkov\BillyDk\BillyDk::validate_api_path('products');
    }

    public function test_api_path_validation_3()
    {
        $this->expectExceptionMessageMatches('/besides the leading one/');
        \Kenashkov\BillyDk\BillyDk::validate_api_path('/products/');
    }
}