<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlakhotahJoinRequestResource\Pages;
use App\Models\AlakhotahJoinRequest;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AlakhotahJoinRequestResource extends Resource
{
    protected static ?string $model = AlakhotahJoinRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'طلبات الانضمام';

    protected static ?int $navigationSort = 1;

	public static function getLabel(): ?string
	{
		return __('طلبات الانضمام');
	}

	public static function getModelLabel(): string
	{
		return __('طلب انضمام');
	}

	public static function getPluralLabel(): ?string
	{
		return __('طلبات الانضمام');
	}

	public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make('المعلومات الشخصية')
	                ->columns()
                    ->schema([
                        Infolists\Components\TextEntry::make('name')
                            ->label('الاسم'),
                        Infolists\Components\TextEntry::make('email')
                            ->label('البريد الإلكتروني'),
                        Infolists\Components\TextEntry::make('mobile')
                            ->label('رقم الجوال'),
                        Infolists\Components\TextEntry::make('gender')
                            ->label('الجنس'),

                        Infolists\Components\TextEntry::make('birth')
                            ->label('تاريخ الميلاد')
                            ->date(),
                        Infolists\Components\TextEntry::make('blood_type')
                            ->label('فصيلة الدم'),
                        Infolists\Components\TextEntry::make('city')
                            ->label('المدينة'),
                        Infolists\Components\TextEntry::make('uniform_size')
                            ->label('مقاس الزي'),
                    ]),

                Infolists\Components\Section::make('المعلومات التعليمية')
	                ->columns()
                    ->schema([
                        Infolists\Components\TextEntry::make('education')
                            ->label('التعليم'),
                        Infolists\Components\TextEntry::make('languages')
                            ->label('اللغات')
                            ->bulleted(),
                    ]),

                Infolists\Components\Section::make('المستندات')
	                ->columns()
                    ->schema([
                        Infolists\Components\ImageEntry::make('personal_id_image')
                            ->label('صورة الهوية الشخصية'),
                        Infolists\Components\TextEntry::make('cv_file')
                            ->label('السيرة الذاتية')
                            ->url(fn ($record) => $record->cv_file ? asset('storage/' . $record->cv_file) : null)
                            ->openUrlInNewTab(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
	        ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('الاسم')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('البريد الإلكتروني')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mobile')
                    ->label('رقم الجوال')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->label('المدينة')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('تاريخ التقديم')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('created_at')
                    ->form([
                        Forms\Components\DateTimePicker::make('created_from')
                            ->label('تاريخ التقديم من'),
                        Forms\Components\DateTimePicker::make('created_until')
                            ->label('تاريخ التقديم إلى'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->where('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->where('created_at', '<=', $date),
                            );
                    })
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];

                        if ($data['created_from'] ?? null) {
                            $indicators[] = 'تم التقديم من ' . Carbon::parse($data['created_from'])->toDateTimeString();
                        }

                        if ($data['created_until'] ?? null) {
                            $indicators[] = 'تم التقديم إلى ' . Carbon::parse($data['created_until'])->toDateTimeString();
                        }

                        return $indicators;
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->modalHeading('تفاصيل طلب الانضمام'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAlakhotahJoinRequests::route('/'),
        ];
    }
}
