<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $data['users'] = [
            ['username' => 'admin_main', 'full_name' => 'Carlos Reyes', 'role' => 'Administrator'],
            ['username' => 'cashier_01', 'full_name' => 'Maria Santos', 'role' => 'Cashier'],
            ['username' => 'cashier_02', 'full_name' => 'Juan Dela Cruz', 'role' => 'Cashier'],
            ['username' => 'inventory_mgr', 'full_name' => 'Elena Gomez', 'role' => 'Inventory Manager'],
            ['username' => 'supervisor_01', 'full_name' => 'Mark Ramos', 'role' => 'Store Supervisor'],
        ];

        // Loads app/Views/templates/nav.php and app/Views/users/index.php
        return view('templates/nav') . view('users/index', $data);
    }
}