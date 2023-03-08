<?php
    if(isset($_POST['submit'])){
                $name=$_POST['name'];
                $restaurant=$_POST['restaurant'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $position=$_POST['position'];

                $to='afeezalawonde@gmail.com';
                $subject='Form Submission';
                $message="Name: ".$name."\n"."Phone: ".$phone."\n"."Restaurant: ".$restaurant."\n"."Email: ".$email."\n". "Position: "."\n\n".$position;
                $headers="From: ".$email;
            
                if(mail($to, $subject, $message, $headers)){
                    
                    header('location:inner-page.html');
                }

                else{
                    echo "Something went wrong!";
                }
        }

?>


