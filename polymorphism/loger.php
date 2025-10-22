<?php



class loger implements logerInterface{

	public function log($message){
		echo " new message from loger".$message;
	}

}