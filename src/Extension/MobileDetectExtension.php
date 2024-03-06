<?php

namespace Derralf\MobileDetect;

use Detection\MobileDetect;
use SilverStripe\ORM\DataExtension;
use SilverStripe\ORM\DataObject;

class MobileDetectExtension extends DataExtension
{
    public function isMobile()
    {
        $detect = new MobileDetect();
        return $detect->isMobile();
    }


    public function isTablet()
    {
        $detect = new MobileDetect();
        return $detect->isTablet();
    }


    public function isPhone()
    {
        $detect = new MobileDetect();
        return ($detect->isMobile() && !$detect->isTablet());
    }
}
