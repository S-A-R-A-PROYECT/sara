<?php

namespace App\Enums;

enum RecordType: string
{
    case device = "Device";
    case barcode = "Barcode";
    case manual = "Manual";
}
