<?php
/**
 * Author: Karagodin E.S. (ekaragodin@gmail.com)
 * Date: 05.01.12
 * Time: 0:28
 */

class Yii extends YiiBase
{
    /**
     * @static
     * @return WebApplication
     */
    public static function app()
    {
        return parent::app();
    }
}

class WebApplication extends CWebApplication
{}
