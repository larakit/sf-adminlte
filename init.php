<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-adminlte')
    ->setSourceDir('public')
    ->usePackage('larakit/sf-bootstrap')
    ->usePackage('larakit/sf-font-awesome')
    ->usePackage('larakit/sf-font-roboto')
    ->cssPackage('css/AdminLTE.min.css')
    ->cssPackage('css/_all-skins.min.css')
    ->cssPackage('css/larakit.css');
\Larakit\Boot::register_boot(__DIR__ . '/boot');

function adminlte_color_id($id) {
    $colors = [
        'bg-blue',
//        'bg-gray-light',
//        'bg-black',
        'bg-red',
        'bg-yellow',
//        'bg-gray',
        'bg-aqua',
//        'bg-light-blue',
        'bg-green',
        'bg-navy',
        'bg-teal',
        'bg-olive',
//        'bg-lime',
        'bg-orange',
        'bg-fuchsia',
        'bg-purple',
        'bg-maroon',
        'bg-gray-active',
        'bg-black-active',
    ];
    
    return \Illuminate\Support\Arr::get($colors, (int) $id % count($colors));
}