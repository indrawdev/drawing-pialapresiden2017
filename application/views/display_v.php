<div class="row"  style="margin-top:20px">
	<div class="col-sm-12">
		<h2 class="title"><img src="<?php echo base_url('assets/images/pialapresiden.png');?>"> DRAWING PEREMPAT FINAL, SEMI FINAL & FINAL <br> PIALA PRESIDEN 2017</h2>
	</div>
</div>
	<hr>
<div class="row">

	<div class="col-xs-6 col-sm-4">
		
		<div class="panel panel-default">
			<div class="panel-heading heading-1">QF 1</div>
			<div class="panel-body">
				<ol id="group1" class='simple_with_animation vertical'>
				<?php foreach($group1 as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> <img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	</div>
	<div class="col-xs-6 col-sm-4">
	</div>
	<div class="col-xs-6 col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading heading-3">QF 3</div>
			<div class="panel-body">
				<ol id="group3" class='simple_with_animation vertical'>
				<?php foreach($group3 as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> <img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4">

	</div>
	<div class="col-md-4">
		<img src="<?php echo base_url('assets/images/bg-knock-out.png'); ?>" class="img-responsive center-block">
	</div>
	<div class="col-md-4">

	</div>
</div>
<div class="row">
	<div class="col-xs-6 col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading heading-2">QF 2</div>
			<div class="panel-body">
				<ol id="group2" class='simple_with_animation vertical'>
				<?php foreach($group2 as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> <img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>	
			</div>
		</div>
	</div>
	<div class="col-xs-6 col-sm-4"></div>
	<div class="col-xs-6 col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading heading-4">QF 4</div>
			<div class="panel-body">
				<ol id="group4" class='simple_with_animation vertical'>
				<?php foreach($group4 as $row) :?>
					<li id="<?php echo $row['id'] ?>" class="<?php echo $row['group']; ?>"><?php echo $row['sort']; ?> <img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></li>
				<?php endforeach; ?>
				</ol>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">POT 1</div>
			<div class="panel-body">
				<div id="group5" class=''>
				<?php foreach($pot1 as $row) :?>
					<form action="<?php echo base_url() . 'home/update'; ?>" method="POST">
					<div class="form-group">
						<div class="row">
							<div class="col-md-4"><label class="control-label"><img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></label></div>
							<div class="col-md-2">
								<select class="form-control" name="group">
									<option value="">Pilih</option> 
									<?php foreach($listgroup as $gl) :?>
								  	<option value="<?php echo $gl['group_id']; ?>" 
								  	<?php if($gl['group_id'] == $row['group']){echo "selected";} ?>> 
								  	<?php echo $gl['group_name']; ?>
								  	</option>
								  	<?php endforeach; ?>
								</select>
							</div>
							<div class="col-md-2">
							<select class="form-control" name="sort">
							<option value="">Pilih</option> 
								<?php foreach($listsort as $ls) :?>
									<option value="<?php echo $ls['sort_id']; ?>"
										<?php if ($ls['sort_id'] == $row['sort']){echo "selected";} ?>>
										<?php echo $ls['value']; ?>
									</option>
								<?php endforeach; ?>
							</select>
							</div>
							<div class="col-md-2">
							<select class="form-control" name="pot">
							<option value="">Pilih</option> 
								<?php foreach($listpot as $ls) :?>
									<option value="<?php echo $ls['pot_id']; ?>"
										<?php if ($ls['pot_id'] == $row['pot']){echo "selected";} ?>>
										<?php echo $ls['name']; ?>
									</option>
								<?php endforeach; ?>
							</select>
							</div>
							<div class="col-md-2">
							<input type="hidden" class="" name="id" value="<?php echo $row['id'] ?>">
							<input type="hidden" class="" name="item_id" value="<?php echo $row['item_id'] ?>">
							<input type="submit" value="EDIT" class="btn btn-danger" />
							</div>
						</div>
					</div>
					</form>
				<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">POT 2</div>
			<div class="panel-body">
				<div id="group5" class=''>
				<?php foreach($pot2 as $row) :?>
					<form action="<?php echo base_url() . 'home/update'; ?>" method="POST">
					<div class="form-group">
						<div class="row">
							<div class="col-md-4"><label class="control-label"><img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></label></div>
							<div class="col-md-2">
								<select class="form-control" name="group">
									<option value="">Pilih</option> 
									<?php foreach($listgroup as $gl) :?>
								  	<option value="<?php echo $gl['group_id']; ?>" 
								  	<?php if($gl['group_id'] == $row['group']){echo "selected";} ?>> 
								  	<?php echo $gl['group_name']; ?>
								  	</option>
								  	<?php endforeach; ?>
								</select>
							</div>
							<div class="col-md-2">
							<select class="form-control" name="sort">
							<option value="">Pilih</option> 
								<?php foreach($listsort as $ls) :?>
									<option value="<?php echo $ls['sort_id']; ?>"
										<?php if ($ls['sort_id'] == $row['sort']){echo "selected";} ?>>
										<?php echo $ls['value']; ?>
									</option>
								<?php endforeach; ?>
							</select>
							</div>
							<div class="col-md-2">
							<select class="form-control" name="pot">
							<option value="">Pilih</option> 
								<?php foreach($listpot as $ls) :?>
									<option value="<?php echo $ls['pot_id']; ?>"
										<?php if ($ls['pot_id'] == $row['pot']){echo "selected";} ?>>
										<?php echo $ls['name']; ?>
									</option>
								<?php endforeach; ?>
							</select>
							</div>
							<div class="col-md-2">
							<input type="hidden" class="" name="id" value="<?php echo $row['id'] ?>">
							<input type="hidden" class="" name="item_id" value="<?php echo $row['item_id'] ?>">
							<input type="submit" value="EDIT" class="btn btn-danger" />
							</div>
						</div>
					</div>
					</form>
				<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">POT 3</div>
			<div class="panel-body">
				<div id="group5" class=''>
					<?php foreach($pot3 as $row) :?>
					<form action="<?php echo base_url() . 'home/update'; ?>" method="POST">
						<div class="form-group">
							<div class="row">
								<div class="col-md-4"><label class="control-label"><img src="<?php echo base_url() . 'assets/images/logo/'; ?><?php echo $row['logo']; ?>"> <span><?php echo $row['name']; ?></span></label></div>
								<div class="col-md-2">
									<select class="form-control" name="group">
										<option value="">Pilih</option> 
										<?php foreach($listgroup as $gl) :?>
									  	<option value="<?php echo $gl['group_id']; ?>" 
									  	<?php if($gl['group_id'] == $row['group']){echo "selected";} ?>> 
									  	<?php echo $gl['group_name']; ?>
									  	</option>
									  	<?php endforeach; ?>
									</select>
								</div>
								<div class="col-md-2">
								<select class="form-control" name="sort">
								<option value="">Pilih</option> 
									<?php foreach($listsort as $ls) :?>
										<option value="<?php echo $ls['sort_id']; ?>"
											<?php if ($ls['sort_id'] == $row['sort']){echo "selected";} ?>>
											<?php echo $ls['value']; ?>
										</option>
									<?php endforeach; ?>
								</select>
								</div>
								<div class="col-md-2">
								<select class="form-control" name="pot">
								<option value="">Pilih</option> 
									<?php foreach($listpot as $ls) :?>
										<option value="<?php echo $ls['pot_id']; ?>"
											<?php if ($ls['pot_id'] == $row['pot']){echo "selected";} ?>>
											<?php echo $ls['name']; ?>
										</option>
									<?php endforeach; ?>
								</select>
								</div>
								<div class="col-md-2">
								<input type="hidden" class="" name="id" value="<?php echo $row['id'] ?>">
								<input type="hidden" class="" name="item_id" value="<?php echo $row['item_id'] ?>">
								<input type="submit" value="EDIT" class="btn btn-danger" />
								</div>
							</div>
						</div>
					</form>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>	
</div>
-->
<div class="row">
	<div class="col-sm-12">
		<div class="well">
			<a href="<?php echo base_url() . 'home/printNow'; ?>" class="btn btn-danger btn-lg btn-block">PRINT OUT</a>
		</div>
	</div>
</div>