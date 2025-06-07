<?php

namespace App\Filament\Widgets;

use App\Models\AlakhotahJoinRequest;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class AlakhotahJoinRequestsChart extends ChartWidget
{
    protected static ?string $heading = 'طلبات الانضمام على مر الزمن';

    protected static ?int $sort = 2;

    public static function canView(): bool
    {
        return request()->routeIs('filament.admin.pages.dashboard');
    }

    protected function getData(): array
    {
        $data = $this->getJoinRequestsPerMonth();

        return [
            'datasets' => [
                [
                    'label' => __('alakhotah.join_requests'),
                    'data' => $data['counts'],
                    'backgroundColor' => '#422b1d',
                    'borderColor' => '#422b1d',
                ],
            ],
            'labels' => $data['months'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    private function getJoinRequestsPerMonth(): array
    {
        $now = Carbon::now();
        $months = collect();
        $counts = collect();

        // Get data for the last 6 months
        for ($i = 5; $i >= 0; $i--) {
            $month = $now->copy()->subMonths($i);
            $monthName = $month->locale('ar')->format('M Y');

            $count = AlakhotahJoinRequest::whereMonth('created_at', $month->month)
                ->whereYear('created_at', $month->year)
                ->count();

            $months->push($monthName);
            $counts->push($count);
        }

        return [
            'months' => $months->toArray(),
            'counts' => $counts->toArray(),
        ];
    }
}
