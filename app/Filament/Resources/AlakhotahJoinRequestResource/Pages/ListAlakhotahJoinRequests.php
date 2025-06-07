<?php

namespace App\Filament\Resources\AlakhotahJoinRequestResource\Pages;

use App\Filament\Resources\AlakhotahJoinRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlakhotahJoinRequests extends ListRecords
{
    protected static string $resource = AlakhotahJoinRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // No create action as per requirements
        ];
    }
}