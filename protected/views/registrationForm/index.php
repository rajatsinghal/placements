<div id="terms">
	<blockquote>
		<p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it. </p>
		<cite>Steve Jobs </cite>
	</blockquote>
	<!--<h2>Welcome to our Placements Registration Center</h2> -->
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/hitwicket.jpg" alt="Hitwicket" class="" />
	<h3>About Hitwicket</h3>
	<p>
    Hitwicket.com (<a href="http://hitwicket.com" target="_blank">http://hitwicket.com</a>) is a fast growing online cricket strategy game with over 17,000 active users. After 3 years of developing the complex application, Hitwicket opened to public in January 2013 and since then we've been experiencing exponential growth with great feedback from users (<a href="http://hitwicket.com/Testimonials" target="_blank">http://hitwicket.com/Testimonials</a>). With a solid product already build and constantly improving, we are confident that with the right amount of marketing, we can take Hitwicket to success on a worldwide scale. Our startup story has been recently covered by YourStory, <a href="http://yourstory.in/2013/10/hitwicket-online-cricket-strategy-game/" target="_blank">http://yourstory.in/2013/10/hitwicket-online-cricket-strategy-game/</a><br /><br />
    
<strong>The primary objective of the internship will be to setup a marketing groundwork to launch the game globally, targeting all cricket playing nations.</strong>
	<h3>Kay Takeaways</h3>
	<ul>
		<li>Working on a startup that combines the two biggest entertainment sectors, Cricket and Gaming.</li>
		<li>Being part of a team that is aiming to build the biggest cricket game in the world.</li>
		<li>A certificate of Internship from the company.</li>
	</ul>
    
    
	<h3>Details</h3>
	<ul>
    	<li>Skills needed: Marketing, Social Media, Content Writing and Knowledge about cricket!</li>
		<li>This will be a virtual internship for a minimum period of 2 months.</li>
		<li>Ensure that your resume is in PDF format. <strong>Other formats will be rejected</strong>.</li>
		<li>A stipend of Rs 5,000/month will be paid to the candidate.</li> 
		<li>For any queries, email us at <a href="mailto:support@hitwicket.com">support@hitwicket.com</a>.</li>
	</ul>
	<!--<label><input type="checkbox" /> I've read the above</label> <br clear="all" /> -->
	<br />
	<div class="tac">
		<?php echo CHtml::dropDownList('college', '', array(
		'ISB - Indian School of Business, Hyderabad'=>'ISB - Indian School of Business, Hyderabad',
		'Indian Institute of Management, Ahmedabad'=>'Indian Institute of Management, Ahmedabad', 
		'Indian Institute of Management, Bangalore'=>'Indian Institute of Management, Bangalore', 
		'Indian Institute of Management, Calcutta'=>'Indian Institute of Management, Calcutta',
		'Indian Institute of Management, Lucknow'=>'Indian Institute of Management, Lucknow',
		'Indian Institute of Management, Indore'=>'Indian Institute of Management, Indore',
		'XLRI - Xavier Labour Research Institute, Jamshedpur'=>'XLRI - Xavier Labour Research Institute, Jamshedpur',
		'FMS - Faculty of Management Studies, University of Delhi'=>'FMS - Faculty of Management Studies, University of Delhi',
		'S.P.Jain Institute of Management Studies, Mumbai'=>'S. P. Jain Institute of Management Studies, Mumbai',
		'Narsee Monjee Institute of Management Studies, Mumbai'=>'Narsee Monjee Institute of Management Studies, Mumbai',
		'Schools of Management, IIT (Mumbai, Delhi, Chennai)'=>'Schools of Management, IIT (Mumbai, Delhi, Chennai)',
		'Institute of Management & Technology, Ghaziabad'=>'Institute of Management & Technology, Ghaziabad',
		'Symbiosis Institute of Business Management, Pune'=>'Symbiosis Institute of Business Management, Pune',
		'others'=>'Others'
		), array('prompt'=>'Select your college', 'style'=>"margin:auto;")); ?><br />
		<?php echo CHtml::link("Proceed to Registration &raquo;", array('new'), array('class'=>'button m20', 'id'=>'register')); ?>
		<div class="errorMessage mb20" style="display:none" id="college_error">Please select your college.</div>
        <br />
	</div>
</div>

<script type="text/javascript" charset="utf-8">
	$("#register").click(function() {
		if(!$("#college").val()) {
			$("#college_error").show();
			return false;
		}
		else {
			$(this).attr('href', "<?php echo $this->createUrl('/registrationForm/new', array('college'=>'NULL')); ?>".replace("NULL", $("#college").val()));
		}
	});
</script>