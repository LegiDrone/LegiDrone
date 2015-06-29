<?php

namespace Polytech\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PolytechUserBundle extends Bundle
{
    public function getParent()
      {
        return 'FOSUserBundle';
      }
}
