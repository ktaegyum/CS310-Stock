<?php
class User{

	// property declaration
	private $username;
	private $password;
	private $portfolio;

	// method declaration
	public function __construct($userName, $passWord){
		$this->username = $userName;
		$this->password = $passWord;
	}
	public function setPassword($passWord){
		$this->password = $passWord;
	}

	public function getPortfolio(){
		return $this->portfolio;
	}
	public function setPortfolio($Portfolio){
		$this->portfolio = $Portfolio;
	}

}
?>