<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $number = mysqli_real_escape_string($con, $_POST['mobile']); 
    $password = mysqli_real_escape_string($con, $_POST['password']);
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($number) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($con, "SELECT * FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - This email already exist!";
            }else{
                if(!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
                    echo "$fname - Only letters and white space allowed.";
                  }else{
                    if(!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
                      echo "$lname - Only letters and white space allowed.";
                    }else{
                      if(!preg_match("/^[0-9]*$/",$number)) {
                        echo "$number - Only numbers allowed.";
                      }else{
                        if(($number) > 6023410879 && ($number) < 9999999999){
                            $phnum = mysqli_query($con, "SELECT * FROM users WHERE mobile = '{$number}'");
                            if(mysqli_num_rows($phnum) > 0){
                                echo "$number - This number already exist!";
                        }else{
                             if(isset($_FILES['image'])){
                            $img_name = $_FILES['image']['name'];
                            $img_type = $_FILES['image']['type'];
                            $tmp_name = $_FILES['image']['tmp_name'];
                            
                            $img_explode = explode('.',$img_name);
                            $img_ext = end($img_explode);
            
                            $extensions = ["jpeg", "png", "jpg"];
                            if(in_array($img_ext, $extensions) === true){
                                $types = ["image/jpeg", "image/jpg", "image/png"];
                                if(in_array($img_type, $types) === true){
                                    $time = time();
                                    $new_img_name = $time.$img_name;
                                    if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                                        $ran_id = rand(time(), 100000000);
                                        $encrypt_pass = md5($password);
                                        $insert_query = mysqli_query($con, "INSERT INTO users (id, fname, lname, mobile, email, password, image, status)
                                        VALUES ({$ran_id}, '{$fname}','{$lname}','{$number}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', 'inactive')");
                                        if($insert_query){
                                            $select_sql2 = mysqli_query($con, "SELECT * FROM users WHERE email = '{$email}'");
                                            if(mysqli_num_rows($select_sql2) > 0){
                                                $result = mysqli_fetch_assoc($select_sql2);
                                                $_SESSION['id'] = $result['id'];
                                                $_SESSION['fname'] = $result['fname'];
                                                $_SESSION['lname'] = $result['lname'];
                                                $_SESSION['mobile'] = $result['mobile'];
                                                $_SESSION['email'] = $result['email'];
                                                $_SESSION['password'] = $result['password'];
                                                $_SESSION['image'] = $result['image'];
                                                echo "success";
                                            }else{
                                                echo "This email address not Exist!";
                                            }
                                        }else{
                                            echo "Something went wrong. Please try again!";
                                        }
                                    }
                                }else{
                                    echo "Please upload an image file - jpeg, png, jpg";
                                }
                            }
                        }else{
                                echo "Please upload an image file - jpeg, png, jpg";
                            } 
                        }             
                }else{
                            echo "$number - This number is not valid!";
                        }
                    }
                }
            }            
        }
    }else{
            echo "$email is not a valid email!";
        }
    }else{
        echo "All input fields are required!";
    }

?>