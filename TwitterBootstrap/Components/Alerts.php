<?php
namespace Eyewill\Tag\TwitterBootstrap\Components;

use Eyewill\Tag\AbstractConfigLoader;
use Eyewill\Tag\TwitterBootstrap as Tag;

class Alerts extends AbstractConfigLoader {

  protected static $configurations = array(
    'alertLink' => array(
      'tagName' => 'a',
      'attributes' => array(
        'class' => 'alert-link',
      ),
      'factory' => array(
        'Eyewill\Tag\TwitterBootstrap\Components\Alerts',
        'alertLinkFactory',
      )
    ),
    'alert' => array(
      'attributes' => array(
        'class' => 'alert',
      ),
      'options' => array(
        'Success'     => 'alert-success',
        'Info'        => 'alert-info',
        'Warning'     => 'alert-warning',
        'Danger'      => 'alert-danger',
        'Dismissable' => 'alert-dismissable',
      ),
      'factory'  => array(
        'Eyewill\Tag\TwitterBootstrap\Components\Alerts',
        'alertFactory',
      ),
      'callback' => array(
        'Eyewill\Tag\TwitterBootstrap\Components\Alerts',
        'alertCallback',
      ),
    ),
  );

  public static function alertLinkFactory(array $config, array $args=array())
  {
    $tag = Tag::create($config['tagName']);
    foreach ($config['attributes'] as $name => $value)
      $tag->{$name}($value);

    if ($args[0])
      $tag->append($args[0]);
    if ($args[1])
        $tag->href($args[1]);

    return $tag;
  }

  public static function alertFactory(array $config, array $args=array())
  {
    $tag = Tag::create($config['tagName']);
    foreach ($config['attributes'] as $name => $value)
      $tag->{$name}($value);

    $func = function ($args) use (&$func, $tag) {
      if (is_array($args))
        foreach ($args as $arg)
          call_user_func($func, $arg);
      else
        $tag->append(Tag::p($args));
    };
    call_user_func($func, $args);

    return $tag;
  }

  public static function alertCallback(Tag $tag)
  {
    if ($tag->hasClass('alert-dismissable'))
    {
      $tag->prepend(Tag::button(array(
        'type'         => 'button',
        'class'        => 'close',
        'data-dismiss' => 'alert',
        'area-hidden'  => 'true',
        ))->appendHtml('&times;'));

    }
  }
} 