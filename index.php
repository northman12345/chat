<?php
        session_start();
        $name = $_SESSION['email'];
    
        
?>
<!doctype php>

<html lang="en">


<!-- Mirrored from www.urbanui.com/turbo/pages/tables/data-tables.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 17:04:40 GMT -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="http://www.urbanui.com/" />
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Turbo - Bootstrap Material Admin Dashboard Template</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/turbo.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="../../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />

    <link href="assets/vendors/jquery-ui-1.12.0/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">

</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="logo">
                <a href="#" class="simple-text">
                Code-Squad
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="#" class="simple-text">
                    T
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="../index.php">
                            <i class="material-icons"></i>
                            <p><h3>Contact<h4></p>
                        </a>
                    </li>
                    <?php    

require_once("code/connect.php");

    $pdo_statement = $pdo_conn->prepare("SELECT * FROM tb_account ORDER BY id DESC");
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
?>
   <?php
    if(!empty($result)) { 
        foreach($result as $row) {
    ?>
                    <li>


                        <a data-toggle="collapse" href="#layouts" class="collapsed" aria-expanded="false">
                         
                        

                    <p><?php $go= $row["image"]; echo "<img src='upload/".$go."' style='border-radius: 40px; width:50px; height:50px;' >" ?>&nbsp;&nbsp;&nbsp;<?php echo $row["first_name"]; ?></p>
    
                           
     
                        </a>
                       <hr>
                    </li>

                    <?php
        }
    }
    ?>
                   
                </ul>

            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-default navbar-absolute" data-topbar-color="blue">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
							<i class="material-icons visible-on-sidebar-regular f-26"></i>
                            <i class="material-icons visible-on-sidebar-mini f-26"></i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> DataTable </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                   <?php
                                    $pdo_statement = $pdo_conn->prepare("SELECT * FROM tb_account where email_id='$name' ");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
                                    ?>
                                    <?php $image= $result[0]['image'];echo  "<img class='img' src='upload/".$image."' style='border-radius: 40px;width:45px; height:45px;'>" ?>
                                    <span class="notification">6</span>
                                    <p class="hidden-lg hidden-md">
                                        Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="user.php">My profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Setting</a>
                                    </li>
                                    <li>
                                        <a href="code/logout.php">Logout</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                    </div>
                </div>
            </nav>
             <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfew<?php echo $name;?>fefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                           xswdwdefefefefefewfewfewfefefe
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                     
            <footer class="footer " >
                <div class="container-fluid color">
                    <nav class="pull-left navbar-fixed-bottom align color " >
                        <div >
                            <form >
                                <div class="form-group">
                                    <input type="" name="" placeholder="Type a messages">
                                </div>
                            </form>
                            
                        </div>
                    </nav>
                   
                </div>
            </footer>
        </div>
       
</body>
<!--   Core JS Files   -->
<script src="assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="assets/vendors/jquery-ui-1.12.0/jquery-ui.js"></script>
<script src="assets/vendors/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/vendors/material.min.js" type="text/javascript"></script>
<script src="assets/vendors/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="assets/vendors/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="assets/vendors/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="assets/vendors/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="assets/vendors/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/vendors/bootstrap-notify.js"></script>
<!-- DateTimePicker Plugin -->
<script src="assets/vendors/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="assets/vendors/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="assets/vendors/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Select Plugin -->
<script src="assets/vendors/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="assets/vendors/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="assets/vendors/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="assets/vendors/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="assets/vendors/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="assets/vendors/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/turbo.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });
</script>


<!-- Mirrored from www.urbanui.com/turbo/pages/tables/data-tables.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 17:04:40 GMT -->
</php>
