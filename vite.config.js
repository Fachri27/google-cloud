import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build',
        manifest: true,
        rollupOptions: {
            input: ['resources/sass/app.scss', 'resources/js/app.js'],
        },
    },
    base: 'https://clone-google-cloud-production-91f1.up.railway.app/build/', // 🔥 langsung pakai HTTPS
});