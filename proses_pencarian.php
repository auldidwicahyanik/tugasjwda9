<?php

    $data_buku = [
        [
            "judul" => "Marketing",
            "penulis" => "akhsan setiawan",
            "harga" => "Rp 250.000,-",
            "cover" => "sales person pic.jpg"
        ],
        [
            "judul" => " macam macam gambar pemandangan indah",
            "penulis" => "cahyani",
            "harga" => "Rp 100.000,-",
            "cover" => "nature 1 pic.jpg" 
        ],
        [
            "judul" => "cara melukis  pemandangan yang bagus",
            "penulis" => "auldi dwi",
            "harga" => "Rp 350.000,-",
            "cover" => "nature 2 pic.jpg"
        ],
        [
            "judul" => "fenomena alam",
            "penulis" => "mawar melati",
            "harga" => "Rp 500.000,-",
            "cover" => "nature 3 pic.jpg"
        ],
    ];

    if ($_POST){
        $item_cari = $_POST['input_judul'];
        $array_hasil_pencarian = array();

        $i=0;
        foreach($data_buku as $item){
            if(strstr($item['judul'], $item_cari)){
                $array_hasil_pencarian[$i]['judul'] = $item ['judul'];
                $array_hasil_pencarian[$i]['penulis'] = $item ['penulis'];
                $array_hasil_pencarian[$i]['harga'] = $item ['harga'];
                $array_hasil_pencarian[$i]['cover'] = $item ['cover'];
                $i++;
            } //
        } //

        if (count($array_hasil_pencarian) == 0){
            $paramBooks == "";
        } else{
            $paramBooks = json_encode
            ($array_hasil_pencarian);
        }

        header("Location: index.php?books=" .$paramBooks . "&judul=" . $item_cari);


    } //