<?php
/**
 * Created by PhpStorm.
 * User: duhui
 * Date: 2018. 9. 12.
 * Time: PM 11:50
 */

namespace AcidF0x\LaraCool;

use Nurigo\Api\GroupMessage;
use Nurigo\Api\Image;
use Nurigo\Api\Message;
use Nurigo\Api\SenderID;

/**
 * CoolSMS SDK Wrapper for Laravel
 * @package AcidF0x\LaraCool
 */
class CoolSMS
{
    /**
     * Cool SMS PHP SDK Arguments
     * @var array
     */
    private $api_key = [];

    public function __construct()
    {
        $this->api_key = [config('coolsms.api.key'), config('coolsms.api.secret')];
    }

    /**
     * @return \Nurigo\Api\Message
     */
    public function message()
    {
        return new Message(...$this->api_key);
    }

    /**
     * @return \Nurigo\Api\GroupMessage
     */
    public function groupMessage()
    {
        return new GroupMessage(...$this->api_key);
    }

    /**
     * @return \Nurigo\Api\Image
     */
    public function image()
    {
        return new Image(...$this->api_key);
    }

    /**
     * @return \Nurigo\Api\SenderID
     */
    public function senderID()
    {
        return new SenderID(...$this->api_key);
    }

}