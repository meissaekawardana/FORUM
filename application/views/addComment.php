  <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <h3 class="card-title">Fakultas Teknik dan Ilmu  Komputer</h3>
                </div>
                <div class="card-body">

									<?php if(!empty($flashdata)) {echo '<div class="flashdata">'.$flashdata.'</div>';} ?>

	        				<form method="POST" action="<?php echo base_url() ?>home/saveComment">
	        				<input type="hidden" name="idthread" id="idthread" value="<?php echo $id ?>">
                    <div class="row">
											<div class="col-md-12">
												<div class="form-group">
												Judul : <label class="judul"><?php if(!empty($judul)) {echo $judul;} ?></label>
												</div>
											</div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating"> Isi Komentar</label>
                            <textarea class="form-control" rows="5" id="isi" name="isi"></textarea>
                          </div>
                        </div>
                    </div>
									</div>
                    <button type="submit" class="btn btn-primary pull-right" onclick="demo.showNotification">Submit</button>
                  </form>
                </div>
              </div>
