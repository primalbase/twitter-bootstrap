<?php

namespace Primalbase\TwitterBootstrap\CSS;

use Primalbase\TwitterBootstrap\TwitterBootstrap as Tag;
use Primalbase\TwitterBootstrap\AbstractTagFactory;

class Code extends AbstractTagFactory {

  protected static function configurations()
  {
    return array(
      'preScrollable' => array(
        'tagName' => 'pre',
        'attributes' => array(
          'class' => 'pre-scrollable',
        ),
      ),
    );
  }
} 