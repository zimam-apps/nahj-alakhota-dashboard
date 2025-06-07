<?php

namespace App\Filament\Widgets;

use App\Models\AlakhotahJoinRequest;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class AlakhotahJoinRequestCityChart extends ChartWidget
{
    protected static ?string $heading = 'طلبات الانضمام حسب المدينة';

    protected static ?int $sort = 4;

    public static function canView(): bool
    {
        return request()->routeIs('filament.admin.pages.dashboard');
    }

    protected function getData(): array
    {
        $cityCounts = AlakhotahJoinRequest::select('city', DB::raw('count(*) as count'))
            ->whereNotNull('city')
            ->groupBy('city')
            ->orderByDesc('count')
            ->limit(10)
            ->get();

        $cities = $cityCounts->pluck('city')->toArray();
        $counts = $cityCounts->pluck('count')->toArray();

        return [
            'datasets' => [
                [
                    'label' => __('alakhotah.number_of_requests'),
                    'data' => $counts,
                    'backgroundColor' => '#422b1d',
                ],
            ],
            'labels' => $cities,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
