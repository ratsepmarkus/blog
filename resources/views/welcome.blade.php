<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <table class="table-auto border border-solid w-full">
        <thead>
            <tr>
                <td class="p-4 bg-gray-300 font-bold text-center">Book Titlee</td>
                <td class="p-4 bg-gray-300 font-bold text-center">Book realese date</td>
            </tr>
        </thead>
        @foreach($books as $book)
        <tr>
            <td class="p-2 bg-gray-100 "><a href="book/{{ $book->id }}"> {{ $book->title }}</a></td>
            <td class="p-2 bg-gray-100 ">{{ $book->release_date }}</td>
        </tr>
        @endforeach
    </table>
    {{ $books ->links() }}
</body>
</html>