<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Support\Facades\Auth;
class AppServiceProvider extends ServiceProvider
{

 public function register()
 {
 //
 }
 public function boot(Dispatcher $events)
 {
 $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
 $hak_akses = Auth::user()->hak_akses;
 $event->menu->add('Hak Akses: '.strtoupper($hak_akses));
 $event->menu->add('MENU');
 if ($hak_akses=="administrator") {
 $event->menu->add(
 [
    'text' => 'sumber',
    'url' => 'sumber',
    'icon' => 'fas fa-fw fa-building'
 ],

 [
    'text' => 'Pemasukan',
    'url' => 'pemasukan',
    'icon' => 'fas fa-fw fa-cash-register'
],

[
    'text' => 'Pengeluaran',
    'url' => 'pengeluaran',
    'icon' => 'fas fa-fw fa-cash-register'
],
    );
    }
    });
    }
   }