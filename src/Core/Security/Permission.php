<?php

namespace PrestaShop\PrestaShop\Core\Security;

class Permission
{
    public const PREFIX = 'ROLE_MOD_TAB_';

    public const CREATE = 'create';
    public const UPDATE = 'update';
    public const DELETE = 'delete';
    public const READ = 'read';

    public const LEVEL_READ = 1;
    public const LEVEL_UPDATE = 2;
    public const LEVEL_CREATE = 3;
    public const LEVEL_DELETE = 4;

    // This class should not be instanciated
    private function __construct()
    {
    }
}
