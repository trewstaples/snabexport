import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import tailwindcss from "@tailwindcss/vite";
import path from "path";

export default defineConfig({
    server: {
        host: "0.0.0.0", // чтобы был доступен из контейнера и снаружи
        port: 5173,
        strictPort: true,
        hmr: {
            host: "localhost", // или твой внешний адрес, если заходишь не с localhost
            protocol: "ws",
        },
        cors: true, // разрешить CORS
    },
    plugins: [
        laravel({
            input: ["resources/css/style.css", "resources/js/app.js"],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
                compilerOptions: {
                    isCustomElement: (tag) =>
                        ["swiper-container", "swiper-slide"].includes(tag),
                },
            },
        }),
        tailwindcss(),
    ],
    resolve: {
        extensions: [".vue", ".js"],
        alias: {
            "@": path.resolve(__dirname, "./resources/js"),
            "@img": path.resolve(__dirname, "./resources/img"),
        },
    },
});
