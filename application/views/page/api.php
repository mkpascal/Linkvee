   <div class="head-first">API</div>
                        
           
           <div class="content">
<p>

Linkvee exposes its data via an Application Programming Interface (API), so developers can interact in a programmatic way with our website.<br/><br/>
This document is the official reference for that functionality. The Service is provided without any guarantees explicit or implied. <br/><br/>

<h2>REST API Methods</h2><br/>
<b>Retrieval Methods</b><br/>

- <a href="#" id="retrandom_link">ret/random_link</a><br/>
- <a href="#" id="retrandom_link_spam">ret/random_link_spam</a><br/><br/>

<b>Sending Methods</b><br/>

Sending Methods are currently unavailable for public usage, thus undocumented. Please contact us if you need to use these methods.

<br/>

<!-- BLOCK RANDOM_LINK -->
<div id="random_link" style="display:none;"> <hr> <h4>GET ret/random_link</h4> <br/> Return a random link, free of spam.<br/> <br/> This method is cached for 2 minutes. Requesting more frequently than that will not return any more data, and will count against your rate limit usage.<br/> <br/> <b>URL</b><br/> <br/> <a href="http://www.linkvee.com/api/ret/random_link.json">http://www.linkvee.com/api/ret/random_link.json</a><br/> <br/> <b>Supported format</b><br/> <br/> json<br/> <br/> <b>Supported request method</b><br/> <br/> GET<br/> <br/> <b>Requires Authentication</b><br/> <br/> false<br/> <br/> <b>Rate Limited</b><br/> <br/> true<br/> <br/> <b>Parameters</b><br/> <br/> none </div>
<!-- BLOCK RANDOM_LINK -->

<!-- BLOCK RANDOM_LINK_SPAM -->
<div id="random_link_spam" style="display:none;"> <hr> <h4>GET ret/random_link_spam</h4> <br/> Return a random spam link, there's only spam link with this method so beware.<br/> <br/> This method is cached for 2 minutes. Requesting more frequently than that will not return any more data, and will count against your rate limit usage.<br/> <br/> <b>URL</b><br/> <br/> <a href="http://www.linkvee.com/api/ret/random_link_spam.json">http://www.linkvee.com/api/ret/random_link_spam.json</a><br/> <br/> <b>Supported format</b><br/> <br/> json<br/> <br/> <b>Supported request method</b><br/> <br/> GET<br/> <br/> <b>Requires Authentication</b><br/> <br/> false<br/> <br/> <b>Rate Limited</b><br/> <br/> true<br/> <br/> <b>Parameters</b><br/> <br/> none </div> <!-- BLOCK RANDOM_LINK_SPAM -->
 <br/>


        	</p>
<br/><br/>
<a href="http://www.linkvee.com/">Back</a>
   
    <!-- Begin of Module - About me -->
    </div>
    
    
    
 <script type="text/javascript">
    
$(document).ready(function(){
	

	$("#retrandom_link").click(function (){
		$('#random_link').show();
		$('#random_link_spam').hide();

	});	
	
	$("#retrandom_link_spam").click(function (){
		$('#random_link').hide();
		$('#random_link_spam').show();

	});	
	
});

</script>