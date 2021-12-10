<?php
include_once("./layout/master_head.php");
?>

<body>
    <?php
    include("./database/config.php");
    $emp_id = $_GET['emp_id'];

    $result = $dbConnection->query("SELECT * FROM employee WHERE emp_id='$emp_id'");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <h3 class="mt-4">Edit Employee</h3>
                </div>
            </div>
        </div>
        <hr>
        <?php
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <form action="./update.php" method="post" autocomplete="off">
                <div class="form-group">
                    <label for="emp_id">Employee ID</label>
                    <input type="text" class="form-control" name="emp_id" id="emp_id" value="<?php echo $row['emp_id']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="emp_name">Employee Name</label>
                    <input type="text" class="form-control" name="emp_name" id="emp_name" value="<?php echo $row['emp_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="emp_email">Employee Email</label>
                    <input type="email" class="form-control" name="emp_email" id="emp_email" value="<?php echo $row['emp_email']; ?>">
                </div>
                <div class="form-group">
                    <label for="emp_name">Employee Hire Date</label>
                    <input type="text" class="form-control" name="emp_hire_date" id="emp_hire_date" value="<?php echo $row['emp_hire_date']; ?>">
                </div>
                <div>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn btn-info btn-sm" type="submit">
                                Edit Employee
                            </button>
                        </div>
                        <div class="col-md-2">
                            <a class="btn btn-secondary btn-sm" href="./index.php">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        <?php
        }
        ?>
    </div>

    <?php
    include_once("./layout/master_footer.php");
    ?>