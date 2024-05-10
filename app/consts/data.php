<?php

namespace App\Consts;

class Products
{
    // Genders
    public const GENDER_MALE = 'male';
    public const GENDER_FEMALE = 'female';
    public const GENDER_KIDS = 'kids';
    public const GENDERS = [
        self::GENDER_MALE,
        self::GENDER_FEMALE,
        self::GENDER_KIDS,
    ];

    // Size types
    public const SIZE_TYPE_EU = 'eu';
    public const SIZE_TYPE_US = 'us';
    public const SIZE_TYPE_UK = 'uk';
    public const SIZE_TYPES = [
        self::SIZE_TYPE_EU,
        self::SIZE_TYPE_US,
        self::SIZE_TYPE_UK,
    ];
}