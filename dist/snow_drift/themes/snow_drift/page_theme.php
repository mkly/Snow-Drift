<?php
namespace Concrete\Package\SnowDrift\Theme\SnowDrift;
defined('C5_EXECUTE') or die('Access Denied.');

use PageTheme as Theme;
use Concrete\Core\Asset\JavaScriptAsset;

class PageTheme extends Theme
{
  protected $pThemeGridFrameworkHandle = 'bootstrap3';

  public function registerAssets()
  {
    $this->requireAsset('javascript', 'jquery');
    $this->requireAsset('css', 'font-awesome');
    $this->requireAsset('javascript', 'snow_drift/cookie');
    $this->requireAsset('javascript', 'snow_drift/script');
  }
}
