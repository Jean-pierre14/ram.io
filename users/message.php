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
    </title>
</head>

<body>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3>Messager</h3>
            <?php
                $errors = [];
                $con = mysqli_connect("localhost", "root", "", "ramall");
                if(isset($_POST['submit'])){
                    $send = $_POST['SenderId'];
                    $receiver = $_POST['ReceiverId'];
                    $msg = mysqli_real_escape_string($con, trim($_POST['msg']));

                    if(empty($msg)){array_push($errors, "Empty message");}
                    if(empty($send)){array_push($errors, "Empty senderId");}
                    if(empty($receiver)){array_push($errors, "Empty ReceiverId");}

                    if(count($errors) == 0){
                        $sql = mysqli_query($con, "INSERT INTO messages_tb(context, senderId, receiverId, msgStatus, viewStatus) VALUES('$msg', $send,$receiver, 'oper', 'unready')");
                        if($sql){
                            array_push($errors, "Registered");
                        }else{
                            array_push($errors, "sending sms fail");
                        }
                    }
                }
                if(count($errors) > 0){
                    foreach($errors as $error){
                        print '<p class="alert alert-danger">'.$error.'</p>';
                    }
                }
            ?>
            <div class="__footer">
                <form action="" method="post">
                    <input type="number" name="SenderId" id="SenderId" placeholder="Sender Id" class="form-control">
                    <input type="number" name="ReceiverId" id="ReceiverId" placeholder="Receiver Id" class="form-control">
                    <textarea name="msg" id="msg" class="form-control"></textarea>
                    <button type="submit" name="submit" class="btn btn-success">Send</button>
                </form>
            </div>
        </div>
    </div>
    </div>

</body>
</html>