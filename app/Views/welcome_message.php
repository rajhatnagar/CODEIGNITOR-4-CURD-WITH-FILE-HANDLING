<center>
<h2>Insert Employee Details:</h2>
<form action="<?php echo base_url('insert') ?>" method="POST" >

  <br><input type="text" name="name" placeholder="Your name">
  <br><input type="email" name="email" placeholder="Your email">
  <br><input type="text" name="phone" placeholder="Your phone number">
<!-- Photo Field -->
<br><label for="photo">Photo:</label>
<br><input type="file" name="photo" id="photo" required>
<br><!-- Resume Field -->
<br><label for="resume">Resume:</label>
<br><input type="file" name="resume" id="resume" required>
  <br><input type="submit" value="Submit">
</form>
<table>
<tr>
<th>ID</th>
<th>Emp_name</th>
<th>Email</th>
<th>phone</th>
<th>Action</th>
</tr>
<!-- //print $emp array in a table ? -->
<?php foreach ($emp as $row) {?>
<tr>
<td><?= $row['id']; ?></td>
<td><?= $row['emp_name']; ?></td>
<td><?= $row['email']; ?></td>
<td><?= $row['phone']; ?></td>
<td><a href="<?= base_url('/edit'.$row['id']); ?>">Edit</a> | <a href="<?= base_url('/delete'.$row['id']); ?>">Delete</a></td>
</tr>
<?php } ?>
</tr>
</table>
</center>
