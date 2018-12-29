<?php

namespace Obacm\JPush\Exceptions;

class APIConnectionException extends JPushException
{

    function __toString()
    {
        return "\n" . __CLASS__ . " -- {$this->message} \n";
    }
}
