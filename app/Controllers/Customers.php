<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $data['customers'] = [
            ['full_name' => 'Zyrah', 'email' => 'zyrah@example.com', 'phone' => '+63 917 123 4567'],
            ['full_name' => 'LexMorris', 'email' => 'lexa.morris@example.com', 'phone' => '+63 918 234 5678'],
            ['full_name' => 'Enzo Baraboy', 'email' => 'enzo.b@example.com', 'phone' => '+63 919 345 6789'],
            ['full_name' => 'Ada Wong', 'email' => 'ada.wong@example.com', 'phone' => '+63 920 456 7890'],
            ['full_name' => 'Lebron James', 'email' => 'lebron.james@example.com', 'phone' => '+63 921 567 8901'],
        ];

        // Loads app/Views/templates/nav.php and app/Views/customers/index.php
        return view('templates/nav') . view('customers/index', $data);
    }
}