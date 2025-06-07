<?php

namespace App\Filament\Widgets;

use App\Models\AlakhotahJoinRequest;
use Filament\Widgets\ChartWidget;

class AlakhotahJoinRequestGenderChart extends ChartWidget
{
    protected static ?string $heading = 'طلبات الانضمام حسب الجنس';

    protected static ?int $sort = 3;

    public static function canView(): bool
    {
        return request()->routeIs('filament.admin.pages.dashboard');
    }

    protected function getData(): array
    {
        $maleCount = AlakhotahJoinRequest::where('gender', 'male')->count();
        $femaleCount = AlakhotahJoinRequest::where('gender', 'female')->count();
        $otherCount = AlakhotahJoinRequest::whereNotIn('gender', ['male', 'female'])->orWhereNull('gender')->count();

        return [
            'datasets' => [
                [
                    'label' => __('alakhotah.gender_distribution'),
                    'data' => [$maleCount, $femaleCount, $otherCount],
                    'backgroundColor' => ['#36A2EB', '#FF6384', '#FFCE56'],
                ],
            ],
            'labels' => [__('alakhotah.male'), __('alakhotah.female'), __('alakhotah.other_not_specified')],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
