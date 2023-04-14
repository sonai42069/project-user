<?php
    session_start();
    include_once "config.php";
    $name = mysqli_real_escape_string($con, $_POST['name']);   
    $email = mysqli_real_escape_string($con, $_POST['email']);
 //   $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    if(!empty($name) && !empty($email) /*&& !empty($mobile)*/ && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($con, "SELECT * FROM contactus WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - This email already exist!";
            }else{
                    $time = time();
                    $ran_id = rand(time(), 100000000);                        
                    $insert_query = mysqli_query($con, "INSERT INTO contactus (unique_id, name, email,  message)
                    VALUES ({$ran_id}, '{$name}','{$email}', '{$message}')");
                    if($insert_query){
                        echo "success";
                   /*     $select_sql2 = mysqli_query($con, "SELECT * FROM users WHERE email = '{$email}'");
                        if(mysqli_num_rows($select_sql2) > 0){
                            $result = mysqli_fetch_assoc($select_sql2);
                            $_SESSION['unique_id'] = $result['unique_id'];
                            echo "success";
                        }else{
                            echo "This email address not Exist!";
                        }*/
                    }else{
                        echo "Something went wrong. Please try again!";
                    }
            }
            
        }else{
            echo "$email is not a valid email!";
        }
    }else{
        echo "All input fields are required!";
    }
?>