<?php

namespace Graphicode\Standard\Traits;

use Graphicode\Standard\TDO\TDO;

trait AsTDO
{

    public function asTDO()
    {
        return new TDO($this->validated());
    }

}