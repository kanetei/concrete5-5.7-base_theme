<?php

namespace Application\Theme\BaseEmpty;

class PageTheme extends \Concrete\Core\Page\Theme\Theme
{
  public function registerAssets()
  {
    $this->requireAsset('javascript', 'jquery');
  }

  public function getThemeName()
  {
    return 'Base Empty';
  }

  public function getThemeDescription()
  {
    return '空テーマ';
  }

}
