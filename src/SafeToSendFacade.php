<?php

namespace Frc\SafeToSend;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Frc\SafeToSend\SafeToSend
 */
class SafeToSendFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'safe-to-send';
    }
}
