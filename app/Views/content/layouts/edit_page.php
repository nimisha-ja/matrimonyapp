<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Add Acccount Details</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"> Add Acccount Details</a></li>
                            <li class="breadcrumb-item active">Add Acccount Details</li>
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
                                                        <h2>Edit Page</h2>

                                                        <form action="<?= site_url('content/pages/update/' . $page['id']) ?>" method="post">
                                                            <?= csrf_field() ?>

                                                            <div class="mb-3">
                                                                <label>Title</label>
                                                                <input type="text" name="title" class="form-control" value="<?= esc($page['title']) ?>" required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label>Slug</label>
                                                                <input type="text" name="slug" class="form-control" value="<?= esc($page['slug']) ?>" required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label>Content</label>
                                                                <textarea name="content" class="form-control" rows="6"><?= esc($page['content']) ?></textarea>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label>Status</label>
                                                                <select name="status" class="form-control">
                                                                    <option value="active" <?= $page['status'] == 'active' ? 'selected' : '' ?>>Active</option>
                                                                    <option value="inactive" <?= $page['status'] == 'inactive' ? 'selected' : '' ?>>Inactive</option>
                                                                </select>
                                                            </div>

                                                            <button type="submit" class="btn btn-success">Update Page</button>
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
        <!-- Place the first <script> tag in your HTML's <head> -->
        <script src="https://cdn.tiny.cloud/1/i1w13po0mtm5w3v1cykakws8qeie4hxlgxy449ew0dw8zo42/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

        <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: [
                    // Core editing features
                    'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
                    // Your account includes a free trial of TinyMCE premium features
                    // Try the most popular premium features until Jul 18, 2025:
                    'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown', 'importword', 'exportword', 'exportpdf'
                ],
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [{
                        value: 'First.Name',
                        title: 'First Name'
                    },
                    {
                        value: 'Email',
                        title: 'Email'
                    },
                ],
                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
            });
        </script>