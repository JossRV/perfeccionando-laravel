import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
    }
});

// instalacion y uso de bootstrap y vite

// instalacion de bootstrap con vita
// instalar bootstrap
// npm install bootstrap @popperjs/core
// instalar sass
// npm install sass --save-dev
// cambiar nombre de carpetas
// /resources/scss/
// /resources/scss/app.scss
// correccion de para ligar la carpeta scss
// input: ['resources/scss/app.scss', 'resources/js/app.js'],
// importacion de alias
// import path from 'path';
// resolve: {
// alias: {
// '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
// }
// }
// importacion en resources/scss/app.scss
// @import "~bootstrap/scss/bootstrap";
// importacion en resources/js/app.js
// import * as bootstrap from 'bootstrap';
// importacion en la cabecera de resources/views/welcome.blade.php
    // @vite(['resources/scss/app.scss', 'resources/js/app.js'])
