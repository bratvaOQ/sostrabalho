import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/mainVag.css", "resources/js/mainVag.js"],
            refresh: true,
        }),
    ],
});
