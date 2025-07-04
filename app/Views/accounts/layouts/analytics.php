
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Accounts</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Accounts</a></li>
                            <li class="breadcrumb-item active">Analytics </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    
                    <div class="card-body">
                        <h2>User Analytics</h2>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card text-bg-danger mb-3">
                                    <div class="card-body">
                                        <h5>Total Users</h5>
                                        <p class="card-text"><?= $totalUsers ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card text-bg-info mb-3">
                                    <div class="card-body">
                                        <h5>Registrations (30 days)</h5>
                                        <p class="card-text"><?= $recentRegistrations ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card text-bg-success mb-3">
                                    <div class="card-body">
                                        <h5>Active Users (7 days)</h5>
                                        <p class="card-text"><?= $activeUsers ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card text-bg-warning mb-3">
                                    <div class="card-body">
                                        <h5>Verified Users</h5>
                                        <p class="card-text"><?= $conversions ?></p>
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