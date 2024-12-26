<?php
include "dbconnect.php";

$sql = "select * from customers order by name";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Ajax Examples</title>

    <style>
        body {
            width: 50%;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Select a Customer to see the details</h1>
        <div class="mb-3 col-md-4">
            <label for="" class="form-label"></label>
            <select
                class="form-select form-select-lg"
                name="customer"
                id="customer" onchange="getCustomer(this.value)">
                <option value="">Select one</option>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                <?php }
                } ?>
            </select>
        </div>
        <div id="showCust"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        function getCustomer(id) {
            $.ajax({
                type: "post",
                url: "get_customer.php",
                data: {
                    id: id
                },
                dataType: "text",
                success: function(response) {
                    $("#showCust").html(response);
                },
                error: function() {
                    console.log("Ajax error");
                }

            })
        }
    </script>
</body>

</html>