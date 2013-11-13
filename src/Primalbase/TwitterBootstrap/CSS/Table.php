<?php
namespace Primalbase\TwitterBootstrap\CSS;

use Primalbase\TwitterBootstrap\AbstractTagFactory;
use Primalbase\TwitterBootstrap\CSS\Table\Row;

class Table extends AbstractTagFactory {

  protected $activeElement = null;

  protected static $configurations = array(
    'tableResponsive' => array(
      'tagName' => 'div',
      'attributes' => array(
        'class' => 'table-responsive',
      ),
      'factory' => array(
        __CLASS__,
        'tableResponsiveFactory',
      )
    ),
    'table' => array(
      'tagName' => 'table',
      'attributes' => array(
        'class' => 'table',
      ),
      'options' => array(
        'Striped'   => 'table-striped',
        'Bordered'  => 'table-bordered',
        'Hover'     => 'table-hover',
        'Condensed' => 'table-condensed',
      )
    ),
  );

  public static function tableResponsiveFactory(array $config, array $args)
  {
    $tagName    = $config['tagName'];
    $attributes = $config['attributes'];

    if (isset($args[0]))
      $attributes['src'] = $args[0];

    if (isset($args[1]))
      $attributes['alt'] = $args[1];

    $tag = static::create($tagName, $attributes);
    foreach (array_slice($args, 2) as $arg)
      $tag->append($arg);

    $tag->activeElement = static::table();
    $tag->append($tag->activeElement);

    return $tag;
  }

  public function getActiveElement()
  {
    if ($this->activeElement)
      return $this->activeElement;
    else
      return $this;
  }

  public function appendRow($options = null)
  {
    $row = Row::createInstanceArray('tr', func_get_args());

    $this->getActiveElement()->append($row);

    return $row;
  }

  public function appendRowActive($options = null)
  {
    return call_user_func_array(array($this, 'appendRow'), func_get_args())->active();
  }

  public function appendRowSuccess($options = null)
  {
    return call_user_func_array(array($this, 'appendRow'), func_get_args())->success();
  }

  public function appendRowWarning($options = null)
  {
    return call_user_func_array(array($this, 'appendRow'), func_get_args())->warning();
  }

  public function appendRowDanger($options = null)
  {
    return call_user_func_array(array($this, 'appendRow'), func_get_args())->danger();
  }

  public function getRow()
  {
    return $this->getActiveElement()->nodes->last();
  }

}