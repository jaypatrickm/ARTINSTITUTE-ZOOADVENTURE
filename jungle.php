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
	//load Animal Sounds
	//Monkey
	soundMonkey = document.getElementById('soundMonkey');
	soundMonkey.src = 'sounds/monkey_sound.mp3';
	//Elephant
	soundElephant = document.getElementById('soundElephant');
	soundElephant.src = 'sounds/elephant_sound.mp3';
	//Tiger
	soundTiger = document.getElementById('soundTiger');
	soundTiger.src = 'sounds/tiger_sound.mp3';
	$('#great_job').css('opacity', '0');
	$('#line_3').typewriter();
	$('#game').css('background-image', 'url("../zooadventurewebsite/story/images/jungle_habitat.png")');
	$('#line_4').hide();
	$('#line_5').hide();
	var mplus = 0;
	//$('#game').removeAttr('id');
	
	
	function addListeners() {
		var msound = document.getElementById("j_monkey");
		var esound = document.getElementById("j_elephant");
		var tsound = document.getElementById("j_tiger");
		msound.addEventListener("click", mSound, false);	
		esound.addEventListener("click", eSound, false);
		tsound.addEventListener("click", tSound, false);
		
	}
	
	window.addEventListener('load', addListeners, false);
	
	function mSound() {
		soundMonkey.play();	
		$('#great_job').animate( {
			opacity: 1
		}, 4000, function () {
			$(this).fadeOut("slow");
			$('#line_4').fadeIn("slow").typewriter();
			j_tiger.addEventListener("click", j_tiger, false);
		});
		$('#j_monkey').attr("src", "story/images/jungle/monkey-checked.png");
		$('#line_3').hide();
		this.removeEventListener("click", mSound, false); 
		var mplus = +1; 
		
		
		//j_tiger.addEventListener("click", j_tiger, false);
	}
	
	function mRemove() {
		esound.removeEventListener("click", eSound, false);
		tsound.removeEventListener("click", tSound, false);	
	}
	
	
	
	function eSound() {
		soundElephant.play();	
	}
	function tSound() {
		if (mplus>0) {
		soundTiger.play();
		} else {
				
		}
	}
	
	function j_tiger() {
		soundTiger.play();
		$('#great_job').animate( {
			opacity: 1
		}, 4000, function () {
			$(this).fadeOut("slow");
			$('#line_5').typewriter().fadeIn("slow");
		});
		$('#j_tiger').attr("src", "story/images/jungle/tiger-checked.png");
		$('#line_4').hide();
		this.removeEventListener("click", tSound, false); 
		j_elephant.addEventListener("click", j_elephant, false);
	}
	
	function j_elephant() {
		soundElephant.play();	
	}
	

	

	
	
    

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
            
           	<p id="great_job">Great Job!</p>
            
            <!-- animal buttons -->
            <div id="monkey_button">
            	<a href="#" id="removeM" ><img id="j_monkey" class="j_animals" src="story/images/jungle/monkey.png" alt="monkey" /></a>
                <audio id="soundMonkey" style="display:none;" preload="auto"></audio>
            </div>
            
            <a href="#"><img id="j_elephant" class="j_animals" src="story/images/jungle/elephant.png" alt="elephant" /></a>
            <audio id="soundElephant" style="display:none;" preload="auto"></audio>
            <a href="#"><img id="j_tiger" class="j_animals" src="story/images/jungle/tiger.png" alt="tiger" /></a>
            <audio id="soundTiger" style="display:none;" preload="auto"></audio>
           
            
            <div id="story_lines">
            	
                	
                <p id="line_3">I see something in the tree, it looks like a monkey. Can you find the monkey??</p>
                <p id="line_4">Do you see the animal with black stripes? That's a tiger, can you see the tiger??</p>
                <p id="line_5">The giant gray animal is an elephant. Can you click on the elephant?</p>
                
                	
                
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