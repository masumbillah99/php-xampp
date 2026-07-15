<?php

$books = [
    [
        'name' => 'Hate Kolome Javascript',
        'author' => "Junayed Ahmed",
        "releaseYear" => 2020,
        "purchaseUrl" => "https://www.rokomari.com/book/202772/hate-kolome-javascript"
    ],
    [
        'name' => 'Growing Through Struggle',
        'author' => "Jhankar Mahbub",
        "releaseYear" => 2023,
        "purchaseUrl" => "https://www.rokomari.com/book/378857/growing-through-struggle"
    ],
    [
        'name' => 'Fullstack Development (Connecting the Dots)',
        'author' => "HM Nayem",
        "releaseYear" => 2021,
        "purchaseUrl" => "https://www.rokomari.com/book/211527/fullstack-development"
    ],
    [
        'name' => 'Habluder Jonno Programming',
        'author' => "Jhankar Mahbub",
        "releaseYear" => 2016,
        "purchaseUrl" => "https://www.rokomari.com/book/378857/growing-through-struggle"
    ]
];

// Lambda function : Its also called as an anonymous function. A function 
// defined without a specified name.

// $filterByAuthor = function ($books, $author) {
//   $filteredBooks = [];

//   foreach ($books as $book) {
//     if ($book['author'] === $author) {
//       $filteredBooks[] = $book;
//     }
//   }

//   return $filteredBooks;
// };

// $filteredBooks = $filterByAuthor($books, "Junayed Ahmed");

// Refactoring ($filterByAuthor)

function filter($items, $fn)
{
    $filteredItems = [];

    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }

    return $filteredItems;
}
;

$filteredBooks = array_filter($books, function ($book) {
    return $book['author'] === "Jhankar Mahbub";
});


// create the user record in the db (database)
// Log them in
// Send a welcome email
// Redirect to their new dashboard

