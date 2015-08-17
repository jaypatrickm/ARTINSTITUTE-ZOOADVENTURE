// Hello, thanks for reaching the javascript portion of the zoo adventure story
//date  june 3
//author jay
//
//
// You're looking great today. 
//
//
//
$(document).ready(function() {

//Create Variables
 //var button_select = new Audio("../../sounds/button_select.wav");
 var audioElement = document.createElement('audio');
 audioElement.setAttribute('src', '../../sounds/button_select.wav'); 
 audioElement.play();
//Step 1 -- Starting the Story
//We will hide the button on click and display the habitat screen, while starting the audio for the story. 


	//Hide start button on press to begin the story
	$('#s_button').click( function () {
		$(this).hide();	
		
	});
	
	
});