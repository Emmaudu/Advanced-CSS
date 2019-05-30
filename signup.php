<html>
        <head>
            <title>RemoteAI</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="style.css">
        </head>

        <?php

                include("nav.php");


        ?>

<div class="signup">
<div class="container">
	<br>
	<br>
	<h1 align="center">Create An Account</h1>
	<hr width="20%" align="center">
    
     <form>
		<div class=form>

			<div class="form-group"> 
					<label for="exampleInputName"> Full Name </label>
					<input type="text" name="name"  placeholder="Full Name" class="form-control">

			</div>

			<div class="form-group"> 
					<label for="exampleInputName"> Email </label>
					<input type="email"  name="email" placeholder="Email Address"  class="form-control">

			</div>

			<div class="form-group"> 
					<label for="exampleInputName"> Password </label>
					<input type="password"  name="password" placeholder="Password" class="form-control">

			</div>

			<div class="form-group"> 
					<label for="exampleInputName"> </label>
					<input type="button"  name="submit" value="Create Account" placeholder="Password" class="form-control">

			</div>

			
		</div>
	

     </form>
</div>
</div>


         
</html>