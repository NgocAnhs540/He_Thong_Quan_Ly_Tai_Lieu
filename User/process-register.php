<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    include('../config/connection.php');


  
  
    if(isset($_POST['submit-reg']))
    {

            $first_name = $_POST['fname'];
            $last_name  = $_POST['lname'];
            $phone      = $_POST['mobile'];
            $pass1      = $_POST['pass1'];
            $pass2      = $_POST['pass2'];
            $email      = $_POST['email'];
             $type       =$_POST['usertype'];
   
    
            
            // Bước 02: Thực hiện các truy vấn
            // 2.1 - Kiểm tra Email này đã tồn tại chưa?
            $sql_1 = "SELECT * FROM user WHERE email='$email'";
            $result_1 = mysqli_query($con,$sql_1);

           
            

            if(mysqli_num_rows($result_1) >= 1){
                $value='existed';
                header("Location:Registation.php?response=$value");
            }else{
                // 2.2 - Nếu ko tồn tại thì mới LƯU
                // Băm mật khẩu
                $pass_hash = password_hash($pass1,PASSWORD_DEFAULT);
                $strRandom = rand(1000,9999);
                $strActivation = md5($strRandom);
                $sql = "INSERT INTO user(fname,lname,phone, email, password,type,activation) VALUES ('$first_name','$last_name','$phone','$email','$pass_hash','$type','$strActivation')";
                $result= mysqli_query($con,$sql);
                

                require'phpmailer/Exception.php';
                require'phpmailer/PHPMailer.php';
                require'phpmailer/SMTP.php';
                $mail = new PHPMailer(true);
    
    
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
        $mail->isSMTP();// gửi mail SMTP
        $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
        $mail->SMTPAuth = true;// Enable SMTP authentication
        $mail->Username = 'vuthinu27@gmail.com';// SMTP username
        $mail->Password = 'tvsalufbktgwofjo'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port = 587; // TCP port to connect to
        $mail->CharSet = 'UTF-8';
        //Recipients
        $mail->setFrom('vuthinu27@gmail.com','DFS' );
        $mail->addReplyTo('vuthinu27@gmail.com','DFS');
    
        $mail->addAddress($email); // Add a recipient
    
        // Attachments
        // $mail->addAttachment('pdf/XTT/'.$data[11].'.pdf', $data[11].'_1.pdf'); // Add attachments
        //$mail->addAttachment('pdf/Giay_bao_mat_sau.pdf'); // Optional name
    
        // Content
        $mail->isHTML(true);   // Set email format to HTML
        $mail->Subject = '[Xác thực tài khoản DFS ]';
    
        // Mail body content 
        $mail->Body    = '<p>Xin chào <?php echo $username?></p>';
        $mail->Body .= '<p>Bạn đã đăng ký tài khoản thành công, để xác thực tài khoản, bạn vui lòng nhấp vào đường link dưới đây:</p>'; 
        $mail->Body .= '<a href="http://localhost:8080/DMS/User/activation.php?accout=' . $email . '&code=' . $strActivation . '">Click here</a>';
    
    
    
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if($mail->send()){
            echo 'Thư đã được gửi đi';
        }else{
            echo 'Lỗi. Thư chưa gửi được';
        }  
    
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: {$mail->ErrorInfo}';
    }

//Vì lệnh thực hiện là INSERT: kết quả trả về của $result_2 là SỐ BẢN GHI CHÈN THÀNH CÔNG (SỐ NGUYÊN)
            if($result > 0){
                header("Location:../Login/login.php?status=0");
            }
    
            else {
                    echo "Đăng ký thất bại";
                }
                }
            }
         
    
    ?>
    