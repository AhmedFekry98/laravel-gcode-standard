<?php

namespace Graphicode\Standard\Facades;

use Graphicode\Standard\TDO\TDO;
use Illuminate\Support\Facades\Facade;

class TDOFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return TDO::class;
    }

}