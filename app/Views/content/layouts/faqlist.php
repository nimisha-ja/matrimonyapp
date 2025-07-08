<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0"> FAQs</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">FAQs</a></li>
                            <li class="breadcrumb-item active"> FAQs</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>FAQs</h4>

                </div>

                <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>

                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($faqs)): ?>
                                    <?php foreach ($faqs as $index => $faq): ?>
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td><?= esc($faq['question']) ?></td>
                                            <td><?= esc($faq['answer']) ?></td>
                                            <td>
                                                <a href="<?= site_url('faqs/edit/' . $faq['id']) ?>"><i class="ri-file-edit-line" style="font-size: 18px;"></i></a>
                                                <a href="<?= site_url('faqs/delete/' . $faq['id']) ?>"
                                                    onclick="return confirm('Are you sure you want to delete this FAQ?')">
                                                    <i class="ri-delete-bin-6-line" style="font-size: 18px; color: red;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="4" class="text-center">No FAQs found.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>