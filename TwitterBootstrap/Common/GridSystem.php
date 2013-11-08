<?php
namespace Eyewill\Tag\TwitterBootstrap\Common;

use Eyewill\Tag\AbstractConfigLoader;

class GridSystem extends AbstractConfigLoader {

  // 'aaa'    => 'aaa'     -> Tag::aaa()    -> <div class="aaa"></div>
  // 'aaaBbb' => 'aaa-bbb' -> Tag::aaaBbb() -> <div class="aaa-bbb"></div>
  // 優先順位降順、前方マッチで検索する(重複してマッチするタグは後回しにする)
  protected static $configurations = array(
    'row' => 'row',
    'col' => array(
      'options' => array(
        'XsOffset(\d+)' => 'col-xs-offset-$1',
        'SmOffset(\d+)' => 'col-sm-offset-$1',
        'MdOffset(\d+)' => 'col-md-offset-$1',
        'LgOffset(\d+)' => 'col-lg-offset-$1',
        'Xs(\d+)' => 'col-xs-$1',
        'Sm(\d+)' => 'col-sm-$1',
        'Md(\d+)' => 'col-md-$1',
        'Lg(\d+)' => 'col-lg-$1',
      )
    )
  );

}