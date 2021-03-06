<?php

namespace LeadThread\Sms\Tests\Responses;

class TwilioTest extends TestCase
{
    protected $class = \LeadThread\Sms\Responses\Twilio::class;
    protected $driver = 'twilio';

    protected function getFakeResponse()
    {
        $x = new \stdClass();
        $y = new \stdClass();

        $y->phone_number = "+18887776666";
        $x->available_phone_numbers = [$y];

        return $x;
    }
}
