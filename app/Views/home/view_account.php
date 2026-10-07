<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Details - Puihaha Electric</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #f6f8fc;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            padding: 18px 0;
        }

        .brand {
            color: #214ca8;
            font-size: 1.35rem;
            font-weight: 800;
            text-decoration: none;
        }

        .brand i {
            color: #ffc400;
        }

        .details-container {
            max-width: 950px;
            margin: 45px auto;
            padding: 0 18px;
        }

        .details-card {
            background: #fff;
            border: 0;
            border-radius: 16px;
            box-shadow: 0 8px 22px rgba(20, 35, 80, 0.10);
            overflow: hidden;
        }

        .details-header {
            background: linear-gradient(135deg, #214ca8, #314f9c);
            color: #fff;
            padding: 25px 30px;
        }

        .details-header h2 {
            margin: 0;
            font-weight: 800;
        }

        .details-body {
            padding: 30px;
        }

        .detail-box {
            background: #f8f9fc;
            border-radius: 10px;
            min-height: 100px;
            padding: 18px;
        }

        .detail-label {
            color: #5f6879;
            font-size: 0.9rem;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .detail-value {
            color: #1d2637;
            font-size: 1.1rem;
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
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <a class="brand" href="<?= base_url('/') ?>">
                <i class="bi bi-lightning-charge-fill"></i> Puihaha Electric
            </a>

            <a href="<?= base_url('/dashboard') ?>" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left"></i> Back to Dashboard
            </a>
        </div>
    </nav>

    <main class="details-container">
        <div class="details-card">
            <div class="details-header">
                <h2>
                    <i class="bi bi-person-vcard-fill me-2"></i>
                    Customer Account Details
                </h2>
            </div>

            <div class="details-body">
                <div class="row g-4">

                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="detail-label">Account Number</div>
                            <div class="detail-value"><?= esc($account['account_number']) ?></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="detail-label">Status</div>
                            <div class="detail-value">
                                <span class="badge status-<?= esc($account['status']) ?> fs-6">
                                    <?= ucfirst(esc($account['status'])) ?>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="detail-box">
                            <div class="detail-label">Customer Name</div>
                            <div class="detail-value"><?= esc($account['customer_name']) ?></div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="detail-box">
                            <div class="detail-label">Address</div>
                            <div class="detail-value"><?= esc($account['address']) ?></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="detail-label">
                                <i class="bi bi-telephone-fill me-1"></i> Phone
                            </div>
                            <div class="detail-value"><?= esc($account['phone']) ?></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="detail-label">
                                <i class="bi bi-envelope-fill me-1"></i> Email
                            </div>
                            <div class="detail-value"><?= esc($account['email']) ?></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="detail-label">Meter Number</div>
                            <div class="detail-value"><?= esc($account['meter_number']) ?></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="detail-label">Connection Type</div>
                            <div class="detail-value">
                                <span class="badge type-<?= esc($account['connection_type']) ?> fs-6">
                                    <?= ucfirst(esc($account['connection_type'])) ?>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="detail-label">Created At</div>
                            <div class="detail-value">
                                <?= date('F j, Y g:i A', strtotime($account['created_at'])) ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="detail-label">Last Updated</div>
                            <div class="detail-value">
                                <?= date('F j, Y g:i A', strtotime($account['updated_at'])) ?>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="mt-4 d-flex justify-content-end gap-2">
                    <a href="<?= base_url('/account/edit/' . $account['id']) ?>" class="btn btn-warning">
                        <i class="bi bi-pencil-fill"></i> Edit Customer
                    </a>

                    <a href="<?= base_url('/dashboard') ?>" class="btn btn-primary">
                        <i class="bi bi-arrow-left"></i> Back to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>