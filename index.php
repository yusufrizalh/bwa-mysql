<?php
require_once("./layout/master_head.php");
?>

<body>
    <?php
    include_once("./database/config.php");
    include_once("./layout/pagination.php");

    // $result = $dbConnection->query("SELECT * FROM employee ORDER BY emp_id DESC");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between mt-4">
                    <div>
                        <h3>Employees Table</h3>
                    </div>
                    <div>
                        <a class="btn btn-info text-white" href="./create.php">New Employee</a>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-md-12 mt-4">
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>HIRE DATE</th>
                        <th>OPTIONS</th>
                    </tr>
                    <?php
                    // while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    foreach ($employees as $row) :
                    ?>
                        <tr id="<?php echo $row['emp_id']; ?>">
                            <td><?php echo $row['emp_id']; ?></td>
                            <td><?php echo $row['emp_name']; ?></td>
                            <td><?php echo $row['emp_email']; ?></td>
                            <td><?php echo $row['emp_hire_date']; ?></td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="./edit.php?emp_id=<?php echo $row['emp_id']; ?>">Edit</a>
                                <!-- <a id="remove" class="btn btn-warning btn-sm" href="./destroy.php?emp_id=<?php echo $row['emp_id']; ?>">Delete</a> -->
                                <button class="btn btn-danger btn-sm remove">Delete</button>
                            </td>
                        </tr>
                    <?php
                    // }
                    endforeach;
                    ?>
                </table>
            </div>

            <div class="col-md-12">
                <div class="row d-flex justify-content-center">
                    <?php for ($x = 1; $x <= $pages; $x++) : ?>
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="?page=<?php echo $x; ?>&per-page=<?php echo $perPage; ?>">
                                    <?php echo $x; ?>
                                </a>
                            </li>
                        </ul>
                    <?php endfor; ?>
                </div>

            </div>
        </div>
    </div>

    <?php
    include_once("./layout/master_footer.php");
    ?>

    <script type="text/javascript">
        $(".remove").click(function() {
            var id = $(this).parents("tr").attr("id");
            if (confirm("Are you sure to delete this record?")) {
                $.ajax({
                    url: 'destroy.php',
                    type: 'GET',
                    data: {
                        emp_id: id
                    },
                    error: function() {
                        alert('Something is wrong!');
                    },
                    success: function(data) {
                        $("#" + id).remove();
                        alert("Employee data is deleted!");
                    }
                });
            }
        });
    </script>