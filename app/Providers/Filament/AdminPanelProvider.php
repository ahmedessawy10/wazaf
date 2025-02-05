<?php

namespace App\Providers\Filament;

use App\Filament\Resources\CandidateResource;
use App\Filament\Resources\UserResource;
use App\Filament\Resources\PublishedJobResource;
use App\Filament\Resources\OpenJobResource;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
// يمكنك حذف أو تعديل ميدلوير خاص بالإدارة إذا كنت تريد تخصيص صلاحيات معينة
// use App\Http\Middleware\AdminOnly;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login() // تفعيل صفحة تسجيل الدخول الخاصة بـ Filament
            ->colors([
                'primary' => Color::Blue,
            ])
            ->resources([
                CandidateResource::class,
                UserResource::class,
                PublishedJobResource::class,
                OpenJobResource::class,
            ])
            ->pages([
                Dashboard::class,
            ])
            ->widgets([
                AccountWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
                // يمكنك إضافة ميدلوير آخر مثل AdminOnly إذا أردت التحقق من صلاحيات إضافية
            ]);
    }
}
