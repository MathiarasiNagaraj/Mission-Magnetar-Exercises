<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Learning\PreferenceDemo\Block\Html;


class Footer extends \Magento\Theme\Block\Html\Footer {

    public function getCopyright(){
        $existingCopyright = parent::getCopyright();
        $updatedCopyRight = "$existingCopyright Hello world";
        return $updatedCopyRight;
    }
}