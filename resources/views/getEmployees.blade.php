<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Employees</title>
</head>
<body>
    
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Action</th>
    </tr>

    @foreach($data as $value)
    <tr>
        <td>{{ $value['id'] }}</td>
        <td>{{ $value['name'] }}</td>
        <td>{{ $value['email'] }}</td>
        <td>{{ $value['message'] }}</td>
        <td>
            <a href="editemployee/{{$value['id']}}">Edit</a>
            <a href="deleteemployee/{{$value['id']}}">Delete</a>
        </td>
    </tr>
    @endforeach

</table>
</body>
</html>