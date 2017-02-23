<table border="0" align="center" width="100%">
	<tr>
		<td width="20%" align="center">
			<img src="<?php echo base_url('assets/images/logo_pialapresiden.png'); ?>" border="0" width="50px" align="top" />
		</td>
		<td width="60%">
			<h1 align="center">DRAWING - PEREMPAT FINAL, <br> SEMI FINAL & FINAL<br>PIALA PRESIDEN 2017</h1>
		</td>
		<td width="20%" align="center">
			<img src="<?php echo base_url('assets/images/logo_pssi.png'); ?>" border="0" width="80px" align="top" />
		</td>
	</tr>
</table>
<br><br>
<br><br>
<table border="1" align="center" width="100%">
		<tr bgcolor="#CCC">
			<th width="10%"><strong>NO</strong></th>
			<th width="90%"><strong>QF 1</strong></th>
		</tr>
		<?php foreach($group1 as $row) :?>	
		<tr>
			<td><?php echo $row['sort']; ?></td>
			<td align="left"> <?php echo $row['name']; ?></td>
		</tr>
		<?php endforeach; ?>
</table>
<br><br>
<table border="1" align="center" width="100%">
	<tr bgcolor="#CCC">
		<th width="10%"><strong>NO</strong></th>
		<th width="90%"><strong>QF 2</strong></th>
	</tr>
	<?php foreach($group2 as $row) :?>	
	<tr>
		<td> <?php echo $row['sort']; ?></td>
		<td align="left"> <?php echo $row['name']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<br><br>
<table border="1" align="center" width="100%">
	<tr bgcolor="#CCC">
		<th width="10%"><strong>NO</strong></th>
		<th width="90%"><strong>QF 3</strong></th>
	</tr>
	<?php foreach($group3 as $row) :?>	
	<tr>
		<td><?php echo $row['sort']; ?></td>
		<td align="left"> <?php echo $row['name']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<br><br>
<table border="1" align="center" width="100%">
	<tr bgcolor="#CCC">
		<th width="10%"><strong>NO</strong></th>
		<th width="90%"><strong>QF 4</strong></th>
	</tr>
	<?php foreach($group4 as $row) :?>	
	<tr>
		<td><?php echo $row['sort']; ?></td>
		<td align="left"> <?php echo $row['name']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<br><br>
<p>Copyright &copy; PSSI - <?php echo date('Y'); ?></p>