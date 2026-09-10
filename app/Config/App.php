// Dynamic Base URL Configuration
public string $baseURL = 'http://localhost/tb32/public/';

public function __construct()
{
    parent::__construct();

    if (isset($_SERVER['HTTP_HOST'])) {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
        $this->baseURL = $protocol . $_SERVER['HTTP_HOST'] . '/';
    }
}