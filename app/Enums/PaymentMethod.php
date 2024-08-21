<?php

namespace App\Enums;

enum PaymentMethod: string
{
    case BANK = 'Bank';
    case CASH = 'Cash';
}
