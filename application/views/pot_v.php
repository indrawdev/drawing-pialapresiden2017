<div class="row"  style="margin-top:20px">
	<div class="col-sm-12">
		<h1 class="title">Drawing 16 Besar</h1>
		<h2 class="title">Indonesia Soccer Championship B</h2>
	</div>
</div>
<hr>
<div class="row">

	<div class="col-xs-6 col-sm-3">
		
		<div class="panel panel-default">
			<div class="panel-heading heading-1"><i class="fa fa-futbol-o" aria-hidden="true"></i>
 POT 1</div>
			<div class="panel-body">
				<ol id="group1" class='simple_with_animation vertical'>
				<?php $a = 1; ?>
				<?php foreach($pot1 as $row) :?>
					<li id="<?php echo $row['id'] ?>" class=""><?php echo "A" . $a++; ?> <img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	
	</div>
	
	<div class="col-xs-6 col-sm-3">
		<div class="panel panel-default">
			<div class="panel-heading heading-2"><i class="fa fa-futbol-o" aria-hidden="true"></i>
 POT 2</div>
			<div class="panel-body">
				<ol id="group2" class='simple_with_animation vertical'>
				<?php $b = 1; ?>
				<?php foreach($pot2 as $row) :?>
					<li id="<?php echo $row['id'] ?>" class=""><?php echo "B" . $b++; ?> <img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>	
			</div>
		</div>
	</div>

	  <!-- Add the extra clearfix for only the required viewport -->
	<div class="clearfix visible-xs-block"></div>

	<div class="col-xs-6 col-sm-3">
		<div class="panel panel-default">
			<div class="panel-heading heading-3"><i class="fa fa-futbol-o" aria-hidden="true"></i>
 POT 3</div>
			<div class="panel-body">
				<ol id="group3" class='simple_with_animation vertical'>
				<?php $c = 1; ?>
				<?php foreach($pot3 as $row) :?>
					<li id="<?php echo $row['id'] ?>" class=""><?php echo "C" . $c++; ?> <img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	</div>
	
	<div class="col-xs-6 col-sm-3">
		<div class="panel panel-default">
			<div class="panel-heading heading-4"><i class="fa fa-futbol-o" aria-hidden="true"></i>
 POT 4</div>
			<div class="panel-body">
				<ol id="group4" class='simple_with_animation vertical'>
				<?php $d = 1; ?>
				<?php foreach($pot4 as $row) :?>
					<li id="<?php echo $row['id'] ?>" class=""><?php echo "D" . $d++; ?> <img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	</div>

	<div class="clearfix visible-xs-block"></div>
</div>