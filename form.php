<?php 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
<body>
	<form class="ui form">
		<div class="field">
			<label>First Name</label>
			<input type="text" name="first-name" placeholder="First Name">
		</div>
		<div class="field">
			<label>Last Name</label>
			<input type="text" name="last-name" placeholder="Last Name">
		</div>
		<div class="field">
			<div class="ui checkbox">
				<input type="checkbox" tabindex="0" class="hidden">
				<label>I agree to the Terms and Conditions</label>
			</div>
		</div>
		<button class="ui button" type="submit">Submit</button>
	</form>
</body>
</html>