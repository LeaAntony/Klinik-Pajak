<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<table class="m-10 border-collapse border border-slate-400 bg-red-50">
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
                    <td class="border border-slate-300" >{{ $dataku['id'] }}</td>
                    <td class="border border-slate-300" >{{ $dataku['nama'] }}</td>
                    <td class="border border-slate-300">{{ $dataku['harga'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

