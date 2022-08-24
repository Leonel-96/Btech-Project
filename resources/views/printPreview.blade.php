<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Preview</title>
    <style>
        table{
            border-collapse: collapse;
            border: 1px solid lightgrey;
            width: 70%;
            text-align: left;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Product name</th>
            <th>Categories</th>
            <th>Price</th>
        </thead>
        <tbody>
           @foreach ($product as $pro)
            <tr>
                <td>{{$pro->id}}</td>
                <td>{{$pro->name}}</td>
                <td>{{$pro->cat_id}}</td>
                <td>{{$pro->price}}</td>
            </tr>
           @endforeach
           
        </tbody>
    </table>
</body>
</html>