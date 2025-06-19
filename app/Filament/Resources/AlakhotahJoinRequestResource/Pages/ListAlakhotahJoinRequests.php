<?php

namespace App\Filament\Resources\AlakhotahJoinRequestResource\Pages;

use App\Filament\Resources\AlakhotahJoinRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\Exports\Models\Export;
use Filament\Actions\Exports\Enums\ExportFormat;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use Illuminate\Support\Facades\Storage;

class ListAlakhotahJoinRequests extends ListRecords
{
    protected static string $resource = AlakhotahJoinRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
         ExportAction::make()->exports([
             ExcelExport::make('form')->fromForm()->withColumns([
                 \pxlrbt\FilamentExcel\Columns\Column::make('personal_id_image')
                     ->formatStateUsing(fn ($record) => $record->personal_id_image ? \Storage::disk('digitalocean')->url($record->personal_id_image) : null),
                 \pxlrbt\FilamentExcel\Columns\Column::make('cv_file')
                     ->formatStateUsing(fn ($record) => $record->cv_file ? \Storage::disk('digitalocean')->url($record->cv_file) : null),
             ]),
         ])
        ];
    }
}
