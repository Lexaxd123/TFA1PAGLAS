<div class="container">
    <h1>User Accounts 🔐</h1>
    <p style="color: var(--text-muted);">Internal staff and user access roles list[cite: 1].</p>
    
    <table class="styled-table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><code><?= esc($user['username']) ?></code></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td><span style="background: rgba(76, 175, 80, 0.2); color: var(--hover-green); padding: 4px 8px; border-radius: 4px; font-size: 0.9em;"><?= esc($user['role']) ?></span></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>