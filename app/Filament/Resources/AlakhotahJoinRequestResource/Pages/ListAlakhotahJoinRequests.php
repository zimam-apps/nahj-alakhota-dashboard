<?php

namespace App\Filament\Resources\AlakhotahJoinRequestResource\Pages;

use App\Filament\Resources\AlakhotahJoinRequestResource;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Columns\Column;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListAlakhotahJoinRequests extends ListRecords
{
    protected static string $resource = AlakhotahJoinRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
         ExportAction::make()
	         ->label(__('تصدير'))
	         ->exports([
             ExcelExport::make('form')
	             ->fromForm()
	             ->withColumns([
                 Column::make('personal_id_image')
                     ->formatStateUsing(fn ($record) => $record->personal_id_image ? \Storage::disk('digitalocean')->url($record->personal_id_image) : null),
                 Column::make('cv_file')
                     ->formatStateUsing(fn ($record) => $record->cv_file ? \Storage::disk('digitalocean')->url($record->cv_file) : null),
             ]),
         ])
        ];
    }
}
