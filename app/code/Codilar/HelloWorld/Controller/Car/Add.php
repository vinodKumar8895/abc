<?php
/**
 *
 * @package     magento2
 * @author      Codilar Technologies
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        https://www.codilar.com/
 */

namespace Codilar\HelloWorld\Controller\Car;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Codilar\HelloWorld\Model\Car;
use Codilar\HelloWorld\Model\ResourceModel\Car as CarResource;

class Add extends Action
{
    /**
     * @var Car
     */
    private $car;
    /**
     * @var CarResource
     */
    private $carResource;

    /**
     * Add constructor.
     * @param Context $context
     * @param Car $car
     * @param CarResource $carResource
     */
    public function __construct(
        Context $context,
        Car $car,
        CarResource $carResource
    )
    {
        parent::__construct($context);
        $this->car = $car;
        $this->carResource = $carResource;
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        /* Get the post data */
        $data = $this->getRequest()->getParams();

        /* Set the data in the model */
        $carModel = $this->car;
        $carModel->setData($data);

        try {
            /* Use the resource model to save the model in the DB */
            $this->carResource->save($carModel);
            $this->messageManager->addSuccessMessage("Car saved successfully!");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error saving car"));
        }

        /* Redirect back to cars page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('helloworld');
        return $redirect;
    }
}