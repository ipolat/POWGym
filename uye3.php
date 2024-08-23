<?php

 include 'partials/_header.php';
 include "connection.php";




 $username = $_POST['username'];
 $passwordd = $_POST['passwordd'];
 $email = $_POST['email'];

?>
<?php
 // // $sqll="SELECT id,username,passwordd from uye WHERE username=?";
 // // if($stmt=mysqli_prepare($baglanti, $sqll))
 // // {
     // //     mysqli_stmt_bind_param($stmt,"s",$username);
     
     // //     if(mysqli_stmt_execute($stmt));{
         // //         mysqli_stmt_store_result($stmt);
         
         // //         if(mysqli_stmt_num_rows($stmt)==1)
         // //         {
             // //             mysqli_stmt_bind_result($stmt,$id,$username,$passwordd);
             // //             if(mysqli_stmt_fetch($stmt))
             // //             {
                 // //                 if(password_verify($passwordd,$hashed_passwordd));
                 // //                 $_SESSION["loggedIn"]= true;
                 // //                 $_SESSION["id"]=$id;
                 // //                 $_SESSION["username"]=$username;
                 // //                 header("location: profil.php");
                 // //             }
                 // //         }
                 // //         else die;
                 
                 // //     }
                 // // }
                 
                 // // 2nd try -----------------------------
                 ?>
                 <?php
   
                 $queery="SELECT * from uye where username='$username' and passwordd='$passwordd' and email='$email'";
                 $sonuc= mysqli_query($baglanti,$queery);
                
                if(mysqli_num_rows($sonuc)==1);
                    {
                        session_start();
                        $_SESSION['auth']='true';
                        header("location: index.php");
                    };

?> 