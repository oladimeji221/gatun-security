<?php

use App\Livewire\AboutComponent;
use App\Livewire\ContactComponent;
use App\Livewire\HomeComponent;
use App\Livewire\OurLocationComponent;
use App\Livewire\Services\BouncersComponent;
use App\Livewire\Services\CctvInstallationMonitoringComponent;
use App\Livewire\Services\ConciergeComponent;
use App\Livewire\Services\EscortComponent;
use App\Livewire\Services\KeyHoldingComponent;
use App\Livewire\Services\RapidAlarmResponseComponent;
use App\Livewire\Services\RetailSecurityComponent;
use App\Livewire\Services\SecurityDogsComponent;
use App\Livewire\Services\SiaDoorSupervisorsComponent;
use App\Livewire\Services\SiaLicenseStaffComponent;
use App\Livewire\Services\SiteEventsPropertySecurityComponent;
use App\Livewire\Services\TwentyFourHourCallOutComponent;
use App\Livewire\Services\TwentyFourHourMobileGuardingComponent;
use App\Livewire\ServicesComponent;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

// Main Pages
Route::get('/', HomeComponent::class)->name('home');
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/our-location', OurLocationComponent::class)->name('our-location');
Route::get('/services', ServicesComponent::class)->name('services');

// Service Pages
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/retail-security', RetailSecurityComponent::class)->name('retail-security');
    Route::get('/concierge', ConciergeComponent::class)->name('concierge');
    Route::get('/key-holding', KeyHoldingComponent::class)->name('key-holding');
    Route::get('/sia-license-staff', SiaLicenseStaffComponent::class)->name('sia-license-staff');
    Route::get('/rapid-alarm-response', RapidAlarmResponseComponent::class)->name('rapid-alarm-response');
    Route::get('/sia-door-supervisors', SiaDoorSupervisorsComponent::class)->name('sia-door-supervisors');
    Route::get('/24-hour-mobile-guarding', TwentyFourHourMobileGuardingComponent::class)->name('24-hour-mobile-guarding');
    Route::get('/24-hour-call-out', TwentyFourHourCallOutComponent::class)->name('24-hour-call-out');
    Route::get('/cctv-installation-monitoring', CctvInstallationMonitoringComponent::class)->name('cctv-installation-monitoring');
    Route::get('/site-events-property-security', SiteEventsPropertySecurityComponent::class)->name('site-events-property-security');
    Route::get('/security-dogs', SecurityDogsComponent::class)->name('security-dogs');
    Route::get('/escort', EscortComponent::class)->name('escort');
    Route::get('/bouncers', BouncersComponent::class)->name('bouncers');
});


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
