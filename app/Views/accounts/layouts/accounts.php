<h2>Account List</h2>
<style>
    /* General Styling for Pagination */
    .gridjs-pagination .pagination {
        display: flex;
        justify-content: flex-end;
        list-style: none;
        padding: 0;
        margin: 1rem 0;
        flex-wrap: wrap;
        gap: 6px;
    }

    .gridjs-pagination .pagination li {
        border: 1px solid #ddd;
        border-radius: 6px;
        background-color: #f8f9fa;
        font-size: 14px;
        transition: all 0.2s ease-in-out;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .gridjs-pagination .pagination li a {
        display: block;
        padding: 6px 12px;
        color: #405189;
        text-decoration: none;
        font-weight: 500;
        border-radius: 6px;
    }

    .gridjs-pagination .pagination li a:hover {
        background-color: #405189;
        color: #fff;
        text-decoration: none;
        transition: background-color 0.2s ease;
    }

    .gridjs-pagination .pagination li.active,
    .gridjs-pagination .pagination li.active a {
        background-color: #405189;
        color: white !important;
        border-color: #405189;
        font-weight: 600;
    }

    .gridjs-pagination .pagination li.disabled a {
        color: #ccc;
        pointer-events: none;
        background-color: #e9ecef;
        border-color: #dee2e6;
    }

    .gridjs-pagination .pagination li a:focus {
        outline: none;
        box-shadow: 0 0 0 2px rgba(64, 81, 137, 0.3);
    }

    .gridjs-pagination .pagination li:hover:not(.active):not(.disabled) {
        background-color: #e2e6ea;
        border-color: #ccc;
    }
</style>
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Accounts</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Accounts</a></li>
                            <li class="breadcrumb-item active">Accounts List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0 flex-grow-1">Accounts List</h4>
                    </div>
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
                    <div class="card-body">
                        <div id="table-gridjs">
                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                <div class="gridjs-head">
                                </div>
                                <div class="gridjs-wrapper" style="height: auto;">
                                    <table id="accounts-table" role="grid" class="gridjs-table" style="height: auto; text-align: center;">
                                        <thead class="gridjs-thead">
                                            <tr class="gridjs-tr">
                                                <th class="gridjs-th" style="width: 60px;">
                                                    <div class="gridjs-th-content">#</div>
                                                </th>
                                                <th class="gridjs-th">
                                                    <div class="gridjs-th-content">UUID</div>
                                                </th>
                                                <th class="gridjs-th">
                                                    <div class="gridjs-th-content">Email</div>
                                                </th>
                                                <th class="gridjs-th">
                                                    <div class="gridjs-th-content">Username</div>
                                                </th>
                                                <th class="gridjs-th">
                                                    <div class="gridjs-th-content">Status</div>
                                                </th>
                                                <th class="gridjs-th">
                                                    <div class="gridjs-th-content">Verified</div>
                                                </th>
                                                <th class="gridjs-th">
                                                    <div class="gridjs-th-content">Phone</div>
                                                </th>
                                                <th class="gridjs-th">
                                                    <div class="gridjs-th-content">Last Login</div>
                                                </th>
                                                <?php if (session()->get('role_id') === '1'): ?>
                                                    <th class="gridjs-th">Actions</th>
                                                <?php endif; ?>
                                            </tr>
                                        </thead>
                                        <tbody class="gridjs-tbody">
                                            <?php $serial = 1; ?>
                                            <?php if (!empty($accounts) && is_array($accounts)): ?>
                                                <?php foreach ($accounts as $acc): ?>
                                                    <tr class="gridjs-tr align-middle">
                                                        <td class="gridjs-td"><?= $serial++ ?></td>
                                                        <td class="gridjs-td"><?= esc($acc['uuid']) ?></td>
                                                        <td class="gridjs-td"><?= esc($acc['email']) ?></td>
                                                        <td class="gridjs-td"><?= esc($acc['username']) ?></td>
                                                        <td class="gridjs-td"><?= esc($acc['status']) ?></td>
                                                        <td class="gridjs-td"><?= $acc['is_verified'] ? 'Yes' : 'No' ?></td>
                                                        <td class="gridjs-td"><?= esc($acc['phone']) ?></td>
                                                        <td class="gridjs-td"><?= esc($acc['last_login_at'] ?? '-') ?></td>
                                                        <?php if (session()->get('role_id') === '1'): ?>
                                                            <td class="gridjs-td">
                                                                <div class="d-flex flex-wrap justify-content-start gap-2">
                                                                    <!-- Edit Link -->
                                                                    <a href="<?= site_url('accounts/edit/' . $acc['id']) ?>" title="Edit">
                                                                        <i class="ri-file-edit-line" style="font-size: 18px;"></i>
                                                                    </a>

                                                                    <!-- Delete Form -->
                                                                    <form action="<?= site_url('accounts/delete/' . $acc['id']) ?>" method="POST" onsubmit="return confirm('Delete this account?');" style="display:inline;">
                                                                        <?= csrf_field() ?>
                                                                        <button type="submit" style="border: none; background: none;" title="Delete">
                                                                            <i class="ri-delete-bin-6-line" style="font-size: 18px; color: red;"></i>
                                                                        </button>
                                                                    </form>
                                                                    <?php if (session()->get('role_id') === '1' && !$acc['is_verified']): ?>
                                                                        <a href="<?= site_url('accounts/verify/' . $acc['id']) ?>"
                                                                            onclick="return confirm('Verify this account?');"
                                                                            title="Verify Account" style="color: green; font-weight: bold;">
                                                                            Verify
                                                                        </a>
                                                                    <?php else: ?>
                                                                        Verified
                                                                    <?php endif; ?>

                                                                </div>
                                                            </td>
                                                        <?php endif; ?>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <tr class="gridjs-tr">
                                                    <td class="gridjs-td" colspan="<?= (session()->get('role') === 'admin') ? 9 : 8 ?>">No accounts found.</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div class="gridjs-pagination">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>