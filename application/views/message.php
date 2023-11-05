<?php if ($this->session->has_userdata('success')) { ?>
<div class="alert alert-success alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</span></button>
<i class="icon fa fa-check"></i> <?=$this->session->flashdata('success');?>
</div>
<?php } ?>

<!-- 
$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Item Berhasil ditambahkan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			  </button>
			</div>'); -->