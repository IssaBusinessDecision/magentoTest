<?php

namespace Issadia\Contacts\Controller\Test;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $contact = $this->_objectManager->create('Issadia\Contacts\Model\Contact');

        $contact->setName('Paul Ricard');
        $contact->save();

        $contact = $this->_objectManager->create('Issadia\Contacts\Model\Contact');
        $contact->setName('Jack Daniels');
        $contact->save();
        die('test');
    }
}

