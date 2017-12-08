<?php

class Admin_model extends Model {
	public function check_admin($log,$pass){
       $stmt = $this->_conn->prepare("select * from admin where login=? and password=? ");
       $stmt->bindParam(1, $log, PDO::PARAM_STR, 12);
       $stmt->bindParam(2, $pass, PDO::PARAM_STR, 12);
       $stmt->execute(); 
       $c=$stmt->rowCount();
       return $c ;
	}

}