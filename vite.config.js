import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
 
export default defineConfig({
    plugins: [
        laravel([
            '/public/css/style.css',
            '/public/js/app.js',
            '/public/css/app.css',
        ]),
    ],
});

