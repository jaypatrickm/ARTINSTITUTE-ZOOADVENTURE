<!DOCTYPE HTML>
<html>
<head>
<!--Need to add Meta Tags -->
<meta charset="utf-8">
<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.ico"/>
<!-- CSS -->
<link href="includes/css/main.css" rel="stylesheet" type="text/css">
<link href="includes/css/story.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Javascript -->
<script language="javascript" src="includes/js/jquery-1.7.2.min.js"></script>
<!-- text effects from onehackoranother.com : for typewriter effect -->
<script language="javascript" src="includes/js/jquery.text-effects.js"></script>
<script language="javascript" src="includes/js/story.js"></script>
<script language="javascript">
$(document).ready(function() {
	soundHandle = document.getElementById('soundHandle');
	soundHandle.src = 'sounds/button_select.wav';
	
	$('#habitat_buttons').hide();
	$('#line_2').hide();
	$('#line_1').typewriter();
	$('#s_button').click( function () {
		$('#start_button').hide();	
		soundHandle.play();
		$('#habitat_buttons').fadeIn("slow");
		$('#line_1').hide();
		$('#line_2').typewriter().fadeIn("slow");
		$('#game').css('background-image', 'url("../zooadventurewebsite/story/images/game_default_bg.png")');
		
	});
	/*
	function addListeners() {
		var link = document.getElementById("j_button");
		link.addEventListener("click", linkClicked, false);	
	}
	
	window.addEventListener('load', addListeners, false);
	
	function linkClicked() {
		alert("A link was clicked");	
	}
	*/
	/*
	var link = document.getElementById("j_button");
	link.addEventlistener('click', linkClicked, false);
	*/
	
	
    

});

</script>
<!-- Page Title -->
<title>Zoo Adventure - Get Wild About Learning!</title>
</head>

<!-- Begin Body -->
<body>
	<!-- container -->
	<div id="container">
		<!-- header -->
		<header class="clearfix">
			<h1 id="logo"><a href="index.php">Zoo Adventure</a></h1>
			<nav>
				<ul>
					<li id="activities"><a href="activities.php" class="active">Activities</a></li>
					<li id="animal-guide"><a href="animal-guide.php">Animal Guide</a></li>
					<li id="parents-and-teachers"><a href="parents-and-teachers.php">Parents and Teachers</a></li>
				</ul>
			</nav>
		</header>
		
		<div id="game" class="clearfix">
		
			<!-- insert working game :) -->
            
            <!-- start button -->
            <div id="start_button">
            	<h2><a href="#" id="s_button"><img src="story/buttons/start-button.png" alt="s_button" /></a></h2>
                <audio id="soundHandle" style="display:none;" preload="auto"></audio>
            </div>
            
            <!-- habitat buttons -->
            <div id="habitat_buttons">
            	
            		<a href="jungle.php" class="h_button" id="j_button" ><img src="story/buttons/jungle.png" alt="j_button" /></a>
                    <a href="#" class="h_button" id="m_button" ><img src="story/buttons/mountains.png" alt="m_button" /></a>
                    <a href="#" class="h_button" id="s_button" ><img src="story/buttons/savannah.png" alt="s_button" /></a>
                    <a href="#" class="h_button" id="a_button" ><img src="story/buttons/arctic.png" alt="a_button" /></a>
            	
            </div>
            
            <div id="story_lines">
            	
                	
                <p id="line_1"> Let's start our adventure by clicking on the start button. </p>
                <p id="line_2"> I want to visit the jungle habitat first. Can you click on the green jungle habitat? </p>
                	
                
            </div>
            
            
		</div>
		<!-- End game -->

		<footer>
			<ul>
				<li><a href="index.php">home</a></li>
				<li class="nav-dividers">&#124;</li>
				<li><a href="activities.php">activities</a></li>
				<li class="nav-dividers">&#124;</li>
				<li><a href="animal-guide.php">Animal Guide</a></li>
				<li class="nav-dividers">&#124;</li>
				<li><a href="parents-and-teachers.php">Parents and Teachers</a></li>
			</ul>
		</footer>
		<!-- end footer -->

	</div>
	<!-- End Container -->
</body>
<!-- End Body -->
</html> 