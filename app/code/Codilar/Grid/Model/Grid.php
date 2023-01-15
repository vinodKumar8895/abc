<?php

namespace Codilar\Grid\Model;

use Magento\Framework\Model\AbstractModel;
use Codilar\Grid\Model\ResourceModel\Grid as ResourceModel;

class Grid extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}