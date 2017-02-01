<?php 
require_once 'vendor/autoload.php'; 
ORM::configure('mysql:host=localhost;dbname=my_blog');
ORM::configure('username','root');
ORM::configure('password','root');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 <h1>Mon blog </h1>
 	<table>


		<?php 

		$tab = ORM::for_table('posts')->find_many();
		foreach ($tab as $tableau) {

			echo $tableau->id.$tableau->title.'</br>';
			
		}

	
	 ?>
	
	</table> 
 </body>
 </html> 