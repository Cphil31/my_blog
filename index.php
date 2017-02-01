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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>
	<h1>Mon blog </h1>
	
	<table class="ui celled table">
		<?php 

		$tab = ORM::for_table('posts')->find_many();
		foreach ($tab as $tableau) {

			echo $tableau->id.$tableau->title." ".$tableau->author." ".$tableau->content." ".$tableau->created_at." ".$tableau->updated_at.'</br>';

		}

		?>
	</table> 
		<button class="ui button" type="submit">ajouter article </button>
	
</body>
</html> 