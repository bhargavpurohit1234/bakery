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



<?php
if(isset($_GET['deleteId']))
{
	//	echo $_GET['deleteId'];
		
		
		$query = "select photo from product_master where id='".$_GET['deleteId']."'";		
		$result = mysql_query($query);
		$fs = mysql_fetch_array($result);
		unlink('img/product/'.$fs['photo']);
		
		$query = "delete from product_master where id='".$_GET['deleteId']."'";
		$result = mysql_query($query);
		echo '<script language="javascript">alert("Product Deleted Successfully") ; </script>"'	;
		echo '<script language="javascript">document.location="product_view.php";</script>"'	;		
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
        
<script language="javascript">
function delthis()
{
	var ans = confirm("Are you sure you want to delte this record\?");
	if(ans==true)
	{
		return true;
	}
	return false;
}
</script>                                        
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
                    <li><a href="#">Product</a></li>
                    <li class="active"><a href="product_view.php">Product View</a></li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>All Product's</h2>
                    <li><a href="product_create.php"><button class="btn btn-primary pull-right" name="cmdadd" id="cmdadd">Add item</button></a></li>
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
                                               <th>Photo</th>
                                               <th>Category</th>
                                               <th>Product Name</th>
                                               <th>Description</th>
                                               <th>Price</th>
                                               <th>Avalible</th>
                                               <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         
                                           <?php 
										   	$i = 1;
										 	$query = "select * from product_master order by id desc"; 										  
											$result = mysql_query($query);
											while($row = mysql_fetch_array($result)) {  ?>
                                            
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                
                                                <td>
												<img src="img/product/<?php echo $row['photo'] ?>" height="50" width="50">
												
												</td>
                                                <td><?php echo ucwords($row['category']); ?></td>
                                                <td><?php echo ucwords($row['title']); ?></td>
                                                <td><?php echo ucwords($row['description']); ?></td>   
                                                <td><?php echo ($row['price']); ?></td>
                                                <td><?php echo ($row['avalible']); ?></td>                      
                     <td><a href="product_create.php?editId=<?php echo $row['id']; ?>&action=Edit" type="button" class="btn btn-primary">Edit</a>
                      &nbsp;&nbsp;
                      <a href="product_view.php?deleteId=<?php echo $row['id']; ?>" onClick="return delthis();" type="button" class="btn btn-danger">Delete</a>
                                                
                                             </td>
												
                                            <?php $i++; } ?>
											
                                           
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






