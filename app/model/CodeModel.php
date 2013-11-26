<?php

// Code Module Model File

namespace SimpleFw\App\Model;

use SimpleFw\Core\Mvc\Model as Model;

class CodeModel extends Model
{
	public function findAll($search)
	{
        $query = 'select c.*, l.language_name, ct.code_type_name from code c inner join programming_language l on c.language_id = l.id inner join code_type ct on c.code_type_id = ct.id ';
        if(is_array($search) && sizeof($search) > 0)
        {
            $query .= ' WHERE 1 ';
            foreach($search as $field => $value)
            {
                $query .= "AND ". $field." = '".$value."'";
            }
        }
		$result = $this->db->getQuery()->query($query)->execute();
		return $result->fetchAll();
	}
	
	public function findRow($id)
	{
		$result = $this->db->getQuery()->query('select * from code where id =  '.$id)->execute();
		return $result->fetchRow();
	}
	
	public function insert($data)
	{
		$this->db->getQuery()->insert('code', $data)->execute();
		return $this->db->getQuery()->lastInsertId();
	}	
	
	public function update($data, $filters)
	{
		$this->db->getQuery()->update('code', $data, $filters)->execute();
		return true;
	}

	public function delete($filters)
	{
		$this->db->getQuery()->delete('code', $filters)->execute();
		return true;
	}

}	

?>
