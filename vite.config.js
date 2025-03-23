import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // CSS
                'resources/css/app.css', 
                

                // JavaScript
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
