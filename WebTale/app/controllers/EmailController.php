<?php
class EmailController extends Controller {

    public function sendEmail() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validate and sanitize input
            $email = $_POST['email'] ?? '';
            $subject = $_POST['subject'] ?? '';
            $message = $_POST['message'] ?? '';
            $sender = $_POST['sender'] ?? '';
    
            if (empty($email) || empty($subject) || empty($message) || empty($sender)) {
                echo "Please fill in all required fields.";
                return;
            }
    
            // Prepare email
            $mail = new Email();
            try {
                $this->call->library('email');
                $this->email->recipient($email);
                $this->email->subject($subject);
                $this->email->email_content($message, 'html'); // assuming html emails
                $this->email->sender($sender);
    
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage(); // Display error message
                return;
            }
    
            // Handle file upload (if any)
            if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
                $upload = new Upload($_FILES['attachment']);
                $filePath = 'uploads'; // Specify your upload directory here
                $upload->set_dir($filePath);
    
                // Attempt to upload the file
                if ($upload->do_upload()) {
                    // Attach the file if upload was successful
                    $attachmentPath = $upload->get_dir() . $upload->get_filename();
                    $mail->attachment($attachmentPath); // Attach the uploaded file
                    $this->email->recipient($email);
                    $this->email->subject($subject);
                    $this->email->email_content($message, 'html'); // assuming html emails
                    $this->email->attachment($attachmentPath);
                    $this->email->sender($sender);
                } else {
                    // Handle upload errors
                    foreach ($upload->get_errors() as $error) {
                        echo $error . '<br>';
                    }
                    return;
                }
            }
    
            // Send the email and handle success/failure
            if ($this->email->send()) {
                echo "Email sent successfully!";
            } else {
                echo "Failed to send email. Please check server settings.";
            }
        } else {
            // Handle GET request or other methods
            $this->view('send'); // Load the view for sending emails
        }
    }    
}
