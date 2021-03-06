<?php
class BlogModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM blog ORDER BY id DESC');
		$rows = $this->resultSet();
		return $rows;
	}

	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			// Insert into MySQL
			$this->query('INSERT INTO blog (title, body, link, date) VALUES(:title, :body, :link, :datetime)');
			$this->bind(':title', $post['title']);
			$this->bind(':body', $post['body']);
			$this->bind(':link', $post['link']);
			$datetime = date('Y-m-d H:i:s');
			echo $datetime;
			$this->bind(':datetime', $datetime);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'blog');
			}
		}
		return;
	}
}