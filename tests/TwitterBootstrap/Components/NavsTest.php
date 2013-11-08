<?php
use Primalbase\TwitterBootstrap\TwitterBootstrap\Components\Navs;

use Primalbase\TwitterBootstrap\TwitterBootstrap as Tag;

class NavsTest extends \PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    Tag::$codeFormat = false;
  }
  protected function tearDown()
  {

  }

  public function testTagsFactory()
  {
    $args = array();
    $tag = Navs::tabsFactory(Navs::getConfig('tabs'), $args);
    $this->assertEquals('<ul></ul>', (string)$tag);
  }
}