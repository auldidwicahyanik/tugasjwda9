<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>Form Pencarian</title>
    
</head>
<body>
    <main>
        <a href="index.php">Refresh</a>
        <h2>Pencarian Data Buku</h2>

        <form action="proses_pencarian.php"
        method="post">
            <label for="">Judul</label>
            <input type="text" name="input_judul"
            id="input_judul" value="<?php
                if(isset($_GET['judul'])){
                    echo $_GET['judul'];
                }
            ?>">
            
            <input type="submit" value="cari">
        </form>

        <section id="result-container">
            <?php
                if (isset($_GET['books'])){
                    if ($_GET['books'] == ""){
                        echo "<h4 class='warning-message'>Data Buku Tidak Ditemukan!!<h4>";
                    }
                    else{
                        $books_item = json_decode($_GET['books'], true);

                        foreach($books_item as $item){
                            echo "<div class='item-container'>";
                                echo "<img src='Images/" . $item['cover'] . "'>";
                                echo "<div class='item-description'>";
                                    echo "<h4>Judul :</h4>";
                                    echo "<h4 class='Value'>" . $item['judul'] ."</h4>";

                                    echo "<h4>Penulis :</h4>";
                                    echo "<h4 class='Value'>" . $item['penulis'] ."</h4>";

                                    echo "<h4>Harga :</h4>";
                                    echo "<h4 class='Value'>" . $item['harga'] ."</h4>";
                                echo "</div>";
                                echo "<div class='clear-fix'></div>";
                            echo "</div>";
                        }
                    }
                }
            ?>
        </section>
    </main>
</body>
</html>