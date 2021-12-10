<?php
require_once("./layout/master_head.php");
?>

<body>
    <?php
    include_once("./database/config.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between mt-4">
                    <div>
                        <h3>Employees Datatable</h3>
                    </div>
                    <div>
                        <a class="btn btn-info text-white" href="./create.php">New Employee</a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-md-12">
                <div class="card p-2">
                    <div class="table-responsive mt-4">
                        <table id="employee" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>HIREDATE</th>
                                    <th>OPTIONS</th>
                                </tr>
                            </thead>
                            <?php
                            $select = $dbConnection->prepare("SELECT * FROM employee");
                            $select->execute();
                            while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <tr id="<?php echo $row['emp_id']; ?>">
                                    <td align="center"><?php echo $row['emp_id']; ?></td>
                                    <td><?php echo $row['emp_name']; ?></td>
                                    <td><?php echo $row['emp_email']; ?></td>
                                    <td><?php echo $row['emp_hire_date']; ?></td>
                                    <td align="center">
                                        <a class="btn btn-warning btn-sm" href="./edit.php?emp_id=<?php echo $row['emp_id']; ?>">Edit</a>
                                        <!-- <a id="remove" class="btn btn-warning btn-sm" href="./destroy.php?emp_id=<?php echo $row['emp_id']; ?>">Delete</a> -->
                                        <button class="btn btn-danger btn-sm remove">Delete</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- script datatables -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#employee').DataTable({
                "pageLength": 5,
                "order": [
                    [0, 'desc']
                ]
            });
        });
    </script>

    <!-- script remove -->
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
</body>

</html>