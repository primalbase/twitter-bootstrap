<?php
use Eyewill\Tag\AbstractConfigLoader;

class ConfigLoader extends AbstractConfigLoader
{
  protected static $configurations = array(
    'unitTest' => array(
      'attributes' => array(
        'class' => 'unit-test'
      )
    ),
    'unit' => 'test',
  );
};

class AbstractConfigLoaderTest extends \PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
  }

  protected function tearDown()
  {
  }

  public function testGetConfig()
  {
    $config = ConfigLoader::getConfig('unit');
    $this->assertEquals('unit', $config['name']);
    $config = ConfigLoader::getConfig('unitTest');
    $this->assertEquals('unitTest', $config['name']);
    $this->assertEquals('unit-test', $config['attributes']['class']);
    $this->assertFalse(ConfigLoader::getConfig('NotKeyExists'));
  }
}