<?php
include 'include/connection.php';
?>



<!DOCTYPE html>
<html lang="en">

<!-- blank.html  Tue, 07 Jan 2020 03:35:42 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>User-page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- General CSS Files -->
<?php
include 'include/style.php'
?>
</head>

<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
       
        <?php include 'include/navbar.php'; ?>
        <?php include 'include/sidebar.php'; ?>
       
        <!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>All Users</h1>
                </div>

                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>first name</th>
                                            <th>last name</th>
                                            <th>gender</th>
                                            <th>Date of birth</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Ammaz</td>
                                                <td>Khan</td>
                                                <td>Male</td>
                                                <td>199-12-20</td>
                                                <td>
                                                    <a href="delet.php" class="btn btn-warning">
                                                        <i class="fa-solid fa-pencil"></i>
                                                    </a>
                                                    <a href="delet.php" class="btn btn-danger">
                                                        <i class="fa-solid fa-pencil"></i>
                                                    </a>
                                            </td>
                                            </tr>
                                        </tbody>
                                        <?php
                                         $q ="SELECT * user;";
                                        $var = mysqli_query($link,$q);

                                        while($row = mysqli_fetch_assoc($var)){
                                        
                                        ?>






                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Start app Footer part -->
        <?php include 'include/footer.php'; ?>

    </div>
</div>

<!-- General JS Scripts -->
<?php
include 'include/script.php';

?>
</body>

<!-- blank.html  Tue, 07 Jan 2020 03:35:42 GMT -->
</html>