<?php
   session_start();
   $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลประวัติส่วนตัว</title>
    <style>
        header {
            /* border: 1px solid red; */
            margin-top: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login {
            /* border: 1px solid red; */
            margin: 0 auto;
            max-width: 550px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            outline: none;
            border-radius: 5px;
        }

        .btn button {
            background-color: #292929;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn button:focus {
            box-shadow: #d8d8d8 0 0 0 1.5px inset, rgba(211, 211, 211, 0.4) 0 2px 4px, rgba(211, 211, 211, 0.3) 0 7px 13px -3px, #e4e4e4 0 -3px 0 inset;
        }

        .btn button:hover {
            box-shadow: rgba(45, 35, 66, 0.3) 0 4px 8px, rgba(45, 35, 66, 0.2) 0 7px 13px -3px, #cecece 0 -3px 0 inset;
            transform: translateY(-2px);
        }

        .btn button:active {
            box-shadow: #D6D6E7 0 3px 7px inset;
            transform: translateY(2px);
        }




        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            /* padding-top: 16px; */
        }

        .container a {
            color: #292929;
        }
    </style>

<body>

    <header>
        <div class="header-info">
            <h1>เพิ่มข้อมูล/แก้ไขประวัติส่วนตัว</h1>
        </div>
    </header>

    <section class="login">
        <div class="container">
            <form action="process_update_profile.php" method="post" enctype="multipart/form-data">
                <?php if (isset($_SESSION['error'])) : ?>
                <div class="error">
                    <h3>
                        <?php
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            ?>
                    </h3>
                </div>
                <?php endif ?>
                <div class="input-group">
                    <label for="uname"><b>ชื่อ - สกุล</b></label>
                    <input type="text" name="fullname" placeholder="ชื่อ - สกุล">
                </div>

                <div class="input-group">
                    <label for="psw"><b>สาขาวิชา</b></label>
                    <input type="text" name="depname" placeholder="สาขาวิชา">
                </div>

                <div class="input-group">
                    <label for="psw"><b>เกรดเฉลี่ย</b></label>
                    <input type="text" name="gpa" placeholder="เกรดเฉลี่ย">
                </div>

                <div class="input-group">
                    <label for="psw"><b>รูปภาพ</b></label>
                    <input type="file" name="avatar" >
                </div>


                <div class="input-group">
                    <button type="submit" name="login_user" class="btn">เพิ่มข้อมูล/แก้ไข</button>

                </div>


            </form>

        

        </div>



    </section>


</body>

</html>