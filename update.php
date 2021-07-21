<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
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
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
    <?php
    if (isset($_POST['showbtn'])) {
        include 'config.php';
        $roll = $_POST['sroll'];
        $sec = $_POST['section'];

        if ($sec == "sec_a") {
            $sql = "SELECT * FROM sec_a WHERE Roll = {$roll}";
        } else {
            $sql = "SELECT * FROM sec_b WHERE Roll = {$roll}";
        }
        $result = $conn->query($sql) or die("Query Ubsuccessful!!!");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
    ?>
                <form class="post-form" action="updatedata.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="hidden" name="sroll" value="<?php echo $row['Roll']; ?>">
                        <input type="text" name="sname" value="<?php echo $row['Name']; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <?php
                        $sql1 = "SELECT * FROM gender";
                        $result1 = $conn->query($sql1) or die("Query Ubsuccessful!!!");
                        if ($result1->num_rows > 0) {
                            echo '<select name="gender">';
                            while ($row1 = $result1->fetch_assoc()) {
                                if ($row['Gender'] == $row1['gender_id']) {
                                    $select = "selected";
                                } else {
                                    $select = "";
                                }
                                echo "<option {$select} value='{$row1['gender_id']}'>{$row1['gender_name']}</option>";
                            }
                            echo "</select>";
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Blood Group</label>
                        <?php
                        $sql2 = "SELECT * FROM blood_group";
                        $result2 = $conn->query($sql2) or die("Query Ubsuccessful!!!");
                        if ($result2->num_rows > 0) {
                            echo '<select name="blood_group">';
                            while ($row2 = $result2->fetch_assoc()) {
                                if ($row['Blood_group'] == $row2['blood_id']) {
                                    $select = "selected";
                                } else {
                                    $select = "";
                                }
                                echo "<option {$select} value='{$row2['blood_id']}'>{$row2['blood_name']}</option>";
                            }
                            echo "</select>";
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="sphone" value=<?php echo $row['Phone_Number']; ?> />
                    </div>
                    <input class="submit" type="submit" value="Update" />
                </form>
    <?php
            }
        }
    }
    ?>
</div>
</div>
</body>

</html>