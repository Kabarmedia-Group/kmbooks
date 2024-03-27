<?php 

function getBooks()
{
    $data = [
        'books'    => getBooksData(),
    ];

    return $data;
}

?>