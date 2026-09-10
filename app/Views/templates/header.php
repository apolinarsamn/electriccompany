<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= esc($title) ?> | Nexa POS</title>

    <link
        rel="stylesheet"
        href="<?= base_url('css/style.css') ?>"
    >
</head>

<body>

<?php $currentPage = service('uri')->getSegment(1); ?>

<div class="app-layout">

    <aside class="sidebar">

        <div class="brand">
            <div class="brand-text">
                <h2>Nexa</h2>
                <span>POS System</span>
            </div>
        </div>

        <nav class="sidebar-nav">

            <a
                href="<?= base_url('/') ?>"
                class="<?= $currentPage === '' ? 'active' : '' ?>"
            >
                <span>Home</span>
            </a>

            <a
                href="<?= base_url('about') ?>"
                class="<?= $currentPage === 'about' ? 'active' : '' ?>"
            >
                <span>About</span>
            </a>

            <a
                href="<?= base_url('customers') ?>"
                class="<?= $currentPage === 'customers' ? 'active' : '' ?>"
            >
                <span>Customers</span>
            </a>

            <a
                href="<?= base_url('users') ?>"
                class="<?= $currentPage === 'users' ? 'active' : '' ?>"
            >
                <span>Users</span>
            </a>

        </nav>

    </aside>

    <main class="main-content">

        <header class="topbar">

            <div>
                <p class="page-label">Point of Sale</p>
                <h1><?= esc($title) ?></h1>
            </div>

        </header>

        <section class="page-content">