<div class="container">
    <h1>Customer Accounts 👥</h1>
    <p style="color: var(--text-muted);">Manage and view your registered customer information below[cite: 1].</p>
    
    <table class="styled-table">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><strong><?= esc($customer['full_name']) ?></strong></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>