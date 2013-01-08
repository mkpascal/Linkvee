 	<!-- Header section  -->		
        <div class="head-first">
            <a class="white" href="http://www.linkvee.com/page/get?<?php echo rand(); ?>">Get a link</a><!-- Here goes end of heading  -->
        </div>
        
    
    <!-- Begin of Module -->
    <div>
    	<div id="givealink" class="head">
            Give a link&nbsp;&nbsp;<img alt="Load" class="load" style="display:none;" src='/media/images/ajax-loader.gif' /></div><!-- Heading for module  -->
        </div>
         <!-- Begin Contents for module -->
                <div class="content">
                <div id="clink">
<?php echo Form::open('page/give', array('id'=>'idform', 'class'=>'classform')); ?>
<?php echo Form::input('link', 'http://', array('style'=>'width:350px')); ?>
<div class="captcha">
<?php
          require_once('/home/mkpascal/fr/portal/linkvee/application/config/recaptchalib.php');
          $publickey = "6LfqVb4SAAAAABh2211SG00aw0B33Jsyq6UBWyTT";
          echo recaptcha_get_html($publickey);
?>
</div>
<?php echo Form::button('submit', 'Submit', array('style'=>'float:right;margin-top:15px;margin-right:25px;margin-bottom:10px;')); ?>
<?php echo Form::close(); ?>
        <!-- End of Contents for module -->
        <div class="clear"></div>
    </div>
    </div>

  