import { defineConfig } from 'vite'

export default defineConfig({
    build: {
        outDir: 'public/dist',
        rollupOptions: {
            input: {
                app: 'assets/app.js',
            },
        },
        manifest: true,
    },
    server: {
        host: 'hier-zurich.test',
        port: 5133,
        strictPort: true,
    },
})
