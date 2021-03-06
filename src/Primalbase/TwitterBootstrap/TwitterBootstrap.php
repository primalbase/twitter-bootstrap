<?php
namespace Primalbase\TwitterBootstrap;

use Primalbase\Tag\Tag;

/**
 * Class TwitterBootstrap
 * @package \Primalbase\TwitterBootstrap
 *
 * CSS
 *
 * @method static \Primalbase\TwitterBootstrap\CSS html(\string $lang = 'en', \mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS viewport(\Boolean $user_scalable = null, \string $minimum_scale = null, \string $maximum_scale = null, \mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS imgResponsive(\string $src = '#', \string $alt = '', \mixed $options = null)
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
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms form(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formGroup(\string $label = null, Forms $form_element = null, \boolean $sr_only = false, \mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formInline(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms srOnly(\string $for = null, \mixed $options)
 *
 * CSS/Form/Inline form
 *
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formHorizontal(\mixed $options = null)
 *
 * CSS/Form/Horizontal form
 *
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms controlLabel(\mixed $options = null)
 *
 * CSS/Forms/Supported controls/Inputs
 *
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formText(\string $name = null, \string $value = null, \string $placeholder = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formTextRequired(\string $name = null, \string $value = null, \string $placeholder = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formTextDisabled(\string $name = null, \string $value = null, \string $placeholder = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formHidden(\string $name = null, \string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formHiddenDisabled(\string $name = null, \string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formSearch(\string $name = null, \string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formSearchDisabled(\string $name = null, \string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formSearchRequired(\string $name = null, \string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formTel(\string $name = null, \string $value = null, \string $placeholder = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formTelRequired(\string $name = null, \string $value = null, \string $placeholder = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formTelDisabled(\string $name = null, \string $value = null, \string $placeholder = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formUrl(\string $name = null, \string $value = null, \string $placeholder = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formUrlRequired(\string $name = null, \string $value = null, \string $placeholder = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formUrlDisabled(\string $name = null, \string $value = null, \string $placeholder = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formEmail(\string $name = null, \string $value = null, \string $placeholder = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formEmailRequired(\string $name = null, \string $value = null, \string $placeholder = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formEmailDisabled(\string $name = null, \string $value = null, \string $placeholder = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formPassword(\string $name = null, \string $value = null, \string $placeholder = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formPasswordRequired(\string $name = null, \string $value = null, \string $placeholder = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formPasswordDisabled(\string $name = null, \string $value = null, \string $placeholder = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formDatetime(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formDatetimeRequired(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formDatetimeDisabled(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formDatetimeLocal(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formDatetimeLocalRequired(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formDatetimeLocalDisabled(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formDate(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formDateRequired(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formDateDisabled(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formMonth(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formMonthRequired(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formMonthDisabled(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formWeek(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formWeekRequired(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formWeekDisabled(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formTime(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formTimeRequired(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formTimeDisabled(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formNumber(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formNumberRequired(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formNumberDisabled(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formRange(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formRangeRequired(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formRangeDisabled(\string $name = null, \string $value = null, \integer $min = null, \integer $max = null, \mixed $step = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formColor(\string $name = null, \string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formColorRequired(\string $name = null, \string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formColorDisabled(\string $name = null, \string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formTextarea(\string $name = null, \Integer $rows = null, \string $value = null, \string $placeholder = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formTextareaRequired(\string $name = null, \Integer $rows = null, \string $value = null, \string $placeholder = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formTextareaDisabled(\string $name = null, \Integer $rows = null, \string $value = null, \string $placeholder = null, array $options = null)
 *
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formFile(\string $name = null, \string $accept = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formFileRequired(\string $name = null, \string $accept = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formFileMultiple(\string $name = null, \string $accept = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formFileDisabled(\string $name = null, \string $accept = null, array $options = null)
 *
 * CSS/Forms/Supported controls/Checkboxes and radios
 *
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formCheckbox(\string $name = null, \string $value = null, \boolean $checked = false, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formCheckboxRequired(\string $name = null, \string $value = null, \boolean $checked = false, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formCheckboxDisabled(\string $name = null, \string $value = null, \boolean $checked = false, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formRadio(\string $name = null, \string $value = null, \boolean $checked = false, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formRadioRequired(\string $name = null, \string $value = null, \boolean $checked = false, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formRadioDisabled(\string $name = null, \string $value = null, \boolean $checked = false, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms checkbox(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms checkboxInline(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms radio(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms radioInline(\mixed $options = null)
 *
 * CSS/Forms/Supported controls/Selects
 *
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formSelect(array $collections = null, \mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formSelectMultiple(array $collections = null, \mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formSelectRequired(array $collections = null, \mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formSelectDisabled(array $collections = null, \mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms option(\string $label = null, \string $value = null, \mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms optionSelected(\string $label = null, \string $value = null, \mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms optgroup(\string $label, array $collections = null, \mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms optgroupDisabled(\string $label, array $collections = null, \mixed $options = null)
 *
 * CSS/Forms/Static control
 *
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms formStatic(\mixed $options = null)
 *
 * CSS/Forms/Control states
 *
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms fieldset(\mixed $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms fieldsetDisabled(\mixed $options = null)
 *
 * CSS/Forms/Help text
 *
 * @method static \Primalbase\TwitterBootstrap\CSS\Forms helpBlock(\mixed $options = null)
 *
 * CSS/Buttons
 *
 * @todo CSS/Buttons isn't completed yet.
 * @todo CSS/Buttons isn't implemented yet.
 * @todo CSS/Buttons isn't tested yet.
 *
 * @method static \Primalbase\TwitterBootstrap\CSS\Buttons btnSubmit(\string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Buttons btnImage(\string $src, \string $alt, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Buttons btnReset(\string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Buttons btnDefault(\string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Buttons btnPrimary(\string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Buttons btnSuccess(\string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Buttons btnInfo(\string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Buttons btnWarning(\string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Buttons btnDanger(\string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Buttons btnLink(\string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Buttons btnLg(\string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Buttons btnSm(\string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Buttons btnXs(\string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Buttons btnBlock(\string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Buttons btnActive(\string $value = null, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Buttons btnAnchor(\string $href, array $options = null)
 * @method static \Primalbase\TwitterBootstrap\CSS\Buttons btnDisabled(\string $value = null, array $options = null)
 *
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
    'Primalbase\TwitterBootstrap\CSS\Buttons',
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
        $configurations = $lib::getFormatConfigurations();
        foreach ($configurations as $config)
          foreach(static::$configurationsAll as $_config)
            if ($config['prefix'] == $_config['prefix'])
              trigger_error('Duplicate configuration key. "'.$config['prefix']."'", E_USER_WARNING);

        static::$configurationsAll = array_merge(
          static::$configurationsAll,
          $configurations
        );
      }
    }

    foreach (static::$configurationsAll as $config)
    {
      if ($config['regexp'])
      {
        if (preg_match('/^'.$config['prefix'].$config['regexp'].'/', $tagName))
          return $config['class']::build($tagName, $config, $args);
      }
      elseif (strpos($tagName, $config['prefix']) === 0)
        return $config['class']::build($tagName, $config, $args);
    }

    return parent::createInstanceArray($tagName, $args);
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

    if (array_key_exists($name, $pattern))
      return $this->addClass($pattern[$name]);

    return parent::__call($name, $args);
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