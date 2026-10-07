<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Puihaha Electric</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --blue: #214ca8;
            --gold: #f6a500;
        }

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

        .login-hero {
            background: linear-gradient(110deg, #244caf, #1b2d4c);
            color: white;
            padding: 48px 20px;
            text-align: center;
        }

        .login-hero h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-top: 10px;
        }

        .login-hero .hero-icon {
            color: #ffc400;
            font-size: 2.5rem;
        }

        .login-box {
            max-width: 525px;
            margin: 70px auto;
            padding: 42px 46px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(20, 35, 80, 0.10);
        }

        .electric-icon {
            align-items: center;
            background: linear-gradient(135deg, #214ca8, #18c994);
            border-radius: 50%;
            color: #fff;
            display: flex;
            font-size: 1.8rem;
            height: 75px;
            justify-content: center;
            margin: 0 auto 20px;
            width: 75px;
        }

        .login-box h2 {
            color: var(--blue);
            font-size: 2rem;
            font-weight: 800;
        }

        .form-label {
            color: #20293b;
            font-weight: 700;
        }

        .input-group-text {
            color: var(--blue);
        }

        .btn-gold {
            background: var(--gold);
            border-color: var(--gold);
            border-radius: 25px;
            color: #fff;
            font-size: 1.05rem;
            font-weight: 800;
            padding: 12px;
        }

        .btn-gold:hover {
            background: #dc9200;
            border-color: #dc9200;
            color: #fff;
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
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/about') ?>">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/services') ?>">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/contact') ?>">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/register') ?>">Register</a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('/login') ?>">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="login-hero">
        <div class="hero-icon"><i class="bi bi-person-lock"></i></div>
        <h1>Account Login</h1>
        <p class="mb-0">Sign in to access the Puihaha Electric customer management system.</p>
    </section>

    <main class="container">
        <div class="login-box">
            <div class="electric-icon">
                <i class="bi bi-lightning-charge-fill"></i>
            </div>

            <div class="text-center mb-4">
                <h2>Welcome Back</h2>
                <p class="text-muted mb-0">Enter your account information below.</p>
            </div>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= esc(session()->getFlashdata('error')) ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <?= esc(session()->getFlashdata('success')) ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/login') ?>" method="post">
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label class="form-label">
                        <i class="bi bi-envelope-fill me-1"></i> Email Address
                    </label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Enter your email"
                        value="<?= old('email') ?>"
                        required
                    >
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        <i class="bi bi-lock-fill me-1"></i> Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Enter your password"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-gold w-100">
                    <i class="bi bi-box-arrow-in-right me-2"></i> Login
                </button>
            </form>

            <p class="text-center text-muted mt-4 mb-0">
                No account yet?
                <a href="<?= base_url('/register') ?>" class="text-decoration-none fw-bold">
                    Create an account
                </a>
            </p>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>