<h1>User Info </h1>
<dl >
<dt>Username </dt>
<dd><?php echo $user['username'] ?> </dd>
<dt>User ID </dt>
<dd><?php echo $user['userid'] ?> </dt>
<dt>Password </dt>
<dd><?php echo $user['password'] ?> </dt>
<dt>First Name </dt>
<dd><?php echo $user['firstname'] ?> </dt>
<dt>Last Name </dt>
<dd><?php echo $user['lastname'] ?> </dt>
<dt>Email </dt>
<dd><?php echo $user['email'] ?> </dt>
<dt>Role </dt>
<dd><?php echo $user['role'] ?> </dt>
</dl>

<a href="<?php echo site_url('users') ?>">Back</a>