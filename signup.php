<?php include_once 'header.php'; ?>

	<h1>Sign Up</h1>

	<div class="container">
		<div class="col-4"></div>
		<div class="col-4">
			<form method="POST" action="signupLogic.php">
			  <div class="mb-3">
			    <label for="name" class="form-label">Username</label>
			    <input type="text" name="name" class="form-control" id="name">
			  </div>

			  <div class="mb-3">
			    <label for="Email1" class="form-label">Email address</label>
			    <input type="email" name="email" class="form-control" id="Email1" aria-describedby="emailHelp">
			    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
			  </div>
			  
			  <div class="mb-3">
			    <label for="Password1" class="form-label">Password</label>
			    <input type="password" name="password" class="form-control" id="Password1">
			  </div>
			  
			  <div class="mb-3">
			    <label for="passwordRepeat" class="form-label">Repeat Password</label>
			    <input type="password" name="password2" class="form-control" id="passwordRepeat">
			  </div>

			  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<div class="col-4"></div>
	</div>

<?php include_once 'footer.php'; ?>