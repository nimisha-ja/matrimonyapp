
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Edit FAQ</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">  FAQ</a></li>
                            <li class="breadcrumb-item active">Edit FAQ</li>
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
                                                        <h2>Edit Faq</h2>


                                                        <form action="<?= site_url('faqs/update/' . $faq['id']) ?>" method="post">
                                                            <?= csrf_field() ?>

                                                            <div class="mb-3">
                                                                <label for="question" class="form-label">Question</label>
                                                                <input type="text" name="question" class="form-control" value="<?= esc($faq['question']) ?>" required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="answer" class="form-label">Answer</label>
                                                                <textarea name="answer" class="form-control" rows="5" required><?= esc($faq['answer']) ?></textarea>
                                                            </div>

                                                            <button type="submit" class="btn btn-primary">Update FAQ</button>
                                                            <a href="<?= site_url('faqs') ?>" class="btn btn-secondary">Cancel</a>
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