<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <!-- static resource -->
<link rel="stylesheet" href="style.css">

<!--dynamic styles -->
<style "type="text/css">

</style>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="buku" class="d-block w-100" alt="buku">
    </div>
    <div class="carousel-item">
      <img src="buku" class="d-block w-100" alt="buku">
    </div>
    <div class="carousel-item">
      <img src="buku" class="d-block w-100" alt="buku">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <form method="POST" action="aksi_login.php">
    <table align="center" style="margin-top: 200px;"
     <tr>
       <td><label>username : </label></td>
      <td><input type="text" name="username"></td>
       </tr>
        <tr>
        <td><label>password : </label></td>
        <td><input type="password" name="password"><td>
       </tr>
        <tr>
            <td colspan="2">
        <input type="sumbit" value="login">
</td>
</tr>
</table>
</form>
</body>
</html>