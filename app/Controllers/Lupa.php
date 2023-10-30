<?php

namespace App\Controllers;

use App\Models\M_otp;

class Lupa extends BaseController
{
    public function index()
    {
        return view('v_lupa');
    }

    public function resetPassword()
{
    $userEmail = $this->request->getVar('email'); // Ganti variabel ke user's email

    $model = new M_otp();
    $user = $model->getUserByEmail($userEmail);

    $data = []; // Initialize the $data array

    if ($user) {
        $code = rand(999999, 111111);
        $model->updateCode($userEmail, $code); // Ganti variabel ke user's email

        $subject = "Password Reset Code";
        $message = "OTP anda untuk mereset password adalah $code";

        $email = service('email');
        $email->setTo($userEmail); 
        $email->setFrom('emirssyah2@gmail.com', 'CodeIgniter 4 Email'); 
        $email->setSubject($subject);
        $email->setMessage($message);

        if ($email->send()) {
            session()->setFlashdata('info', "We've sent a password reset OTP to your email - $userEmail"); // Ganti variabel ke user's email
            session()->set('email', $userEmail);
            return redirect()->to('Verif');
        } else {
            $data['errors']['otp-error'] = "Failed while sending code!";
        }
    } else {
        $data['errors']['email'] = "This email address does not exist!";
    }

    return view('v_lupa', $data);
}

}
