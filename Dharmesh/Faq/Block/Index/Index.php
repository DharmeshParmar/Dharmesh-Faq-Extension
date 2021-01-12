<?php

namespace Dharmesh\Faq\Block\Index;


class Index extends \Magento\Framework\View\Element\Template {
	protected $_faqModel;
    public function __construct(\Magento\Catalog\Block\Product\Context $context,
    	\Dharmesh\Faq\Model\Dharmeshfaq $faqModel,
    	array $data = []
    ) {
    	 $this->_faqModel = $faqModel;
        parent::__construct($context, $data);

    }


    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }



	public function getCollection(){
		$faqModel = $this->_faqModel;
		$faqCollection = $faqModel->getCollection()
            ->addFieldToFilter('status', 1)
            ->setOrder('sort_order', 'ASC');
		return $faqCollection;
	}

}