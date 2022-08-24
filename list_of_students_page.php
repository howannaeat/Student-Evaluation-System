<?php include 'includes/header.php'; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'includes/sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'includes/topbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">List of Students</h1>


                        <a href="#add_student_modal" class="d-none d-sm-inline-block btn btn-primary shadow-sm" id="#add_student" data-toggle="modal" data-target="#add_student_modal"><i class="fas fa-plus"></i> Add Student</a>
                        <?php require_once 'modals/add_student_modal.php'; ?>


                    </div>

                    <!-- BREADCRUMB  -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">List of Students</a></li>
                        </ol>
                    </nav>

                    <!-- Content Row -->
                    <div class="col mt-2">
                        <!-- table -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Table</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-sm text-center" style="width: 100%" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th width="12%">Student ID</th>
                                                <th width="35%">Name</th>
                                                <th width="5%">Sex</th>
                                                <th width="5%">Address</th>
                                                <th width="10%">Birthdate</th>
                                                <th width="10%">Year Level</th>
                                                <th width="23%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include 'dbconnect.php';

                                            $sql = "SELECT * FROM tbl_student_info";
                                            $result = $dbcon->query($sql);
                                            $dbcon->close();
                                                while($rows = $result->fetch_assoc()) {

                                                
                                            ?>
                                            <tr>
                                                <th><?php echo $rows['student_id']; ?></th>
                                                <th><?php echo $rows['first_name'] . $rows['middle_name'] . $rows['last_name'] . $rows['suffix']; ?></th>
                                                <th><?php echo $rows['sex']; ?></th>
                                                <th><?php echo $rows['address']; ?></th>
                                                <th><?php echo $rows['birthdate']; ?></th>
                                                <th><?php echo $rows['yearlevel']; ?></th>
                                                <th>
                                                    <a href="<?php echo 'view_student_record.php?id='.$rows['student_id'] ;?>" type="submit" class="btn btn-primary">
                                                        <i class="fas fa-eye"></i> View</a>


                                                    <a href="<?php echo 'edit_student_modal.php?id='.$rows['student_id'];?>" type="submit" class="btn btn-success" id="#edit_student" data-toggle="modal" data-target="#edit_student_modal">
                                                        <i class="fas fa-edit"></i> Edit</a>


                                                        <?php require_once 'modals/edit_student_modal.php'; ?>
                                                    <a href="<?php echo 'delete_student_modal.php?id='.$rows['student_id'];?>" type="submit" class="btn btn-circle btn-danger">
                                                        <i class="fas fa-trash"></i> </a>
                                                </th>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end of table card -->
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include 'logout.php'; ?>

    <!-- Bootstrap core JavaScript-->
    <?php include 'includes/scripts.php'; ?>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>