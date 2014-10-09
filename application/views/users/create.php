<h2>Create new user</h2>

<?php echo validation_errors(); ?>
<?php echo form_open('users/create') ?>

	<label for="userid">UserId</label>
	<input type="input" name="userid" /><br />

	<label for="username">Username</label>
	<input type="input" name="username" /><br />

	<label for="password">Password</label>
	<input type="input" name="password" /><br />

	<label for="firstname">First Name</label>
	<input type="input" name="firstname" /><br />

	<label for="lastname">Last Name</label>
	<input type="input" name="lastname" /><br />

	<label for="email">Email</label>
	<input type="input" name="email" /><br />

	<input type="submit" name="submit" value="Create user" />

</form>
