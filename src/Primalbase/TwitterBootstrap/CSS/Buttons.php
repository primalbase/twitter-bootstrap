<?php
namespace Primalbase\TwitterBootstrap\CSS;

use Primalbase\TwitterBootstrap\AbstractTagFactory;

class Buttons extends AbstractTagFactory {

  protected static function configurations()
  {
    $button_option = array(
      'Default' => array('addClass' => 'btn-default'),
      'Primary' => array('addClass' => 'btn-primary'),
      'Success' => array('addClass' => 'btn-success'),
      'Info'    => array('addClass' => 'btn-info'),
      'Warning' => array('addClass' => 'btn-warning'),
      'Danger'  => array('addClass' => 'btn-danger'),
      'Link'    => array('addClass' => 'btn-link'),
      'Lg'      => array('addClass' => 'btn-lg'),
      'Sm'      => array('addClass' => 'btn-sm'),
      'Block'   => array('addClass' => 'btn-block'),
      'Active'  => array('addClass' => 'active'),
    );

    return array(
      'btnImage' => array(
        'tagName' => 'input',
        'attributes' => array(
          'type' => 'image',
          'src'  => '@1',
          'alt'  => '@2',
        ),
      ),
      'formButtons' => array(
        'regexp' => '(Submit|Reset).+',
        'prefix' => 'btn',
        'tagName' => 'input',
        'attributes' => array(
          'type'  => 'submit',
          'class' => 'btn',
          'value' => '@1',
        ),
        'options' => array_merge(array(
          'Reset' => array('type' => 'reset'),
         ), $button_option),
      ),
      'btnSubmit' => array(
        'tagName' => 'input',
        'attributes' => array(
          'type'  => 'submit',
          'class' => 'btn btn-default',
          'value' => '@1',
        ),
      ),
      'btnReset' => array(
        'tagName' => 'input',
        'attributes' => array(
          'type'  => 'reset',
          'class' => 'btn btn-default',
          'value' => '@1',
        ),
      ),
      'btnOptions' => array(
        'regexp' => '.+',
        'prefix' => 'btn',
        'tagName' => 'button',
        'attributes' => array(
          'type'  => 'button',
          'class' => 'btn',
          'value' => false,
        ),
        'options' => $button_option,
      ),
      'btn' => array(
        'prefix' => 'btn',
        'tagName' => 'button',
        'attributes' => array(
          'type'  => 'button',
          'class' => 'btn btn-default',
          'value' => false,
        ),
      )
    );
  }


} 