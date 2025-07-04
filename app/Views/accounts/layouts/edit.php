<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Edit Family Details</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Family Management</a></li>
                            <li class="breadcrumb-item active">Edit Family</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Edit Family Details</h4>
                    </div>

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


                        <div class="live-preview">
                            <form action="<?= site_url('accounts/update/' . $account['id']) ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field() ?>

                                <div class="row">

                                    <!-- Full Name -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" name="full_name" class="form-control" value="<?= esc($account['full_name']) ?>" required>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <!-- <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" value=">" required>
                                        </div>
                                    </div> -->

                                    <!-- Username -->
                                    <!-- <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control" value="" required>
                                        </div>
                                    </div> -->

                                    <!-- Phone -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Phone</label>
                                            <input type="text" name="phone" class="form-control" value="<?= esc($account['phone']) ?>">
                                        </div>
                                    </div>

                                    <!-- Gender -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Gender</label>
                                            <select name="gender" class="form-control">
                                                <option value="">-- Select --</option>
                                                <option value="male" <?= $account['gender'] === 'male' ? 'selected' : '' ?>>Male</option>
                                                <option value="female" <?= $account['gender'] === 'female' ? 'selected' : '' ?>>Female</option>
                                                <option value="other" <?= $account['gender'] === 'other' ? 'selected' : '' ?>>Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Age -->
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Age</label>
                                            <input type="number" name="age" class="form-control" value="<?= esc($account['age']) ?>">
                                        </div>
                                    </div>

                                    <!-- Height -->
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Height (cm)</label>
                                            <input type="number" name="height_cm" class="form-control" value="<?= esc($account['height_cm']) ?>">
                                        </div>
                                    </div>

                                    <!-- Religion -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Religion</label>
                                            <input type="text" name="religion" class="form-control" value="<?= esc($account['religion']) ?>">
                                        </div>
                                    </div>

                                    <!-- Community -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Community</label>
                                            <input type="text" name="community" class="form-control" value="<?= esc($account['community']) ?>">
                                        </div>
                                    </div>

                                    <!-- Education -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Education</label>
                                            <input type="text" name="education" class="form-control" value="<?= esc($account['education']) ?>">
                                        </div>
                                    </div>

                                    <!-- Profession -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Profession</label>
                                            <input type="text" name="profession" class="form-control" value="<?= esc($account['profession']) ?>">
                                        </div>
                                    </div>

                                    <!-- Location Fields -->
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Country</label>
                                            <input type="text" name="country" class="form-control" value="<?= esc($account['country']) ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">State</label>
                                            <input type="text" name="state" class="form-control" value="<?= esc($account['state']) ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">City</label>
                                            <input type="text" name="city" class="form-control" value="<?= esc($account['city']) ?>">
                                        </div>
                                    </div>

                                    <!-- Hobbies -->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Hobbies</label>
                                            <textarea name="hobbies" class="form-control" rows="2"><?= esc($account['hobbies']) ?></textarea>
                                        </div>
                                    </div>

                                    <!-- Profile Picture -->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Profile Picture</label>
                                            <input type="file" name="profile_picture" class="form-control">

                                            <?php if (!empty($account['profile_picture'])): ?>
                                                <img src="<?= base_url('uploads/profiles/' . $account['profile_picture']) ?>" style="height: 100px; width: 100px;" alt="Profile Picture">
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-lg-12 mt-4">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Update Account</button>
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