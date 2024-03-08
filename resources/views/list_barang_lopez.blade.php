<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<table class="m-10 border-collapse border border-slate-400 bg-blue-50">
        <thead>
            <tr>
                <th class="border border-slate-300">ID</th>
                <th class="border border-slate-300">Nama</th>
                <th class="border border-slate-300">Harga</th>
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