import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/style.css", "resources/js/app.js"],
            refresh: true,
        }),
        vue(),
        tailwindcss(),
    ],
    resolve: {
        extensions: [".vue", ".js"],
        alias: {
            "@img": "/resources/img",
        },
    },
});
