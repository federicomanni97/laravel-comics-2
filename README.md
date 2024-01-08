<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## installazione Laravel

``` bash
cd C:\eserciziboolean

composer create-project --prefer-dist laravel/laravel:^9.2 nome_progetto

cd your_project_name_here

#Apro il folder che ho creato
code . -r

#controllo se parte il Server
php artisan serve

#se parte lo spengo
ctrl + c

#pulisco il terminale
clear
```

##Configurazione Laravel

``` bash


composer require pacificdev/laravel_9_preset

php artisan preset:ui bootstrap

npm install

##Installare i font-awesome
npm install --save @fortawesome/fontawesome-free

## In vite config aggiungo agli alias
'~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),

#copio la cartella dei webfonts dentro resources
```