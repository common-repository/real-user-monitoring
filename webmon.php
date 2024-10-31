<?php
if ( ! defined( 'ABSPATH' ) ) {exit; }// Exit if accessed directly
if (  isset( $_POST['s247submit'] ) ) {
if ( !wp_verify_nonce( $_POST['s247nonce'], 's247Action' ) ) 
{
print 'Sorry, your nonce did not verify.';
exit;
}
else{
$snippet = stripslashes($_POST['s247codesnippet']);
update_option('s247RumKeyDB',sanitize_key($snippet));
update_option('hidecode',sanitize_key(stripslashes($_POST['hidecode'])));
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Site24x7 Website Monitoring</title>
<style>
	body{ margin:0; font:normal 12px Arial, Helvetica, sans-serif, "Open Sans";}
	.main{ width:100%;}
	.lvd_note, .lvd_notesb{ background-color:#fef7e9; color:green; border-left:3px solid #e49d52; padding:20px; margin:15px 0 10px 0; text-shadow:0 2px 0 #fff; width:938px;}
	.lvd_notesb{ margin:10px 0 20px 0;}
	.lvd_embd{ background-color:#fdfdfd;padding:15px 30px 15px 20px; margin:30px 0 10px 0; overflow:hidden;height:150px;}
	.lvd_embdlft{ width:33%; float:left; font-weight:bold; text-align:center; color:#666; line-height:20px; padding-top:4px; font-size:13px; text-shadow:0 2px 0 #fff;}
	.lvd_embdlft span{  }
	.lvd_embdlft a{ text-decoration:underline; color:#51A50F;}
	.lvd_embdlft a:hover{ text-decoration:none;} 
	.lvd_embdmid{width:45px; float:right; text-shadow:0 2px 0 #fff;  font-size:35px;}
	.lvd_embdrht{ width:60%; float:right; height:60px; margin-top:6px;}
	.lvd_embdrht textarea{ color:#999; border:1px dashed #bbb; word-wrap:break-word; background-color:#fff; width:100%; font-family:inherit; padding:5px; font-size:12px;resize:none;}
	.lvd_embdrht textarea:focus{ box-shadow:0 0 3px #dedede; border-color:#999;}
	.lvd_tit{ font-size:17px; border-bottom:1px solid #ddd; padding-bottom:10px; color:#333;}
	.lvd_tit span{ vertical-align:middle; }
	.lvd_sbdata{ margin-top:50px; }
	.lvd_hd th, .lvd_hd td { padding:8px; width:20%; text-align:left}
	.lvd_hd th { background-color:#f2f2f2;}
	.tdbg{ background-color:#fcfcfc ;}
	.tdbg1{background-color:#fdfdfd	;}
	.lvds_btn{background-color:#003a88; color:#fff; padding:4px 18px; border-radius:10px; border:1px solid #084fae}
	
	.lvd_sbdata ul{ margin:0; padding:0;}
.lvd_sbdata li{ list-style-type:circle; margin-left:30px; line-height:20px; color:#000; }
.lvd_sbdata li span{color:#555; font-weight
:bold;}
.lvds_btnmn{ margin-top:30px;}
.lvds_btnmn a{background-color: #21759B;
    background-image: linear-gradient(to bottom, #2A95C5, #21759B);
    border-color: #21759B #21759B #1E6A8D;
    box-shadow: 0 1px 0 rgba(120, 200, 230, 0.5) inset;
    color: #FFFFFF;
    text-decoration: none;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
	border-radius:3px;
    border:1px solid;
    cursor: pointer;
    display: inline-block;
    font-size: 12px;
    height: 24px;
    line-height: 23px;
    margin:0;
    padding:0 10px 1px;
    white-space:nowrap;
border-color:#21759B #21759B #1E6A8D;}
.lvds_btnmn a:hover{ background-color:#278AB7;
    background-image: linear-gradient(to bottom, #2E9FD2, #21759B);
    border-color: #1B607F;
    box-shadow: 0 1px 0 rgba(120, 200, 230, 0.6) inset;
    color: #fff;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3);}
.button-Singup{
text-shadow:none !important;
border-radius:5px !important;
background: #83b633 none repeat scroll 0 0 !important;
color: #fff !important;
border-color:  #83b633 !important;
}
</style>
</head>
<body>
<div class="main">
<h3 class="lvd_tit" style=" font-size:23px; font-weight:normal">
	<img src="<?php echo plugins_url(); ?>/real-user-monitoring/logo.png" height="57" width="57" style="vertical-align:middle; margin-right:5px"  />
    <span>Site24x7</span></h3>
	<div class="lvd_note" id="info_bar">
<b>Real User Monitoring (RUM) by Site24x7</b>
<br><br>
Real User Monitoring by Site24x7 gives accurate insight into real users’ application experience and helps visualise web app interaction patterns. Real User Monitoring provides deep insight into key performance metrics right from the initiation of the URL until the request is served back to the browser.  
<br><br>
The RUM plugin helps you add your Site24x7’s RUM code snippet to the FOOTER tag of your WordPress blog. Once added, Site24x7 immediately starts collecting data from your WordPress blog’s visitors. You can view all that collected data in your Site24x7 console at <a href="https://www.site24x7.com/app/apm#/apm/rum/list/"> https://www.site24x7.com/app/apm#/apm/rum/list/ </a>.
<br><br>
Please note that you need a <a href="https://www.site24x7.com/signup.html?pack=4&l=en">Site24x7 free account</a> for this plugin. If you don’t have one, grab one at <a href="https://www.site24x7.com/signup.html?pack=4&l=en">site24x7.com</a>!</div>
<form method="post">
<div class="lvd_embd">
<div style="width:950px;">
<div class="lvd_embdrht">
<input id="s247codesnippet" onclick="this.select()" name="s247codesnippet" style="box-shadow:0px 0px 1px #83b633;width:400px" value="<?php  echo esc_textarea(get_option('s247RumKeyDB')) ?>" />
<div class="lvds_btnmn">
<button type="submit" name="s247submit" class="button button-primary" value="Save Changes" >Save Changes</button>
    </div>
<?php $var = get_option('s247RumKeyDB');  if (!empty($var) && !preg_match( "/[\'a-z0-9\']{24,32}/i", $var )){ ?>
<script> document.getElementById("info_bar").innerHTML = "<b style='color:#900'>Please paste valid RUM Monitor code</b>";</script>
<?php } ?>
 </div>
               <div class="lvd_embdmid">→</div>
            <div class="lvd_embdlft">Please paste your Site24x7 RUM Key here. For steps to obtain a RUM key, please refer the steps below.<br> 
            <br><div class="">If you don't have a Site24x7 account yet. Please <span><a target="_blank" href="https://www.site24x7.com/signup.html?pack=4&l=en">register here</a> for a free account.</span> 	
            </div>
		</div>
    </div>
    </div>
<div class="lvd_sbdata">
    	<h3 class="lvd_tit">Steps to get RUM Key</h3>
  		<ul>
       	    <li><span>Log-in to your <a target="_blank" href="https://www.site24x7.com/login.html">Site24x7 </a> account.</span></li>
            <li><span>Go to APM tab -> Web RUM -> Add Application and enter an Application Name. Click Save to continue.</span></li>
	    <li><span>Copy the RUM key from the Web RUM script and paste it above.</span></li>
	    <li><span>Look for something like this: rumMOKey='7dh8cxiw6ze2nrf6drid'</span></li>
	    <li><span>In this example above, the RUM key is: <em>7dh8cxiw6ze2nrf6drid</em></span></li>
  	    <li><span>Refer <a target="_blank" href="https://www.site24x7.com/help/apm/rum.html">this user guide</a> for more information.</span></li>

        </ul>
</div>

   <?php wp_nonce_field( 's247Action', 's247nonce' ); ?>
</form>
    </div>
</body>
</html>