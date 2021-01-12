<?php
namespace Dharmesh\Faq\Model\ResourceModel;

class Dharmeshfaq extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('dharmeshfaq', 'id');
    }
}
?>