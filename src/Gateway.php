<?php
/**
 * Bank Gateway
 */

namespace Omnipay\Bank;

use Omnipay\Common\AbstractGateway;

/**
 * Bank Gateway
 *
 * In reality, Bank Gateway authorize() requests will always be successful and
 * will never throw an exception, but the above example shows that you can treat
 * manual payments just like any other payment type for any other gateway.
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'Bank';
    }

    public function getDefaultParameters()
    {
        return array(
			'recipient' => '',
            'bankname' => '',
            'iban' => '',
			'bic' => '',
			'information' => '',
        );
    }

    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Bank\Message\Request', $parameters);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Bank\Message\Request', $parameters);
    }

    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Bank\Message\Request', $parameters);
    }

    public function completeAuthorise(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Bank\Message\Request', $parameters);
    }

    public function capture(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Bank\Message\Request', $parameters);
    }

    public function void(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Bank\Message\Request', $parameters);
    }

    public function refund(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Bank\Message\Request', $parameters);
    }
}
