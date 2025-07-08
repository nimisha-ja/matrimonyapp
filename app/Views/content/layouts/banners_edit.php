<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Banner</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"> Banner</a></li>
                            <li class="breadcrumb-item active">Edit Banner</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="card-body">
                                <div class="page-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-xxl-8">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <?php if (session()->getFlashdata('success')): ?>
                                                            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                                                        <?php endif; ?>
                                                        <?php if (session()->getFlashdata('errors')): ?>
                                                            <div class="alert alert-danger">
                                                                <?= is_array(session()->getFlashdata('errors')) ?
                                                                    implode('<br>', session()->getFlashdata('errors')) :
                                                                    session()->getFlashdata('errors') ?>
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="container">
                                                            <div class="card shadow-sm">
                                                                <div class="card-header">
                                                                    <h4>Edit Banner</h4>
                                                                </div>
                                                                <div class="card-body">
                                                                    <form action="<?= site_url('banners/update/' . $banner['id']) ?>" method="post" enctype="multipart/form-data">
                                                                        <?= csrf_field() ?>

                                                                        <div class="row mb-3">
                                                                            <div class="col-md-6">
                                                                                <label for="title" class="form-label">Banner Title</label>
                                                                                <input type="text" name="title" id="title" class="form-control" value="<?= esc($banner['title']) ?>" required>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="form-label">Current Image</label><br>
                                                                                <img src="<?= base_url('uploads/banners/' . $banner['image']) ?>" alt="Banner Image" class="img-thumbnail" width="50">
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-3">
                                                                            <div class="col-md-6">
                                                                                <label for="image" class="form-label">Change Image (optional)</label>
                                                                                <input type="file" name="image" id="image" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-3">
                                                                            <div class="col-md-6">
                                                                                <label for="status" class="form-label">Status</label>
                                                                                <select name="status" id="status" class="form-select" required>
                                                                                    <option value="1" <?= $banner['status'] == 1 ? 'selected' : '' ?>>Active</option>
                                                                                    <option value="0" <?= $banner['status'] == 0 ? 'selected' : '' ?>>Inactive</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <button type="submit" class="btn btn-success">Update Banner</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>