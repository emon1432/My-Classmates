<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <h3>Choose Section : </h3>
    <form action="" method="post">
        <label>
            <input type="radio" name="section" value="sec_a"> A
        </label>
        <label>
            <input type="radio" name="section" value="sec_b"> B
        </label>
        <br><br>
        <input type="submit" name="submit" vlaue="Get Values">
    </form>
    <br>
    <?php
    include 'config.php';
    $sql;
    if (isset($_POST['submit'])) {
        if (!empty($_POST['section'])) {

            session_start();
            $_SESSION["sec"] = $_POST['section'];

            if ($_POST['section'] == 'sec_a') {
                echo "<h2 align = center> Section A </h2>";

                $sql = "SELECT * FROM sec_a JOIN gender ON sec_a.Gender=gender.gender_id LEFT JOIN blood_group ON sec_a.Blood_group=blood_group.blood_id ORDER BY Roll ASC";
                
                // $_SESSION["sec"]="sec_a";
            } else {
                echo "<h2 align = center> Section B </h2>";
                $sql = "SELECT * FROM sec_b JOIN gender ON sec_b.Gender=gender.gender_id LEFT JOIN blood_group ON sec_b.Blood_group=blood_group.blood_id ORDER BY Roll ASC";
                // $_SESSION["sec"]="sec_b";
            }
        } else {
            echo "<h2 align=center >Please choose an option!!!</h2>";
        }

        $result = $conn->query($sql) or die("Query Unsuccessful!!!");
    }
    if ($result->num_rows > 0) { ?>
        <table cellpadding="7px">
            <thead>
                <th>Roll</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Phone</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['Roll']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['gender_name']; ?></td>
                        <td><?php echo $row['blood_name']; ?></td>
                        <td><?php echo $row['Phone_Number']; ?></td>
                        <td>
                            <a href='edit.php?roll=<?php echo $row['Roll']; ?>'>Edit</a>
                            <a href='delete-inline.php?roll=<?php echo $row['Roll']; ?>'>Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else {
        echo "<h2>No Record Found!!!</h2>";
    }
    $conn->close();
    ?>
</div>
</div>
</body>

</html>