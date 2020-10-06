<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;

class SmsController extends Controller
{
   public function sms(){
    $username = 'sandbox'; 
    $apiKey   = 'ac500b79c6e0328bb8745f7e0ec7deec92e9b86954aea981e9ce5092725e06ca';
    $AT       = new AfricasTalking($username, $apiKey);

    // Get one of the services
    $sms      = $AT->sms();

    // Use the service
    $result   = $sms->send([
        'to'      => '+254717353774',
        'message' => 'Hello World!'
    ]);

    print_r($result);
   }
}
