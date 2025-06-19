<?php

use Maatwebsite\Excel\ExcelServiceProvider;

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\Filament\AdminPanelProvider::class,
    App\Providers\HorizonServiceProvider::class,
    App\Providers\TelescopeServiceProvider::class,
	ExcelServiceProvider::class,
];
