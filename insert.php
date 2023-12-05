<?php
    $server = "localhost" ;
    $username = "root" ;
    $password = "" ;
    $dbname = "aec" ; 


    $conn = mysqli_connect($server , $username , $password , $dbname) ;

    if(isset($_POST['submit'])){

        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comment'])){
            
            $name = $_POST['name'] ;
            $email = $_POST['email'] ;
            $comment = $_POST['comment'] ;

            $query = "insert into form(name,email,comment) values('$name' , '$email' , '$comment')" ;

            $run = mysqli_query($conn, $query) or die(mysqli_error());

            if($run) {
                echo "Form Submitted Succesfully" ;
                
            }
            else {

                echo "Form not submitted successfully" ;
            }

        }
        else {
            echo "All fields required!" ;
        }
    }


?>