<?php
if (isset($_POST['addseries'])) {
    include('../db.php');
    $name = $_POST['name'];
    $genre = $_POST['genre'];
    $realease = $_POST['realease'];
    $episode = $_POST['episode'];
    $season = $_POST['season'];
    $synopsis = $_POST['synopsis'];
    

    if(empty($name) OR empty($genre) OR empty($realease)  OR empty($episode) OR empty($season) OR empty($synopsis)){
        echo
            '<script>
        alert("Add Series Failed --> EMPTY INPUT");
        window.location = "../page/listSeriesPage.php";
        </script>';
    }else{
        $str="";

        foreach ($genre as $stringGenre) {
            $str.= $stringGenre;
            $str.= ", ";
        }
        $query = mysqli_query(
            $con,
            "INSERT INTO series(name, genre, realease, episode, season, synopsis)
        VALUES
        ('$name', '$str', '$realease','$episode', '$season', '$synopsis')"
        )
            or die(mysqli_error($con));
        if ($query) {
            echo
            '<script>
        alert("Add Series Success");
        window.location = "../page/listSeriesPage.php"
        </script>';
        } else {
            echo
            '<script>
        alert("Add Series Failed");
        </script>';
        }
    }
    
} else {
    echo
    '<script>
window.history.back()
</script>';
}
?>