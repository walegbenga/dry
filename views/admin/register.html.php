<?php if(isset($error)):?>
	<div class="errors"><?=$error?></div>
<?php endif;?>
<div class="form">
	<form class="theForm" method="post" action="" accept-charset="utf-8" id="regForm">
		<fieldset>
			<legend>Registration form</legend>
			<ol>
				<li>
					<label for="firstName">FirstName:</label>
					<input type="hidden" id="id" name="admin[id]" value="<?=$admin["id"] ?? ""?>">
				</li>
					<input type="text" id="first_name" name="admin[first_name]" placeholder="FirstName here" value="<?=$admin["first_name"] ?? ""?>">
				</li>
				<li>
					<label for="lastName">LastName:</label>
					<input type="text" id="last_name" name="admin[last_name]" placeholder="LastName here" value="<?=$admin["last_name"] ?? ""?>">
				</li>
				<li>
					<label for="username">Username:</label>
					<input type="text" id="username" name="admin[username]" placeholder="Username here" value="<?=$admin["username"] ?? ""?>">
				</li>
				<li>
					<label for="email">Email:</label>
					<input type="text" id="email" name="admin[email]" placeholder="Email address" value="<?=$admin["email"] ?? ""?>">
				</li>
				<li>
					<label for="password">Password:</label>
					<input type="password" id="password" name="admin[password]" value="">
				</li>
				<li>
					<input type="submit" id="submit" name="submit" value="Register">
				</li>
			</ol>
			<p>Forget password?<a href="/forgetpassword/new">Click here</a></p>
		</fieldset>
	</form>
	</div>