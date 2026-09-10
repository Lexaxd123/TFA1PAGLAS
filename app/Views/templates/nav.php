<style>
    :root {
        --bg-dark-green: #0a1f1c;
        --card-green: #123524;
        --accent-green: #2e7d32;
        --light-green: #4caf50;
        --hover-green: #81c784;
        --text-light: #e8f5e9;
        --text-muted: #a5d6a7;
    }
    body {
        background-color: var(--bg-dark-green);
        color: var(--text-light);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 20px;
    }
    .main-nav {
        background: var(--card-green);
        padding: 15px 25px;
        border-radius: 12px;
        margin-bottom: 30px;
        display: flex;
        gap: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        border: 1px solid rgba(255,255,255,0.05);
    }
    .nav-btn {
        color: var(--text-light);
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
        background: rgba(255, 255, 255, 0.05);
    }
    .nav-btn:hover {
        background-color: var(--light-green);
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(76, 175, 80, 0.4);
    }
    .container {
        max-width: 1000px;
        margin: 0 auto;
        background: var(--card-green);
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.4);
        border: 1px solid rgba(255,255,255,0.08);
    }
    h1 {
        color: var(--hover-green);
        margin-top: 0;
    }
    .styled-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        border-radius: 8px;
        overflow: hidden;
    }
    .styled-table thead tr {
        background-color: var(--accent-green);
        color: #ffffff;
        text-align: left;
    }
    .styled-table th, .styled-table td {
        padding: 14px 18px;
    }
    .styled-table tbody tr {
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        transition: background-color 0.2s ease;
    }
    .styled-table tbody tr:hover {
        background-color: rgba(76, 175, 80, 0.15);
    }
    .interactive-card {
        padding: 20px;
        background: rgba(255, 255, 255, 0.03);
        border-left: 4px solid var(--light-green);
        border-radius: 8px;
        margin-top: 20px;
        transition: transform 0.2s ease;
    }
    .interactive-card:hover {
        transform: translateX(5px);
    }
</style>

<nav class="main-nav">
    <a href="<?= base_url('/') ?>" class="nav-btn">🏠 Home</a>
    <a href="<?= base_url('about') ?>" class="nav-btn">ℹ️ About</a>
    <a href="<?= base_url('customers') ?>" class="nav-btn">👥 Customer Accounts</a>
    <a href="<?= base_url('users') ?>" class="nav-btn">🔐 User Accounts</a>
</nav>