<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../../config.php");
include("../../mail_credentials.php");
require '../../vendor/autoload.php';

        use PHPMailer\PHPMailer\PHPMailer;
        
        $name = $_POST['muntanto__contacto-form-input-name'];
        $email = $_POST['muntanto__contacto-form-input-email'];
        $comments = $_POST['muntanto__contacto-form-input-comments'];
        $know = $_POST['muntanto__contacto-form-input-know'];
        
       

        if (!empty($_FILES["muntanto__contacto-form-input-file"]["name"])) {
        $uploadFilesFolder = "../../_uploaded-files/";
        $fileNameAndExtension = basename($_FILES["muntanto__contacto-form-input-file"]["name"]);
        $fileName = preg_match("/(.*)\.[^.]+$/", basename($fileNameAndExtension), $matches);
        $fileName = $matches[1];
        $fileExtension = preg_match("/\.[^.]+$/", basename($fileNameAndExtension), $matches);
        $fileExtension = $matches[0];
        $fullFileNewName = str_replace(".", "-", $email) . "-" . $fileName . str_replace(" ", "-", date("d-m-Y H-i-s")) . $fileExtension;
        $target_file = $uploadFilesFolder . $fullFileNewName;

        if ($fileExtension == "exe") {
            echo "Exe file";
        } else {
            if (move_uploaded_file($_FILES["muntanto__contacto-form-input-file"]["tmp_name"], $target_file)) {
          
            } else {
                
            }
        }
        $urlFile = URL_SITE . "_uploaded-files/" . $fullFileNewName;
        $deleteFileUrl = URL_SITE. "_uploaded-files/delete.php?file=".$fullFileNewName;
        $linkToFile = "<br><br>Archivo adjunto.<br>".'<a href="'.$urlFile.'">Ver archivo</a> | <a href="'.$deleteFileUrl.'">Eliminar Archivo</a> ';
        } else {
            $linkToFile = "";
        }
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = SMTP_HOST;
        $mail->Port = SMTP_PORT;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;

        $mail->setFrom('web@mutanto.com.ar', 'Mutanto');
        $mail->addReplyTo('contact@mutanto.com.ar', 'Mutanto');
        $mail->addAddress("contact@mutanto.com.ar", $name);
        $message = "Nombre: $name" . "<br> E-mail: $email" ."<br> Descubrimiento: $know" . "<br> Descripcion del proyecto:<br>" . $comments .$linkToFile;
        $mail->Subject = 'e-mail desde Mutanto.com.ar';
        $mail->msgHTML($message);
        $mail->Body = $message;
       
        if (!$mail->send()) {
            echo 'Error: ' . $mail->ErrorInfo;
        } else {
            $empji = '<span style="font-size: 2rem;">👌</span>';
            $text = $empji. " <br>Hemos recibido tu proyecto. <br> A la brevedad te responderemos.";
            if($language == "en") {
                $text = $empji."<br>We have received your message. <br>We will get back to you as soon as possible";
            }
            echo $text;
        }

?>
