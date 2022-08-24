<?php include 'includes/header.php'; ?>

<body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 bg-light mt-5 px-0">
                <h3 class="text-center p-3"> LOGIN </h3>
                <hr />
             
                <!-- form -->
                <form action="process/process_login.php" method="POST" class="p-4">
                    <!-- username -->
                    <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-md" placeholder="Username" required>
                    </div>

                    <!-- password -->
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-md" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="login" class="btn btn-primary btn-block">
                    </div>

                    <div class="form-group">
                        <a href="register.php">Don't have an account?</a>
                    </div>

                    <!-- error handler -->
                    <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyinput") {
                            echo '<p class="text-center alert alert-danger" role="alert">Fill in all fields!</p>';
                        } 
                        elseif ($_GET['error'] == "wronglogin") {
                            echo '<p class="text-center alert alert-danger" role="alert">Wrong username or password!</p>';
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