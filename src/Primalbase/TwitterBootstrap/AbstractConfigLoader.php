<?php
namespace Primalbase\TwitterBootstrap;

abstract class AbstractConfigLoader {

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
      'name'         => '',
      'options'      => array(),
      'attributes'   => array(),
      'tagName'      => 'div',
      'factory'      => null,
      'callback'     => null,
    ), $config);

    return $config;
  }
}