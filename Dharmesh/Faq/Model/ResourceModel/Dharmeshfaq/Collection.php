<?php

namespace Dharmesh\Faq\Model\ResourceModel\Dharmeshfaq;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Dharmesh\Faq\Model\Dharmeshfaq', 'Dharmesh\Faq\Model\ResourceModel\Dharmeshfaq');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }

}
?>