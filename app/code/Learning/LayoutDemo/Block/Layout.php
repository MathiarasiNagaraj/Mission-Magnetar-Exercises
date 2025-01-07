<?php
namespace  Learning\LayoutDemo\Block;

use \Magento\Framework\View\Element\Text;

class Layout extends Text
{
    protected function _construct()
    {
        parent::_construct();
        $this->setText('<div>Hello World</div>');
    }
   public  function getHelloWorldText(){
    return "hello world";
   
   }
}
