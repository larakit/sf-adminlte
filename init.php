<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-adminlte')
    ->setSourceDir('public')
    ->usePackage('larakit/sf-bootstrap')
    ->usePackage('larakit/sf-font-awesome')
    ->cssPackage('css/AdminLTE.min.css')
    ->cssPackage('css/_all-skins.min.css')
    ->cssPackage('css/larakit.css');
\Larakit\Boot::register_boot(__DIR__ . '/boot');