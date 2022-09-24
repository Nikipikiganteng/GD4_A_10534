<?php
include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">
    <div class="body d-flex justify-content-between">
        <h4>Profile Page</h4>
    </div>
    <hr>
    <form action="">

    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $_SESSION['user']['name']?>"  readonly>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Email</label>
        <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $_SESSION['user']['email']?>"  readonly>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Phone Number</label>
        <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $_SESSION['user']['phonenum']?>"  readonly>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Membership</label>
        <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $_SESSION['user']['membership']?>"  readonly>
    </div>
    </form>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>