<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/users" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Name">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Email">
        <label for="section">Section:</label>
        <input type="text" name="section" id="section" placeholder="Section">
        <button type="submit">Submit</button>
    </form>
</body>
</html>