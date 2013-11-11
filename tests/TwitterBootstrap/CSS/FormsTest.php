<?php
use Primalbase\TwitterBootstrap\CSS\Forms;

class FormsTest extends \PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
  }

  protected function tearDown()
  {
  }

  public function testGetConfig()
  {
    $config = Forms::getConfig('form');
    $this->assertEquals('form', $config['name']);
    $config = Forms::getConfig('formGroup');
    $this->assertEquals('formGroup', $config['name']);
    $this->assertEquals('form-group', $config['attributes']['class']);
    $this->assertFalse(Forms::getConfig('NotKeyExists'));
  }
}