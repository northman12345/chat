<?php
        session_start();
        $name = $_SESSION['email'];

        
?>

<!doctype html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/turbo/pages/sample-pages/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 17:00:36 GMT -->
<head>
    <style type="text/css">
       
        button{
          border-radius: 12px;
         padding: 7px;
         width: 100px;
         background-color: #2196F3;
         box-shadow: black;
         border: #2196F3;
         color: white;
        }
    </style>
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
                        <a href="index.php">
                            <p>Dashboard</p>
                        </a>
                    </li>
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
            <?php
if( isset($_POST['save'])) {
require_once("code/connect.php");
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
        $dob = $_POST['dob'];
    $number = $_POST['number'];
    $status=$_POST['status'];


    $pdo_statement=$pdo_conn->prepare("update tb_account set first_name='" . $firstname . "', last_name='" . $lastname . "', email_id='" . $email . "',date_of_birth='" . $dob . "',phone_number='" . $number . "',status='" . $status . "' where email_id='$name'");
    $result = $pdo_statement->execute();
   
}
 $name = $_SESSION['email'];

$pdo_statement = $pdo_conn->prepare("SELECT * FROM tb_account where email_id='$name' ");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();

?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card" id="profile-main">

                                <div class="card-content">

                                    <h3>Welcome Mr <?php echo $result[0]['last_name']; ?></h3>



                                    <div role="tabpanel">
                                        <ul class="nav nav-pills">
                                            <li class="active"><a href="#profile11" aria-controls="profile11" role="tab" data-toggle="tab">Profile</a>
                                            </li>
                                            <li><a href="#activities11" aria-controls="messages11" role="tab" data-toggle="tab">Change Password</a>
                                            </li>
                                           

                                        </ul>

                                        <div class="tab-content">

                                            <div role="tabpanel" class="tab-pane active" id="profile11">
                                                <p></p>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="p-15">
                                                            <h4>Status</h4>
                                                            <hr>
                                                            <div class="row m-l-3">
                                                                <div class="col-sm-4 p-2">
                                                <div class="form-group">
                                                    <form method="post">
                                          <p>   <textarea name="status"  style="padding: 10px; width: 350px; border-radius: 15px;"> <?php echo $result[0]['status']; ?></textarea></p>
                                                 </div >

                                                                    </div>
                                                                    </div><br><br>

                                                            <h4>Profile Details</h4>
                                                            <hr>
                                                            <div class="row m-l-5">
                                                                <div class="col-sm-4 p-2">
                                                     
                                                  <div class="form-group">
                                                     <p><strong><input required="" type="text" name="firstname" placeholder="first Name" value="<?php echo $result[0]['first_name']; ?> "></strong></p>
                                                 </div >
                                                 <div class="form-group">
                                                     <p><strong><input type="text" name="lastname" placeholder="Last Name" required="" value="<?php echo $result[0]['last_name']; ?>"></strong></p>
                                                 </div >
                                                 <div class="form-group">
                                                         <p><strong><input required="" type="email" name="email" class="" placeholder="Email" value="<?php echo $result[0]['email_id']; ?>"></strong></p>
                                                </div>
                                                 <div class="form-group">
                                                         <p><strong><input required="" type="date" name="dob" class="" placeholder="Date of birth" value="<?php echo $result[0]['date_of_birth']; ?>"></strong></p>
                                                </div>
                                                
                                                <div class="form-group">
                                                     <p><strong><input required="" type="text" name="number" class="" placeholder="Phone Number" value="<?php echo $result[0]['phone_number']; ?>"></strong></p>
                                                </div>
                                                <div class="form-group">
                                                    
                                                     <button class="form-control " name="save" style="padding: 3px;background-color: blue; background-color: #2196F3;
         box-shadow: black;
         border: #2196F3; border-radius: 17px;">Save</button>
                                                </div>
                                                     </form> 
                                                                </div>
                                                                
                                                            </div>
                        
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="p-15">
                                                            

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="activities11">
                                                <div class="widget p-25">

                                                    <div class="widget-body">
                                                        <div class="streamline sl-style-2">
                                                            <div c>
                                                                <div class="sl-content">
                                        
                                                                    <p><input type="" name="" class="form-control" placeholder="current Password"></p>

                                                                     <p><input type="" name="" class="form-control" placeholder="New Password"></p>
                                                                      <p><input type="" name="" class="form-control" placeholder="Confirm New Password"></p>
                                                                       
                                                                </div>
                                                            </div>
                                                            
                                                           
                                                            
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="settings11">
                                                <div class="widget p-25">
                                                    <div class="widget-body">
                                                        <div class="select">
                                                            <select class="form-control">
                                                           
                                                        </div>
                                                        <div class="select m-t-15">
                                                            <select class="form-control">
                                                                        <option>Select an Option</option>
                                                                        <option>Option 1</option>
                                                                        <option>Option 2</option>
                                                                        <option>Option 3</option>
                                                                        <option>Option 4</option>
                                                                        <option>Option 5</option>
                                                                    </select>
                                                        </div>

                                                        <div class="togglebutton m-t-30">
                                                            <label>
                                        <input type="checkbox"> Toggle Setting 1
                                    </label>
                                                        </div>
                                                        <div class="togglebutton m-t-15">
                                                            <label>
                                        <input type="checkbox" checked> Toggle Setting 2
                                    </label>
                                                        </div>

                                                        <div class="checkbox m-b-15 m-t-30">
                                                            <label><input type="checkbox" value=""><i class="input-helper f-10"></i>Settings option 1</label>
                                                        </div>
                                                        <div class="checkbox m-b-15 m-t-10">
                                                            <label><input type="checkbox" value=""><i class="input-helper f-10"></i>Settings option 2</label>
                                                        </div>

                                                        <div class="m-t-30">
                                                            <div class="radio">
                                                                <label>
                                                                          <input type="radio" name="optionsRadios" checked="true"> Option 1
                                                                      </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                          <input type="radio" name="optionsRadios"> Option 2
                                                                      </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                         <?php
if( isset($_POST['change'])) {
require_once("code/connect.php");
   
$pic=$_FILES["fileToUpload"]["name"];
   


$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 0;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
      

    $pdo_statement=$pdo_conn->prepare("update tb_account set image='" . $pic . "' where email_id='$name'");
    $result = $pdo_statement->execute();
   
}
 $name = $_SESSION['email'];

$pdo_statement = $pdo_conn->prepare("SELECT * FROM tb_account where email_id='$name' ");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                   <?php $image= $result[0]['image'];echo  "<img class='img' src='upload/".$image."' style='width:220px; height:150px;'>" ?>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <h6 class="category text-gray">CEO / Co-Founder</h6>
                                    <h4 class="card-title">Alec Thompson</h4>
                                    <div class="row">
                                        <div class="col-md-3">
                                <form  method="post" enctype="multipart/form-data">

                                        <input type="file" name="fileToUpload" value="good" class="btn btn-info" ><br><br>
                                        <button name="change">change</button>
                                    </form>
                                    </div>
                                    </div>
                            
                                    <a href="#pablo" class="btn btn-rose btn-round">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#">Turbo</a> BootStrap Admin Dashboard
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<<script src="assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
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
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
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



<!-- Mirrored from www.urbanui.com/turbo/pages/sample-pages/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jan 2019 17:00:36 GMT -->
</html>
