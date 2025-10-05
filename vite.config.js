import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
 
export default defineConfig({
    plugins: [
        laravel([
            '/css/style.css',
            '/js/app.js',
            '/css/app.css',
        ]),
    ],
});

