<?php

namespace Doctrine\Tests\Models\CMS;

class CmsUserEntityAwareDTO
{
    public $user;

    public function __construct()
    {
        var_dump([
                __METHOD__,
                func_get_args(),
        ]);
//         $this->user = $user;
    }
}