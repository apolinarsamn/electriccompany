<?= view('templates/header') ?>

<div class="page-summary">
    <div>
        <p class="eyebrow">ACCOUNT MANAGEMENT</p>
        <h2>Customer Directory</h2>
        <p>View the contact information of registered customers.</p>
    </div>

    <div class="record-count">
        <strong><?= count($customers) ?></strong>
        <span>Total Customers</span>
    </div>
</div>

<div class="table-card">

    <div class="table-header">
        <div>
            <h3>Customer Accounts</h3>
            <p>Complete list of customer records</p>
        </div>

        <span class="status-badge">Active Records</span>
    </div>

    <div class="table-wrapper">
        <table class="data-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Customer</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($customers as $index => $customer): ?>
                    <tr>
                        <td class="row-number">
                            <?= $index + 1 ?>
                        </td>

                        <td>
                            <div class="account-info">
                                <div class="account-avatar">
                                    <?= esc(strtoupper(substr($customer['full_name'], 0, 1))) ?>
                                </div>

                                <div>
                                    <strong><?= esc($customer['full_name']) ?></strong>
                                    <span>Customer Account</span>
                                </div>
                            </div>
                        </td>

                        <td><?= esc($customer['email']) ?></td>

                        <td><?= esc($customer['phone']) ?></td>

                        <td>
                            <span class="active-badge">Active</span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<?= view('templates/footer') ?>