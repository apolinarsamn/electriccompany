<?= view('templates/header') ?>

<div class="page-summary">
    <div>
        <p class="eyebrow">STAFF MANAGEMENT</p>
        <h2>User Directory</h2>
        <p>View the account information and assigned roles of system users.</p>
    </div>

    <div class="record-count">
        <strong><?= count($users) ?></strong>
        <span>Total Users</span>
    </div>
</div>

<div class="table-card">

    <div class="table-header">
        <div>
            <h3>User Accounts</h3>
            <p>Complete list of system users and staff</p>
        </div>

        <span class="status-badge">Authorized Users</span>
    </div>

    <div class="table-wrapper">
        <table class="data-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>User</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $index => $user): ?>
                    <tr>
                        <td class="row-number">
                            <?= $index + 1 ?>
                        </td>

                        <td>
                            <div class="account-info">
                                <div class="account-avatar user-avatar">
                                    <?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?>
                                </div>

                                <div>
                                    <strong><?= esc($user['full_name']) ?></strong>
                                    <span>Staff Account</span>
                                </div>
                            </div>
                        </td>

                        <td>
                            <span class="username">
                                @<?= esc($user['username']) ?>
                            </span>
                        </td>

                        <td>
                            <span class="role-badge">
                                <?= esc($user['role']) ?>
                            </span>
                        </td>

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