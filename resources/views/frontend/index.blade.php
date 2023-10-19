<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>



<div class="container">
    @if(!count($data))
        <h2>Перейдите по роуту /admin чтобы спарсить csv файл</h2>
    @endif


    <table class="table">

        <tbody>
        @if(isset($data))
            @foreach ($data as $item)
            <tr>
                <td scope="row">{{ $item->code }}</td>
                <td scope="row">{{ $item->name }}</td>
                <td scope="row" >{{ $item->level1 }}</td>
                <td scope="row">{{ $item->level2 }}</td>
                <td scope="row">{{ $item->level3 }}</td>
                <td scope="row">{{ $item->price }}</td>
                <td scope="row">{{ $item->price_sp }}</td>
                <td scope="row">{{ $item->quantity }}</td>
                <td scope="row">{{ $item->properties }}</td>
                <td scope="row">{{ $item->purchases }}</td>
                <td scope="row">{{ $item->image }}</td>
                <td scope="row">{{ $item->homepage }}</td>
                <td scope="row">{{ $item->description }}</td>
            </tr>
        @endforeach
        @endif
        </tbody>
    </table>
    </div>
</div>

</body>
</html>
