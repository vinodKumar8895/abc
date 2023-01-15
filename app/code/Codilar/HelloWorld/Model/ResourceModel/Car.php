<?php

namespace Codilar\HelloWorld\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Car extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('vinod_table_grid1', 'id');
    }
}