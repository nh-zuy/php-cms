<?php

/**
 * JPhpMailer class file.
 *
 * @version alpha 2 (2010-6-3 16:42)
 * @author jerry2801 <jerry2801@gmail.com>
 * @required PHPMailer v5.1
 *
 * A typical usage of JPhpMailer is as follows:
 * <pre>
 * Yii::import('ext.phpmailer.JPhpMailer');
 * $mail=new JPhpMailer;
 * $mail->IsSMTP();
 * $mail->Host='smpt.163.com';
 * $mail->SMTPAuth=true;
 * $mail->Username='yourname@yourdomain';
 * $mail->Password='yourpassword';
 * $mail->SetFrom('name@yourdomain.com','First Last');
 * $mail->Subject='PHPMailer Test Subject via smtp, basic with authentication';
 * $mail->AltBody='To view the message, please use an HTML compatible email viewer!';
 * $mail->MsgHTML('<h1>JUST A TEST!</h1>');
 * $mail->AddAddress('whoto@otherdomain.com','John Doe');
 * $mail->Send();
 * </pre>
 */
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'class.phpmailer.php';

class JPhpMailer extends PHPMailer {

    public function sendMailSmtp($from, $to, $namefrom, $nameto, $subject, $content, $type = 0, $addreplyto = '', $reply_name = '') {
        $this->IsSMTP();
		$this->SMTPSecure = 'ssl'; 
        $this->Host = 'smtp.gmail.com';
        $this->Port = 465;
        $this->SMTPAuth = true;
        $this->Username = 'sender@dos.vn';
        $this->Password = 'fdbhbibbonploilc';
        $this->Subject = $subject;
        $this->AltBody = 'To view the message, please use an HTML compatible email viewer!';
        $this->MsgHTML($content);
		$this->SetFrom($from, $namefrom);
        $this->AddAddress($to, $nameto);
        if ($type == 1) {
            $this->AddReplyTo($addreplyto, $reply_name);
        }else{
            $this->SetFrom($from, $namefrom);
        }
        //$this->AddBCC($address);
        $this->Send();
    }

	/**
     * @param $from - Email người gửi
     * @param $to - Email người nhận
     * @param null $nameFrom - Tên người gửi
     * @param null $nameTo - Tên người nhận
     * @param $subject - Tiêu đề
     * @param $body - Nội dung
     * @param int $type - Send 1 bản cho account@dos.vn
     * @param string $addReplyTo - Email người trả lời
     * @param string $replyName - Tên người trả lời
     */
    public function sendMailLocal($from, $to, $nameFrom = null, $nameTo = null, $subject, $body, $type = 0, $addReplyTo = '', $replyName = '') {
        $this->SetFrom($from, $nameFrom);
        $this->AddAddress($to, $nameTo); //thong tin nguoi nhan
        $this->Subject = $subject;
        $this->Body = $body;
        $this->IsHTML(true);

        if ($type == 1) {
            $this->AddBCC('account@dos.vn', 'Dos.vn');
        }
        $this->AddReplyTo($addReplyTo, $replyName);
        $this->SetFrom($from, $nameFrom);

        $this->Send();
        /*if (!$this->Send()) {
            echo "Error sending: " . $this->ErrorInfo;
        }
        else {
            echo "Letter sent";
        }*/
    }
}