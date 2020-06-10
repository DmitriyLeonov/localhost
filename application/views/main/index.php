<p>Main Page</p>

<?php foreach ($task as $val): ?>
<hr>
<h3><?php echo $val['UserName'];?></h3>
<p><?php echo $val['Text'];?></p>
<?php endforeach; ?>
