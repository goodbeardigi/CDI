<?php

//include('inc/connect.php');
include('header.php');
?>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
		<div class="container">
			<div class="row">
				
			</div>
		</div>
</div>

<section id="upload">
	<div class="container">
    	<div class="row">
		
    		<div id="dropbox" class="span12">
				<span class="message">Drop images here to upload. <br /><i>(they will only be visible to you)</i></span>
			</div>
			<div class="span12">
				<div id="container">
					<form class="span12" name="upload-form" id="upload-form" action="html_form_action.asp" method="get">
						<input type="text" class="span8" placeholder="Name" name="name"><br />
						<textarea name="description" class="span8" form="upload-form">Enter description here...</textarea><br />
						<input type="text" placeholder="Categories" class="span8" name="categories"><br />
						<input type="hidden" name="url" value="" id="url">
						<br><input type="submit" id="uploadsubmit" class="button" value="Submit" disabled="disabled">
					</form>
				</div>
			</div>
		</div>		
	</div>
</section>

<section id="related-videos">
	<div class="container">
    	<div class="row">
			<div class="span12">
				<h3>RELATED VIDEOS //</h3>
			</div>	
		</div>
	</div>
</section>

<section id="comments-hottest">
	<div class="container">
    	<div class="row">
			<div class="span6">
				<h3>COMMENTS //</h3>
<div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'cdisports'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
			</div>
			<div class="span5">
				<h3>THIS WEEKS HOTTEST //</h3>
			<div>	
		</div>
	</div>
</section>

<script type="text/javascript">
$( document ).ready(function() {
  var form = document.getElementById('upload-form');
  if (form.attachEvent) {
      form.attachEvent("submit", processUploadForm);
  } else {
      form.addEventListener("submit", processUploadForm);
  }
});
</script>

<?php include('footer.php'); ?>
