<?php

namespace Exercises\PreferenceDemo\Block\Html;

class Footer extends \Magento\Theme\Block\Html\Footer{
    PUBLIC function getCopyright(){
        $existingCopyRightContent = parent::getCopyright();
        return "$existingCopyRightContent Hello world ! ! !";
    }
}