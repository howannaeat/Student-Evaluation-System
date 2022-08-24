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
                        <h1 class="h3 mb-0 text-gray-800">Student Record</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="list_of_students_page.php">List of Students</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View Student Records</a></li>
                        </ol>
                    </nav>



                    <!-- Content Column -->
                    <form>

                        <!-- NAME -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Name</span>
                            </div>
                            <input type="text" placeholder="First Name" aria-label="First name" class="form-control" disabled>
                            <input type="text" placeholder="Middle Name" aria-label="Last name" class="form-control" disabled>
                            <input type="text" placeholder="Last Name" aria-label="Last name" class="form-control" disabled>
                            <input type="text" placeholder="Suffix" aria-label="Suffix" class="form-control" disabled>
                        </div>
                        <div class="mb-2">
                            <small class="text-muted"> First Name, Middle Name, Last Name, Suffix </small>
                        </div>

                        <div class="form-row mb-2">
                            <!-- YEAR LEVEL  -->
                            <div class="col-lg-4">
                                <label for="yearlevel">Year Level</label>
                                <input type="text" class="form-control" name="yearlevel" disabled>
                            </div>

                            <!-- SEX -->
                            <div class="col-lg-4">
                                <label for="sex">Sex</label>
                                <input type="text" class="form-control" name="sex" disabled>
                            </div>

                            <!-- BIRTHDATE -->
                            <div class="col-lg-4">
                                <label for="birthdate">Birthdate</label>
                                <input type="text" class="form-control" name="birthdate" disabled>
                            </div>
                        </div>

                        <!-- ADDRESS  -->
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" disabled>
                        </div>
                    </form>



                    <!-- FIRST SEMESTER -->
                    <div class="card-deck">
                    <div class="card shadow mb-4" style="width: 50%">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">First Semester</h6>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered display compact" style="width: 100%" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Subject Code</th>
                                            <th>Subject Description</th>
                                            <th>Grade</th>
                                            <th>Remarks</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Subject Code</td>
                                            <td>Subject Description</td>
                                            <td>Grade</td>
                                            <td>Remarks</td>
                                            <td>
                                                <a href="#" type="submit" class="btn btn-success btn-sm mr-2">
                                                    <i class="fas fa-edit"></i> Edit</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end of table card -->


                    <!-- SECOND SEMESTER -->
                    <div class="card shadow mb-4" style="width: 50%">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Second Semester</h6>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered display compact" style="width: 100%" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Subject Code</th>
                                            <th>Subject Description</th>
                                            <th>Grade</th>
                                            <th>Remarks</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Subject Code</td>
                                            <td>Subject Description</td>
                                            <td>Grade</td>
                                            <td>Remarks</td>
                                            <td>
                                                <a href="#" type="submit" class="btn btn-success btn-sm mr-2">
                                                    <i class="fas fa-edit"></i> Edit</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of table card -->


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

    

</body>

</html>