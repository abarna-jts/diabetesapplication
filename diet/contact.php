<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Validate the reCAPTCHA response
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $secretKey = '6Ld-SR8pAAAAAH1LeI3wg7-7B1PF6wZzd18uqqSp'; // Replace with your secret key
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $secretKey,
        'response' => $recaptchaResponse,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];

    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    $result = json_decode($response, true);

    if ($result['success']) {
        // Valid reCAPTCHA, proceed with sending email
        $to = 'maninesa145@gmail.com'; // Replace with your email
        $subject = 'New Contact Form Submission';
        $message = "Name: $name\nEmail: $email";

        // Send email
        mail($to, $subject, $message);

        // Redirect or display success message
        echo 'Email sent successfully!';
    } else {
        // Invalid reCAPTCHA, display error message
        echo 'reCAPTCHA verification failed.';
    }
} else {
    // Redirect or display error for invalid form submission
    echo 'Invalid form submission.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <!-- Include the reCAPTCHA API script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <h1>Contact Form with reCAPTCHA</h1>
    <form action="submit.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <div class="g-recaptcha" data-sitekey="6Ld-SR8pAAAAAPdnGGPgLCCzFezkwOtD6uKIZRdz"></div><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
