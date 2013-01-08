

 	<!-- Header section  -->		
        <div class="head-first">
            <a class="white" id="gimme">Get another link</a><!-- Here goes end of heading  -->
        </div>
                        <div id="anotherlink" class="content">


 <div class="left"> 
            	<img src="http://images.websnapr.com/?url=<?php echo $urlink['link'];?>&key=dj68wrBzBFdO&size=s" height="100" width="100" class="abtme" alt="Screenshot" />
			</div> 
            <div class="right">                
                <h3><?php echo html_entity_decode($urlink['title']); ?></h3> 
                <p><?php echo html_entity_decode($urlink['content']); ?></p> 
            </div> 
    <div class="clear"></div>

<div class="bbl">
<img src="/media/images/link.png" /> <a href="<?php echo $urlink['link'];?>" target="_blank"><?php echo $urlink['link'];?></a><br/>
<img src="/media/images/error.png" /> <a href="http://www.linkvee.com/page/report/<?php echo $urlink['id'];?>">Report Offensive Content</a><br/><br/>
          
</div>
    
    <div class="clear"></div>
        </div>
    
    <!-- Begin of Module  -->
    <div>
    	<div id="givealink" class="head">
            Give a link&nbsp;&nbsp;<img alt="Load" class="load" style="display:none;" src='/media/images/ajax-loader.gif' /></div><!-- Heading for module  -->
        </div>
        <!-- Begin Contents for module  -->
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
        <!-- End of Contents for module  -->
        <div class="clear"></div>
    </div>
    </div>
    

