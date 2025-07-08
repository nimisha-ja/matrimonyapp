<div class="page-content">
    <div class="container-fluid">
 <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0"> Banners</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Banner</a></li>
                            <li class="breadcrumb-item active"> Banner</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Banner</h4>
                    
                </div>

                <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>

                <div class="card">
                    <div class="card-body">
                        <h2>Banner List</h2>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($banners as $banner): ?>
                                    <tr>
                                        <td><?= esc($banner['title']) ?></td>
                                        <td><img src="<?= base_url('uploads/banners/'.$banner['image'])?>" width="40"></td>
                                        <td><?= $banner['status'] ? 'Active' : 'Inactive' ?></td>
                                        <td>
                                            <a href="<?= site_url('banners/edit/'.$banner['id'])  ?>"><i class="ri-file-edit-line" style="font-size: 18px;"></i></a> |
                                            <a href="<?= site_url('banners/delete/'.$banner['id'])  ?>" onclick="return confirm('Delete this banner?')"><i class="ri-delete-bin-6-line" style="font-size: 18px; color: red;"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>