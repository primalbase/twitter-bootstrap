<?php
/**
 *  Bootstrap 3 のタグを出力
 *
 * How to use
 *
 * use TwitterBootstrap as Tag;
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

namespace Primalbase\TwitterBootstrap;

use Primalbase\Tag\Tag;
use Primalbase\TwitterBootstrap\CSS;
use Primalbase\TwitterBootstrap\CSS\GridSystem;
use Primalbase\TwitterBootstrap\CSS\Typography;

/**
 * Class TwitterBootstrap
 * @package \Primalbase\TwitterBootstrap
 *
 * CSS
 *
 * @method static CSS html(\string $lang = "en", \mixed $options = null)
 * @method static CSS viewport(\Boolean $user_scalable = null, \string $minimum_scale = null, \string $maximum_scale = null, \mixed $options = null)
 * @method static CSS imgResponsive(\string $src = "#", \string $alt = "", \mixed $options = null)
 * @method static CSS container(\mixed $options = null)
 *
 * CSS/Grid system
 *
 * @method static GridSystem row(\mixed $options = null)
 * @method static GridSystem col(\integer $col, \mixed $options = null) Phones <768px
 * @method static GridSystem colXs(\integer $col, \mixed $options = null) Phones <768px
 * @method static GridSystem colSm(\integer $col, \mixed $options = null) Tablets ≥768px
 * @method static GridSystem colMd(\integer $col, \mixed $options = null) Desktops ≥992px
 * @method static GridSystem colLg(\integer $col, \mixed $options = null) Desktops ≥1200px
 *
 * CSS/Typography
 *
 * @method static typography lead(\mixed $options = null)
 * @method static typography textLeft(\mixed $options = null)
 * @method static typography textCenter(\mixed $options = null)
 * @method static typography textRight(\mixed $options = null)
 * @method static Typography abbr(\string $title = null, $options = null)
 * @method static Typography abbrInitialism(\string $title = null, $options = null)
 * @method static Typography ulUnstyled($options = null)
 * @method static Typography olUnstyled($options = null)
 * @method static Typography ulInline($options = null)
 * @method static Typography olInline($options = null)
 * @method static Typography dlHorizontal($options = null)
 *
 * CSS/Code
 *
 * @todo CSS/Code isn't defined yet.
 * @todo CSS/Code isn't implemented yet.
 * @todo CSS/Code isn't tested yet.
 *
 * CSS/Table
 *
 * @todo CSS/Table isn't defined yet.
 * @todo CSS/Table isn't implemented yet.
 * @todo CSS/Table isn't tested yet.
 *
 * CSS/Forms
 *
 * @method static TwitterBootstrap formControl()
 * @method static TwitterBootstrap formGroup(\mixed $options)
 * @method static TwitterBootstrap form(\mixed $options)
 *
 * CSS/Forms/Inline form
 *
 * @todo CSS/Forms/Inline form isn't implemented yet.
 * @todo CSS/Forms/Inline form isn't tested yet.
 *
 * @method static TwitterBootstrap formInline()
 * @method static TwitterBootstrap srOnly(\string $for)
 *
 * CSS/Forms/Horizontal form
 *
 * @todo CSS/Forms/Horizontal form isn't implemented yet.
 * @todo CSS/Forms/Horizontal form isn't tested yet.
 *
 * @method static TwitterBootstrap formHorizontal()
 * @method static TwitterBootstrap controlLabel()
 *
 * CSS/Forms/Supported controls/Inputs
 *
 * @todo CSS/Forms/Supported controls/Inputs isn't implemented yet.
 * @todo CSS/Forms/Supported controls/Inputs isn't tested yet.
 *
 * @method static TwitterBootstrap formText(\string $name, \string $value, \string $placeholder, array $options) CSS\Forms
 * @method static TwitterBootstrap formTextRequired(\string $name, \string $value, \string $placeholder, array $options) CSS\Forms
 * @method static TwitterBootstrap formHidden(\string $name, \string $value, array $options) CSS\Forms
 * @method static TwitterBootstrap formSearch(\string $name, \string $value, array $options) CSS\Forms
 * @method static TwitterBootstrap formSearchRequired(\string $name, \string $value, array $options) CSS\Forms
 * @method static TwitterBootstrap formTel(\string $name, \string $value, \string $placeholder, array $options) CSS\Forms
 * @method static TwitterBootstrap formTelRequired(\string $name, \string $value, \string $placeholder, array $options) CSS\Forms
 * @method static TwitterBootstrap formUrl(\string $name, \string $value, \string $placeholder, array $options) CSS\Forms
 * @method static TwitterBootstrap formUrlRequired(\string $name, \string $value, \string $placeholder, array $options) CSS\Forms
 * @method static TwitterBootstrap formEmail(\string $name, \string $value, \string $placeholder, array $options) CSS\Forms
 * @method static TwitterBootstrap formEmailRequired(\string $name, \string $value, \string $placeholder, array $options) CSS\Forms
 * @method static TwitterBootstrap formPassword(\string $name, \string $value, \string $placeholder, array $options) CSS\Forms
 * @method static TwitterBootstrap formPasswordRequired(\string $name, \string $value, \string $placeholder, array $options) CSS\Forms
 * @method static TwitterBootstrap formDatetime(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) CSS\Forms
 * @method static TwitterBootstrap formDatetimeRequired(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) CSS\Forms
 * @method static TwitterBootstrap formDate(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) CSS\Forms
 * @method static TwitterBootstrap formDateRequired(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) CSS\Forms
 * @method static TwitterBootstrap formMonth(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) CSS\Forms
 * @method static TwitterBootstrap formMonthRequired(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) CSS\Forms
 * @method static TwitterBootstrap formWeek(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) CSS\Forms
 * @method static TwitterBootstrap formWeekRequired(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) CSS\Forms
 * @method static TwitterBootstrap formTime(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) CSS\Forms
 * @method static TwitterBootstrap formTimeRequired(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) CSS\Forms
 * @method static TwitterBootstrap formDatetimeLocal(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) CSS\Forms
 * @method static TwitterBootstrap formDatetimeLocalRequired(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) CSS\Forms
 * @method static TwitterBootstrap formNumber(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) CSS\Forms
 * @method static TwitterBootstrap formNumberRequired(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) CSS\Forms
 * @method static TwitterBootstrap formRange(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) CSS\Forms
 * @method static TwitterBootstrap formRangeRequired(\string $name, \string $value, \integer $min, \integer $max, \integer $step, array $options) CSS\Forms
 * @method static TwitterBootstrap formColor(\string $name, \string $value, array $options) CSS\Forms
 * @method static TwitterBootstrap formColorRequired(\string $name, \string $value, array $options) CSS\Forms
 *
 * Css/Forms/Supported controls/Textarea
 *
 * @todo Css/Forms/Supported controls/Textarea isn't tested yet.
 * @todo Css/Forms/Supported controls/Textarea isn't implemented yet.
 *
 * @method static TwitterBootstrap textarea(\string $name, \string $value, \string $placeholder, array $options) CSS\Forms
 *
 * Css/Forms/Supported controls/Checkboxes and radios
 *
 * @method static TwitterBootstrap formCheckbox(\string $name, \string $value, \boolean $checked, array $options)
 * @method static TwitterBootstrap formCheckboxRequired(\string $name, \string $value, \boolean $checked, array $options) CSS\Forms
 * @method static TwitterBootstrap formRadio(\string $name, \string $value, \boolean $checked, array $options) CSS\Forms
 * @method static TwitterBootstrap formRadioRequired(\string $name, \string $value, \boolean $checked, array $options) CSS\Forms
 * @method static TwitterBootstrap formFile(\string $name, \string $accept="image/*", array $options) CSS\Forms
 * @method static TwitterBootstrap formFileRequired(\string $name, \string $accept="image/*", array $options) CSS\Forms
 * @method static TwitterBootstrap formFileMultiple(\string $name, \string $accept="image/*", array $options) CSS\Forms
 * @method static TwitterBootstrap formFileMultipleRequired(\string $name, \string $accept="image/*", array $options) CSS\Forms
 * @method static TwitterBootstrap formSubmit(\string $value, array $options) CSS\Forms
 * @method static TwitterBootstrap formSubmitImage(\string $src, \string $alt, array $options) CSS\Forms
 * @method static TwitterBootstrap formReset(\string $value, array $options) CSS\Forms
 * @method static TwitterBootstrap formButton(\string $value, array $options) CSS\Forms
 *
 * @method static TwitterBootstrap checkbox()
 * @method static TwitterBootstrap checkboxInline()
 * @method static TwitterBootstrap radio()
 * @method static TwitterBootstrap radioInline()
 *
 * CSS/Buttons
 *
 * @todo CSS/Buttons isn't completed yet.
 * @todo CSS/Buttons isn't implemented yet.
 * @todo CSS/Buttons isn't tested yet.
 *
 * CSS/Images
 *
 * @todo CSS/Images isn't completed yet.
 * @todo CSS/Images isn't implemented yet.
 * @todo CSS/Images isn't tested yet.
 *
 * CSS/Helper classes
 *
 * @todo CSS/Helper classes isn't completed yet.
 * @todo CSS/Helper classes isn't implemented yet.
 * @todo CSS/Helper classes isn't tested yet.
 *
 * CSS/Responsive utilities
 *
 * @todo CSS/Responsive utilities isn't completed yet.
 * @todo CSS/Responsive utilities isn't implemented yet.
 * @todo CSS/Responsive utilities isn't tested yet.
 *
 *

 * CSS\Buttons
 *
 * @todo Not implemented.
 *
 *
 * @method static TwitterBootstrap navbar(\mixed $options)
 * @method static TwitterBootstrap navbarInverse(\mixed $options)
 * @method static TwitterBootstrap navbarFixedTop(\mixed $options)
 * @method static TwitterBootstrap navbarInverseFixedTop(\mixed $options)
 */
