<?php
class Controller
{
    private const SECTION_PRODUCTS = 'products';
    private const SECTION_USERS = 'users';

    public const SECTIONS = [
        self::SECTION_USERS,
        self::SECTION_PRODUCTS
    ];

    public const ACTIONS = [
        self::SECTION_PRODUCTS => [
            'index', 'show', 'create', 'delete'
        ]
    ];

    public function getRoute(string $section, string $action): string
    {
        $section = in_array($section, self::SECTIONS) ? $section : self::SECTION_PRODUCTS;
        $action = in_array($action, self::ACTIONS[$section]) ? $action : 'index';

        return $section . '/' . $action;
    }
}

$controller = new Controller();

include $controller->getRoute($_GET['section'] ?? '', $_GET['action'] ?? '') . '.php';