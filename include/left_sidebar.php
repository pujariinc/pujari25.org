<div class="recent_tweets">
  <h2>Recent Tweets</h2>
  <div id="twitters">Tweets Loading...</div>
</div>

<div class="sidebar_share">
  <table width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td class="vertical_middle" align="left"><h2>Share</h2></td>
        <td align="right"><a href="http://www.orkut.com/Community?cmm=87285505" target="_blank"><img src="images/icon_orkut.png" alt="Orkut" /></a> &nbsp; <a href="http://twitter.com/pujariatl" target="_blank"><img src="images/icon_twitter.png" alt="Twitter" /></a> &nbsp; <a href="http://www.facebook.com/group.php?gid=89581558856" target="_blank"><img src="images/icon_facebook.png" alt="Facebook" /></a></td>
    </tr>
  </table>
</div>

<?php
  include "Send_Mail.php";
  require_once("PHPMailer_v5.1/class.phpmailer.php");
  if(isset($_REQUEST['submit']))
  {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];

    list($userName, $mailDomain) = split("@", $email);
    if (checkdnsrr($mailDomain, "MX")) {
		  #------------------------Send Mail------------------------------#
			mail_send($name,$email);
			#-------------------------End-----------------------------------#
		  $msg='<div class="success">Thank You.</div>';
    }
    else {
     $msg='<div class="warning">Entered email is incorrect.</div>';
    }
  }
?>

<div class="spread_love">
  <h2>Spread the love</h2>
  <div><?php echo $msg; ?></div>
  <form name="spread_love" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return Validation();">
  <div class="text"> Share Pujari&rsquo;s website with your friend
    <div class="inputbox">
      <input type="text" name="name" id="name" class="input_spread_love" onFocus="this.value=='Enter your name'?this.value='':this.value=this.value;" onBlur="this.value==''?this.value='Enter your name':this.value=this.value;" value="Enter your name" />
    </div>
    <div class="inputbox">
      <input type="text" name="email" id="email" class="input_spread_love" onFocus="this.value=='Enter recipients Email Address'?this.value='':this.value=this.value;" onBlur="this.value==''?this.value='Enter recipients Email Address':this.value=this.value;" value="Enter recipients Email Address" />
    </div>
    <div class="action_btn">
      <input type="submit" name="submit" value="" class="btnSubmit" />
    </div>
  </div>
</form>
</div>
