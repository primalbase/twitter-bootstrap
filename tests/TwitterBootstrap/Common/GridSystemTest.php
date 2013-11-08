<?php
use Primalbase\TwitterBootstrap\TwitterBootstrap\Common\GridSystem;

class GridSystemTest extends \PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
  }

  protected function tearDown()
  {
  }

  public function testGetConfig()
  {
    $config = GridSystem::getConfig('row');
    $this->assertEquals('row', $config['name']);
    $config = GridSystem::getConfig('colXs1');
    $this->assertEquals('col', $config['name']);
  }
}