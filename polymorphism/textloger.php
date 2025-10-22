<?php



class textloger implements logerInterface{

	public function log($message){
		echo " new message from textloger".$message;
	}

}