class TwitterBootstrap extends Tag
{
  protected static $library = array(
    'Primalbase\TwitterBootstrap\CSS',
    'Primalbase\TwitterBootstrap\CSS\GridSystem',
    'Primalbase\TwitterBootstrap\CSS\Typography',
    'Primalbase\TwitterBootstrap\CSS\Forms',
    'Primalbase\TwitterBootstrap\Components\Navbar',
    'Primalbase\TwitterBootstrap\Components\Panels',
    'Primalbase\TwitterBootstrap\Components\Navs',
    'Primalbase\TwitterBootstrap\Components\Alerts',
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
      $tag = static::create($config['tagName'], $config['attributes']);
      foreach ($args as $arg)
        $tag->append($arg);
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
      if (!is_callable(array($tag, $config['callback'])))
        throw new \Exception('Don\'t call callback '.$callTagName);
      call_user_func(array($config['callback'], $tag), $args);
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

    return call_user_func_array(array(parent, $tagName), $args);
  }

  /**
   * @method Typography lead()
   * @method Typography textLeft()
   * @method Typography textCenter()
   * @method Typography textRight()
   * @method Typography textMuted()
   * @method Typography textPrimary()
   * @method Typography textSuccess()
   * @method Typography textInfo()
   * @method Typography textWarning()
   * @method Typography textDanger()
   *
   * @param string $name
   * @param array $args
   * @return Tag
   */
  public function __call($name, $args)
  {
    $pattern = array(
      'lead'        => 'lead',
      'textLeft'    => 'text-left',
      'textCenter'  => 'text-center',
      'textRight'   => 'text-right',
      'textMuted'   => 'text-muted',
      'textPrimary' => 'text-primary',
      'textSuccess' => 'text-success',
      'textInfo'    => 'text-info',
      'textWarning' => 'text-warning',
      'textDanger'  => 'text-danger',
    );

    if ($pattern[$name])
      return $this->addClass($pattern[$name]);

    return parent::__call($name, $args);
  }
}