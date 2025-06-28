<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $name    = $request->input('name');
        $email   = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME'); // ambil dari .env
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom(env('MAIL_USERNAME'), 'Website Sekolah');
            $mail->addAddress(env('MAIL_USERNAME'));

            $mail->Subject = $subject;
            $mail->isHTML(true);
            $mail->Body = "
                <strong>Nama Pengirim:</strong> $name<br>
                <strong>Email Pengirim:</strong> $email<br><br>
                <strong>Subjek:</strong> $subject<br><br>
                <strong>Pesan:</strong><br>$message
            ";

            $mail->send();

            return back()->with('success', 'Pesan berhasil dikirim!');
        } catch (Exception $e) {
            return back()->with('error', 'Pesan gagal dikirim. Error: ' . $mail->ErrorInfo);
        }
    }
}
