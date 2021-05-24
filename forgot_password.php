<!-- <?php  

   // emart_login_data database
   $conn = mysqli_connect("localhost","root",'',"emart_login_data");

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