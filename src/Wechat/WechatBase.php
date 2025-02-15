<?php
/**
 * @copyright ©2018 Lu Wei
 * @author Lu Wei
 * @link http://www.luweiss.com/
 * Created by IntelliJ IDEA
 * Date Time: 2018/11/5 13:49
 */


namespace gedong009\Wechat;


abstract class  WechatBase
{
    /**
     * @return WechatHttpClient
     */
    public function getClient()
    {
        return new WechatHttpClient();
    }

    /**
     * @param array $result
     * @return array
     */
    abstract protected function getClientResult($result);
}
