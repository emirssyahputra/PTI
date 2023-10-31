<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Verif extends BaseController
{
    public function index()
    {
        return view('v_verif');
    }
    public function resetOtp()
    {
        $session = session();
        $model = new \App\Models\M_otp();
        $request = service('request');


        if ($request->getMethod() === 'post' ) {
            $session->remove('info');

            $otp_code = $request->getPost('otp');
            $user = $model->getUserByOTP($otp_code);

            if ($user) {
                $email = $user['email'];
                $session->set('email', $email);
                return redirect()->to('Passwordbaru')->with('email', $email);
            } else {
                $data['errors']['otp-error'] = "Anda memasukkan OTP yang salah!";
                
            }
        }
        return view('v_verif', $data);
        
    }
}
