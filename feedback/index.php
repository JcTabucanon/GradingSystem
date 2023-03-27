<?php
// Define the admin email address
$admin_email = "admin@example.com";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the form data
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $message = test_input($_POST["message"]);

  // Send the email to the admin
  $subject = "New Feedback from ".$name;
  $body = "Name: ".$name."\n";
  $body .= "Email: ".$email."\n";
  $body .= "Message: ".$message."\n";
  mail($admin_email, $subject, $body);

  // Set a flag to indicate that the form was successfully submitted
  $form_submitted = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="../src/css/feedback.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-form">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" required>

<label for="message">Message:</label>

  <textarea name="message" id="message" rows="5" required></textarea>
  <input type="submit" value="Send">
</form>
<?php
// Display the thank you message if the form was successfully submitted
if (isset($form_submitted)) {
  echo "<p>Thank you for your feedback!</p>";
}
?>
</div>
<!-- JavaScript code to display the message after form submission -->
<script>
  const form = document.querySelector('form');
  form.addEventListener('submit', function(event) {
    // Prevent the form from being submitted normally
    event.preventDefault();
    // Show the thank you message
    const message = document.createElement('p');
    message.textContent = 'Thank you for your feedback!';
    form.appendChild(message);
  });
</script>
<!-- JavaScript code to redirect the user after 5 seconds -->
</body>
</html>