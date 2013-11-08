<?php
namespace Primalbase\TwitterBootstrap\Common;

use Primalbase\TwitterBootstrap\AbstractConfigLoader;
use Primalbase\TwitterBootstrap\TwitterBootstrap as Tag;

class Forms extends AbstractConfigLoader {

  // 'aaa'    => 'aaa'     -> Tag::aaa()    -> <div class="aaa"></div>
  // 'aaaBbb' => 'aaa-bbb' -> Tag::aaaBbb() -> <div class="aaa-bbb"></div>
  // 優先順位降順、前方マッチで検索する(重複してマッチするタグは後回しにする)
  protected static $configurations = array(
    'inputHidden' => array(
      'tagName' => 'input',
      'attributes' => array(
        'type' => 'hidden'
      ),
      'factory' => array(
        'Primalbase\TwitterBootstrap\Common\Forms',
        'inputHiddenFactory',
      ),
    ),
    'inputDatetime' => array(
      'tagName' => 'input',
      'attributes' => array(
        'type'  => 'datetime',
        'class' => 'form-control',
      ),
      'options' => array(
        'Required' => array('required'),
      ),
      'factory' => array(
        'Primalbase\TwitterBootstrap\Common\Forms',
        'inputDatetimeFactory',
      ),
    ),
    'input' => array(
      'tagName'    => 'input',
      'attributes' => array(
        'type'  => 'text',
        'class' => 'form-control',
      ),
      'options' => array(
        'Search'   => array('type' => 'search'),
        'Tel'      => array('type' => 'tel'),
        'Url'      => array('type' => 'url'),
        'Email'    => array('type' => 'email'),
        'Password' => array('type' => 'password'),
        'Required' => array('required'),
      ),
      'factory' => array(
        'Primalbase\TwitterBootstrap\Common\Forms',
        'inputFactory',
      ),
    ),
    'textarea' => array(
      'tagName'    => 'textarea',
      'attributes' => array(
        'class' => 'form-control',
      ),
      'factory' => array(
        'Primalbase\TwitterBootstrap\Common\Forms',
        'textareaFactory',
      ),
    ),
    'formGroup' => array(
      'attributes' => array(
        'class' => 'form-group',
      ),
      'factory' => array(
        'Primalbase\TwitterBootstrap\Common\Forms',
        'formGroupFactory',
      ),
    ),
    'form'      => array(
      'tagName'    => 'form',
      'attributes' => array(
        'role' => 'form'
      ),
      'options' => array(
        'Inline'     => 'form-inline',
        'Horizontal' => 'form-horizontal'
      )
    ),
  );

  /**
   * @todo 他のファクトリに合わせてリファクタリング
   *
   * @param $config
   * @param $args
   * @return \Primalbase\Tag\Tag
   */
  public static function formGroupFactory($config, $args)
  {
    $tag = Tag::create($config['tagName']);
    foreach ($config['attributes'] as $name => $value)
      $tag->{$name}($value);

    foreach ($args as $arg)
    {
      $content = '';
      if (!is_array($arg))
      {
        $content = $arg;
      }
      else
      {
        $field = array_merge(array(
          'type'        => null,
          'class'       => 'form-control',
          'id'          => null,
          'name'        => null,
          'label'       => null,
          'placeholder' => null,
        ), $arg);

        $label = null;
        $input = null;
        if ($field['label'])
          $label = Tag::label(array('for' => $field['id']), $field['label']);

        unset($field['label']);

        if ($field['type'] == 'textarea')
        {
          unset($field['type']);
          $input = Tag::create('textarea', $field);
        }
        else
        {
          $input = Tag::create('input', $field);
        }
        $tag->append($label, $input);
      }
    }

    return $tag;
  }

  /**
   * @param array $config
   * @param array $args (0 => name, 1 => value, 2 => options)
   * @return \Primalbase\Tag\Tag
   */
  public static function inputHiddenFactory(array $config, array $args)
  {
    $tagName    = $config['tagName'];
    $attributes = $config['attributes'];

    if (isset($args[0]))
      $attributes['name'] = $args[0];
    if (isset($args[1]))
      $attributes['value'] = $args[1];

    if (isset($args[2]) && is_array($args[2]))
      $attributes = array_merge($attributes, $args[2]);

    return Tag::create($tagName, $attributes);
  }

  /**
   * @param $config
   * @param $args (0 => name, 1 => value, 2 => placeholder, 3 => options)
   * @return \Primalbase\Tag\Tag
   */
  public static function inputFactory($config, $args)
  {
    $tagName    = $config['tagName'];
    $attributes = $config['attributes'];

    if (isset($args[0]))
      $attributes['name'] = $args[0];
    if (isset($args[1]))
      $attributes['value'] = $args[1];
    if (isset($args[2]))
      $attributes['placeholder'] = $args[2];

    if (isset($args[3]) && is_array($args[3]))
      $attributes = array_merge($attributes, $args[3]);

    return Tag::create($tagName, $attributes);
  }

  public static function inputDatetimeFactory($config, $args)
  {
    $tagName    = $config['tagName'];
    $attributes = $config['attributes'];

    if (isset($args[0]))
      $attributes['name'] = $args[0];
    if (isset($args[1]))
      $attributes['value'] = $args[1];
    if (isset($args[2]))
      $attributes['min'] = $args[2];
    if (isset($args[3]))
      $attributes['max'] = $args[3];
    if (isset($args[4]))
      $attributes['step'] = $args[4];

    if (isset($args[5]) && is_array($args[5]))
      $attributes = array_merge($attributes, $args[5]);

    return Tag::create($tagName, $attributes);
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

    if (isset($args[3]) && is_array($args[3]))
      $attributes = array_merge($attributes, $args[3]);

    return Tag::create($tagName, $attributes)->append($value);
  }

}