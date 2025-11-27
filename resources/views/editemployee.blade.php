<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>
<body>
    
    <h1>Edit Employee</h1>
    <form action="/editingemployee/{{$data['id']}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name here" value="{{$data['name']}}">
        <input type="email" name="email" placeholder="Email here" value="{{$data['email']}}">
        <input type="text" name="message" value="{{$data['message']}}">

        <input type="submit">
    </form>


</body>
</html>