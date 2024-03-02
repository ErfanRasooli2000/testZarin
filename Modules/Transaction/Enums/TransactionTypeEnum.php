<?php

namespace Modules\Transaction\Enums;

enum TransactionTypeEnum: string
{
    case Charge = "Charge";
    case Follow = "Follow";
}
