<?php
/**
 * Bank Gateway Response
 */

namespace Omnipay\Bank\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Bank Gateway Response
 */
class Response extends AbstractResponse
{
    public function isSuccessful()
    {
        return true;
    }
}
