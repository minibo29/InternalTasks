<?php

use App\SecondTask\Car;
use App\SecondTask\Door;
use App\SecondTask\Tyre;

$car = new Car([new Door(true), new Tyre(false)]); // we pass a list of all details
