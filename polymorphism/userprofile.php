<?php


class userprofile{

	private $loger;

	public function create(){
		
		  $this->loger->log("user created");

	}

	public function delete(){
		 $this->loger->log('user deleted');
	}

	public function update(){
		 $this->loger->log('user update');
	}

	
	public function __construct(logerInterface $request){
		$this->loger = $request;
	}

}

