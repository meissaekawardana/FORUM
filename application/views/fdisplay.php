<div class="col-md-12">
<br>
	<div class="card">
    <div class="card-header card-header-tabs card-header-primary">
			<div class="row">
				<div class="col-md-5">
					<h3 class="card-title">
						<?php
							if(!empty($forumDisplay)){
								foreach($forumDisplay as $row){
									if($row->id == $id){
										echo $row->nama;
									}
                    		}
											}
											?>
					</h3>
				</div>
				<div class="col-md-5">
					<a class="btn btn-warning btn-round pull-right"  href="<?php echo base_url(); ?>home/createThread/<?php echo $id; ?>"> Buat Thread </a>
				</div>
			</div>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-hover">
				<tbody>
					<?php
						if(!empty($forumDisplayFill)){
							foreach($forumDisplayFill as $data){ ?>
          <tr>
						<td>
							Judul : <label class="judul"><a href="<?php echo base_url() ?>home\detailThread\<?php echo $data->idforum?>"><?php echo $data->judul?></a></label>
							<br>
							Oleh &ensp;: <label class="user"><?php echo $data->nama ?></label> |   <label><?php echo $data->tanggal?> </label>  <br>
							Batas Cari Mentor :<label class="tanggal"><?php echo $data->datementor?> </label>  <br><br>
						</td>
						</tr>
							<?php
								}
									} else { ?>
										<tr>
							<td colspan="2"><center> Thread Belum Tersedia </center>
							</td>
						</tr>
					<?php }	?>
        </tbody>
      </table>
    </div>
  </div>
</div>
