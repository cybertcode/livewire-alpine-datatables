import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: true,
        // port: 8080,
        hmr: {
            host: '192.168.5.129',
        },
        //Para que no se actualiza cada que guardamos el archivo
        // watch: {
        //     usePolling: true
        // }
    },

});
