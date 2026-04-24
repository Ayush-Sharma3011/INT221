<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="email" method="POST">
        @csrf
        <label for="email">Email:</label><br>
        <input type="email" name="email" placeholder="Enter your email"><br>
        <label for="subject">Subject:</label><br>
        <input type="text" name="subject" placeholder="Enter the subject"><br>
        <textarea name="message" placeholder="Enter your message"></textarea><br>
        <button type="submit">Send Email</button>
    </form>
</body>
</html>