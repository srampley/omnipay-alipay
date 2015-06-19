<?php

namespace Omnipay\Alipay;

/**
 * Class ForExGateway
 *
 * @package Omnipay\Alipay
 */
class ForExGateway extends BaseAbstractGateway
{

    protected $service_name = 'create_forex_trade';

    /**
     * Get gateway display name
     *
     * This can be used by carts to get the display name for each gateway.
     */
    public function getName()
    {
        return 'Alipay ForEx';
    }

    public function purchase(array $parameters = array())
    {
        $this->setService($this->service_name);
        //the Express Purchase Request message object currently dose all the required work, so not duplicating more code let
        return $this->createRequest('\Omnipay\Alipay\Message\ExpressPurchaseRequest', $parameters);
    }
}
