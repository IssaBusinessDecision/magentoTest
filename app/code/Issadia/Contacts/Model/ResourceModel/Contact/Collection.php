<?php

namespace Issadia\Contacts\Model\ResourceModel\Contact;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Contact Resource Model Collection
 *
 * @author      Issa Dia
 */
class Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Issadia\Contacts\Model\Contact', 'Issadia\Contacts\Model\ResourceModel\Contact');
    }
}