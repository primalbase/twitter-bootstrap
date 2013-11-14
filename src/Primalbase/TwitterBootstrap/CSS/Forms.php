<?php
namespace Primalbase\TwitterBootstrap\CSS;

use Primalbase\TwitterBootstrap\TwitterBootstrap as Tag;
use Primalbase\TwitterBootstrap\AbstractTagFactory;

class Forms extends AbstractTagFactory {


  protected static function configurations()
  {
    return array(
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
      'formDatetime' => array(
        'tagName' => 'input',
        'attributes' => array(
          'type'  => 'datetime',
          'class' => 'form-control',
          'name'  => '@1',
          'value' => '@2',
          'min'   => '@3',
          'max'   => '@4',
          'step'  => '@5',
        ),
        'options' => array(
          'Required' => array('required' => false),
        ),
      ),
      'textarea' => array(
        'tagName'    => 'textarea',
        'attributes' => array(
          'class' => 'form-control',
        ),
        'factory' => array(
          __CLASS__,
          'textareaFactory',
        ),
      ),
      'formGroup' => array(
        'attributes' => array(
          'class' => 'form-group',
        ),
        'factory' => array(
          __CLASS__,
          'formGroupFactory',
        ),
      ),
      // formと重複するため、keyではなくregexpでマッチさせる
      // regexpを使用する場合、nameの指定も必要
      'formInputs' => array(
        'regexp'     => '/^form(Text|Email|Search|Tel|Url|Password)/',
        'name'       => 'form',
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
          'Required' => array('required' => false),
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

  /**
   * @param array $config
   * @param array $args (0 => name, 1 => value, 2 => placeholder, 3 => options)
   * @return \Primalbase\Tag\Tag
   */
  public static function textareaFactory(array $config, array $args)
  {
    $tagName    = $config['tagName'];
    $attributes = $config['attributes'];

    if (isset($args[0]))
      $attributes['name'] = $args[0];
    if (isset($args[1]))
      $value = $args[1];
    if (isset($args[2]))
      $attributes['placeholder'] = $args[2];

    $tag = static::create($tagName, $attributes);

    $tag->append($value);

    foreach (array_slice($args, 3) as $arg)
      $tag->append($arg);

    return $tag;
  }

  /**
   * @param array $config
   * @param array $args (0 => label, 1 => form_element, 2 => sr_only, 3 => options)
   * @return \Primalbase\Tag\Tag
   */
  public static function formGroupFactory(array $config, array $args)
  {
    $tagName    = $config['tagName'];
    $attributes = $config['attributes'];

    if (isset($args[1]))
    {
      $tag = static::create($tagName, $attributes);
      $label = Tag::create('label', $args[0]);
      $label->for($args[1]->getAttribute('id')?:false);
      if ($args[2])
        $label->addClass('sr-only');
      $tag->append($label);
      $tag->append($args[1]);
    }
    else
      $tag = static::create($tagName, $attributes);

    foreach (array_slice($args, 3) as $arg)
      $tag->append($arg);

    return $tag;
  }
}