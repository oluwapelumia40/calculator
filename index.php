<?php
	
	$a  = 2;
	$b  = 3;
	$r = $a + $b;
	echo $r;

?>
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
			<div class="container">
			<div class="row" style="justify-content: center;">
				<div class="col-md-6" style="text-align: center; width: 25%;">
					<h1> Calculator.</h1>
					<p> Building a calcultor.</p>
					<form action="" method="POST">
						<div class="form-group">
							<textarea class="form-control" rows="5" id="comment"></textarea>
								<div class="first_row">
									<button type="button" class="btn btn-primary"> C </button> 
								    <button type="button" class="btn btn-primary"> / </button> 
									<button type="button" class="btn btn-primary"> 8 </button>
									<button type="button" class="btn btn-primary"> del </button>
								</div>
								<div class="first_row">
									<button type="button" class="btn btn-primary" name="a"> 7 </button> 
								    <button type="button" class="btn btn-primary" name=""> 8 </button> 
									<button type="button" class="btn btn-primary" name=""> 9 </button>
									<button type="button" class="btn btn-primary" name=""> + </button>
								</div>
								<div class="first_row">
									<button type="button" class="btn btn-primary" name=""> 4 </button> 
								    <button type="button" class="btn btn-primary" name=""> 5 </button> 
									<button type="button" class="btn btn-primary" name=""> 6 </button>
									<button type="button" class="btn btn-primary" name=""> - </button>
								</div>
								<div class="first_row">
									<button type="button" class="btn btn-primary"> 1 </button> 
								    <button type="button" class="btn btn-primary"> 2 </button> 
									<button type="button" class="btn btn-primary"> 3 </button>
									<button type="button" class="btn btn-primary"> = </button>
								</div>
								<div class="second_row">
									<button type="button" class="btn btn-primary"> 0 </button> 
									<button type="button" class="btn btn-primary"> . </button>
								</div>
						</div>
					</form>
					
						  	
					</div>
				</div>
			</div>
</body>
</html>