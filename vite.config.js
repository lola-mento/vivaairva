import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        https: {
          key: fs.readFileSync('./.cert/key.pem'),
          cert: fs.readFileSync('./.cert/cert.pem'),
        },
      },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
