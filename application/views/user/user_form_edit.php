<section class="section">
          <div class="section-header">
            <h1> Edit User</h1>
          </div>
           <?php $this->load->view("_partials/breadcrumb.php") ?>

           <!-- main content -->
           <section class="content">
           		
            
           		<div class="box-body" style="margin-top: 30px">
           			<div class="row">
           				<div class="col-md-4" style="margin-left: 30px">
           					<form action="" method="post">
           						<div class="form-group">
           							<label><b>Name</b></label>
                        <input type="hidden" name="user_id" value="<?=$row->user_id?>">
           							<input type="text" name="name" value="<?=$this->input->post('name') ?? $row->name?>" class="form-control">
           							<span style="color: red"><?=form_error('name')?></span>
           						</div>
           						<div class="form-group">
           							<label><b>Username</b></label>
           							<input type="text" name="username"  value="<?=$this->input->post('username') ?? $row->username?>" class="form-control">
           							<span style="color: red"><?=form_error('username')?></span>
           						</div>
                      <!--   <div class="form-group">
                        <label><b>Password</b></label>
                        <input type="password" name="password"  value="<?=$this->input->post('password')?>" class="form-control">
                        <span style="color: red"><?=form_error('password')?></span>
                      </div>
                      <div class="form-group">
                        <label><b>Password Confirmation</b></label>
                        <input type="password" name="passconf"  value="<?=$this->input->post('passconf')?>" class="form-control">
                        <span style="color: red"><?=form_error('passconf')?></span>
                      </div> -->
           						<div class="form-group">
           							<label><b>Address</b></label>
           							<textarea name="address" class="form-control"><?=$this->input->post('address') ?? $row->address?></textarea>
           							<span style="color: red"><?=form_error('address')?></span>
           						</div>
           						<div class="form-group">
           							<label><b>Level</b></label>
           							<select name="level" class="form-control">
                          <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
           								<option value="1">Admin</option>
           								<option value="2" <?=$level == 2 ? 'selected' : null?>>Kasir</option>
           							</select>	
           							<span style="color: red"><?=form_error('level')?></span>
           						</div>
           						<div class="form-group">
           							<button type="submit" class="btn btn-success btn-flat">
           								<i class="fa fa-paper-plane" style="margin-right: 3px"></i>Save</button>
                          <button type="reset" class="btn btn-primary btn-flat" style="margin-left: 10px">
                            <i class="fa fa-undo" style="margin-right: 3px"></i>Reset</button>
           								<a style="margin-left: 10px" href="<?=site_url('user')?>" class="btn btn-danger btn-flat">
						            	<i class="fa fa-arrow-left" style="margin-right: 3px"></i>Cancel</a>
           							<!-- <button type="Reset" style="margin-left: 5px" class="btn btn-primary btn-flat">Reset</button> -->
           						</div>

           					</form>
           				</div>
           			</div>
           		</div>
           	</div>
           </section>
        
</section>