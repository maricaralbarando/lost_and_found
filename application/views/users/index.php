<h1>Users List</h1>
<a href="users/create">Create User</a>
<table>
<tr>
    <th>UserName </th>
    <th>First Name </th>
    <th>Last Name </th>
    <th>Email </th>
    <th>Role </th>
    <th>Action</th>
</tr>
<?php foreach ($users as $user): ?>
<tr>
    <td><?php echo $user['username'] ?></td>
    <td><?php echo $user['firstname'] ?></td>
    <td><?php echo $user['lastname'] ?></td>
    <td><?php echo $user['email'] ?></td>
    <td><?php echo $user['role'] ?></td>
    <td>
    <p><a href="users/<?php echo $user['slug'] ?>">View user</a></p>
    </td>
</tr>
<?php endforeach ?>
