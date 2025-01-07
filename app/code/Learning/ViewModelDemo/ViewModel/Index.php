<?php
namespace Learning\ViewModelDemo\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class Index implements ArgumentInterface
{
    /**
     * Get the hard-coded string array
     *
     * @return array
     */
    public function getStringArray()
    {
        return ['golf', 'teetime', 'spa'];
    }
}
