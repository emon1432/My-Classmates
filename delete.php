<?php include 'header.php';
if (isset($_POST['deletebtn'])) {
    include "config.php";
    $roll = $_POST['sroll'];
    $section = $_POST['section'];
    include 'config.php';
    if ($section == "sec_a") {
        $sql = "DELETE FROM sec_a WHERE Roll={$roll}";
    } else {
        $sql = "DELETE FROM sec_b WHERE Roll={$roll}";
    }
    $result = $conn->query($sql) or die("Query Ubsuccessful!!!");
    header('Location: http://localhost/CRUD/index.php');
    $conn->close();
}
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Section</label>
            <select name="section">
                <option value="" selected disabled>Select Section</option>
                <option value="sec_a">A</option>
                <option value="sec_b">B</option>
            </select>
        </div>
        <div class="form-group">
            <label>Roll</label>
            <input type="text" name="sroll" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>

</html>