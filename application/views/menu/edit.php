<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit </title>
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
        <h3 class="judul">FORM EDIT</h3>
    </div>
    <div class="form">
        <?= validation_errors(); ?>
        <?= form_open('menucontroller/edit/' . $menu->id); ?>
        <tr>

            <label class="label" for="nama">Nama </label>
            <input type="text" name="nama" value="<?= $menu->nama; ?>" required>
            <br>
            <label class="label required-label" for="harga">harga</label>
            <input type="text" name="harga" value="<?= $menu->harga; ?>" required>
            <br>
        </tr>

        <button type="submit" <a href="#" class="colored-button">Simpan</a></button>
        <button type="batal" <a href="#" class="colored-button1">batal</a></button>
        <?= form_close(); ?>
    </div>
</body>

</html>