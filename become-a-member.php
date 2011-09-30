<?php
include("include/top.php");
?>
<meta name="description" content="">
<meta name="keywords" content="">
<?php
include("include/header.php");  
// ********* Add this part in every page **** //
?>

<!-- ############# Add page content here ################# -->
        
        <div id="content_container">
        	<table width="100%" cellpadding="0" cellspacing="0" border="0">
            	<tr>
                	<!-- Left Sidebar Start Here -->
                	<td class="content_left">
                    	<?php include("include/left_sidebar.php"); ?>
                    </td><!-- Left Sidebar End -->
                    
                    <!-- Content Area Start -->
                    <td class="content_mid">
                    	<div class="header">
                        	<h2>Become a Member</h2>
                          <div class="space_sml"></div>
                          <div>
                            <p> Pujari membership entitles you to a wide variety of benefits and special offers that range from building contacts, and skills that help   advance your career to free and highly discounted tickets for Pujari organized best-in-town events that save money, and much more....
                              For details, visit <a href="membership-benefits.php">Membership Benefits</a></p>
                            <br/>
                            <h2>Membership Information and Form</h2>
                            <p> Memberships are valid for ONE year, starting on the date payment is received.</p>
                            <p> To become a Pujari member, please <a href="allpdf/membershipform.pdf" target="_blank">download</a> the membership form and print it. Then complete it and mail the form along with payments to the mailing address on the form (see instructions &amp; mailing address on the form).</p>
                            <p><a href="allpdf/membershipform.pdf" target="_blank"><img src="images/icon_download.png"></a>&nbsp;&nbsp;<a href="allpdf/membershipform.pdf" target="_blank">Download the Membership Form</a> and become a member today and join the Pujari family!</p>
                          </div>
                      </div>

                      <!-- Start Membership order buy button -->
                      <?php include("include/membership_order.php"); ?>
                      <!-- End Membership order buy button -->

                    </td><!-- *********** Content Area End *************** -->
                    
                    
                    
                    
                	<!-- ############# Right Sidebar Start Here ############## -->
                    <td class="content_right">
                    	<?php include("include/right_sidebar.php"); ?>
                    </td><!-- ############# Right Sidebar End ############## -->
                    
                    
                </tr>
            </table>
        </div>
        
        
        
<?php
include("include/footer.php");
// ********* Add this part in every page **** //
?>