<?php
	if(isset($_session['user'])){

	}
	else{

		switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
			case 'add':
				if(isset($_POST)){
					include(HTML_DIR . 'inicio.php');
				}else{
					
					include(HTML_DIR . 'register.php');
				}
				
			break;
			
			default:
				include(HTML_DIR . 'register.php');
			break;
		}
		
	}
?>