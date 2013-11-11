<?php
namespace Primalbase\TwitterBootstrap\CSS;

use Primalbase\TwitterBootstrap\TwitterBootstrap as Tag;
use Primalbase\TwitterBootstrap\AbstractTagFactory;

/**
 * Class Typography
 * @package Primalbase\TwitterBootstrap\CSS
 *
 * @method Typography textLeft()
 * @method Typography textCenter()
 * @method Typography textRight()
 * @method Typography textMuted()
 * @method Typography textPrimary()
 * @method Typography textSuccess()
 * @method Typography textInfo()
 * @method Typography textWarning()
 * @method Typography textDanger()
 * @method Typography unstyled() for List
 * @method Typography inline() for List
 *
 */
class Typography extends AbstractTagFactory {

  protected static $configurations = array(
    'lead' => array(
      'tagName' => 'p',
      'attributes' => array(
        'class' => 'lead',
      ),
    ),
  );
}