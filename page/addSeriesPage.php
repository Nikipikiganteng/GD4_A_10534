<?php
include '../component/sidebar.php'

?>

<div class="container p-3 m-4 h-100" style="background-color: white; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">
    <div class="body d-flex justify-content-between">
        <h4>ADD SERIES</h4>
    </div>
    <hr>
    
    
    <form action="../process/addSeriesProcess.php" method="post">
  <div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Series Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="name">
    </div>
  </div>
  <div class="row mb-3">
    <label for="genre" class="col-sm-2 col-form-label">Genre</label>
    <div class="col-sm-10">
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
  <div class="row mb-3">
    <label for="release" class="col-sm-2 col-form-label">Realease</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="realese" name="realese" placeholder="release">
    </div>
  </div>
  <div class="row mb-3">
    <label for="episode" class="col-sm-2 col-form-label">Episode</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="episode" name="episode" placeholder="episode">
    </div>
  </div>
  <div class="row mb-3">
    <label for="season" class="col-sm-2 col-form-label">Season</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="season" name="season" placeholder="season">
    </div>
  </div>
  <div class="row mb-3">
    <label for="genre" class="col-sm-2 col-form-label">Synopsis</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="season" name="synopsis" placeholder="synopsis">
    </div>
  </div>
  <button type="submit" class="btn btn-danger" name="addseries">Add Series !</button>
</form>
</aside>
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
</body>

</html>