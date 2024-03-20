<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Daftar Menu</title>
    <style>
        .judul {
            align-content: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            text-align: center;
        }

        .add {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            cursor: grabbing;
            border: 1px solid #333;
            border-radius: 5px;
            background-color: green;
            color: white;
        }

        .add:hover {
            background-color: red;
        }


        body {
            margin: 0;
            font-family: 'Times New Roman', Times, serif;
            background-color: goldenrod;
        }

        .navbar {
            background-color: grey;
            overflow: hidden;
            text-decoration-color: cyan;
            font-size: large;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;

        }

        .search {
            float: right;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;

        }

        table {
            table {
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 20px;
            }

            th,
            td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #4CAF50;
                color: white;
            }

            tr:nth-child(even) {
                background-color: skyblue;
            }
        }

        .edit {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            cursor: grabbing;
            border: 1px solid #333;
            border-radius: 5px;
            background-color: green;
            color: white;

        }

        .edit :hover {
            background-color: blue;
        }

        .hapus {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            cursor: grabbing;
            border: 1px solid #333;
            border-radius: 5px;
            background-color: red;
            color: white;
        }

        .hapus :hover {
            background-color: green;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #aaa;
            color: blue;
        }
    </style>
</head>

<body>
    <div class="navbar">
    <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item" < href="#" class="no-underline">Dashboard</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <a class="tombol" href="<?php echo base_url() ?>index.php/dashboard/logout" class="list-group-item">Logout</a>
        <form class="search" action="<?php echo base_url('index.php/menucontroller/search'); ?>" method="post">
            <input type="text" name="keyword" placeholder="Cari Menu">
            <button type="submit">Cari</button>
        </form>
    </div>

    <h2 class="judul">Daftar Menu</h2>



    <button><a class="add" href="<?php echo base_url('index.php/menucontroller/add'); ?>">Tambah Menu</a></button>

    <br><br>



    <table border="5">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($menu as $row) { ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->harga; ?></td>
                <td>
                    <a class="edit" href="<?php echo base_url('index.php/menucontroller/edit/' . $row->id); ?>">Edit</a>
                    <a class="hapus" href="<?php echo base_url('index.php/menucontroller/delete/' . $row->id); ?>" onclick="return confirm('Apakah Anda yakin?')">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <br><br>

    <?php echo $this->pagination->create_links(); ?>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>
<footer><p>&copy; 2024 Shandy's Cafe. All rights reserved.</p></footer>

</html>