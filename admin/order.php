<?php session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("bakery");
//	echo $_SESSION['mysession']['name'];

	if(!isset($_SESSION['mysession']))
	{
		header("location:index.php");
		exit;
	}
	
?>	
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Atlant - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
             <div class="page-sidebar">
             <?php include "includes/menu.php" ; ?>
           </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
               <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                     
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="dashbord.php">Dashbord</a></li>                    
                    <li><a href="#">Order</a></li>
                    <li class="active"><a href="order.php">Order Tables</a></li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>All Order</h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Default</h3>
                                                                    
                                </div>
                                <div class="panel-body">
                                     <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Category Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>System Architect</td>
                                                                                             
                                                <td><button type="button" class="btn btn-primary">Edit</button>
                                                
                                                &nbsp;&nbsp;
                                                
                                                <button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Accountant</td>
                                               
                                                <td><button type="button" class="btn btn-primary">Edit</button>
                                                
                                                &nbsp;&nbsp;
                                                
                                                <button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Junior Technical Author</td>
                                               
                                                <td><button type="button" class="btn btn-primary">Edit</button>
                                                
                                                &nbsp;&nbsp;
                                                
                                                <button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Senior Javascript Developer</td>
                                               
                                                <td><button type="button" class="btn btn-primary">Edit</button>
                                                
                                                &nbsp;&nbsp;
                                                
                                                <button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Accountant</td>
                                                
                                                <td><button type="button" class="btn btn-primary">Edit</button>
                                                
                                                &nbsp;&nbsp;
                                                
                                                <button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Integration Specialist</td>
                                                
                                                <td><button type="button" class="btn btn-primary">Edit</button>
                                                
                                                &nbsp;&nbsp;
                                                
                                                <button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Sales Assistant</td>
                                                
                                                <td><button type="button" class="btn btn-primary">Edit</button>
                                                
                                                &nbsp;&nbsp;
                                                
                                                <button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Integration Specialist</td>
                                                
                                                <td><button type="button" class="btn btn-primary">Edit</button>
                                                
                                                &nbsp;&nbsp;
                                                
                                                <button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Javascript Developer</td>
                                               
                                                <td><button type="button" class="btn btn-primary">Edit</button>
                                                
                                                &nbsp;&nbsp;
                                                
                                                <button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Software Engineer</td>
                                                
                                                <td><button type="button" class="btn btn-primary">Edit</button>
                                                
                                                &nbsp;&nbsp;
                                                
                                                <button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Office Manager</td>
                                                
                                                <td><button type="button" class="btn btn-primary">Edit</button>
                                                
                                                &nbsp;&nbsp;
                                                
                                                <button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Support Lead</td>
                                               
                                                <td><button type="button" class="btn btn-primary">Edit</button>
                                                
                                                &nbsp;&nbsp;
                                                
                                                <button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Regional Director</td>
                                               
                                                <td><button type="button" class="btn btn-primary">Edit</button>
                                                
                                                &nbsp;&nbsp;
                                                
                                                <button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Senior Marketing Designer</td>
                                                
                                                <td><button type="button" class="btn btn-primary">Edit</button>
                                                
                                                &nbsp;&nbsp;
                                                
                                                <button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

                            <!-- START SIMPLE DATATABLE -->
                            
                            <!-- END SIMPLE DATATABLE -->
                        </div>
                    </div>                                
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
            </div>    
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->       
        
        <!-- MESSAGE BOX-->
        <?php include "includes/logout.php" ; ?>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                       
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->                

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>    
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
       
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
    </body>
</html>






