<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Add Banner</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Banner</a></li>
                            <li class="breadcrumb-item active">Add Banner</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Add Banner</h4>
                        <?php if (session()->getFlashdata('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php endif; ?>

                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>

                    </div>
                    <div class="card-body">
                        <div class="live-preview">

                            <div class="card-body">
                                <div class="live-preview">
                                    <h2>Create Banner</h2>

                                    <form action="<?= site_url('banners/store') ?>" method="post" enctype="multipart/form-data">
                                        <?= csrf_field() ?>
                                        <div class="row">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="title" class="form-label">Banner Title</label>
                                                    <input type="text" name="title" id="title" class="form-control" value="<?= old('title') ?>" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="image" class="form-label">Banner Image</label>
                                                    <input type="file" name="image" id="image" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="status" class="form-label">Status</label>
                                                    <select name="status" id="status" class="form-select" required>
                                                        <option>Select</option>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-primary">Save Banner</button>
                                                </div>
                                            </div>
                                        </div>
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