<?php

namespace Wikimap\MainBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WikimapMainBundle extends Bundle
{
    public function getParent() 
    {
        return 'FOSUserBundle';
    }
}
