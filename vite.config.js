import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import { viteStaticCopy } from 'vite-plugin-static-copy';
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/style.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),

        viteStaticCopy({
            targets: [
                {
                    src: 'public/assets/images/*',
                    dest: 'assets/images',
                },
                {
                    src: 'public/assets/svg/*',
                    dest: 'assets/svg',
                },
                {
                    src: 'public/assets/fonts/*',
                    dest: 'assets/fonts',
                },
            ],
        }),
    ],
    build: {
        outDir: 'public/build',
        assetsDir: 'assets',
        manifest: true,
    },
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
            '@assets': '/public/assets',
        },
    },
});
