<?php

namespace Codilar\HelloWorld\Model;

use Magento\Framework\Model\AbstractModel;
use Codilar\HelloWorld\Model\ResourceModel\Car as ResourceModel;

class Car extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}