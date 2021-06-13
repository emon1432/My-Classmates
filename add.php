<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
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
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Gender</label>
            <select name="gender">
                <option value="" selected disabled>Select Gender</option>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM gender";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['gender_id']?>"><?php echo $row['gender_name']?></option>
                <?php } ?>

            </select>
        </div>

        <div class="form-group">
            <label>Blood Group</label>
            <select name="blood_group">
                <option value="" selected disabled>Select Blood Group</option>
                <?php 
                 $sql1 = "SELECT * FROM blood_group";
                 $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful");
                 while($row1 = mysqli_fetch_assoc($result1)){
                 ?>
                ?>
                <option value="<?php echo $row1['blood_id']?>"><?php echo $row1['blood_name']?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save" />
    </form>
</div>
</div>
</body>

</html>