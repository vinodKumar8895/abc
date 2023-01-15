<?php

namespace Codilar\Grid\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Grid extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('vinod_table_grid', 'id');
    }
}