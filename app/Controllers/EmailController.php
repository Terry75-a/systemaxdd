<?php

namespace App\Controllers;
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailController extends BaseController
{
    public function enviar()
    {
        

        // Obtener los datos del formulario
        $nombre = $this->request->getPost('nombre');
        $correo = $this->request->getPost('correo');
        $empresa = $this->request->getPost('empresa');
        $telefono = $this->request->getPost('telefono');
        $asunto = $this->request->getPost('asunto');
        $mensaje = $this->request->getPost('mensaje');

        $mail = new PHPMailer(true);

        try {
            // Configuración del servidor SMTP
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'aquitauriterry@gmail.com'; // tu correo
            $mail->Password   = 'qsjilecqyzyzuqsv'; // contraseña de app Gmail
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            // Configuración del remitente y destinatario
            $mail->setFrom($correo, $nombre);
            $mail->addAddress('aquituariterry@gmail.com', 'DSG PERU TECHNOLOGY'); 

            
            $mail->isHTML(true);
            $mail->Subject = "📩 Nuevo mensaje: $asunto";
            $mail->Body    = "
                <h3>Nuevo mensaje de contacto</h3>
                <p><strong>Nombre:</strong> $nombre</p>
                <p><strong>Correo:</strong> $correo</p>
                <p><strong>Empresa:</strong> $empresa</p>
                <p><strong>Teléfono:</strong> $telefono</p>
                <p><strong>Mensaje:</strong><br>$mensaje</p>
            ";
            $mail->AltBody = "Nombre: $nombre\nCorreo: $correo\nMensaje: $mensaje";

            
            $mail->send();
            return redirect()->back()->with('success', '✅ Tu mensaje fue enviado correctamente.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', '❌ Error al enviar el mensaje: ' . $mail->ErrorInfo);
        }
    }
}
