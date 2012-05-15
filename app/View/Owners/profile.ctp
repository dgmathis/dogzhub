<?php echo $this->Session->flash(); ?>
<h1>Welcome to <?php echo $owner['Owner']['first_name']; ?>'s profile page</h1>
<br />
<h2><?php echo $owner['Owner']['first_name'].' '.$owner['Owner']['last_name']; ?></h2>
<p>City: <?php echo $owner['Owner']['city']; ?></p>
<p>State: <?php echo $owner['Owner']['state']; ?></p>
<p>Zip Code: <?php echo $owner['Owner']['zip']; ?></p>
<a href="<?php echo PREFIX; ?>/owners/edit" />Edit Info</a>
