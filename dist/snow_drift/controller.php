<?php
namespace Concrete\Package\SnowDrift;
defined('C5_EXECUTE') or die('Access Denied.');

use Package;
use PageTheme;
use AssetList;

class Controller extends Package
{
    protected $pkgHandle = 'snow_drift';
    protected $appVersionRequired = '5.7.1';
    protected $pkgVersion = '0.1.0';

    public function on_start()
    {
        $al = AssetList::getInstance();
        $al->register(
            'javascript',
            'snow_drift/cookie',
            'themes/snow_drift/js/cookie.js',
            array(
                'combine' => 1
            ),
            $this
        );
        $al->register(
            'javascript',
            'snow_drift/script',
            'themes/snow_drift/js/script.js',
            array(
                'combine' => 1
            ),
            $this
        );
    }

    public function getPackageName()
    {
        return t('Snow Drift');
    }

    public function getPackageDescription()
    {
        return t('concrete5 Theme');
    }

    public function install()
    {
        $pkg = parent::install();
        PageTheme::add('snow_drift', $pkg);
    }
}
