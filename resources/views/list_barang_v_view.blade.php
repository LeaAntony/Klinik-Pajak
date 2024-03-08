<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>List Barang</title>
</head>
<body>
<table class="border-collapse border border-slate-400 ... m-5">
    <thead>
        <tr>
            <th class="border border-slate-300 ... bg-purple-200">ID</th>
            <th class="border border-slate-300 ... bg-purple-200">Nama</th>
            <th class="border border-slate-300 ... bg-purple-200">Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $dataku)
        <tr  class="border-collapse border border-slate-400 ...">
            <td class="border border-slate-300 ... bg-purple-100">{{ $dataku['id'] }}</td>
            <td class="border border-slate-300 ... bg-purple-100">{{ $dataku['nama'] }}</td>
            <td class="border border-slate-300 ... bg-purple-100">{{ $dataku['harga'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table> 
</body>
</html>