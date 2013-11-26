<?php

// Language Module Model File

namespace SimpleFw\App\Model;

use SimpleFw\Core\Mvc\Model as Model;

class LanguageModel extends Model
{
	public function getLatestLanguages()
	{
		$result = $this->db->getQuery()->query('select * from programming_language order by date_added LIMIT 0,5 ')->execute();
		return $result->fetchAll();
	}

	public function getLanguage($id)
	{
		$result = $this->db->getQuery()->query('select * from programming_language where id = "'.(int)$id.'" ')->execute();
		return $result->fetchRow();
	}
	
}	

?>
