<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
    <title>Form submit to send messages to an email address</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
   
</head>

<body>
    <?php
    if(!empty($_POST["send"])){
        $userName = $_POST["userName"];
        $userEmail = $_POST["userEmail"];
        $userPhone = $_POST["userPhone"];
        $userMessage = $_POST["userMessage"];
        $toEmail = $_POST["g_man_rap@yahoo.com"];
    
        $mailHeaders = "Name: " . $userName .
        "\r\n Email: " . $userEmail .
        "\r\n Phone: " . $userPhone .
        "\r\n Message: " . $userMessage . "\r\n";

        if(mail($toEmail,$userName, $mailHeaders)){
            $message = "Your information is received successfully.";
        }
    }
    
    ?>
    <div class="form-container">
        <form action="php.php" method="POST"  name="emailContact">
            <div class="input-row">
                <label for="">Name <em>*</em></label>
                <input type="text" name="userName" required>
            </div>
            <div class="input-row">
                <label for="">Email <em>*</em></label>
                <input type="email" name="userEmail" required>
            </div>
            <div class="input-row">
                <label for="">Phone <em>*</em></label>
                <input type="tel" name="userPhone" required>
            </div>
            <div class="input-row">
                <label for="">Message <em>*</em></label>
                <textarea name="userMessage" required></textarea>
            </div>
            <div class="input-row">
               
                <input type="submit" name="send" value="Submit">

                <?php
                if(!empty($message)){               
                ?>
                <div class="success" >
                    <strong><?php echo $message; }; ?></strong>
                </div>
            </div>
        </form>
    </div>
</body>
</html>