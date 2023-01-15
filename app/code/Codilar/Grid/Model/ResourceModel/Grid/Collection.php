<?php
namespace Codilar\Grid\Model\ResourceModel\Grid;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Codilar\Grid\Model\Grid as Model;
use Codilar\Grid\Model\ResourceModel\Grid as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}