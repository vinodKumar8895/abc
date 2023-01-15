<?php
namespace Codilar\Grid\Controller\Adminhtml\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Codilar_Grid::employee';
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;
    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
/**
 * Default customer account page
 *
 * @return void
 */
public function execute()
{
    $resultPage = $this->resultPageFactory->create();
    $resultPage->setActiveMenu('Codilar_Grid::employee');
    $resultPage->addBreadcrumb(__('Employee Data'), __('Employee Data'));
    $resultPage->addBreadcrumb(__('Employee Data'), __('Employee Data'));
    $resultPage->getConfig()->getTitle()->prepend(__('Codilar Data'));
    return $resultPage;
}
}