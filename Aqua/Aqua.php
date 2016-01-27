<?php
namespace Aqua;

use Aqua\Base\Request;

class Aqua
{
    /** @var  \Aqua\Aqua $app */
    static $app = null;

    public static function getRootPath()
    {
        return Request::getDocumentRoot();
    }

    public static function getView()
    {
        return new \Aqua\Base\View();
    }

    public static function getRoute()
    {
        return new \Aqua\Base\Route();
    }

    public static function init()
    {
        self::$app = new self;
    }

}