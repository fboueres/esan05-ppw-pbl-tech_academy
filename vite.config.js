import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig(({ mode }) => {
    const env = loadEnv(mode, process.cwd(), '');

    return {
        server: {
            host: env.VITE_HOST || 'localhost',
            port: env.VITE_PORT || 5173,
            hmr: {
                host: env.VITE_HMR_HOST,
            },
            cors: {
                origin: env.VITE_CORS_ORIGIN
            },
        },
        plugins: [
            laravel({
                input: ['resources/scss/app.scss', 'resources/js/app.js'],
                refresh: true,
            }),
        ],
    };
});
