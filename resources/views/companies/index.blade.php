<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This is Companies</title>
</head>
<body>
    <h1>Bu tashkilotlar ro'yxati</h1>
<br>
<table border="20">
    <thead >
        <tr>
             <td>T/R</td>
             <td>Tashkilot nomi</td>
             <td>Tashkilot manzili</td>
             <td>Tashkilot telefon raqami</td>
        </tr>
    </thead>
    <tbody>
        @foreach($companies as $company)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$company-> name}}</td>
                <td>{{$company-> address}}</td>
                <td>{{$company-> phone}}</td>
            </tr>
            @endforeach
    </tbody>
</table>
</body>
</html>
