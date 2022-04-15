<?php
if (isset($_POST['sort'])) :
    require_once 'db.php';
    $sort = $_POST['sort'];

    $query = mysqli_query($db, "SELECT * FROM film ORDER BY judul " . $sort . "");
    while ($row = mysqli_fetch_object($query)) :
?>
      <div class="col-sm-auto mt-3">
          <div class="card" style="width: 15rem"> 
            <div class="card">
              <img src="<?= $row->gambar; ?>" class="card-img-top" alt="" style="width: 100%; height: 300pt;" class="hover-shadow"/>
              <span class="position-absolute top 0 badge" style="background-color: cadetblue"><?= $row->rating; ?></span>
              <div class="container py-3">
                <h5 class="card-title"><?= $row->judul; ?> </h5>
                <p class="card-text">
                  <button class="btn" style="float: right; font-size: small"><i class="bi bi-pencil-square" style="color:white;"></i>
                  <i class="bi bi-trash" style="color:white;"></i></button><?= $row->tahun; ?> </p>
                  <p><button class="button">Watch Now</button></p>
              </div>
            </div>
          </div>
        </div>
<?php
    endwhile;
endif;
?>