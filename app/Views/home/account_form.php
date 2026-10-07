<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?> - Puihaha Electric</title>

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

        .form-container {
            max-width: 850px;
            margin: 45px auto;
            padding: 0 18px;
        }

        .form-card {
            background: #fff;
            border: 0;
            border-radius: 16px;
            box-shadow: 0 8px 22px rgba(20, 35, 80, 0.10);
            overflow: hidden;
        }

        .form-header {
            background: linear-gradient(135deg, #214ca8, #314f9c);
            color: #fff;
            padding: 25px 30px;
        }

        .form-header h2 {
            margin: 0;
            font-weight: 800;
        }

        .form-body {
            padding: 30px;
        }

        .btn-gold {
            background: #f6a500;
            border-color: #f6a500;
            color: #fff;
            font-weight: 700;
        }

        .btn-gold:hover {
            background: #dc9200;
            border-color: #dc9200;
            color: #fff;
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

    <main class="form-container">
        <div class="form-card">
            <div class="form-header">
                <h2>
                    <i class="bi bi-person-plus-fill me-2"></i>
                    <?= esc($title) ?>
                </h2>
            </div>

            <div class="form-body">

                <?php $errors = session()->getFlashdata('errors'); ?>

                <?php if ($errors): ?>
                    <div class="alert alert-danger">
                        <strong>Please correct the following:</strong>
                        <ul class="mb-0 mt-2">
                            <?php foreach ($errors as $error): ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="<?= esc($action) ?>" method="post">
                    <?= csrf_field() ?>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Account Number</label>
                            <input
                                type="text"
                                name="account_number"
                                class="form-control"
                                placeholder="Example: EC-2024-0026"
                                value="<?= old('account_number', $account['account_number'] ?? '') ?>"
                                required
                            >
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Meter Number</label>
                            <input
                                type="text"
                                name="meter_number"
                                class="form-control"
                                placeholder="Example: MTR-026"
                                value="<?= old('meter_number', $account['meter_number'] ?? '') ?>"
                                required
                            >
                        </div>

                        <div class="col-md-8">
                            <label class="form-label fw-semibold">Customer Name</label>
                            <input
                                type="text"
                                name="customer_name"
                                class="form-control"
                                placeholder="Enter customer name"
                                value="<?= old('customer_name', $account['customer_name'] ?? '') ?>"
                                required
                            >
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Phone Number</label>
                            <input
                                type="text"
                                name="phone"
                                class="form-control"
                                placeholder="Example: 555-0126"
                                value="<?= old('phone', $account['phone'] ?? '') ?>"
                                required
                            >
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Email Address</label>
                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                placeholder="customer@email.com"
                                value="<?= old('email', $account['email'] ?? '') ?>"
                                required
                            >
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Address</label>
                            <textarea
                                name="address"
                                class="form-control"
                                rows="3"
                                placeholder="Enter complete address"
                                required
                            ><?= old('address', $account['address'] ?? '') ?></textarea>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Connection Type</label>
                            <?php $selectedType = old('connection_type', $account['connection_type'] ?? 'residential'); ?>
                            <select name="connection_type" class="form-select" required>
                                <option value="residential" <?= $selectedType === 'residential' ? 'selected' : '' ?>>Residential</option>
                                <option value="commercial" <?= $selectedType === 'commercial' ? 'selected' : '' ?>>Commercial</option>
                                <option value="industrial" <?= $selectedType === 'industrial' ? 'selected' : '' ?>>Industrial</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Account Status</label>
                            <?php $selectedStatus = old('status', $account['status'] ?? 'active'); ?>
                            <select name="status" class="form-select" required>
                                <option value="active" <?= $selectedStatus === 'active' ? 'selected' : '' ?>>Active</option>
                                <option value="inactive" <?= $selectedStatus === 'inactive' ? 'selected' : '' ?>>Inactive</option>
                                <option value="suspended" <?= $selectedStatus === 'suspended' ? 'selected' : '' ?>>Suspended</option>
                            </select>
                        </div>

                        <div class="col-12 d-flex gap-2 justify-content-end mt-4">
                            <a href="<?= base_url('/dashboard') ?>" class="btn btn-outline-secondary">
                                Cancel
                            </a>

                            <button type="submit" class="btn btn-gold">
                                <i class="bi bi-check-circle-fill me-1"></i>
                                Save Customer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>