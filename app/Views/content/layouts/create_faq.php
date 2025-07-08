<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">FAQ</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">FAQ</a></li>
                            <li class="breadcrumb-item active">Add FAQ</li>
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
                                                                <ul class="mb-0">
                                                                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                                                        <li><?= esc($error) ?></li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            </div>
                                                        <?php endif; ?>
                                                           
                                                        <form action="<?= site_url('faqs/store') ?>" method="post">
                                                            <?= csrf_field() ?>

                                                            <div class="mb-3">
                                                                <label for="question" class="form-label">Question</label>
                                                                <input type="text" name="question" id="question" class="form-control" value="<?= old('question') ?>" required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="answer" class="form-label">Answer</label>
                                                                <textarea name="answer" id="answer" class="form-control" rows="5" required><?= old('answer') ?></textarea>
                                                            </div>

                                                            <button type="submit" class="btn btn-primary">Save FAQ</button>
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