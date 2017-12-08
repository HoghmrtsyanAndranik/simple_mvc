<?php

class User extends Controller {

	function index(){
      $this->loadview('default',['title'=>'MYMVC Default page']);
    }
	
}
