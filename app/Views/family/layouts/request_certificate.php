<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Request Certificate</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Family</a></li>
                            <li class="breadcrumb-item active">Request Certificate</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Request Certificate</h4>
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
                            <form action="<?= site_url('family/save-certificate') ?>" method="post">
                                <?= csrf_field() ?>
                                <div class="row">                                  
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="certificate_type" class="form-label">Certificate Type</label>
                                            <select name="certificate_type" class="form-control" required>
                                                <option value="Baptism">Baptism</option>
                                                <option value="Marriage">Marriage</option>
                                                <option value="Death">Death</option>
                                            </select>
                                        </div>
                                    </div>                                    
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="details" class="form-label">Details</label>
                                                <textarea name="details" class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-4">
                                                <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Submit Request</button>
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