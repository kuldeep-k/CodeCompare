<?php

// CodeType Module Model File

namespace SimpleFw\App\Model;

use SimpleFw\Core\Mvc\Model as Model;

class CodeTypeModel extends Model
{
	public function getLatestTypes()
	{
		$result = $this->db->getQuery()->query('select * from code_type  order by date_added LIMIT 0,5 ')->execute();
		return $result->fetchAll();
	}
	
    public function getCodeType($id)
	{
		$result = $this->db->getQuery()->query('select * from code_type where id = "'.(int)$id.'" ')->execute();
		return $result->fetchRow();
	}
}	

?>
