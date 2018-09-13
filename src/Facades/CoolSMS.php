<?php
/**
 * Created by PhpStorm.
 * User: duhui
 * Date: 2018. 9. 12.
 * Time: PM 11:59
 */

namespace AcidF0x\LaraCool\Facades;

use Illuminate\Support\Facades\Facade;

class CoolSMS extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @method \Nurigo\Api\Message message()
     * @method \Nurigo\Api\GroupMessage groupMessage()
     * @method \Nurigo\Api\Image image()
     * @method \Nurigo\Api\SenderID senderID()
     * @see \AcidF0x\LaraCool\CoolSMS
     */
    protected static function getFacadeAccessor()
    {
        return 'CoolSMS';
    }
}