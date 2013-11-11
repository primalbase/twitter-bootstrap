<?php
namespace Primalbase\TwitterBootstrap\CSS;

use Primalbase\TwitterBootstrap\AbstractTagFactory;

/**
 * Class GridSystem
 * @package Primalbase\TwitterBootstrap\CSS
 *
 * @method GridSystem xs(\integer $col)
 * @method GridSystem sm(\integer $col)
 * @method GridSystem md(\integer $col)
 * @method GridSystem lg(\integer $col)
 * @method GridSystem pull(\integer $col)
 * @method GridSystem xsPull(\integer $col)
 * @method GridSystem smPull(\integer $col)
 * @method GridSystem mdPull(\integer $col)
 * @method GridSystem lgPull(\integer $col)
 * @method GridSystem push(\integer $col)
 * @method GridSystem xsPush(\integer $col)
 * @method GridSystem smPush(\integer $col)
 * @method GridSystem mdPush(\integer $col)
 * @method GridSystem lgPush(\integer $col)
 * @method GridSystem offset(\integer $col)
 * @method GridSystem xsOffset(\integer $col)
 * @method GridSystem smOffset(\integer $col)
 * @method GridSystem mdOffset(\integer $col)
 * @method GridSystem lgOffset(\integer $col)
 */
class GridSystem extends AbstractTagFactory {

  // 'aaa'    => 'aaa'     -> Tag::aaa()    -> <div class="aaa"></div>
  // 'aaaBbb' => 'aaa-bbb' -> Tag::aaaBbb() -> <div class="aaa-bbb"></div>
  // 優先順位降順、前方マッチで検索する(重複してマッチするタグは後回しにする)
  protected static $configurations = array(
    'row' => 'row',
    'colLg' => array(
      'factory' => array(
        'Primalbase\TwitterBootstrap\CSS\GridSystem',
        'colLgFactory',
      ),
    ),
    'colMd' => array(
      'factory' => array(
        'Primalbase\TwitterBootstrap\CSS\GridSystem',
        'colMdFactory',
      ),
    ),
    'colSm' => array(
      'factory' => array(
        'Primalbase\TwitterBootstrap\CSS\GridSystem',
        'colSmFactory',
      ),
    ),
    'colXs' => array(
      'factory' => array(
        'Primalbase\TwitterBootstrap\CSS\GridSystem',
        'colXsFactory',
      ),
    ),
    'col' => array(
      'factory' => array(
        'Primalbase\TwitterBootstrap\CSS\GridSystem',
        'colXsFactory',
      ),
    )
  );

  protected static function abstractColFactory($prefix, array $config, array $args)
  {
    $tagName    = $config['tagName'];
    $attributes = $config['attributes'];

    if (isset($args[0]))
      $attributes['class'] = $prefix.$args[0];

    $tag = static::create($tagName, $attributes);
    foreach (array_slice($args, 1) as $arg)
      $tag->append($arg);

    return $tag;
  }

  public static function colLgFactory(array $config, array $args)
  {
    return static::abstractColFactory('col-lg-', $config, $args);
  }

  public static function colMdFactory(array $config, array $args)
  {
    return static::abstractColFactory('col-md-', $config, $args);
  }

  public static function colSmFactory(array $config, array $args)
  {
    return static::abstractColFactory('col-sm-', $config, $args);
  }

  public static function colXsFactory(array $config, array $args)
  {
    return static::abstractColFactory('col-xs-', $config, $args);
  }

  public function __call($name, $args)
  {
    $pattern = array(
      'xs'     => 'col-xs-',
      'sm'     => 'col-sm-',
      'md'     => 'col-md-',
      'lg'     => 'col-lg-',
      'pull'   => 'col-xs-pull-',
      'xsPull' => 'col-xs-pull-',
      'smPull' => 'col-sm-pull-',
      'mdPull' => 'col-md-pull-',
      'lgPull' => 'col-lg-pull-',
      'push'   => 'col-xs-push-',
      'xsPush' => 'col-xs-push-',
      'smPush' => 'col-sm-push-',
      'mdPush' => 'col-md-push-',
      'lgPush' => 'col-lg-push-',
      'offset'   => 'col-xs-offset-',
      'xsOffset' => 'col-xs-offset-',
      'smOffset' => 'col-sm-offset-',
      'mdOffset' => 'col-md-offset-',
      'lgOffset' => 'col-lg-offset-',
    );

    if ($pattern[$name])
      return $this->addClass($pattern[$name].$args[0]);

    return parent::__call($name, $args);
  }
}