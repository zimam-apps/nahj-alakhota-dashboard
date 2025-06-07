<?php

namespace App\Filament\Widgets;

use App\Models\AlakhotahJoinRequest;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Carbon;

class AlakhotahJoinRequestStatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '30s';

    protected static bool $isLazy = false;

    public static function canView(): bool
    {
        return request()->routeIs('filament.admin.pages.dashboard');
    }

    protected function getStats(): array
    {
        $totalRequests = AlakhotahJoinRequest::count();
        $thisMonthRequests = AlakhotahJoinRequest::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();
        $maleRequests = AlakhotahJoinRequest::where('gender', 'male')->count();
        $femaleRequests = AlakhotahJoinRequest::where('gender', 'female')->count();

        return [
            Stat::make(__('alakhotah.total_join_requests'), $totalRequests)
                ->description(__('alakhotah.all_time_join_requests'))
                ->descriptionIcon('heroicon-m-user-group')
                ->color('primary'),

            Stat::make(__('alakhotah.this_month'), $thisMonthRequests)
                ->description(__('alakhotah.join_requests_this_month'))
                ->descriptionIcon('heroicon-m-calendar')
                ->color('success'),

            Stat::make(__('alakhotah.gender_distribution'), $maleRequests . ' ' . __('alakhotah.male') . ' / ' . $femaleRequests . ' ' . __('alakhotah.female'))
                ->description(__('alakhotah.male_and_female_applicants'))
                ->descriptionIcon('heroicon-m-user')
                ->color('warning'),
        ];
    }
}
