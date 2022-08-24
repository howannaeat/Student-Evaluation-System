<?php include 'includes/header.php'; ?>

<body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 bg-light mt-5 px-0">
                <h3 class="text-center p-3"> REGISTER </h3>
                <hr />


                <!-- form -->
                <form action="process/process_register.php" method="POST" class="p-4">
                    <!-- username -->
                    <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-md" placeholder="Enter username" pattern="^[a-zA-Z\s]+$" data-bv-regexp-message="Please follow Student ID No. format" required>
                    </div>

                    <!-- [\d]{4}[-][\d]{4}[-][A-Z]{2} -->

                    <!-- fname -->
                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control form-control-md" placeholder="Enter first name" pattern="^[a-zA-Z\s]+$" data-bv-regexp-message="Please follow format" required>
                    </div>

                    <!-- mname -->
                    <div class="form-group">
                        <input type="text" name="middle_name" class="form-control form-control-md" placeholder="Enter middle name" pattern="^[a-zA-Z\s]+$" data-bv-regexp-message="Please follow format">
                    </div>

                    <!-- lname -->
                    <div class="form-group">
                        <input type="text" name="last_name" class="form-control form-control-md" placeholder="Enter last name" pattern="^[a-zA-Z\s]+$" data-bv-regexp-message="Please follow format" required>
                    </div>
                    
                    <!-- suffix -->
                    <div class="form-group">
                        <input type="text" name="suffix_name" class="form-control form-control-md" placeholder="Enter suffix name" pattern="^[a-zA-Z\s]+$" data-bv-regexp-message="Please follow format" required>
                    </div>

                    <!-- password1 -->
                    <div class="form-group">
                        <input type="password" name="password1" class="form-control form-control-md" placeholder="Password" required>
                    </div>

                    <!-- password2 -->
                    <div class="form-group">
                        <input type="password" name="password2" class="form-control form-control-md" placeholder="Confirm Password" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="register" class="btn btn-danger btn-block">
                    </div>

                    <div class="form-group">
                        <a href="login.php">Already have an acount? Log in!</a>
                    </div>
                    <!-- error handler -->
                    <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyinput") {
                            echo '<p class="text-center alert alert-danger" role="alert">Fill in all fields!</p>';
                        } elseif ($_GET['error'] == "passwordsdontmatch") {
                            echo '<p class="text-center alert alert-danger" role="alert">Password does not match!</p>';
                        } elseif ($_GET['error'] == "usernametaken") {
                            echo '<p class="text-center alert alert-danger" role="alert">Username already taken!</p>';
                        } elseif ($_GET['error'] == "stmtfailed1") {
                            echo '<p class="text-center alert alert-danger" role="alert">Something went wrong, try again!</p>';
                        } elseif ($_GET['error'] == "stmtfailed2") {
                            echo '<p class="text-center alert alert-danger" role="alert">Something went wrong, try again!</p>';
                        } elseif ($_GET['error'] == "none") {
                            echo '<p class="text-center alert alert-success" role="alert">You have succesfully created an account!</p>';
                        }
                    }
                    ?>
                </form>

            </div>
        </div>
    </div>
    <!-- scripts -->
    <?php include 'includes/scripts.php'; ?>

</body>

</html>