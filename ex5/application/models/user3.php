<?php
class User extends Model{

	function getUser($uID){

		$sql =  'SELECT uID, email, password, first_name, last_name FROM users WHERE uID = ?';

		// perform query
		$results = $this->db->getrow($sql, array($uID));

		$user = $results;

		return $user;

	}

	public function getAllUser($limit = 0){

		if($limit > 0){

			$numposts = ' LIMIT '.$limit;
		}

		$sql =  'SELECT uID, email, password, first_name, last_name FROM users';

		// perform query
		$results = $this->db->execute($sql);

		while ($row=$results->fetchrow()) {
			$users[] = $row;
		}

		return $users;

	}

	public function addPost($data){

		$sql='INSERT INTO posts (email, password, first_name, last_name) VALUES (?,?)';
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;

	}




}
