<?php
namespace Primalbase\TwitterBootstrap\Components;

use Primalbase\TwitterBootstrap\TwitterBootstrap as Tag;
use Primalbase\TwitterBootstrap\AbstractTagFactory;

class Navs extends AbstractTagFactory {

  protected static function configurations()
  {
    return array(
      'tabs' => array(
        'tagName' => 'ul',
        'attributes' => array(
          'class' => 'nav nav-tabs'
        ),
        'options' => array(
          'Justfied' => 'nav-justified'
        ),
        'factory' => array(
          'Primalbase\TwitterBootstrap\Components\Navs',
          'tabsFactory',
        )
      ),
    );
  }

  public static function tabsFactory($config, $args)
  {
    $tag = Tag::create($config['tagName']);
    foreach ($config['attributes'] as $name => $value)
      $tag->{$name}($value);

    foreach ($args as $index => $arg)
    {
      $options = array();
      $link_to = '#';
      $text    = 'Menu'.$index;

      if (!is_array($arg))
      {
        $text = $arg;
      }
      else
      {
        if ($arg[0])
          $text = $arg[0];
        if ($arg[1])
          $link_to = $arg[1];
        if ($arg[2])
          $options['class'] = 'active';
      }

      $tag->append(Tag::li($options, Tag::a(array('href' => $link_to), $text)));
    }

    return $tag;
  }
} 