<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-adminlte')
    ->setSourceDir('public')
    ->usePackage('larakit/sf-bootstrap')
    ->cssPackage('css/AdminLTE.min.css')
    ->cssPackage('css/_all-skins.min.css');