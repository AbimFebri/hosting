import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            // Hapus input app.css dan app.js jika tidak ada lagi aset kustom
            input: [], // Atau biarkan kosong jika tidak ada aset Vite lain
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build', // Biarkan ini
    }
});