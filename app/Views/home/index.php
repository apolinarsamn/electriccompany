<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Puihaha Electric</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --blue: #214ca8;
            --gold: #f6a500;
        }

        body {
            background: #f6f8fc;
            color: #1d2637;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            padding: 18px 0;
        }

        .brand {
            color: var(--blue);
            font-size: 1.35rem;
            font-weight: 800;
            text-decoration: none;
        }

        .brand i {
            color: #ffc400;
        }

        .nav-link {
            color: #444 !important;
            font-weight: 600;
            margin-left: 18px;
        }

        .nav-link.active {
            color: var(--blue) !important;
        }

        .dashboard-container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 26px 18px 50px;
        }

        .stats-card {
            border: 0;
            border-radius: 16px;
            color: #fff;
            min-height: 150px;
            padding: 26px 28px;
            box-shadow: 0 12px 20px rgba(20, 35, 80, 0.12);
            position: relative;
            overflow: hidden;
        }

        .stats-card h2 {
            font-size: 2.25rem;
            font-weight: 800;
            margin-bottom: 5px;
        }

        .stats-card p {
            font-size: 1rem;
            font-weight: 600;
            margin: 0;
        }

        .stats-card i {
            position: absolute;
            right: 24px;
            top: 42px;
            font-size: 3rem;
            opacity: 0.28;
        }

        .card-total {
            background: linear-gradient(135deg, #4c70d9, #7a48bc);
        }

        .card-active {
            background: linear-gradient(135deg, #13b998, #24d072);
        }

        .card-inactive {
            background: linear-gradient(135deg, #e91e63, #ff4b2b);
        }

        .card-suspended {
            background: linear-gradient(135deg, #ff641f, #ffc227);
        }

        .page-title {
            color: var(--blue);
            font-weight: 800;
            margin: 0;
        }

        .page-subtitle {
            color: #687184;
            margin: 5px 0 0;
        }

        .btn-gold {
            background: var(--gold);
            border-color: var(--gold);
            border-radius: 24px;
            color: #fff;
            font-weight: 700;
            padding: 12px 25px;
        }

        .btn-gold:hover {
            background: #dc9200;
            border-color: #dc9200;
            color: #fff;
        }

        .filter-card,
        .table-card {
            background: #fff;
            border: 0;
            border-radius: 16px;
            box-shadow: 0 8px 22px rgba(20, 35, 80, 0.08);
        }

        .filter-card {
            padding: 24px;
        }

        .filter-title {
            color: #20293b;
            font-size: 1.1rem;
            font-weight: 800;
        }

        .table-card {
            overflow: hidden;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background: #f8f9fc;
            border-bottom: 1px solid #e6e9f0;
            color: #111827;
            font-size: 0.92rem;
            padding: 17px 14px;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 14px;
            vertical-align: middle;
        }

        .customer-name {
            color: #182238;
            font-weight: 800;
            margin-bottom: 3px;
        }

        .customer-address {
            color: #737b8c;
            font-size: 0.85rem;
        }

        .contact-line {
            color: #4f5b6d;
            font-size: 0.9rem;
            margin-bottom: 4px;
        }

        .contact-line i {
            color: #566577;
            margin-right: 6px;
        }

        .meter-badge {
            background: #f0f1f3;
            color: #111;
            font-size: 0.78rem;
            font-weight: 800;
        }

        .type-residential {
            background: #1676e8;
        }

        .type-commercial {
            background: #f2b500;
            color: #111;
        }

        .type-industrial {
            background: #252d3c;
        }

        .status-active {
            background: #15865a;
        }

        .status-inactive {
            background: #df3445;
        }

        .status-suspended {
            background: #e3a100;
            color: #111;
        }

        .action-btn {
            width: 33px;
            height: 33px;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .pagination {
            margin: 0;
        }

        .pagination .page-link {
            color: var(--blue);
        }

        .pagination .active .page-link {
            background: var(--blue);
            border-color: var(--blue);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="brand" href="<?= base_url('/') ?>">
                <i class="bi bi-lightning-charge-fill"></i> Puihaha Electric
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/about') ?>">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/services') ?>">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/contact') ?>">Contact</a></li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('/dashboard') ?>">
                            <i class="bi bi-speedometer2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/logout') ?>">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="dashboard-container">

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= esc(session()->getFlashdata('success')) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= esc(session()->getFlashdata('error')) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <div class="row g-4 mb-5">
            <div class="col-md-6 col-lg-3">
                <div class="stats-card card-total">
                    <h2><?= $total_accounts ?></h2>
                    <p>Total Accounts</p>
                    <i class="bi bi-people-fill"></i>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="stats-card card-active">
                    <h2><?= $active_accounts ?></h2>
                    <p>Active Accounts</p>
                    <i class="bi bi-check-circle-fill"></i>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="stats-card card-inactive">
                    <h2><?= $inactive_accounts ?></h2>
                    <p>Inactive Accounts</p>
                    <i class="bi bi-person-fill-slash"></i>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="stats-card card-suspended">
                    <h2><?= $suspended_accounts ?></h2>
                    <p>Suspended Accounts</p>
                    <i class="bi bi-person-slash"></i>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
            <div>
                <h1 class="page-title">Customer Accounts</h1>
                <p class="page-subtitle">View and manage registered electricity customers.</p>
            </div>

            <a href="<?= base_url('/account/create') ?>" class="btn btn-gold mt-3 mt-md-0">
                <i class="bi bi-person-plus-fill me-2"></i> Add Customer
            </a>
        </div>

        <section class="filter-card mb-4">
            <div class="filter-title mb-3">
                <i class="bi bi-funnel-fill me-2"></i> Search & Filter
            </div>

            <form method="get" action="<?= base_url('/dashboard') ?>">
                <div class="row g-3 align-items-end">
                    <div class="col-lg-5">
                        <label class="form-label fw-semibold">Search Customer</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-search"></i></span>
                            <input
                                type="text"
                                class="form-control"
                                name="search"
                                placeholder="Account, name, email, meter..."
                                value="<?= esc($search_keyword ?? '') ?>"
                            >
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3">
                        <label class="form-label fw-semibold">Connection Type</label>
                        <select class="form-select" name="type">
                            <option value="">All Types</option>
                            <option value="residential" <?= ($filter_type ?? '') === 'residential' ? 'selected' : '' ?>>Residential</option>
                            <option value="commercial" <?= ($filter_type ?? '') === 'commercial' ? 'selected' : '' ?>>Commercial</option>
                            <option value="industrial" <?= ($filter_type ?? '') === 'industrial' ? 'selected' : '' ?>>Industrial</option>
                        </select>
                    </div>

                    <div class="col-md-4 col-lg-2">
                        <label class="form-label fw-semibold">Status</label>
                        <select class="form-select" name="status">
                            <option value="">All Status</option>
                            <option value="active" <?= ($filter_status ?? '') === 'active' ? 'selected' : '' ?>>Active</option>
                            <option value="inactive" <?= ($filter_status ?? '') === 'inactive' ? 'selected' : '' ?>>Inactive</option>
                            <option value="suspended" <?= ($filter_status ?? '') === 'suspended' ? 'selected' : '' ?>>Suspended</option>
                        </select>
                    </div>

                    <div class="col-md-4 col-lg-2 d-flex gap-2">
                        <button type="submit" class="btn btn-gold flex-grow-1">
                            <i class="bi bi-search me-1"></i> Search
                        </button>

                        <a href="<?= base_url('/dashboard') ?>" class="btn btn-outline-secondary" title="Clear filters">
                            <i class="bi bi-arrow-counterclockwise"></i>
                        </a>
                    </div>
                </div>
            </form>
        </section>

        <section class="table-card">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Account Number</th>
                            <th>Customer</th>
                            <th>Contact</th>
                            <th>Meter</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if (empty($accounts)): ?>
                            <tr>
                                <td colspan="8" class="text-center text-muted py-5">
                                    No customer accounts found.
                                </td>
                            </tr>
                        <?php endif; ?>

                        <?php foreach ($accounts as $account): ?>
                            <?php
                                $typeClass = 'type-' . esc($account['connection_type']);
                                $statusClass = 'status-' . esc($account['status']);
                            ?>
                            <tr>
                                <td><?= esc($account['id']) ?></td>
                                <td class="fw-semibold"><?= esc($account['account_number']) ?></td>

                                <td>
                                    <div class="customer-name"><?= esc($account['customer_name']) ?></div>
                                    <div class="customer-address"><?= esc($account['address']) ?></div>
                                </td>

                                <td>
                                    <div class="contact-line">
                                        <i class="bi bi-telephone-fill"></i><?= esc($account['phone']) ?>
                                    </div>
                                    <div class="contact-line">
                                        <i class="bi bi-envelope-fill"></i><?= esc($account['email']) ?>
                                    </div>
                                </td>

                                <td>
                                    <span class="badge meter-badge"><?= esc($account['meter_number']) ?></span>
                                </td>

                                <td>
                                    <span class="badge <?= $typeClass ?>">
                                        <?= ucfirst(esc($account['connection_type'])) ?>
                                    </span>
                                </td>

                                <td>
                                    <span class="badge <?= $statusClass ?>">
                                        <i class="bi bi-check-circle-fill me-1"></i>
                                        <?= ucfirst(esc($account['status'])) ?>
                                    </span>
                                </td>

                                <td class="text-nowrap">
                                    <a
                                        href="<?= base_url('/account/' . $account['id']) ?>"
                                        class="btn btn-outline-primary action-btn me-1"
                                        title="View"
                                    >
                                        <i class="bi bi-eye-fill"></i>
                                    </a>

                                    <a
                                        href="<?= base_url('/account/edit/' . $account['id']) ?>"
                                        class="btn btn-outline-warning action-btn me-1"
                                        title="Edit"
                                    >
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>

                                    <form
                                        action="<?= base_url('/account/delete/' . $account['id']) ?>"
                                        method="post"
                                        class="d-inline"
                                        onsubmit="return confirm('Delete this customer account?');"
                                    >
                                        <?= csrf_field() ?>
                                        <button type="submit" class="btn btn-outline-danger action-btn" title="Delete">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <?php if ($pager): ?>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mt-4 gap-3">
                <span class="text-muted">
                    Showing page <?= $current_page ?> of <?= $pager->getPageCount() ?>
                </span>

                <?= $pager->links() ?>
            </div>
        <?php endif; ?>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>