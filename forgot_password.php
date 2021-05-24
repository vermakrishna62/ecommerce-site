<!-- <?php  

   // emart_login_data database
   $conn = mysqli_connect("remotemysql.com","0mR1uZnpZd","QgKv6zXjnJ","0mR1uZnpZd");

   $email = trim($_POST['mail']);

   $sql = "SELECT * FROM login_credentials";
   $res = mysqli_query($conn,$sql);

   while($row = mysqli_fetch_assoc($res))
   {
      if($email == $row['email'])
      {
         echo "Password : ".$row['password'];
         break;
      }

      else
      {
         echo "";
      }
   }
?>

 -->
