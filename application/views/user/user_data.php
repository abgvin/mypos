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
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">User</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">

		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Data Users</h3>
				<div class="float-right">
					<a href="<?= site_url('user/add') ?>" class="btn btn-primary btn-flat btn-sm"><i
							class="fa fa-plus"></i> Create</a>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-stripped">
						<thead>
							<tr>
								<th>#</th>
								<th>Username</th>
								<th>Name</th>
								<th>Address</th>
								<th>Level</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
                $no = 1;
                foreach ($row->result() as $data) { ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $data->username ?></td>
								<td><?= $data->name ?></td>
								<td><?= $data->address == '' ? "-" : $data->address ?></td>
								<td><?= $data->level == '1' ? "Admin" : "Kasir" ?></td>
								<td class="text-center" width="160px">
									<a href="<?= site_url('user/edit/'. $data->user_id) ?>" class="btn btn-info btn-flat btn-xs"><i class="fas fa-pencil-alt"></i> Update</a>
								<form action="<?= site_url('user/del') ?>" method="post">
									<input type="hidden" name="user_id" value="<?= $data->user_id ?>">
									<button onclick="return confirm('Delete user ?')" class="btn btn-danger btn-flat btn-xs"><i class="fa fa-trash"></i> Delete</button>
								</form>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</section>
