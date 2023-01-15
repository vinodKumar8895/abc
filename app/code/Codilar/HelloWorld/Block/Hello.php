<?php
/**
 *
 * @package     magento2
 * @author      Jayanka Ghosh
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        http://jayanka.me/
 */

namespace Codilar\HelloWorld\Block;


use Magento\Framework\View\Element\Template;
use Codilar\HelloWorld\Model\ResourceModel\Car\Collection;

class Hello extends Template
{
    /**
     * @var Collection
     */
    private $collection;

    /**
     * Hello constructor.
     * @param Template\Context $context
     * @param Collection $collection
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Collection $collection,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->collection = $collection;
    }

    public function getAllCars() {
        return $this->collection;
    }

    public function getAddCarPostUrl() {
        return $this->getUrl('helloworld/car/add');
    }

}