<?php
include '../component/sidebar.php';
include '../db.php';
$id=$_GET['id'];
$query = "SELECT * from movies where id='$id'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error($con));
$row = mysqli_fetch_assoc($result);

?>

<div class="container p-3 m-4 h-100" style="background-color: white; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">
    <div class="body d-flex justify-content-between">
        <h4>Edit Page</h4>
    </div>
    <hr>
    <form action="../process/editMovieProcess.php" method="post">

<div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">ID</label>
    <input name="id" type="text" class="form-control" value="<?php echo $row['id']?>" readonly >
</div>
<div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Name</label>
    <input name="name" type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $row['name']?>" >
</div>
<div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Genre</label>
    <input name="genre" type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $row['genre']?>" >
</div>
<div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Realease</label>
    <input name="realese" type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $row['realese']?>" >
</div>
<div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Season</label>
    <input name="season" type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $row['season']?>"  >
</div>
<div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Synopsis</label>
    <input name="synopsis" type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $row['synopsis']?>" >
</div>
<button type="submit" class="btn btn-danger" name="editmovie">Edit Movie</button>
</form>