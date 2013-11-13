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
use Primalbase\TwitterBootstrap\CSS\Typography;
use Primalbase\TwitterBootstrap\CSS\Table;

/**
 * Class TwitterBootstrap
 * @package \Primalbase\TwitterBootstrap
 *
 * CSS
 *
 * @method static \Primalbase\TwitterBootstrap\CSS html(\string $lang = "en", \mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS viewport(\Boolean $user_scalable = null, \string $minimum_scale = null, \string $maximum_scale = null, \mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS imgResponsive(\string $src = "#", \string $alt = "", \mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS container(\mixed $options = null)
 *
 * CSS/Grid system
 *
 * @method static \Primalbase\TwitterBootstrap\CSS\GridSystem row(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\GridSystem col(\integer $col, \mixed $options = null) Phones <768px
 * @method static \Primalbase\TwitterBootstrap\CSS\GridSystem colXs(\integer $col, \mixed $options = null) Phones <768px
 * @method static \Primalbase\TwitterBootstrap\CSS\GridSystem colSm(\integer $col, \mixed $options = null) Tablets ≥768px
 * @method static \Primalbase\TwitterBootstrap\CSS\GridSystem colMd(\integer $col, \mixed $options = null) Desktops ≥992px
 * @method static \Primalbase\TwitterBootstrap\CSS\GridSystem colLg(\integer $col, \mixed $options = null) Desktops ≥1200px
 *
 * CSS/Typography
 *
 * @method static \Primalbase\TwitterBootstrap\CSS\Typography lead(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Typography textLeft(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Typography textCenter(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Typography textRight(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Typography abbr(\string $title = null,\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Typography abbrInitialism(\string $title = null,\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Typography ulUnstyled(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Typography olUnstyled(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Typography ulInline(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Typography olInline(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Typography dlHorizontal(\mixed $options = null)
 *
 * CSS/Code
 *
 * @method static \Primalbase\TwitterBootstrap\CSS\Code preScrollable(\mixed $options = null)
 *
 * CSS/Table
 *
 * @method static \Primalbase\TwitterBootstrap\CSS\Table table(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Table tableStriped(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Table tableBordered(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Table tableHover(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Table tableCondensed(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Table\Row tableRow(\mixed $options = null)
 * @see \Primalbase\TwitterBootstrap\Table::appendRow(\mixed $options = null)
 * @see \Primalbase\TwitterBootstrap\Table::appendRowActive(\mixed $options = null)
 * @see \Primalbase\TwitterBootstrap\Table::appendRowSuccess(\mixed $options = null)
 * @see \Primalbase\TwitterBootstrap\Table::appendRowWarning(\mixed $options = null)
 * @see \Primalbase\TwitterBootstrap\Table::appendRowDanger(\mixed $options = null)
 * @see \Primalbase\TwitterBootstrap\Table\Row::getRow(\integer $row = null)
 * @see \Primalbase\TwitterBootstrap\Table\Row::active()
 * @see \Primalbase\TwitterBootstrap\Table\Row::success()
 * @see \Primalbase\TwitterBootstrap\Table\Row::warning()
 * @see \Primalbase\TwitterBootstrap\Table\Row::danger()
 * @see \Primalbase\TwitterBootstrap\Table\Row::appendTh(\mixed $options = null)
 * @see \Primalbase\TwitterBootstrap\Table\Row::appendThActive(\mixed $options = null)
 * @see \Primalbase\TwitterBootstrap\Table\Row::appendThSuccess(\mixed $options = null)
 * @see \Primalbase\TwitterBootstrap\Table\Row::appendThWarning(\mixed $options = null)
 * @see \Primalbase\TwitterBootstrap\Table\Row::appendThDanger(\mixed $options = null)
 * @see \Primalbase\TwitterBootstrap\Table\Row::appendTd(\mixed $options = null)
 * @see \Primalbase\TwitterBootstrap\Table\Row::appendTdActive(\mixed $options = null)
 * @see \Primalbase\TwitterBootstrap\Table\Row::appendTdSuccess(\mixed $options = null)
 * @see \Primalbase\TwitterBootstrap\Table\Row::appendTdWarning(\mixed $options = null)
 * @see \Primalbase\TwitterBootstrap\Table\Row::appendTdDanger(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Table tableResponsive(\mixed $options = null)
 *
 * CSS/Forms
 *
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formControl()
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formGroup(\mixed $options)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms form(\mixed $options)
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
    'Primalbase\TwitterBootstrap\CSS\Code',
    'Primalbase\TwitterBootstrap\CSS\Table\Row', // Duplicate method name. Should be insert before Table.
    'Primalbase\TwitterBootstrap\CSS\Table',
    'Primalbase\TwitterBootstrap\CSS\Forms',
    'Primalbase\TwitterBootstrap\Components\Navbar',
    'Primalbase\TwitterBootstrap\Components\Panels',
    'Primalbase\TwitterBootstrap\Components\Navs',
    'Primalbase\TwitterBootstrap\Components\Alerts',
  );

  protected static $configurationsAll = array();

  public static function __callStatic($tagName, array $args)
  {
    if (!static::$configurationsAll)
    {
      foreach (static::$library as $lib)
      {
        static::$configurationsAll = array_merge(
          static::$configurationsAll,
          $lib::getFormatConfigurations()
        );
      }
    }

    foreach (static::$configurationsAll as $config)
    {
      if (strpos($tagName, $config['name']) === 0)
        return $config['class']::build($tagName, $config, $args);
    }

    return call_user_func_array(array(parent, $tagName), $args);
  }

  /**
   * @method TwitterBootstrap lead()
   * @method TwitterBootstrap textLeft()
   * @method TwitterBootstrap textCenter()
   * @method TwitterBootstrap textRight()
   * @method TwitterBootstrap textMuted()
   * @method TwitterBootstrap textPrimary()
   * @method TwitterBootstrap textSuccess()
   * @method TwitterBootstrap textInfo()
   * @method TwitterBootstrap textWarning()
   * @method TwitterBootstrap textDanger()
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