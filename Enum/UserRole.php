<?php
// role user ,admin

namespace App\Enum;

class UserRole
{
    const ADMIN = 'admin';
    const USER = 'user';

    const TYPES = [
        self::ADMIN,
        self::USER
    ];
}
