<?php
namespace Primalbase\TwitterBootstrap\CSS\Table;

use Primalbase\TwitterBootstrap\AbstractTagFactory;

class Row extends AbstractTagFactory {

  public static function configurations()
  {
    return array(
      'tableRow' => array(
        'tagName' => 'tr',
      )
    );
  }

  public function active()
  {
    return $this->addClass('active');
  }

  public function success()
  {
    return $this->addClass('success');
  }

  public function warning()
  {
    return $this->addClass('warning');
  }

  public function danger()
  {
    return $this->addClass('danger');
  }

  public function appendTh()
  {
    $row = static::createInstanceArray('th', func_get_args());

    $this->getActiveElement()->append($row);

    return $row;
  }

  public function appendThActive($options = null)
  {
    return call_user_func_array(array($this, 'appendTh'), func_get_args())->addClass('active');
  }

  public function appendThSuccess($options = null)
  {
    return call_user_func_array(array($this, 'appendTh'), func_get_args())->addClass('success');
  }

  public function appendThWarning($options = null)
  {
    return call_user_func_array(array($this, 'appendTh'), func_get_args())->addClass('warning');
  }

  public function appendThDanger($options = null)
  {
    return call_user_func_array(array($this, 'appendTh'), func_get_args())->addClass('danger');
  }

  public function appendTd()
  {
    $row = static::createInstanceArray('td', func_get_args());

    $this->getActiveElement()->append($row);

    return $row;
  }

  public function appendTdActive($options = null)
  {
    return call_user_func_array(array($this, 'appendTd'), func_get_args())->addClass('active');
  }

  public function appendTdSuccess($options = null)
  {
    return call_user_func_array(array($this, 'appendTd'), func_get_args())->addClass('success');
  }

  public function appendTdWarning($options = null)
  {
    return call_user_func_array(array($this, 'appendTd'), func_get_args())->addClass('warning');
  }

  public function appendTdDanger($options = null)
  {
    return call_user_func_array(array($this, 'appendTd'), func_get_args())->addClass('danger');
  }
}