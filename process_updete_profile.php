<?php
   
   include 'config.php';
   session_start();

   $fullname = $_POST['fullname'];
   $depname = $_POST['depname'];
   $gpa = $_POST['gpa'];
   

   $username = $_SESSION['username'];
   //uploadfile
   $file = $_FILES['avatar']['name'];
   $folder_name = "images/";
   $new_file = $username."_".$file;
   $base_name = $folder_name.$new_file ;
   $ext_name = strtolower(pathinfo($base_name,PATHINFO_EXTENSION));
   $file_image = getimagesize($_FILES['avatar']['name']);
   $file_size = $_FILES['avatar']['size'];
   if($file_size == false){
    echo "คุณไม่ได้ส่งรูป";
    }elseif ($ext_name != "jpg" && $ext_name != "jpeg" && $ext_name != "png") {
     echo "คุณไม่ได้ส่งรูป jpg /jpeg/png";
    }elseif($file_size > 200000){
     echo "คุณส่งไฟล์ใหญ่เกิน 200KB";
    }else{
        move_uploaded_file($_FILES["upfile"]["tmp_name"],$base_name);
        $sql = "UPDATE profile SET fullname = '$fullname', depname = '$depname',gpa = '$gpa',photo = '$new_file' WHERE username = '$username'"; 
        $qry = mysqli_query($conn,$sql);
        if (!$qry) {
            echo "เพิ่มข้อมูลไม่สำเร็จ";
            header("location: update_profile.php");
        }else {
            echo "เพิ่มข้อมูลสำเร็จ";
            header('location: profile.php');
        }  
    }
