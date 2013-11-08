<?php
/**
 *  Bootstrap 3 のタグを出力
 *
 * How to use
 *
 * use Eyewill\Tag\TwitterBootstrap as Tag;
 *
 * Tag::row()
 * -> <div class="row"></div>
 *
 * Tag::span{n}()
 * gridSpan(n))のエイリアス
 * -> <div class="span{n}"></div>
 *
 * Created by JetBrains PhpStorm.
 * User: hiroshi_kawai
 * Date: 13/10/10
 * Time: 15:40
 * To change this template use File | Settings | File Templates.
 */

namespace Eyewill\Tag;

use Primalbase\Tag\Tag;

/**
 * Class TwitterBootstrap
 * @package \Eyewill\Tag
 *
 * Common\Common
 * @method static Eyewill\Tag\TwitterBootstrap container(\mixed $options) Common\Common
 * Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap input(\string $name, \string $value, \string $placeholder, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputRequired(\string $name, \string $value, \string $placeholder, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputHidden(\string $name, \string $value, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputSearch(\string $name, \string $value, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputSearchRequired(\string $name, \string $value, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputTel(\string $name, \string $value, \string $placeholder, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputTelRequired(\string $name, \string $value, \string $placeholder, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputUrl(\string $name, \string $value, \string $placeholder, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputUrlRequired(\string $name, \string $value, \string $placeholder, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputEmail(\string $name, \string $value, \string $placeholder, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputEmailRequired(\string $name, \string $value, \string $placeholder, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputPassword(\string $name, \string $value, \string $placeholder, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputPasswordRequired(\string $name, \string $value, \string $placeholder, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputDatetime(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputDatetimeRequired(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputDate(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputDateRequired(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputMonth(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputMonthRequired(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputWeek(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputWeekRequired(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputTime(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputTimeRequired(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputDatetimeLocal(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputDatetimeLocalRequired(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputNumber(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputNumberRequired(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputRange(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputRangeRequired(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputColor(\string $name, \string $value, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap inputColorRequired(\string $name, \string $value, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap checkbox(\string $name, \string $value, \boolean $checked, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap checkboxRequired(\string $name, \string $value, \boolean $checked, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap radio(\string $name, \string $value, \boolean $checked, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap radioRequired(\string $name, \string $value, \boolean $checked, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap file(\string $name, \string $accept="image/*", array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap fileRequired(\string $name, \string $accept="image/*", array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap fileMultiple(\string $name, \string $accept="image/*", array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap fileMultipleRequired(\string $name, \string $accept="image/*", array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap submit(\string $value, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap submitImage(\string $src, \string $alt, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap reset(\string $value, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap button(\string $value, array $options) Common\Forms
 *
 *
 *
 *
 * @method static Eyewill\tag\TwitterBootstrap textarea(\string $name, \string $value, \string $placeholder, array $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap formGroup(\mixed $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap form(\mixed $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap formInline(\mixed $options) Common\Forms
 * @method static Eyewill\tag\TwitterBootstrap formHorizontal(\mixed $options) Common\Forms
 *
 * @method static Eyewill\Tag\TwitterBootstrap navbar(\mixed $options)
 * @method static Eyewill\Tag\TwitterBootstrap navbarInverse(\mixed $options)
 * @method static Eyewill\Tag\TwitterBootstrap navbarFixedTop(\mixed $options)
 * @method static Eyewill\Tag\TwitterBootstrap navbarInverseFixedTop(\mixed $options)
 */
class TwitterBootstrap extends Tag
{
  protected static $library = array(
    'Eyewill\Tag\TwitterBootstrap\Common\Common',
    'Eyewill\Tag\TwitterBootstrap\Common\Forms',
    'Eyewill\Tag\TwitterBootstrap\Common\GridSystem',
    'Eyewill\Tag\TwitterBootstrap\Components\Navbar',
    'Eyewill\Tag\TwitterBootstrap\Components\Panels',
    'Eyewill\Tag\TwitterBootstrap\Components\Navs',
    'Eyewill\Tag\TwitterBootstrap\Components\Alerts',
  );

  protected static $configurationsAll = array();

  public static function build($callTagName, $config, array $args=array())
  {
    if ($config['factory'])
    {
      if (!is_callable($config['factory']))
        throw new \Exception('Don\'t call factory '.$callTagName);

      $tag = call_user_func($config['factory'], $config, $args);
    }
    else
    {
      $tag = static::createInstanceArray($config['tagName'], $args);
      foreach ($config['attributes'] as $name => $value)
        $tag->{$name}($value);
    }


    if (!empty($config['options']))
    {
      $options = $config['options'];

      // ベースネームを削除
      // panelBody -> Body
      if ($segment = substr($callTagName, strlen($config['name'])))
      {
        call_user_func($_f = function () use (&$_f, $tag, &$segment, $options)
        {
          foreach ($options as $name => $class_or_attributes)
          {
            if (preg_match('/^('.$name.')/', $segment, $m))
            {
              $match_str = $m[1];
              if (is_array($class_or_attributes))
              {

                foreach ($class_or_attributes as $ckey => $cvalue)
                {
                  if (preg_match('/^[0-9]+$/', $ckey))
                    $tag->attr($cvalue);
                  elseif ($ckey == 'tagName')
                    $tag->tagName($cvalue);
                  // 値のみ
                  else
                    $tag->attr($ckey, $cvalue);

                }
              }
              else
              {
                $class = preg_replace('/^'.$name.'/', $class_or_attributes, $match_str);
                $tag->addClass($class);
              }
              $segment = substr($segment, strlen($match_str));

              $_f();
            }
          }
        });
      }
    }

    if ($config['callback'])
    {
      if (!is_callable($config['callback']))
        throw new \Exception('Don\'t call callback '.$callTagName);
      call_user_func($config['callback'], $tag, $args);
    }

    return $tag;
  }

  public static function __callStatic($tagName, array $args)
  {
    if (!static::$configurationsAll)
    {
      foreach (static::$library as $lib)
      {
        $conf =  $lib::getFormatConfigurations();
        static::$configurationsAll = array_merge(
          static::$configurationsAll,
          $lib::getFormatConfigurations()
        );
      }
    }

    foreach (static::$configurationsAll as $config)
    {
      if (strpos($tagName, $config['name']) === 0)
        return static::build($tagName, $config, $args);
    }

    // span{n} -> gridSpan(n)
    if (preg_match('/^span(\d+)$/', $tagName, $m))
    {
      array_unshift($args, $m[1]);
      return call_user_func_array(array(get_called_class(), 'gridSpan'), $args);
    }

    return parent::__callStatic($tagName, $args);
  }

  public static function _camelize($name)
  {
    $name = strtolower($name);
    $name = str_replace('-', ' ', $name);
    $name = ucwords($name);
    $name = str_replace(' ', '', $name);
    $name = lcfirst($name);

    return $name;
  }

  public static function _chaincase($name)
  {
    $name = preg_replace('/([A-Z])/', '-$1', $name);
    $name = strtolower($name);
    $name = ltrim($name, '-');

    return $name;
  }
}