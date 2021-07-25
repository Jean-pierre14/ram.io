<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Jean-pierre14 and Titans">
    <link rel="stylesheet" href="../admin/main.07a59de7b920cd76b874.css">
    <link rel="shortcut icon" href="../admin/assets/images/ramallLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Ramail.org
        <?= $_SESSION['username']; ?>
    </title>
</head>

<body>

    <div class="row justify-content-between">
        <div class="col-md-6">
            <?php
                $errors = array();
                $con = mysqli_connect("localhost", "root", "", "ramall");
                if(isset($_POST['submit'])){
                    $send = $_POST['SenderId'];
                    $receiver = $_POST['ReceiverId'];
                    if(empty($send)){array_push($errors, "Empty senderId");}
                    if(empty($receiver)){array_push($errors, "Empty ReceiverId");}

                    if(count($errors)){
                        $sql = mysqli_query($con, "INSERT INTO messages_tb(context, senderId, receiverId, msgStatus, viewStatus) VALUES('.$msg.', $send,$receiver, 'oper', 'unready')");
                        if($sql){
                            array_push($errors, "Your has sended");
                        }else{
                            array_push($errors, "Sql Error");
                        }
                    }
                }
            ?>
            <div class="__footer">
                <form action="" method="post">
                    <input type="number" name="SenderId" id="SenderId" placeholder="Sender Id" class="form-control">
                    <input type="number" name="ReceiverId" id="ReceiverId" placeholder="Receiver Id" class="form-control">
                    <textarea name="msg" id="msg" class="form-control"></textarea>
                    <button type="submit" class="btn btn-success"></button>
                </form>
            </div>
        </div>
    </div>

<?php include '__footer.php';?>