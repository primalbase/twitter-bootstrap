<?php
namespace Primalbase\TwitterBootstrap;

use Primalbase\Tag\Tag;

abstract class AbstractTagFactory extends Tag {

  // protected static $configurations = array();

  public static function getFormatConfigurations()
  {
    $formatConfigurations = array();
    foreach (static::$configurations as $key => $configOrClass)
      array_push($formatConfigurations, static::formatConfig($key, $configOrClass));

    return $formatConfigurations;
  }

  public static function getConfig($tagName)
  {
    foreach (static::$configurations as $key => $config)
    {
      $config = static::formatConfig($key, $config);

      if (strpos($tagName, $config['name']) === 0)
        return $config;
    }

    return false;
  }


  public static function formatConfig($key, $configOrClass)
  {
    if (is_array($configOrClass))
    {
      $config = array_merge(array(
        'name' => $key,
      ), $configOrClass);
    }
    else
    {
      $config = array(
        'name'       => $key,
        'attributes' => array('class' => $configOrClass),
      );
    }

    $config = array_merge(array(
      'class'        => get_called_class(),
      'name'         => '',
      'options'      => array(),
      'attributes'   => array(),
      'tagName'      => 'div',
      'factory'      => null,
      'callback'     => null,
    ), $config);

    return $config;
  }

  public static function build($called_name, $config, array $args=array())
  {
    $is_factory  = !!$config['factory'];
    $is_callback = !!$config['callback'];

    if ($is_factory)
    {
      $factory = $config['factory'];

      if (!is_callable($factory))
        throw new \Exception('Don\'t call factory '.$called_name);

      $tag = call_user_func($factory, $config, $args);
    }
    else
    {
      $tag = static::create($config['tagName'], $config['attributes']);
      foreach ($args as $arg)
        $tag->append($arg);
    }

    // 関数名からタグを除いた文字列
    // inputTextRequired -> TextRequired
    $opt_str = substr($called_name, strlen($config['name']));
    if ($opt_str)
      $tag->__applyOptions($opt_str, $config['options']);

    if ($is_callback)
    {
      if (!is_callable(array($tag, $config['callback'])))
        throw new \Exception('Don\'t call callback '.$called_name);

      call_user_func(array($config['callback'], $tag), $args);
    }

    return $tag;
  }

  protected function __applyOptions($opt_str, array $options = array())
  {
    call_user_func($_f = function () use (&$_f, &$opt_str, $options)
    {
      foreach ($options as $name => $class_or_attributes)
      {
        if (preg_match('/^('.$name.')/', $opt_str, $m))
        {
          $match_str = $m[1];
          if (is_array($class_or_attributes))
          {

            foreach ($class_or_attributes as $c_key => $c_value)
            {
              if (preg_match('/^[0-9]+$/', $c_key))
                $this->attr($c_value);
              elseif ($c_key == 'tagName')
                $this->tagName($c_value);
              // 値のみ
              else
                $this->attr($c_key, $c_value);
            }
          }
          else
          {
            $class = preg_replace('/^'.$name.'/', $class_or_attributes, $match_str);
            $this->addClass($class);
          }
          $opt_str = substr($opt_str, strlen($match_str));

          $_f();
        }
      }
    });
  }

  public static function __callStatic($tagName, array $args)
  {
    return TwitterBootstrap::__callStatic($tagName, $args);
  }

}