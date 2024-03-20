<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <title>Dashboard</title>
</head>

<style>
  body {
    margin: 0;
    font-family: 'Times New Roman', Times, serif;
    background-color: grey;
  }

  .container {
    max-width: 10000px;
    margin: 0 auto;
    padding: 50px;
    background-color: cadetblue;
    border: 1px solid #ddd;
    border-radius: 5px;
  }

  .color2 {
      width: 300px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      background-color: green;
      border: 1px solid black;
    }
  
    .color3 {
     
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      background-color: white;
      border: 1px solid black;
    }

</style>

<body>

  <div class="container" style="margin-top: 50px">
    <div class="row">

      <div class="color2" class="col-md-3">
        <ul class="list-group">
          <li class="list-group-item active">MAIN MENU</li>
          <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item" style="color: #212529;">Dashboard</a>
          <li class="list-group-item">Profile</li>
          <a href="<?php echo base_url() ?>index.php/MenuController" class="list-group-item" style="color: #212529;">Menu </a>

          <a href="<?php echo base_url() ?>index.php/dashboard/logout" class="list-group-item" style="color: #212529;">Logout</a>
        </ul>
      </div>

      <div class="col-md-9 ">
        <div class="color3" div class="card">
          <div class="card-body ">
            <label>DASBOARD</label>
            <hr>

            Selamat Datang <?php echo $this->session->userdata("nama_lengkap") ?>

          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
<footer style="text-align: center;"><p>&copy; 2024 Shandy's Cafe. All rights reserved.</p></footer>

</html>