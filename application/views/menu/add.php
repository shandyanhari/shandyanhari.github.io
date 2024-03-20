<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tambah Menu</title>
</head>
<style>
.navbar {
        background-color: grey;
        overflow: hidden;
        text-decoration-color: cyan;
        font-size: large;
        display: block;
        color: white;
        text-align: center;
        padding: 7px 7px;
        text-decoration: none;

    }

    body {
        margin: 0;
        font-family: 'Times New Roman', Times, serif;
        background-color: yellowgreen;
    }



    .colored-button {
        display: inline-block;
        padding: 5px 5px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        color: white;
        background-color: green;
        cursor: pointer;
    }

    form {
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        outline:solid;
    }

    label {
        display: block;
        margin-bottom: 8px;
        background-color: rgb(red, green, blue) ;
    }

    input[type="text"],
    input[type="text"],
    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 16px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }



    .colored-button:hover {
        background-color: red;
    }

    .colored-button1 {
        display: inline-block;
        padding: 5px 5px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        color: white;
        background-color: red;
        cursor: pointer;
    }


    .colored-button1:hover {
        background-color: yellow;
    }
</style>

<body>
<div class="navbar">
        <h3 class="judul">FORM TAMBAHKAN DATA</h3>
    </div>
    <div class="form">
   
<form action="<?php echo base_url('index.php/menucontroller/save'); ?>" method="post">
    <label>Nama:</label>
    <input type="text" name="nama" required>
    <br>
    <label>Harga:</label>
    <input type="text" name="harga" required>
    <br>
    <button type="submit" <a href="#" class="colored-button">Simpan</a></button>
    <button type="batal" <a href="#" class="colored-button1">Batal</a></button>
   
</form>

</body>
</html>
