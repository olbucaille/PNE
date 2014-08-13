<?php

namespace SmartNews\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SmartNewsUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
