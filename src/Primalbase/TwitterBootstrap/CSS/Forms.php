<?php
namespace Primalbase\TwitterBootstrap\CSS;

use Primalbase\TwitterBootstrap\AbstractTagFactory;

/**
 * Class Forms
 * @package Primalbase\TwitterBootstrap\CSS
 *
 * control-label use cols.
 * @example <label class="control-label col-sm-2">
 */
class Forms extends GridSystem {

  protected static function configurations()
  {
    return array(
      'controlLabel' => array(
        'tagName' => 'label',
        'attributes' => array(
          'class'   => 'control-label',
        ),
      ),
      'srOnly'     => array(
        'tagName' => 'label',
        'attributes' => array(
          'class' => 'sr-only',
          'for'   => '@1',
        ),
      ),
      'formHidden' => array(
        'tagName' => 'input',
        'attributes' => array(
          'type'  => 'hidden',
          'name'  => '@1',
          'value' => '@2',
        ),
      ),
      'formNumbers' => array(
        'prefix'  => 'form',
        'regexp'  => '(DatetimeLocal|Datetime|Date|Month|Week|Time|Number|Range)',
        'tagName' => 'input',
        'attributes' => array(
          'type',
          'class' => 'form-control',
          'name'  => '@1',
          'value' => '@2',
          'min'   => '@3',
          'max'   => '@4',
          'step'  => '@5',
        ),
        'options' => array(
          'DatetimeLocal' => array('type' => 'datetime-local'),
          'Datetime' => array('type' => 'datetime'),
          'Date'     => array('type' => 'date'),
          'Month'    => array('type' => 'month'),
          'Time'     => array('type' => 'time'),
          'Week'     => array('type' => 'week'),
          'Number'   => array('type' => 'number'),
          'Range'    => array('type' => 'range', 'class' => null), // not supported by twitter bootstrap.
          'Required' => array('required' => true),
        ),
      ),
      'formTextarea' => array(
        'tagName'    => 'textarea',
        'attributes' => array(
          'class'       => 'form-control',
          'name'        => '@1',
          'rows'        => '@2',
          // @3 is append to body by default behavior.
          'placeholder' => '@4',
        ),
        'options' => array(
          'Required' => array('required' => true),
        ),
      ),
      /**
       * Default (stacked)
       * <code>
       * <div class="checkbox">
       *   <label>
       *     <input type="checkbox" value="">
       *     Option one is this and that&mdash;be sure to include why it's great
       *   </label>
       * </div>
       * </code>
       */
      'checkbox' => array(
        'tagName' => 'div',
        'attributes' => array(
          'class' => 'checkbox',
        ),
        'factory' => array(
          __CLASS__,
          'checkboxFactory',
        ),
      ),
      'radio' => array(
        'tagName' => 'div',
        'attributes' => array(
          'class' => 'radio',
        ),
        'factory' => array(
          __CLASS__,
          'checkboxFactory',
        ),
      ),

      'formCheckBoxAndRadio' => array(
        'prefix'  => 'form',
        'regexp'  => '(Checkbox|Radio)',
        'tagName' => 'input',
        'attributes' => array(
          'type' => null,
          'name'    => '@1',
          'value'   => '@2',
          'checked' => '@3'
        ),
        'options' => array(
          'Checkbox' => array('type' => 'checkbox'),
          'Radio'    => array('type' => 'radio'),
        )
      ),

      /**
       * Basic example.
       * <code>
       * <div class="form-group">
       *   <label for="exampleInputEmail1">Email</label>
       *   <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
       * </div>
       * </code>
       *
       * Inline form.
       * <code>
       * <div class="form-group">
       *   <label class="sr-only" for="exampleInputEmail2">Email address</label>
       *   <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
       * </div>
       * </code>
       *
       * Horizontal form.
       * <code>
       * <div class="form-group">
       *   <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
       *   <div class="col-sm-10">
       *     <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
       *   </div>
       * </div>
       * </code>
       */
      'formGroup' => array(
        'attributes' => array(
          'class' => 'form-group',
        ),
      ),
      // formと重複するため、keyではなくregexpでマッチさせる
      // regexpを使用する場合、nameの指定も必要
      'formInputs' => array(
        'prefix'     => 'form',
        'regexp'     => '(Text|Email|Search|Tel|Url|Password)',
        'tagName'    => 'input',
        'attributes' => array(
          'type', // 並び順を先頭にするため、空の属性を定義する
          'class'       => 'form-control',
          'name'        => '@1',
          'value'       => '@2',
          'placeholder' => '@3',
        ),
        'options' => array(
          'Text'     => array('type' => 'text'),
          'Email'    => array('type' => 'email'),
          'Search'   => array('type' => 'search'),
          'Tel'      => array('type' => 'tel'),
          'Url'      => array('type' => 'url'),
          'Password' => array('type' => 'password'),
          'Required' => array('required' => true),
        ),
      ),
      // color hasn't placeholder
      'formColor' => array(
        'tagName' => 'input',
        'attributes' => array(
          'type'  => 'color',
          'class' => 'form-control',
          'name'  => '@1',
          'value' => '@2',
        ),
        'options' => array(
          'Required' => array('required' => true),
        ),
      ),
      'form' => array(
        'tagName' => 'form',
        'attributes' => array(
          'class' => null,
          'role'  => 'form',
        ),
        'options' => array(
          'Inline'     => 'form-inline',
          'Horizontal' => 'form-horizontal',
        ),
      ),
    );
  }

  public static function checkboxFactory(array $config, array $args)
  {
    $tagName    = $config['tagName'];
    $attributes = $config['attributes'];

    $tag = static::create($tagName, $attributes);
    $tag->activeElement = static::label();
    $tag->append($tag->activeElement);
    foreach ($args as $arg)
      $tag->activeElement->append($arg);

    return $tag;
  }
}