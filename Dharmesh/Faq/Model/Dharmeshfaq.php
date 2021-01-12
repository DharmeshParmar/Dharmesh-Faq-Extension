<?php
namespace Dharmesh\Faq\Model;

class Dharmeshfaq extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Dharmesh\Faq\Model\ResourceModel\Dharmeshfaq');
    }
}
?>