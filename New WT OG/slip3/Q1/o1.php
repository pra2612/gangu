            <?php
session_start();

if(!isset($_SESSION['count']))
$_SESSION['count']=0;




$username=$_POST['txt1'];
$password=$_POST['txt2'];

			if($username==""&&$password=="")
			  {
					echo"Enter All Details";
			}

			if($username=="ty"&&$password=="123456")
			{
					echo"login Successfull";
					$_SESSION['count']=0;
			}
                        else 
    		{     
                         $_SESSION['count']=$_SESSION['count']+1;
                      
			if($_SESSION['count']>2)
			{
			echo ("You Exceeded the Limit...ie,3");
			$_SESSION['count']=0;
 			
			}
			else
			{
		echo"Login Failed ... Wrong Details Entered... attempts made:". $_SESSION['count'];
			include('a.html');
			}
		}




?>

