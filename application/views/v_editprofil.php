<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">

                  <?php
        						if(!empty($forumDisplayFill)){
        							foreach($forumDisplayFill as $data){ ?>

                  <form method="POST" action="<?php echo base_url() ?>home/">>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama</label>
                          <input type="text" class="form-control" value="<?php echo $data->nama?>" id="nama" name="nama">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama</label>
                          <input type="text" class="form-control" value="<?php echo $data->nim?>" id="nim" name="nim">
                        </div>
                      </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="teknik informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Komputer">Teknik Komputer</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Perencanaan Wilayah dan Kota">Perencanaan Wilayah dan Kota</option>
                                <option value="Akuntansi Komputerisasi">Akuntansi Komputerisasi</option>
                                <option value="Akuntansi S1">Akuntansi S1</option>
                                <option value="Akuntansi D3">Akuntansi D3</option>
                                <option value="Manajemen S1">Manajemen S1</option>
                                <option value="Manajemen D3">Manajemen D3</option>
                                <option value="Manajemen Pemasaran">Manajemen Pemasaran</option>
                                <option value="Keuangan dan Perbankan">Keuangan dan Perbankan</option>
                                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                <option value="Ilmu Pemerintahan">Ilmu Pemerintahan</option>
                                <option value="Hubungan Internasional">Hubungan Internasional</option>
                                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                <option value="Desain Interior">Desain Interior</option>
                                <option value="Sastra Inggris">Sastra Inggris</option>
                                <option value="Sastra Jepang">Sastra Jepang</option>
                                <option value="Hukum">Hukum</option>
                           </select>
                          </div>
                        </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Telepon</label>
                          <input type="text" class="form-control" value="<?php echo $data->tlp?>" id="tlp" name="tlp">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="text" class="form-control" value="<?php echo $data->email?>" id="email" name="email">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" value="<?php echo $data->username?>" id="username" name="username">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" class="form-control" id="password" name="password">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Biodata</button>
                    <div class="clearfix"></div>
                    <?php } ?>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="<?php echo base_url();?>assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Upload Foto</h4>
                  <a href="#pablo" class="btn btn-primary btn-round">Upload</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
