<?php
include_once 'dbconfig.php';
class db_class
{	
 
		 
				// function for create
				public function create($fname,$lname,$city){
					
					global $conn;
					
					$sql = "INSERT INTO users(first_name,last_name,user_city)VALUES ('$fname','$lname','$city')";
							if (mysqli_query($conn, $sql)) {
							echo "New record created successfully";
							} else {
							echo "Error: " . $sql . "" . mysqli_error($conn);
							}
					$conn->close();
				}
		
				// function for read
				public function read(){
							
					global $conn;
					
					$sql="SELECT * FROM users ORDER BY user_id ASC";
					$result=mysqli_query($conn,$sql);
					return $result;
				}

				// function for delete
				public function delete($id)
				{
					
					global $conn;
					
					$sql="DELETE FROM users WHERE user_id=$id";
					$result=mysqli_query($conn,$sql);
					return $result;
					
				}
				// function for delete
				
				// function for update
				public function update($fname,$lname,$city,$id)
				{
					
					global $conn;
					
					$sql = "UPDATE users SET first_name='$fname', last_name='$lname', user_city='$city' WHERE user_id=$id";
							if (mysqli_query($conn, $sql)) {
							echo "New record UPDATED  successfully";
							} else {
							echo "Error: " . $sql . "" . mysqli_error($conn);
							}
					$conn->close();
				}
				// function for update

				//show edit form data
				public function editform(){
					
					if(isset($_GET['edt_id']))
					{
						$id = $_GET['edt_id'];
						
						global $conn;
										
										$sql = "SELECT * FROM users WHERE user_id=$id";
										$result=mysqli_query($conn,$sql);
										return $result;		
										
					}
					
					
				}
				
				
				


}	
?>