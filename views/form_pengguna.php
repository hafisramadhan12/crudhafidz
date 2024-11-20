<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah pengguna</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="db_pengguna.php?proses=insert" method="POST">
               
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" 
                    name="nama" placeholder="Nama anda" required>
                  </div>
                  <div class="form-group">
                    <label for="nama">username</label>
                    <input type="text" class="form-control" id="username" 
                    name="username" placeholder="username anda" required>
                  </div>
                  <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                        <label>Select</label>
                        <select class="form-control" name="level">
                          <option value="admin">admin</option>
                          <option value="user">user</option>
                          
                        </select>
                      </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> -->
                 
                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="Submit" class="btn btn-primary float-right ml-3"><i class="fa fa-save"></i>
                Simpan</button>
                  <button type="Reset" class="btn btn-warning float-right ml-3"><i class="fa fa-retweet"></i>
                  reset</button>
                </div>
              </form>
            </div>