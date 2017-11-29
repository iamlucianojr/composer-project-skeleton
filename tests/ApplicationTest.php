<?php


namespace Tests;

use App\Application;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    /**
     * @var Application
     */
    private $application;

    protected function setUp()
    {
        $this->application = new Application();
    }

    public function testHelloWorld()
    {
        $this->assertEquals($this->application->helloWorld('Test'), 'Test');
    }

    public function testIfSumOfValuesHasBeenCorrect()
    {
        $this->assertEquals(5, $this->application->sumValues([2, 3]));
    }
}
