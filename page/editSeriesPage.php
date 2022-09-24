<?php
include '../component/sidebar.php';
include '../db.php';
$id=$_GET['id'];
$query = "SELECT * from series where id='$id'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error($con));
$row = mysqli_fetch_assoc($result);

?>

<div class="container p-3 m-4 h-100" style="background-color: white; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">
    <div class="body d-flex justify-content-between">
        <h4 class="fw-bolder">Edit Page</h4>
    </div>
    <hr>
    <h5 class="fw-bold">Preview Data</h5>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3" value="<?php echo $row['name']?>" readonly>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Genre</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3" value="<?php echo $row['genre']?>" readonly>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Realease</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3" value="<?php echo $row['realese']?>" readonly>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Episode</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3" value="<?php echo $row['episode']?>" readonly>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Season</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3" value="<?php echo $row['season']?>" readonly>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Synopsis</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3" value="<?php echo $row['synopsis']?>" readonly>
    </div>
  </div>
    <hr>


    <form action="../process/editSeriesProcess.php" method="post">

<div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">ID</label>
    <input name="id" type="text" class="form-control" value="<?php echo $row['id']?>" readonly >
</div>
<div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Name</label>
    <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="<?php echo $row['name']?>" >
</div>
<div class="mb-3">
    <label for="genre" class="form-label">Genre</label>
    <div class="mb-3">
    <select id="genre" name="genre[]" class="form-control" multiple="multiple">
        <option value="Action">Action</option>
        <option value="Horror">Horror</option>
        <option value="Thriller">Thriller</option>
        <option value="Comedy">Comedy</option>
        <option value="Drama">Drama</option>
        <option value="Fantasy">Fantasy</option>
        <option value="Fiction">Fiction</option>
        <option value="Romance">Romance</option>
  </select>
    </div>
</div>
<div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Release</label>
    <input name="realese" type="text" class="form-control" id="formGroupExampleInput" placeholder="<?php echo $row['realese']?>" >
</div>
<div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Episode</label>
    <input name="episode" type="text" class="form-control" id="formGroupExampleInput" placeholder="<?php echo $row['episode']?>" >
</div>
<div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Season</label>
    <input name="season" type="text" class="form-control" id="formGroupExampleInput" placeholder="<?php echo $row['season']?>"  >
</div>
<div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Synopsis</label>
    <input name="synopsis" type="text" class="form-control" id="formGroupExampleInput" placeholder="<?php echo $row['synopsis']?>" >
</div>
<button type="submit" class="btn btn-danger" name="editseries">Edit Series</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

        <script>

            $(document).ready(function () {

                $("#genre").select2({

                    placeholder: " genre"

                });

            });

        </script>