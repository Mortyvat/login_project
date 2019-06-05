<?php
class RozvrhModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM rozvrh ORDER BY id DESC');
		$rows = $this->resultSet();
		return $rows;
	}
	
	public function add(){
		
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		
		if($post['submit']){
			$this->query('INSERT INTO rozvrh (name,short,[group]) values (:name, :short, :group)');
			$this->bind(':name', $post['name']);
			$this->bind(':short', $post['short']);
			$this->bind(':group', $post['group']);
			$this->execute();
			
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'rozvrh');
			}
		}
		return;
	}
}