<?php

class App {
    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }

    public function parseURL()
    {
        if(isset($_GET['url']))
        {
            $url = rtrim($_GET['url'], '/'); // Baris ini punya function rtrim() yang digunakan untuk menghapus karakter '/' yang terletak di ujung kanan url
            $url = filter_var($url, FILTER_SANITIZE_URL); // Baris ini digunakan untuk membersihkan sebuah URL dari karakter-karakter yang tidak valid atau tidak diizinkan dalam URL seperti <, >, ", #, {, }, |, \, ^, ~, [, ], dan ```
            $url = explode('/', $url); // Baris ini memecah variabel url menjadi sebuah array yang disimpan dalam variabel bernama url di mana pemisah antar index adalah karakter '/'
            return $url;
        }
    }
}