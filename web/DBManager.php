<?php

/**
* 
*/
class Employee
{
	
	var  $id;
	var  $name;
	var  $gender;
	var  $dob;
	var  $address;
	var  $city;
	var  $province;
	var  $zipcode;
	var  $email;
	var  $url;
	var  $joinDate;
	var  $basicPay;

	var $servername = "localhost";
	var $username = "root";
	var	$password = "";
	var $dbname = "myDB";
	var $conn = "";


	function setId($id)
	{
		$this->id = $id;
	}
	function setName($name)
	{
		$this->name = $name;
	}
	function setGender($gender)
	{
		$this->gender = $gender;
	}
	function setDob($dob)
	{
		$this->dob = $dob;
	}
	function setAddress($address)
	{
		$this->address = $address;
	}
		function setCity($city)
	{
		$this->city = $city;
	}
	function setProvince($province)
	{
		$this->province = $province;
	}
	function setZipcode($zipcode)
	{
		$this->zipcode = $zipcode;
	}
	function setEmail($email)
	{
		$this->email = $email;
	}
	function setUrl($url)
	{
		$this->url = $url;
	}
	function setJoiningDate($joinDate)
	{
		$this->joinDate = $joinDate;
	}
	function setBasicpay($basicPay)
	{
		$this->basicPay = $basicPay;
	}







	function getId()
	{
		echo $this->id ."<br/>";
	}
		function getName()
	{
		echo $this->name ."<br/>";
	}
		function getGender()
	{
		echo $this->gender ."<br/>";
	}
		function getDob()
	{
		echo $this->dob ."<br/>";
	}
		function getAddress()
	{
		echo $this->address ."<br/>";
	}
		function getCity()
	{
		echo $this->city ."<br/>";
	}
		function getProvince()
	{
		echo $this->province ."<br/>";
	}
		function getZipcode()
	{
		echo $this->zipcode ."<br/>";
	}
		function getEmail()
	{
		echo $this->email ."<br/>";
	}
		function getUrl()
	{
		echo $this->url ."<br/>";
	}
		function getJoinDate()
	{
		echo $this->joinDate ."<br/>";
	}
		function getBasicPay()
	{
		echo $this->basicPay ."<br/>";
	}




		function createConnection()
		{
			
				// Create connection
				$this->conn = mysqli_connect($this->servername, $this->username, $this->password);
				// Check connection
				if (!$this->conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}
		mysqli_close($this->conn);

		}




		function createDataBase()
		{

			// Create database
			$this->conn = mysqli_connect($this->servername, $this->username, $this->password);

				$sql = "CREATE DATABASE myDB";
				if ($this->conn->query($sql) === TRUE) {
				    echo "Database created successfully";
				} else {
				    echo "Error creating database: " . $this->conn->error;
				}

		mysqli_close($conn);
}

function createTable(){


// sql to create table
			   $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

			    mysql_select_db($dbname);

				$sql = "CREATE TABLE Employee (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
				name VARCHAR(30) NOT NULL,
				gender VARCHAR(30) NOT NULL,
				email VARCHAR(50),
				url VARCHAR(200),
				dob TIMESTAMP,
				address VARCHAR(50),
				city VARCHAR(50),
				province VARCHAR(30),
				zipcode VARCHAR(30),
				joinDate TIMESTAMP,
				basicPay INT(10)

				)";

				if (mysqli_query($this->conn, $sql)) {
				    echo "Table Employee created successfully";
				} else {
				    echo "Error creating table: " . mysqli_error($this->conn);
				}



		mysqli_close($this->conn);


}

function insertEmployee()
{
	$this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

			    mysql_select_db($this->dbname);

				$sql = "INSERT INTO Employee (name, gender, email, url, dob, address, city, province, zipcode, joinDate, basicPay)
			VALUES ('$this->name','$this->gender','$this->email','$this->url','$this->dob','$this->address','$this->city','$this->province','$this->zipcode','$this->joinDate','$this->basicPay')";

			if ($this->conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $this->conn->error;
			}

$this->conn->close();
}




function deleteRecords($id)
{

		$conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
		mysql_select_db($this->dbname);
	// sql to delete a record
		$sql = "DELETE FROM Employee WHERE id='$id'";

		if ($conn->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}

$conn->close();
}




function tempConnection(){
	
		
		$this->conn1 = mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
	}






function updateEmployee($id){
		echo "reached update Employee";
		$conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
		mysql_select_db($this->dbname);
		
		$sql = "UPDATE Employee SET name = '".$_POST['name']."', gender = '".$_POST['gender']."', email = '".$_POST['email']."', url = '".$_POST['url']."', dob = '".$_POST['dob']."', address = '".$_POST['dob']."', city ='".$_POST['city']."', province = '".$_POST['province']."', zipcode ='".$_POST['zipcode']."', joinDate = '".$_POST['joinDate']."', basicPay ='".$_POST['basicPay']."' WHERE id = '$id'";

		if ($conn->query($sql) === TRUE) {
			echo "Record Updated successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}



}





?>