<?php
namespace Dharmesh\Faq\Block\Adminhtml\Dharmeshfaq\Edit;

/**
 * Admin page left menu
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('dharmeshfaq_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Item Management'));
    }
}