<?php
namespace Issadia\Contacts\Controller\Test;
class View extends \Magento\Framework\App\Action\Action
{
    public function __construct(
        \Magento\Framework\App\Action\Context $context)
    {
        return parent::__construct($context);
    }
    public function execute()
    { 
        $this->_view->loadLayout();
       $this->_view->renderLayout();
      }
}

