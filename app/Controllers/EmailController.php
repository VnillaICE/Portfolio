<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class EmailController extends Controller
{
    public function submitForm()
    {
        // Get form data
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $title = $this->request->getPost('title');
        $message = $this->request->getPost('message');

        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('error', 'Invalid email address.');
        }

        // If email is valid, send the email
        $emailService = \Config\Services::email();

        $emailService->setTo('rawalsarthak555@gmail.com'); // Replace with your email
        $emailService->setFrom($email, $name);
        $emailService->setSubject($title);
        $emailService->setMessage($message);

        // Send the email and check for success
        if ($emailService->send()) {
            return redirect()->back()->with('success', 'Message sent successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to send the message. Please try again.');
        }
    }
}
