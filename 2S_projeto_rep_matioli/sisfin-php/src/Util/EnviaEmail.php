<?php

namespace Sisfin\Util;

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class EnviaEmail
{
    private $mail; //objeto PHPMailer

    private $corpo;
    private $assunto;
    private $destino;


    public function __construct()
    {
        $this->mail = new PHPMailer(true);
    }

    /**
     * @return mixed
     */
    public function getCorpo()
    {
        return $this->corpo;
    }

    /**
     * @param mixed $corpo
     */
    public function setCorpo($corpo)
    {
        $this->corpo = $corpo;
    }

    /**
     * @return mixed
     */
    public function getAssunto()
    {
        return $this->assunto;
    }

    /**
     * @param mixed $assunto
     */
    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;
    }

    /**
     * @return mixed
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * @param mixed $destino
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;
    }

    public function Envia()
    {
        try {

            $this->mail->isSMTP();
            $this->mail->Host = EMAIL['host'];
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $this->mail->Port = EMAIL['port'];

            $this->mail->SMTPAuth = true;
            $this->mail->Username = "eduardosenai888@gmail.com";
            $this->mail->Password = "akfs pegy aprp eqin";
            // echo EMAIL['host']." | ".EMAIL['login']." | ".EMAIL['password']."<br>";

            $this->mail->setFrom("eduardosenai888@gmail.com", "eduardosenai888@gmail.com");
            $this->mail->addAddress($this->destino);

            $this->mail->isHTML(true);
            $this->mail->Subject = $this->assunto;
            //$mail->Body    = 'Corpo da mensagem em <b>HTML</b>';
            $this->mail->msgHTML($this->corpo);
            //$this->mail->AltBody = 'Teste de envio de email com PHPMailer';

            return $this->mail->send();

        } catch (Exception $e) {
            throw new Exception($this->mail->ErrorInfo);
        }
    }


}