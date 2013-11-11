<?php
namespace Primalbase\TwitterBootstrap\Components;

use Primalbase\TwitterBootstrap\TwitterBootstrap as Tag;
use Primalbase\TwitterBootstrap\AbstractTagFactory;

class Panels extends AbstractTagFactory {

  protected static $configurations = array(
    'panelBody'    => 'panel-body',
    'panelHeading' => 'panel-heading',
    'panelTitle'   => array(
      'tagName' => 'h3',
      'attributes' => array(
        'class' => 'panel-title'
      ),
      'options' => array(
        'H1' => array('tagName' => 'h1'),
        'H2' => array('tagName' => 'h2'),
        'H3' => array('tagName' => 'h3'),
        'H4' => array('tagName' => 'h4'),
        'H5' => array('tagName' => 'h5'),
        'H6' => array('tagName' => 'h6'),
      ),
    ),
    'panelFooter' => 'panel-footer',
    'panel' => array(
      'attributes' => array(
        'class' => 'panel'
      ),
      'options'  => array(
        'Default' => 'panel-default',
        'Primary' => 'panel-primary',
        'Success' => 'panel-success',
        'Info'    => 'panel-info',
        'Warning' => 'panel-warning',
        'Danger'  => 'panel-danger',
      ),
      'callback' => array(
        __CLASS__,
        'panelCallback',
      )
    )
  );

  public static function panelCallback(Tag $tag)
  {
    if (!isset(static::$configurations['panel']) && !isset(static::$configurations['panel']['options']))
      return;


    foreach (static::$configurations['panel']['options'] as $key => $class)
    {
      if ($key == 'Default')
        continue;

      if ($tag->hasClass($class))
        return;
    }

    $tag->addClass('panel-default');
  }
}