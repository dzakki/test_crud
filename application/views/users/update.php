<div class="row">
      		<div class="col-md-6">
      			<div class="container">
      				<div class="card mb-3">
					  <div class="card-header">
					    Register
					  </div>
					  <div class="card-body">
					    <form action="<?= base_url('user/update/'.$user['id'])?>" method='post'>
					        <div class="form-group">
					            <label for="nik">NIK</label>
					            <input type="number" class="form-control" id="nik" required  name="nik" value="<?= $user['nik'] ?>">
					        </div>
					        <div class="form-group">
					            <label for="username">username</label>
					            <input type="text" class="form-control" id="username"    required  name="username" value="<?= $user['username'] ?>">
					        </div>
					        <div class="form-group">
					            <label for="nama_lengkap">nama lengkap</label>
					            <input type="text" class="form-control" id="nama_lengkap"    required  name="nama_lengkap" value="<?= $user['nama_lengkap'] ?>">
					        </div>
					        <div class="form-group">
					            <label for="Kantor">Kantor</label>
					            <input type="text" class="form-control" id="Kantor"    required  name="kantor" value="<?= $user['kantor'] ?>">
					        </div>
					        <div class="form-group">
					            <label for="group_user">group user</label>
					            <input type="text" class="form-control" id="group_user"    required  name="group_user" value="<?= $user['group_user'] ?>">
					        </div>
					        <div class="form-group">
					            <label for="email">email</label>
					            <input type="email" class="form-control" id="email"    required  name="email" value="<?= $user['email'] ?>">
					        </div>

					        <div class="form-group">
					            <label for="nama_atasan">nama atasan</label>
					            <input type="text" class="form-control" id="nama_atasan"    required  name="nama_atasan" value="<?= $user['nama_atasan'] ?>">
					        </div>

					        <div class="form-group">
					            <label for="email_atasan">email</label>
					            <input type="email" class="form-control" id="email_atasan"    required  name="email_atasan" value="<?= $user['email_atasan'] ?>">
					        </div>
					        <input type="submit" class="btn btn-success" value="Simpan" name="submit">
					    </form>
					  </div>
					</div>
      			</div>
      		</div>
      	</div>