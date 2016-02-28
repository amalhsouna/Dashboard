<?php

namespace Your\OwnCalendarBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class YourOwnCalendarBundle extends Bundle
{
    public function getParent()
    {
        return 'BladeTesterCalendarBundle';
    }
}
