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
                                                        <form action="<?= site_url('accounts/create') ?>" method="post" enctype="multipart/form-data">
                                                            <?= csrf_field() ?>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <label class="form-label">Full Name</label>
                                                                    <input type="text" name="full_name" class="form-control" value="<?= old('full_name') ?>" required>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label class="form-label">Email</label>
                                                                    <input type="email" name="email" class="form-control" value="<?= old('email') ?>" required>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label class="form-label">Username</label>
                                                                    <input type="text" name="username" class="form-control" value="<?= old('username') ?>" required>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label class="form-label">Password</label>
                                                                    <input type="password" name="password" class="form-control" required>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label class="form-label">Phone</label>
                                                                    <input type="text" name="phone" class="form-control" value="<?= old('phone') ?>">
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label class="form-label">Gender</label>
                                                                    <select name="gender" class="form-control">
                                                                        <option value="">-- Select --</option>
                                                                        <option value="male" <?= old('gender') === 'male' ? 'selected' : '' ?>>Male</option>
                                                                        <option value="female" <?= old('gender') === 'female' ? 'selected' : '' ?>>Female</option>
                                                                        <option value="other" <?= old('gender') === 'other' ? 'selected' : '' ?>>Other</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3 mb-3">
                                                                    <label class="form-label">Age</label>
                                                                    <input type="number" name="age" class="form-control" value="<?= old('age') ?>">
                                                                </div>
                                                                <div class="col-md-3 mb-3">
                                                                    <label class="form-label">Height (cm)</label>
                                                                    <input type="number" name="height_cm" class="form-control" value="<?= old('height_cm') ?>">
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label class="form-label">Religion</label>
                                                                    <input type="text" name="religion" class="form-control" value="<?= old('religion') ?>">
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label class="form-label">Community</label>
                                                                    <input type="text" name="community" class="form-control" value="<?= old('community') ?>">
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label class="form-label">Education</label>
                                                                    <input type="text" name="education" class="form-control" value="<?= old('education') ?>">
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <label class="form-label">Profession</label>
                                                                    <input type="text" name="profession" class="form-control" value="<?= old('profession') ?>">
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="form-label">Country</label>
                                                                    <input type="text" name="country" class="form-control" value="<?= old('country') ?>">
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="form-label">State</label>
                                                                    <input type="text" name="state" class="form-control" value="<?= old('state') ?>">
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <label class="form-label">City</label>
                                                                    <input type="text" name="city" class="form-control" value="<?= old('city') ?>">
                                                                </div>
                                                                <div class="col-md-12 mb-3">
                                                                    <label class="form-label">Hobbies</label>
                                                                    <textarea name="hobbies" class="form-control" rows="2"><?= old('hobbies') ?></textarea>
                                                                </div>
                                                                <div class="col-md-12 mb-3">
                                                                    <label class="form-label">Profile Picture</label>
                                                                    <input type="file" name="profile_picture" class="form-control" accept="image/*">
                                                                </div>
                                                                <div class="col-lg-12 mt-4">
                                                                    <div class="text-end">
                                                                        <button type="submit" class="btn btn-primary">Create Account</button>
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
                </div>
            </div>
        </div>
    </div>
</div>