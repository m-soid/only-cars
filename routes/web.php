<?php

use App\Http\Controllers\merchs;
use App\Http\Controllers\galeris;
use App\Http\Controllers\events;
use App\Http\Controllers\onlycars;
use Illuminate\Support\Facades\Route;

route::resource('/',onlycars::class);
route::resource('/event',events::class);
route::resource('/gallery',galeris::class);
route::resource('/merch',merchs::class);
