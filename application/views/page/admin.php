

 	<!-- Header section  -->		
        <div class="head-first">
            Admin Panel
        </div>
                        <div id="anotherlink" class="content">
                        
                        <b>Here's the 25 most recent links:</b><br/><br/>
                        <?php foreach($admin as $post):?>

  <h6><?php echo $post['title'];?></h6>
  <img src="/media/images/link.png" /> <?php echo $post['link']; ?><br/><br/>
<img src="/media/images/error.png" /> <a href="http://www.linkvee.com/page/reportadmin/<?php echo $post['id']; ?>">Spam</a> (<?php echo $post['spam']; ?>)
<div style="background-color:#ccc; width:435px; height:1px;"></div>
<?php endforeach;?>
    
    <div class="clear"></div>
        </div>
    
    <!-- Begin of Module  -->
    <div>
    	    

