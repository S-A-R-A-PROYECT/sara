<?php

namespace App\Enums;

enum UserRol: string
{
    case Student = "student";
    case Teacher = "teacher";
    case Developer = "developer";
    case Parent = "parent";
    case Coordinator = "coordinator";
}
