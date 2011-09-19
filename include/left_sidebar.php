<div class="announcement">
  <h2>Tickets on Sale</h2>
  <div class="text">
    <p>We are happy to announce that the Durga Puja 2011, 3-day family and 1-day individual ticket packages are for sale now, but not for long.
    Grab the opportunity and buy your tickets online, right now!</p>
  </div>
  <center>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="C9AVW7D7DYAJ6">
    <table>
    <tr><td><input type="hidden" name="on0" value=">"><strong>Ticket Packages</strong></td></tr><tr><td>
      <input type="radio" name="os0" value="All 3 Days - Per Family"> All 3 Days - Per Family $160.00<br/>
      <input type="radio" name="os0" value="All 3 Days - Per Adult"> All 3 Days - Per Adult $80.00<br/>
      <input type="radio" name="os0" value="Saturday All Day - Per Adult"> Sat. All Day - Per Adult $45.00<br/>
      <input type="radio" name="os0" value="Saturday Night - Per Adult"> Sat. Night - Per Adult $35.00<br/>
      <input type="radio" name="os0" value="Sunday All Day - Per Adult"> Sun. All Day - Per Adult $25.00<br/>
      <input type="radio" name="os0" value="Sunday Bollywood - Per Adult"> Sun. Bollywood - Per Adult $15.00<br/>
      <input type="radio" name="os0" value="Sunday Bollywood - Per Child (10yrs+)"> Sun Bollywood - Per Child (10yrs+) $10.00<br/>
    </td></tr>
    </table>
    <input type="hidden" name="currency_code" value="USD">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
  </center>
  <br />
  <div align="center" class="text">
    <div align="left">
      <a href="images/banner/DP_2011_Flyer_web.jpg" target="_blank"><img width="100px" src="images/banner/DP_2011_Flyer_thumb.jpg" /></a>
      &nbsp;&nbsp;
      <a href="images/banner/Bollywood_Night_Flyer.jpg" target="_blank"><img width="100px" src="images/banner/Bollywood_Night_Flyer_thumb.jpg" /></a>
      <br/>
    </div>
    <p><a href="events_DP2011.php">View full program times and details</a></p>
  </div>
</div>
<br/>
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
