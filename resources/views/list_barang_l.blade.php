<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid; 
            border-collapse: collapse;
            margin:auto;
            width: 50%;
        }
        tr {
            border: 1px solid;
        }
        th {
            border: 1px solid; 
            padding: 15px;
        }
        td {
            border: 1px solid; 
            padding: 15px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $dataku)
            <tr>
                <td>{{ $dataku['id'] }}</td>
                <td>{{ $dataku['nama'] }}</td>
                <td>{{ $dataku['harga'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>