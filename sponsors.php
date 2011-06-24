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
                    	<div class="recent_tweets">
                        	<h2>Recent Tweets</h2>
                            <div id="twitters">Tweets Loading...</div>
                        </div>
                        
                        <div class="share">
                        	<table width="100%" cellpadding="0" cellspacing="0">
                            	<tr>
                                	<td style="vertical-align:middle;" align="left"><h2>Share</h2></td>
                                    <td align="right" style="padding-top:0px;"><img src="images/icon_orkut.png" alt="Orkut" /> &nbsp; <img src="images/icon_twitter.png" alt="Twitter" /> &nbsp; <img src="images/icon_facebook.png" alt="Facebook" /></td>
                                </tr>
                            </table>
                        </div>
                        
                        <?php include("include/spread_love.php"); ?>
                    </td><!-- Left Sidebar End -->
                    
                    <!-- Content Area Start -->
                    <td class="content_mid">
                    	<div class="header">
                        	<h2>Sponsors</h2>
                            
                            
                            
                        </div>
                    </td><!-- *********** Content Area End *************** -->
                    
                    
                    
                    
                	<!-- ############# Right Sidebar Start Here ############## -->
                    <td class="content_right">
                    	<div class="announcement">
                        	<h2>Announcements</h2>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="read_more"><a href="#">read more &raquo;</a></div>
                        </div>
                        
                        <div class="header">
                        	<h2>Past Events</h2>
                        </div>
                    </td><!-- ############# Right Sidebar End ############## -->
                    
                    
                </tr>
            </table>
        </div>
        
        
        
<?php
include("include/footer.php");
// ********* Add this part in every page **** //
?>