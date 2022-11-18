<!DOCTYPE html>
<html>
    <head>
        hellllo </br>
    </head>
    <body>
        @foreach($books as $book)

        {{ $book-> name }} 
        <img src="{{ $book-> first_page}}">
        </br>
        </br>
        </br>

        @endforeach
    </body>
</html>