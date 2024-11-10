import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'], // Update paths if needed
      refresh: true,
    }),
  ],
  assetsInclude: ['**/*.php'], // Add this line to treat PHP files as static assets
});
