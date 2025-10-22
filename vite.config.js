import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/tailwind.css', 'resources/js/app.js', 'resources/js/widget.js', 'resources/js/template.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    build: {
    sourcemap: false,
    rollupOptions: {
      output: {
        entryFileNames: '[name].js',
      },
    },
  },
});
