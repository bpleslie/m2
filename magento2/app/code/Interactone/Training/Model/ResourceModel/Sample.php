<?php

namespace Interactone\Training\Model\ResourceModel;

use \Magento\Framework\Model\ResourceMOdel\Db\AbstractDb;

class Sample extends AbstractDb {

	protected  function _construct()
	{
		$this->_init('interactone_sample', 'sample_id');
	}

	protected function _beforeSave( \Magento\Framework\Model\AbstractModel $object )
	{
		if ( !object->getCreationDate() ) {
		    $object->setCreationDate(now());
		}

		return parent::_beforeSave( $object );
	}
}