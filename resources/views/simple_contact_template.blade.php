<!-- resources/views/emails/email_template.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
</head>
<body>
    <h2>Client Portal Message</h2>
    <p style="margin:0;"><strong>Name:</strong> {{ $name }}</p>
    <p style="margin:0;"><strong>Case ID:</strong> {{ $case_id }}</p>
    <p style="margin:0;"><strong>Client Status:</strong> {{ $status }}</p>
	<p style="margin:0;"><strong>Settlement Officer:</strong> {{ $officer }}</p>
	<p style="margin:0;"><strong>Team:</strong> {{ $team }}</p>
    <p style="margin:0;"><strong>Email:</strong> {{ $email }}</p>
    <p style="margin:0px 0px 20px 0px;"><strong>Subject:</strong> {{ $subject1 }}</p>
    <p style="margin:0;"><strong>Message:</strong> {{ $message1 }}</p>
</body>
</html>
