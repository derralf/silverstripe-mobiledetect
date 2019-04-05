<?php

namespace Derralf\MobileDetect;

use Mobile_Detect;
use SilverStripe\ORM\DataExtension;
use SilverStripe\ORM\DataObject;

class MobileDetectExtension extends DataExtension
{

    public function isMobile()
    {
        $detect = new Mobile_Detect;
        if ($detect->isMobile()) {
            return true;
        }
        return false;
    }


    public function isTablet()
    {
        $detect = new Mobile_Detect;
        if ($detect->isTablet()) {
            return true;
        }
        return false;
    }


    public function isPhone()
    {
        $detect = new Mobile_Detect;
        if ($detect->isMobile() && !$detect->isTablet()) {
            return true;
        }
        return false;
    }

}