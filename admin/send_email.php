<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

session_start();

if (isset($_POST['send'])) {

    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    if (empty($email) || empty($subject) || empty($message)) {
        $_SESSION['result'] = 'Please fill in all required fields.';
        $_SESSION['status'] = 'error';
    } else {
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'taysanonlinebooking@gmail.com';
            $mail->Password = 'goey yvcj oezh lkiq'; // Replace with app-specific password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $mail->setFrom('taysanonlinebooking@gmail.com', 'Taysan Online Booking');
            $mail->addAddress($email);
            $mail->addReplyTo('taysanonlinebooking@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;

            if ($mail->send()) {
                $_SESSION['result'] = 'Message has been sent successfully!';
                $_SESSION['status'] = 'success';
            } else {
                $_SESSION['result'] = 'Message could not be sent.';
                $_SESSION['status'] = 'error';
            }

        } catch (Exception $e) {
            $_SESSION['result'] = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            $_SESSION['status'] = 'error';
        }

        // Redirect to go_checkin.php with an alert message
        echo "<script>alert('".$_SESSION['result']."'); window.location.href = 'go_checkin.php';</script>";
        exit();
    }
}
?>
