<?php
 const ROOT ='mysql:dbname=e_classe_db;host=localhost;port=3306';
 const USERNAME ='root';
 const PASSWORD='';
 $pdo=new PDO(ROOT,USERNAME,PASSWORD);

   $students=$pdo->prepare('SELECT COUNT(*) as number  FROM students');
   $students->execute();
   $nStudents= $students->fetch(PDO::FETCH_ASSOC);
   $coursees=$pdo->prepare('SELECT COUNT(*) as number  FROM courses');
   $coursees->execute();
   $nCourses= $coursees->fetch(PDO::FETCH_ASSOC);
   $payment=$pdo->prepare('SELECT SUM(amount_paid) as totalP FROM payment_details');
   $payment->execute();
   $tpayment= $payment->fetch(PDO::FETCH_ASSOC);



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="Le site officiel de restauration d'e-learning classe  Si vous etes actuellement  un étiduant  YouCode creer votre compte et commencer par choisir plusieurs options "/>
    <meta name="author"   content="payment, students, home, courses, logout"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DashbordAdmin</title>
    <!-- Favicon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/Dashbord.css">
</head>

<body>

    <!-- Sidebar-->
    <?php include 'include/side.php'?>

    <!-- Page content wrapper-->
    <!-- Top navigation-->
    <?php include 'include/nav.php'?>


    <!-- Page content-->
    <div class="container-fluid">

        <div class="container">

            <div class="row p-3 pt-4">

                <div class="col m-3 rounded-3 h-auto cart-info-1 p-4">
                    <a href="">
                        <i class="bi  bi-mortarboard fs-2"></i>
                        <p class="fs-5 text-secondary">students</p>
                        <p class="fs-2 fw-bold text-end"><?php echo $nStudents['number']?></p>
                    </a>
                </div>

                <div class="col m-3 rounded-3 h-auto cart-info-2 p-4">
                    <a href="">
                        <i class="bi  bi-bookmark fs-2"></i>
                        <p class="fs-5 text-secondary">Course</p>
                        <p class="fs-2 fw-bold text-end"><?php echo $nCourses['number']?></p>
                    </a>
                </div>

                <div class="col m-3 rounded-3 h-auto cart-info-3 p-4 ">
                    <a href="">
                        <i class="bi  bi-sliders fs-2"></i>
                        <p class="fs-5 text-secondary">Payments</p>
                        <p class="fs-3 fw-bold text-end"><span class="fs-5">DHS</span><?php echo $tpayment['totalP']?></p>
                    </a>
                </div>

                <div class="col m-3 rounded-3 h-auto cart-info-4 p-4">
                    <a href="">
                        <i class="bi bi-person fs-2"></i>
                        <p class="fs-5 p-user">Users</p>
                        <p class="fs-2 fw-bold text-end">3</p>
                    </a>
                </div>


            </div>

        </div>


    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="side/side.js"></script>
</body>

</html>