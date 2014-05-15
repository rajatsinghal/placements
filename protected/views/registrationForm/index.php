<div id="terms">
	<blockquote>
		<p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it. </p>
		<cite>Steve Jobs </cite>
	</blockquote>
	<!--<h2>Welcome to our Placements Registration Center</h2> -->
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/hitwicket.jpg" alt="Hitwicket" class="" />
	<h3>About Hitwicket</h3>
	<p>
    Hitwicket.com is a unique online cricket strategy game with more than 35,000 active users. Hitwicket opened to public in January 2013 and since then we've been experiencing exponential growth with great feedback from users (<a href="http://hitwicket.com/Testimonials" target="_blank">http://hitwicket.com/Testimonials</a>). Our startup story has been covered by YourStory, <a href="http://yourstory.in/2013/10/hitwicket-online-cricket-strategy-game/" target="_blank">http://yourstory.in/2013/10/hitwicket-online-cricket-strategy-game/</a><br />
	<br /><strong>Compensation will be paid as per industry standard.</strong>    
</p><br />
	<div class="tac">
		<?php echo CHtml::link("Register for Tech Lead &raquo;", array('new', 'role'=>'TECH_LEAD'), array('class'=>'button m20', 'id'=>'register')); ?>&nbsp;&nbsp;&nbsp;&nbsp;
		<?php echo CHtml::link("Register for Mobile Developer &raquo;", array('new', 'role'=>'MOBILE_DEVELOPER'), array('class'=>'button m20', 'id'=>'register')); ?>
        <br />
	</div>
</div>

<script type="text/javascript" charset="utf-8">
	/*$("#register").click(function() {
/		if(!$("#college").val()) {
			$("#college_error").show();
			return false;
		} 
//		else {
			$(this).attr('href', "<?php echo $this->createUrl('/registrationForm/new', array('college'=>'NULL')); ?>".replace("NULL", $("#college").val()));
//		}
	});*/
</script>
