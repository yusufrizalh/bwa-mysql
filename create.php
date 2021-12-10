<?php
include_once("./layout/master_head.php");
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <h3 class="mt-4">Create Employee</h3>
                </div>
                <div>
                    <a class="btn btn-link text-info" href="./index.php">List of Employees</a>
                </div>
            </div>
        </div>
        <hr>
        <form action="./store.php" method="post" autocomplete="off">
            <div class="form-group">
                <label for="emp_name">Employee Name</label>
                <input type="text" class="form-control" name="emp_name" id="emp_name" placeholder="Enter employee name" required>
            </div>
            <div class="form-group">
                <label for="emp_email">Employee Email</label>
                <input type="email" class="form-control" name="emp_email" id="emp_email" placeholder="Enter employee email" required>
            </div>
            <div>
                <div class="row">
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-sm" type="submit">
                            Create Employee
                        </button>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-secondary btn-sm" href="./index.php">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php
    include_once("./layout/master_footer.php");
    ?>