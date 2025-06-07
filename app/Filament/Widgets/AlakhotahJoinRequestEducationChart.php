<?php

namespace App\Filament\Widgets;

use App\Models\AlakhotahJoinRequest;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class AlakhotahJoinRequestEducationChart extends ChartWidget
{
    protected static ?string $heading = 'طلبات الانضمام حسب المستوى التعليمي';

    protected static ?int $sort = 5;

    public static function canView(): bool
    {
        return request()->routeIs('filament.admin.pages.dashboard');
    }

    protected function getData(): array
    {
        $educationCounts = AlakhotahJoinRequest::select('education', DB::raw('count(*) as count'))
            ->whereNotNull('education')
            ->groupBy('education')
            ->orderByDesc('count')
            ->get();

        $educations = $educationCounts->pluck('education')->toArray();
        $counts = $educationCounts->pluck('count')->toArray();

        return [
            'datasets' => [
                [
                    'label' => __('alakhotah.number_of_requests'),
                    'data' => $counts,
                    'backgroundColor' => '#422b1d',
                ],
            ],
            'labels' => $educations,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
