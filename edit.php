<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    include 'config.php';
    $roll = $_GET['roll'];
    session_start();
    $section = $_SESSION["sec"];
    if ($section == "sec_a") {
        $sql = "select * from sec_a where Roll = {$roll}";
    } else {
        $sql = "select * from sec_b where Roll = {$roll}";
    }
    $result = $conn->query($sql) or die("Query Ubsuccessful!!!");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
            <form class="post-form" action="updatedata.php" method="post">
                <div class="form-group">
                    <label>Roll</label>
                    <b><?php echo $row['Roll']; ?></b>
                    <!-- <input type="text" name="sroll" /> -->
                </div>
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
    ?>
</div>
</div>
</body>

</html>