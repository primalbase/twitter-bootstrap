<?php
namespace Primalbase\TwitterBootstrap\Components;

use Primalbase\TwitterBootstrap\TwitterBootstrap as Tag;
use Primalbase\TwitterBootstrap\AbstractTagFactory;

class Navbar extends AbstractTagFactory {

  protected static function configurations()
  {
    return array(
      'navbarHeader' => 'navbar-header',
      'navbarToggle' => array(
        'tagName'    => 'button',
        'callback'   => 'navbarToggleCallback',
        'attributes' => array(
          'class'       => 'navbar-toggle',
          'data-toggle' => 'collapse',
          'data-target' => '.navbar-ex1-collapse',
        )
      ),
      'navbarNav' => array(
        'tagName' => 'ul',
        'attributes' => array(
          'class' => 'nav navbar-nav'
        ),
        'options' => array(
          'Left'  => 'navbar-left',
          'Right' => 'navbar-right',
        )
      ),
      'navbarBrand' => array(
        'tagName' => 'a',
        'attributes' => array(
          'class' => 'navbar-brand',
          'href'  => '#',
        )
      ),
      'navbarCollapse' => 'collapse navbar-collapse navbar-ex1-collapse',
      'navbarForm' => array(
        'tagName' => 'form',
        'attributes' => array(
          'class' => 'navbar-form',
          'role'  => 'search',
        ),
        'options' => array(
          'Left'  => 'navbar-left',
          'Right' => 'navbar-right'
        )
      ),
      'navbar' => array(
        'attributes' => array(
          'class' => 'navbar'
        ),
        'options' => array(
          'Inverse'     => 'navbar-inverse',
          'FixedTop'    => 'navbar-fixed-top',
          'FixedBottom' => 'navbar-fixed-bottom',
        )
      )
    );
  }

  public function navbarToggleCallback()
  {
    $this->append(Tag::span('Toggle navigation')->class('sr-only'))
      ->append(Tag::span()->class('icon-bar'))
      ->append(Tag::span()->class('icon-bar'))
      ->append(Tag::span()->class('icon-bar'));
  }
}