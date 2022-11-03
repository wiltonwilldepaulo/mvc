<?php

namespace app\database\models;

use app\traits\Create;
use app\traits\Read;
use app\traits\Update;
use app\traits\Connection;

abstract class BaseDB
{
    use Connection, Read, Create, Update;
}
