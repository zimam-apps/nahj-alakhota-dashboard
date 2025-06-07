<?php

namespace App\Filament\Resources\AlakhotahJoinRequestResource\Pages;

use App\Filament\Resources\AlakhotahJoinRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAlakhotahJoinRequest extends ViewRecord
{
    protected static string $resource = AlakhotahJoinRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            // No edit action as per requirements
        ];
    }
}