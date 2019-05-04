<div class=" container">
	
	 
	<!---->
	<div class="menu-right">
		 <ul class="menu">
			<li class="item1"><a href="#"> Menu<i class="glyphicon glyphicon-menu-down"> </i> </a>
			<ul class="cute">
				        <li class="subitem1"><a  href="index.php">Home</a></li>
						<li class="subitem1"><a  href="myorder.php">My Order</a></li>
						<li class="subitem1"><a  href="register.php">Profile</a></li>
						<li class="subitem1"><a  href="about.php">About Us</a></li>
						<li class="subitem1"><a  href="contact.php">Contact Us</a></li>                     <li class="subitem1"><a  href="logout.php">Logout</a></li>
			</ul>
		</li>
		</ul>
	</div>
	<div class="clearfix"> </div>
		<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
      		
	</div>