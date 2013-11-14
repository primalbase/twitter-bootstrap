<?php
namespace Primalbase\TwitterBootstrap\CSS;

use Primalbase\TwitterBootstrap\TwitterBootstrap as Tag;
use Primalbase\TwitterBootstrap\AbstractTagFactory;

/**
 * Class Typography
 * @package Primalbase\TwitterBootstrap\CSS
 *
 */
class Typography extends AbstractTagFactory {

  protected static function configurations()
  {
    return array(
      'lead' => array(
        'tagName' => 'p',
        'attributes' => array(
          'class' => 'lead',
        ),
      ),
      'text' => array(
        'regexp'  => '/^text[^a]/', // unmatched textarea
        'name'    => 'text',
        'tagName' => 'p',
        'options' => array(
          'Left'    => 'text-left',
          'Center'  => 'text-center',
          'Right'   => 'text-right',
          'Muted'   => 'text-muted',
          'Primary' => 'text-primary',
          'Success' => 'text-success',
          'Info'    => 'text-info',
          'Warning' => 'text-warning',
          'Danger'  => 'text-danger',
        )
      ),
      'abbr' => array(
        'tagName' => 'abbr',
        'options' => array(
          'Initialism' => 'initialism',
        ),
        'factory' => array(
          __CLASS__,
          'abbrFactory',
        ),
      ),
      'ul' => array(
        'tagName' => 'ul',
        'options' => array(
          'Unstyled' => 'list-unstyled',
          'Inline'   => 'list-inline',
        ),
      ),
      'ol' => array(
        'tagName' => 'ol',
        'options' => array(
          'Unstyled' => 'list-unstyled',
          'Inline'   => 'list-inline',
        ),
      ),
      'dlHorizontal' => array(
        'tagName' => 'dl',
        'attributes' => array(
          'class' => 'dl-horizontal',
        ),
      ),
    );
  }

  /**
   * @param array $config
   * @param array $args (0 => title, options,...)
   * @return \Primalbase\Tag\Tag
   */
  public static function abbrFactory(array $config, array $args)
  {
    $tagName    = $config['tagName'];
    $attributes = $config['attributes'];

    if (isset($args[0]))
      $attributes['title'] = $args[0];

    $tag = static::create($tagName, $attributes);
    foreach (array_slice($args, 1) as $arg)
      $tag->append($arg);

    return $tag;
  }
}