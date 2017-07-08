<?php

namespace Ipsp\API;

use Ipsp\Resource;

/**
 * Class Ipsp_Resource_Refund
 */
class P2pcredit extends Resource {
    protected $path   = '/p2pcredit';
    protected $fields = array(
        'merchant_id'=>array(
            'type'    => 'string',
            'required'=>TRUE
        ),
        'order_id'=>array(
            'type'    => 'string',
            'required'=>TRUE
        ),
        'order_desc'=>array(
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
        'receiver_card_number'=>array(
            'type' => 'string',
            'required'=>FALSE
        ),
        'receiver_rectoken'=>array(
            'type' => 'string',
            'required'=>FALSE
        ),
        'signature' => array(
            'type' => 'string',
            'required'=>TRUE
        ),
        'version' => array(
            'type' => 'string',
            'required'=>FALSE
        )
    );
}