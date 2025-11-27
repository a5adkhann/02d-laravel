<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>
    
    <h1>Add New Employee</h1>
    <form action="/addemployee" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name here">
        <input type="email" name="email" placeholder="Email here">
        <textarea name="message" placeholder="Message here"></textarea>

        <input type="submit">
    </form>


</body>
</html>