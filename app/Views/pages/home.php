<?= view('templates/header') ?>

<div class="welcome-card">
    <div class="welcome-content">
        <p class="eyebrow">POS MANAGEMENT</p>

        <h2>Welcome to Nexa! </h2>

        <p>
            Monitor customer records and manage staff access from one centralized 
            workspace designed to keep daily operations organized and efficient
        </p>

        <a href="<?= base_url('customers') ?>" class="primary-button">
            View Customers
        </a>
    </div>

    <div class="welcome-decoration">
        <span>N</span>
    </div>
</div>

<div class="section-heading">
    <div>
        <h2>System Overview</h2>
        <p>A quick overview of the available records and pages.</p>
    </div>
</div>

<div class="dashboard-grid">

    <article class="stat-card blue-card">

        <div>
            <p>Customer Records</p>
            <h3>5</h3>
            <a href="<?= base_url('customers') ?>">View accounts →</a>
        </div>
    </article>

    <article class="stat-card green-card">
        <div>
            <p>User Records</p>
            <h3>5</h3>
            <a href="<?= base_url('users') ?>">View accounts →</a>
        </div>
    </article>

    <article class="stat-card purple-card">
        <div>
            <p>Available Pages</p>
            <h3>4</h3>
            <span>All routes are available</span>
        </div>
    </article>

</div>

<?= view('templates/footer') ?>