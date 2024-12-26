<?php
include "dbconnect.php";
$id = $_POST['id'];
$sql = "select * from customers where id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) { ?>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $row = $result->fetch_assoc();
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['age'] ?></td>
                <td><?= $row['gender'] ?></td>
            </tr>

        </tbody>
    </table>

<?php }
