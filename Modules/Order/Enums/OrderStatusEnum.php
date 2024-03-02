<?php

namespace Modules\Order\Enums;

enum OrderStatusEnum :string
{
    case Waiting = "Waiting";

    case Progress = "Progress";
    case Done = "Done";
}
