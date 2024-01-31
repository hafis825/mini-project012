<?php
   include "config.php";
   session_start();

   $username = $_SESSION['username'];

   $sql = "SELECT * FROM profile WHERE username = '$username'"; 
   $qry = mysqli_query($conn,$sql);
   $result = mysqli_fetch_array($qry); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniProject | Profile</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    header {
        /* border: 1px solid red; */
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(211, 211, 211, 1);
    }


    .body {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .body-info {
        margin-top: 2rem;
        text-align: auto;
        padding: 1rem;
        max-width: 600px;
        max-height: 250px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 15px;
        /* overflow-y: scroll; */
    }



    .dropdown .dropbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: #707070;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    .navbar a:hover,
    .dropdown:hover .dropbtn {
        color: #fff;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: rgba(211, 211, 211, 1);
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        border-radius: 15px;
        z-index: 1;
    }

    .dropdown-content a {
        float: none;
        color: #707070;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        color: #fff;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>

<body>
    <section class="header">
        <div class="head-menu">
            <img src="img/logo.png" alt="">
            <strong>วิทยาลัยการอาชีพปัตตานี</strong>
        </div>
        <ul class="nav-links">
            <li class="current"><a href="index.php">หน้าแรก</a></li>
            <div class="dropdown">
                <button class="dropbtn">
                    ประวัติส่วนตัว
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="profile.php">ประวัติส่วนตัว</a>
                    <a href="update_profile.php">เพิ่มข้อมูลประวัติส่วนตัว</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">
                    กิจกรรมจิตอาสา
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="volunteer.php">กิจกรรมจิตอาสา</a>
                    <a href="add_profile.php">เพิ่มข้อมูลกิจกรรมจิตอาสา</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">
                    <?php echo $_SESSION['username']; ?>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="logout.php">LogOut</a>
                </div>
            </div>

        </ul>


    </section>

    <img src="images/<?php echo $result['photo'];?>" alt="profile">
    <table>
        <tr>
            <th style="border: 1px solid green;">ชื่อ - สกุล</th>
            <td style="border: 1px solid green;">
                <?php echo $result['fullname'];?>
            </td>
        </tr>

        <tr>
            <th style="border: 1px solid green;">สาขาวิชา</th>
            <td style="border: 1px solid green;">
                <?php echo $result['depname'];?>
            </td>
        </tr>

        <tr>
            <th style="border: 1px solid green;">เกรดเฉลี่ย</th>
            <td style="border: 1px solid green;">
                <?php echo $result['gpa'];?>
            </td>
        </tr>
    </table>
    <?php mysqli_close($conn); ?>







    <!-- <div class="footer">
        <p><b>66309010012@Abdulhafis Waemusor</b></p>
        <p><i>6 Yarang, ChabangTiko, Muang, Pattani, 94000</i></p>
    </div> -->
</body>

</html>