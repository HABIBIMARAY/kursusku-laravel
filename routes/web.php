
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $courses = [
        [
            'code' => 'WEB-01',
            'name' => 'Web Dasar',
            'description' => 'Belajar HTML, CSS, dan dasar pembuatan website.',
            'price' => 240000,
            'duration' => '4 Minggu',
        ],
        [
            'code' => 'PHP-01',
            'name' => 'PHP Dasar',
            'description' => 'Mempelajari pemrograman PHP dan logika backend.',
            'price' => 340000,
            'duration' => '5 Minggu',
        ],
        [
            'code' => 'LAR-01',
            'name' => 'Laravel Dasar',
            'description' => 'Membangun aplikasi web menggunakan framework Laravel.',
            'price' => 500000,
            'duration' => '6 Minggu',
        ],
    ];

    return view('home', compact('courses'));
});
