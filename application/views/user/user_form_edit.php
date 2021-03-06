<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">User
					<small>Pengguna</small>
				</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Home</a></li>
					<li class="breadcrumb-item active">Edit User</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">

		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Edit Users</h3>
				<div class="float-right">
					<a href="<?= site_url('user') ?>" class="btn btn-primary btn-flat btn-sm"><i
							class="fa fa-arrow-circle-left"></i> Back</a>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
                    <div class="col-md-6 mx-auto">
                        <form action="" method="post"> 
                        <input type="hidden" name="user_id" id="" value="<?= $row->user_id ?>"> 
                            <div class="form-group">
                                <label for="fullname">Name *</label>
                                <input type="text" name="fullname" id="fullname" class="form-control <?= form_error('fullname') ? 'is-invalid' : '' ?>" value="<?= $this->input->post('fullname') ?? $row->name ?>" autofocus>
                                <?php echo form_error('fullname', '<span class="error">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="username">Username *</label>
                                <input type="text" name="username" id="username" class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>" value="<?= $this->input->post('username') ?? $row->username ?>" autofocus>
                                <?php echo form_error('username', '<span class="error">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="password">Password </label><small>(Biarkan kosong jika tidak diganti)</small>
                                <input type="password" name="password" id="password" class="form-control <?= form_error('password') ? 'is-invalid' : '' ?>" value="<?= $this->input->post('password') ?>" autofocus>
                                <?php echo form_error('password', '<span class="error">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="passconf">Password Confirmation </label>
                                <input type="password" name="passconf" id="passconf" class="form-control <?= form_error('passconf') ? 'is-invalid' : '' ?>" value="<?= $this->input->post('passconf') ?>" autofocus>
                                <?php echo form_error('passconf', '<span class="error">', '</small>'); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" id="address" cols="3" rows="" class="form-control"><?= $this->input->post('address') ?? $row->address ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="level">Level *</label>
                                <select name="level" id="level" class="form-control <?= form_error('level') ? 'is-invalid' : '' ?>">
                                    <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level; ?>
                                    <option value="1">Admin</option>
                                    <option value="2" <?= $level == 2 ? 'selected' : null ?>>Kasir</option>
                                </select>
                                <?php echo form_error('level', '<span class="error">', '</small>'); ?>
                            </div>

                            <div class="form-group float-right">
                                <button type="reset" class="btn btn-warning btn-flat">Reset</button>
                                <button type="submit" class="btn btn-success btn-flat">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
			</div>
		</div>

	</div>
</section>
