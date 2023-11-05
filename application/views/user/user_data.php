<section class="section">
          <div class="section-header">
            <h1> Data User</h1>
          </div>
           <?php $this->load->view("_partials/breadcrumb.php") ?>

           <!-- main content -->
           <section class="content">
           	<?php $this->view('message')?>
            <a href="<?=site_url('user/add')?>" class="btn btn-primary mb-1">Add(+)</a>
           		<div class="box-body table-responsive">
           			<table class="table table-bordered table-striped">
           				<thead>
           					<tr>
           						<th style="width: 5%" class="text-center">ID</th>
           						<th class="text-center">Username</th>
           						<th class="text-center">Name</th>
           						<th class="text-center">Address</th>
           						<th class="text-center">Level</th>
           						<th class="text-center">Action</th>
           					</tr>
           				</thead>
           				<tbody>
           					<?php $no = 1;
           					foreach($row->result() as $key => $data) { ?>
           					<tr>
           						<td><?=$no++?></td>
           						<td><?=$data->username?></td>
           						<td><?=$data->name?></td>
           						<td><?=$data->address?></td>
           						<td><?=$data->level == 1 ? "Admin" : "Kasir"?></td>
           						<td class="text-center" width="250px">
                          <form action="<?=site_url('user/reset')?>" method="post">
           							
                        <a href="<?=site_url('user/edit/'.$data->user_id)?>" class="btn btn-primary btn-xs">
           								<i class="fa fa-edit" style="margin-right: 3px"></i>Edit</a>

                        <input type="hidden" name="user_id" value="<?=$data->user_id?>">
                        <button onclick="return confirm('Yakin Password Ingin Direset?')" class="btn btn-success btn-xs">
                        <i class="fa fa-unlock"></i>Reset Pass</a>
                        </button>      
                        </form>
                        

<!--            							<form action="<?=site_url('user/del')?>" method="post">
                        <input type="hidden" name="user_id" value="<?=$data->user_id?>">
                        <button onclick="return confirm('Yakin Data Ingin Menghapus?')" class="btn btn-danger btn-xs">
                        <i class="fa fa-trash"></i>Delete</a>
                        </button>      
                        
                        </form> -->
                        <!-- <a href="<?=site_url('user/delete/')?>" class="btn btn-danger btn-xs">
           								<i class="fa fa-trash"></i>Delete</a> -->
           						</td>
           					</tr>
           					<?php 
           					} ?>
           				</tbody>
           			</table>
           		</div>
           	</div>
           </section>
        
</section>