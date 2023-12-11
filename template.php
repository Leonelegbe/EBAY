<?php
/* 
Copyright Notice                 
Web Site URL:  http://www.zeeways.com                   
Script Owner eMail: mail@zeeways.com    
Date: April, 2007        
Script Name: Zeeways Auction Website PHP Script  
Copyright Details: This script is not free.  Do not Remove this Copy Right notice.  
*/
include "session.php";
include_once "myconnect.php";
$config=mysql_fetch_array(mysql_query("select site_name from zeeauctions_config"));
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title><?php echo $config["site_name"];?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="styles.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
function openpopup(pg)
{
window.open(pg,"win","top=5,left=30,toolbars=no,maximize=yes,resize=yes,width=330,height=420,location=no,directories=no,scrollbars=yes");
return false;
}
</script>
<style type="text/css">
<!--
.style1 {color: #000000}
.style2 {color: #666666}
.style4 {color: #000000}
-->
</style>
</head>

<body topmargin="1" leftmargin="1">
<table  width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="35" align="center" valign="top" bgcolor="#FFFFFF"> 
      <div align="right">
        <table id="Table_01" width="100%" height="117" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2" rowspan="3"><a href="index.php"><img src="images/logo.gif" alt="ZeeAuctions.com :: Buy &amp; Sell Anything Old or New for Free !" width="229" height="60" border="0"></a></td>
            <td colspan="8"><div align="right">
                <TABLE cellSpacing="0" cellPadding="0" width="593" border="0">
                  <!-- fwtable fwsrc="Untitled" fwbase="00000001.gif" fwstyle="Dreamweaver" fwdocid = "1843707814" fwnested="0" -->
                  <TBODY>
                    <TR>
                      <TD><IMG height="1" alt="" src="sliced1_" width="97" border="0"></TD>
                      <TD><IMG height="1" alt="" src="sliced1_" width="99" border="0"></TD>
                      <TD><IMG height="1" alt="" src="sliced1_" width="99" border="0"></TD>
                      <TD><IMG height="1" alt="" src="sliced1_" width="99" border="0"></TD>
                      <TD><IMG height="1" alt="" src="sliced1_" width="99" border="0"></TD>
                      <TD><IMG height="1" alt="" src="sliced1_" width="100" border="0"></TD>
                      <TD><IMG height="1" alt="" src="sliced1_" width="1" border="0"></TD>
                    </TR>
                    <TR>
                      <TD colspan="6" valign="top" background="images/sliced1_02.gif"><div align="center"><span class="barlink"><font color=#FFFFFF><strong><strong><font size="2" face="Arial, Helvetica, sans-serif"><a class="barlink" href="index.php">Home</a> &nbsp;</font></strong></strong></font></span><font color=#FFFFFF><strong><strong><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></strong></strong></font><strong><strong><font size="2" face="Arial, Helvetica, sans-serif"><span class="style1">|&nbsp;</span></font></strong></strong><span class="barlink"><font color=#FFFFFF><strong><strong><font size="2" face="Arial, Helvetica, sans-serif">&nbsp; <strong><a class="barlink"  href="signup.php">Register</a> &nbsp;&nbsp;</strong></font></strong></strong></font></span><span class="style1"><strong><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong>|&nbsp;</strong></font></strong></strong></span><span class="barlink"><font color=#FFFFFF><strong><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></strong> <font size="2" face="Arial, Helvetica, sans-serif">
                      <?php if(!isset($_SESSION["userid"])) {?>
                      <a class="barlink"  href="signinform.php">Login</a>
                      <?php } else{
		?>
                      <a  class="barlink" href="userhome.php">Member Home</a>
                      <?php }?>
                      </font> </strong></font><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>&nbsp;&nbsp;</strong></font></span><span class="style1"><font size="2" face="Arial, Helvetica, sans-serif"><strong>|</strong></font></span><span class="barlink">&nbsp;&nbsp; <font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong><a  class="barlink" href="add_product.php">Sell 
                      an Item </a>&nbsp;&nbsp;</strong></font></span><span class="style1"><font size="2" face="Arial, Helvetica, sans-serif"><strong>|</strong></font></span><span class="barlink"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>&nbsp;&nbsp;</strong></font> <font color="#FFFFFF"><a  class="barlink" href="advertisers/ad_home.php">Advertise</a></font></span><font color="#FFFFFF"> <font size="2" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font> <font size="2" face="Arial, Helvetica, sans-serif"><strong>&nbsp;</strong></font></font></div>
                          <div align="center"></div>
                        <div align="center"></div>
                        <div align="center"></div>
                        <div align="center"></div>
                      <div align="center"></div></TD>
                      <TD><IMG height="29" alt="" src="sliced1_" width="1" border="0"></TD>
                    </TR>
                  </TBODY>
                </TABLE>
            </div></td>
            <td colspan="2" rowspan="3">&nbsp;</td>
            <td><img src="images/spacer.gif" width="1" height="29" alt=""></td>
          </tr>
          <tr>
            <td colspan="8"><img src="images/sliced1_04.gif" width="593" height="1" alt=""></td>
            <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
          </tr>
          <tr>
            <td colspan="6"><div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><font size="2" face="Arial, Helvetica, sans-serif">
              <?php if(isset($_SESSION["userid"])) {
			echo "Logged in as <b>" . $_SESSION["name"] . "</b>" ;
			?>
              </font> &nbsp;<strong>&nbsp;|</strong><strong> &nbsp;&nbsp;<a class="barlink" href="logout.php">LOGOUT</a>
                <?php
					  }
					  else
					  {
					  ?>
                </strong><strong><font size="1">Welcome <strong>Guest</strong>, 
                  Please <a href="signinform.php" class="barlink">LOGIN</a> to your account or <a href="signup.php"class="barlink">SIGNUP</a> with us to Sell/Buy products</font>
                <?php
					  }
					  ?>
  &nbsp;</strong></font></div></td>
            <td colspan="2"><a href="http://www.zeeways.com" target="_blank"><img src="images/sliced1_06.gif" alt="Innovative Ways" width="116" height="30" border="0"></a></td>
            <td><img src="images/spacer.gif" width="1" height="30" alt=""></td>
          </tr>
          <tr>
            <td colspan="12" rowspan="5" bgcolor="#FFEB94"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <form name="form2" method="post" action="showcategory.php">
                <tr>
                  <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td><div align="right"><strong><font size="2" face="Arial, Helvetica, sans-serif"><span class="style1">Search</span></font></strong><FONT color=#0099FF><strong><font color="#006699" size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></strong></FONT></div></td>
                  <td><input name="keyword" type="text" size="57" value="<?php echo $keyword;?>">
                    <select name="cid">
                      <option value=0 selected >All Categories</option>
                      <?php
			  $cats=mysql_query("select * from zeeauctions_categories where pid=0  order by order_index asc,id asc");
			  while($rst=mysql_fetch_array($cats))
			  {
			  		  ?>
                      <option value="<?php echo $rst["id"]; ?>" <?php if($rst["id"]==$cid) echo " selected ";?>
					  ><?php echo $rst["cat_name"]; ?></option>
                      <?php
					}//end while
					 ?>
                    </select>
                    <select name="type">
                      <option value=1 <?php if($type==1) echo " selected ";?>>Current</option>
                      <option value=3 <?php if($type==3) echo " selected ";?>>New 
                        Today</option>
                      <option value=4 <?php if($type==4) echo " selected ";?>>Ending 
                        Today</option>
                      <option value=5 <?php if($type==5) echo " selected ";?>>Completed</option>
                      <option value=6 <?php if($type==6) echo " selected ";?>>All</option>
                    </select>
                    <input name="radio" type="radio" value="1" checked <?php if($radio==1) echo " checked ";?>>
                    <span class="style1"><font size="2" face="Arial, Helvetica, sans-serif">Item 
                        &amp; desc</font></span><font color="#006699">
                        <input type="radio" name="radio" value="2" <?php if($radio==2) echo " checked ";?>>
                        </font>                      <span class="style1"><font size="2" face="Arial, Helvetica, sans-serif">Item # </font></span><font color="#006699">
                        <input type="radio" name="radio" value="3" <?php if($radio==3) echo " checked ";?>>
                                                </font><font size="2" face="Arial, Helvetica, sans-serif"><span class="style1">Seller</span><font color="#006699">
                        <input type="submit" name="Submit2" value="Go">
                        </font></font></td>
                </tr>

                <tr>
                  <td colspan="2">&nbsp;</td>
                  </tr>
              </form>
            </table></td>
            <td><img src="images/spacer.gif" width="1" height="12" alt=""></td>
          </tr>
          <tr>
            <td><img src="images/spacer.gif" width="1" height="11" alt=""></td>
          </tr>
          <tr>
            <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
          </tr>
          <tr>
            <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
          </tr>
          <tr>
            <td><img src="images/spacer.gif" width="1" height="10" alt=""></td>
          </tr>
          <tr>
            <td colspan="12"><img src="images/sliced1_23.gif" width="100%" height="6" alt=""></td>
            <td><img src="images/spacer.gif" width="1" height="6" alt=""></td>
          </tr>
          <tr>
            <td><img src="images/spacer.gif" width="9" height="1" alt=""></td>
            <td><img src="images/spacer.gif" width="220" height="1" alt=""></td>
            <td><img src="images/spacer.gif" width="4" height="1" alt=""></td>
            <td><img src="images/spacer.gif" width="9" height="1" alt=""></td>
            <td><img src="images/spacer.gif" width="214" height="1" alt=""></td>
            <td><img src="images/spacer.gif" width="8" height="1" alt=""></td>
            <td><img src="images/spacer.gif" width="104" height="1" alt=""></td>
            <td><img src="images/spacer.gif" width="138" height="1" alt=""></td>
            <td><img src="images/spacer.gif" width="48" height="1" alt=""></td>
            <td><img src="images/spacer.gif" width="68" height="1" alt=""></td>
            <td><img src="images/spacer.gif" width="14" height="1" alt=""></td>
            <td><img src="images/spacer.gif" width="14" height="1" alt=""></td>
            <td></td>
          </tr>
        </table>
        <div align="left"><br>
        </div>
      </div></td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><?php main();?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
<table  width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFEB94">
  <tr>
    <td height="47" align="center" valign="middle" bgcolor="#FFFFFF"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><font color="#990033"> <a class="bottomlink" href="index.php">HOME</a> </font><span class="style2">|</span> </font><font face="Verdana, Arial, Helvetica, sans-serif"><font color="#990033"><a href="signup.php"  class="bottomlink">REGISTER</a></font></font><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> <span class="style2">|</span><font color="#990033"> <a  class="bottomlink" href="signinform.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">LOGIN</font></a> </font><span class="style2">|</span><font color="#990033"> <a  class="bottomlink" href="userhome.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">MEMBER 
      HOME</font></a> </font><span class="style2">|</span><font color="#990033"> <a  class="bottomlink"   href="add_product.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">SELL 
        AN ITEM</font></a> </font><span class="style2">|</span><font color="#990033"> <a  class="bottomlink"  href="advertisers/ad_home.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">ADVERTISE</font></a><br>
            <a class="bottomlink"  href="editmember.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">EDIT 
              PROFILE</font></a> </font><span class="style2">|</span><font color="#990033"> <a  class="bottomlink" href="myaccount.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">MY 
                ACCOUNT</font></a> </font><span class="style2">|</span><font color="#990033"> <a  class="bottomlink" href="mylisting.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">MY 
                  LISTINGS</font></a> </font><span class="style2">|</span><font color="#990033"><a  class="bottomlink" href="mybids.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"> MY BIDS</font></a> </font><span class="style2">|</span><font color="#990033"> <a  class="bottomlink" href="mypurchase.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">MY 
                    PURCHASES</font></a> </font><span class="style2">|</span><font color="#990033"> <a  class="bottomlink" href="show_messages.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">MESSAGES</font></a> </font><span class="style2">|</span><font color="#990033"> <a  class="bottomlink" href="show_contacts.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">MY 
                      CONTACTS</font></a> </font><span class="style2">|</span><font color="#990033"><a  class="bottomlink" href="show_blocked.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;MY 
                        BLOCKLIST</font></a> </font><span class="style2">|</span><font color="#990033"> <a  class="bottomlink" href="show_favourites.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">MY 
                          FAVOURITES</font></a><a class="bottomlink"  href="view_feedback_mem.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><br>
                          </font></a><br>
                                            </font></font></td>
  </tr>
  <tr>
    <td height="14" align="center" valign="middle" bgcolor="#FFFFFF"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><font color="#990033"><a class="bottomlink"  href="view_feedback_mem.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">My Feedbacks</font></a></font><span class="style2">|</span><font color="#990033">&nbsp;</font><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><font color="#990033"><a   class="bottomlink"  href="privacy.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Privacy Statement </font></a> </font><span class="style2">|</span><font color="#990033"> <a   class="bottomlink"  href="legal.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Legal Policies </font></a> </font><span class="style2">|</span><font color="#990033"> <a  class="bottomlink"  href="termsandconditions.php"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Terms &amp; Conditions </font></a></font></font></font></td>
  </tr>
</table>
<div align="right"><br>
</div>
<div align="right"><a target="_blank" href="http://blog.qorporate.com/news/ebay-clone-script/">eBay Clone Script</a>, <a target="_blank" href="http://twitter.com/Qorporate">SEO</a> <a target="_blank" href="http://qorporate.com/search-engine-optimization.php">Search Engine Optimization</a> and <a target="_blank" href="http://tldpanel.com/search-engine-submission/">Search Engine Submission</a> by <a target="_blank" href="http://qorporate.com/index.php">Corporate Web Services</a>.</div>
</body>
</html>
