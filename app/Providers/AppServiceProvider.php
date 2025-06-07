<?php

namespace App\Providers;

use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use Illuminate\Support\ServiceProvider;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Infolists\Components\TextEntry;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\QueryBuilder\Constraints\BooleanConstraint;
use Filament\Tables\Filters\QueryBuilder\Constraints\DateConstraint;
use Filament\Tables\Filters\QueryBuilder\Constraints\TextConstraint;
use Filament\Tables\Table;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
	    if ($this->app->environment('local') && class_exists(\Laravel\Telescope\TelescopeServiceProvider::class)) {
		    $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
		    $this->app->register(TelescopeServiceProvider::class);
	    }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['ar'])
                ->flags([
                    'ar' => url('/assets/flags/saudi-arabia.svg'),
                ]);
        });

	    TextInput::configureUsing(function (TextInput $input) {
		    $input->maxLength(255)
			    ->label(__($input->getLabel()));
	    });

	    Select::configureUsing(function (Select $select) {
		    $select->native(false)
			    ->searchable()
			    ->preload()
			    ->label(__($select->getLabel()));
	    });

	    DatePicker::configureUsing(function (DatePicker $datePicker) {
		    $datePicker->native(false)
			    ->label(__($datePicker->getLabel()));
	    });

	    DateTimePicker::configureUsing(function (DateTimePicker $datePicker) {
		    $datePicker->native(false)
			    ->label(__($datePicker->getLabel()));
	    });

	    Toggle::configureUsing(function (Toggle $toggle) {
		    $toggle->label(__($toggle->getLabel()));
	    });

	    FileUpload::configureUsing(function (FileUpload $fileUpload) {
		    $fileUpload->maxSize(5 * 1024)
			    ->imageEditor()
			    ->label(__($fileUpload->getLabel()));
	    });

	    Textarea::configureUsing(function (Textarea $textarea) {
		    $textarea->rows(6)
			    ->label(__($textarea->getLabel()));
	    });

	    TextColumn::configureUsing(function (TextColumn $column) {
		    $column->label(__($column->getLabel()));
	    });

	    ImageColumn::configureUsing(function (ImageColumn $column) {
		    $column->label(__($column->getLabel()));
	    });

	    ToggleColumn::configureUsing(function (ToggleColumn $column) {
		    $column->label(__($column->getLabel()));
	    });

	    TextEntry::configureUsing(function (TextEntry $column) {
		    $column->label(__($column->getLabel()));
	    });

	    TextConstraint::configureUsing(function (TextConstraint $column) {
		    $column->label(__($column->getLabel()));
	    });

	    BooleanConstraint::configureUsing(function (BooleanConstraint $column) {
		    $column->label(__($column->getLabel()));
	    });

	    DateConstraint::configureUsing(function (DateConstraint $column) {
		    $column->label(__($column->getLabel()));
	    });

	    Table::configureUsing(function (Table $table) {
		    $table->defaultSort('created_at', 'desc');
	    });
    }
}
