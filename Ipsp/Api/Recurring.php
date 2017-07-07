<?php

namespace Ipsp\Resource;

use Ipsp\Resource;

/**
 * Class Ipsp_Resource_Refund
 */
class Recurring extends Resource{

    protected $path   = '/recurring';
    protected $fields = array(
        'merchant_id'=>array(
            'type'    => 'string',
            'required'=>TRUE
        ),
        'order_id'=>array(
            'type'    => 'string',
            'required'=>TRUE
        ),
        'currency' => array(
            'type' => 'string',
            'required'=>TRUE
        ),
        'amount' => array(
            'type' => 'integer',
            'required'=>TRUE
        ),
        'signature' => array(
            'type' => 'string',
            'required'=>TRUE
        ),
        'rectoken' => array(
            'type' => 'string',
            'required'=>TRUE
        ),
        'version' => array(
            'type' => 'string',
            'required'=>FALSE
        )
    );

}