<?php
namespace Primalbase\TwitterBootstrap;

use Primalbase\TwitterBootstrap\AbstractTagFactory;

class CSS extends AbstractTagFactory {

  protected static function configurations()
  {
    return array(
      'html' => array(
        'tagName'    => 'html',
        'attributes' => array(
          'lang' => 'en',
        ),
        'factory' => array(
          __CLASS__,
          'htmlFactory',
        ),
      ),
      'viewport' => array(
        'tagName' => 'meta',
        'attributes' => array(
          'name'    => 'viewport',
          'content' => 'width=device-width, initial-scale=1.0',
        ),
        'factory' => array(
          __CLASS__,
          'viewportFactory',
        ),
      ),
      'imgResponsive' => array(
        'tagName' => 'img',
        'attributes' => array(
          'src'   => '#',
          'class' => 'img-responsive',
        ),
        'factory' => array(
          __CLASS__,
          'imgResponsiveFactory',
        ),
      ),
      'container' => 'container',
    );
  }

  /**
   * html factory
   *
   * @param array $config
   * @param array $args (0 => lang, 1 => options)
   * @return \Primalbase\TwitterBootstrap\CSS
   */
  public static function htmlFactory(array $config, array $args)
  {
    $tagName    = $config['tagName'];
    $attributes = $config['attributes'];

    if (isset($args[0]))
      $attributes['lang'] = $args[0];

    if (isset($args[1]) && is_array($args[1]))
      $attributes = array_merge($attributes, $args[1]);

    $tag = static::create($tagName, $attributes);
    foreach (array_slice($args, 2) as $arg)
      $tag->append($arg);

    return $tag;
  }

  /**
   * viewport factory
   *
   * @param array $config
   * @param array $args (0 => $user_scalable, 1 => $minimum_scale, 2 => $maximum_scale, 3 => options)
   * @return \Primalbase\TwitterBootstrap\CSS
   */
  public static function viewportFactory(array $config, array $args)
  {
    $tagName    = $config['tagName'];
    $attributes = $config['attributes'];

    $contents = array_map('trim', explode(',', $attributes['content']));
    if (isset($args[0]))
       array_push($contents, 'user-scalable='.($args[0] ? 'yes' : 'no'));
    if (isset($args[1]))
      array_push($contents, 'minimum-scale='.$args[1]);
    if (isset($args[2]))
      array_push($contents, 'maximum-scale='.$args[2]);

    $attributes['content'] = implode(', ', $contents);

    $tag = static::create($tagName, $attributes);
    foreach (array_slice($args, 3) as $arg)
      $tag->append($arg);

    return $tag;
  }

  /**
   * imgResponsive factory
   *
   * @param array $config
   * @param array $args (0 => src, 1 => alt, 2 => options,...)
   * @return \Primalbase\TwitterBootstrap\CSS
   */
  public static function imgResponsiveFactory(array $config, array $args)
  {
    $tagName    = $config['tagName'];
    $attributes = $config['attributes'];

    if (isset($args[0]))
      $attributes['src'] = $args[0];

    if (isset($args[1]))
      $attributes['alt'] = $args[1];

    $tag = static::create($tagName, $attributes);
    foreach (array_slice($args, 2) as $arg)
      $tag->append($arg);

    return $tag;
  }
}