<?php
// file: model/User.php

require_once(__DIR__."/../core/ValidationException.php");


class User {


	private $username;
	private $passwd;
	private $name
	private $email
	private $phone


	public function __construct($username=NULL, $passwd=NULL ,$name=NULL ,$email=NULL ,$phone=NULL) {
		$this->username = $username;
		$this->passwd = $passwd;
		$this->name = $name;
		$this->email = $email;
		$this->phone = $phone;
	}


	public function getUsername() {
		return $this->username;
	}

	public function getPasswd() {
		return $this->passwd;
	}

	public function getName() {
		return $this->name;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getPhone() {
		return $this->phone;
	}



	public function setUsername($username) {
		$this->username = $username;
	}

	public function setPassword($passwd) {
		$this->passwd = $passwd;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function setPhone($phone) {
		$this->phone = $phone;
	}



	public function checkIsValidForRegister() {
		$errors = array();
		if (strlen($this->username) < 5) {
			$errors["username"] = "Username must be at least 5 characters length";

		}
		if (strlen($this->passwd) < 5) {
			$errors["passwd"] = "Password must be at least 5 characters length";
		}
		if (strlen($this->name) < 5) {
			$errors["name"] = "Name must be at least 5 characters length";
		}
		if (strlen($this->email) < 5) {
			$errors["email"] = "Email must be at least 5 characters length";
		}
		if (strlen($this->phone) < 5) {
			$errors["phone"] = "Phone must be at least 5 characters length";
		}
		if (sizeof($errors)>0){
			throw new ValidationException($errors, "user is not valid");
		}
	}
}
