<?php

namespace hardai\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package hardphp\captcha\facade
 * @mixin \hardphp\captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \hardai\captcha\Captcha::class;
    }
}
