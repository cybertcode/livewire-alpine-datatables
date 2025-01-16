// vite.config.js
import { defineConfig } from "file:///C:/laragon/www/PRACTICE/livewire-alpine-datatables/node_modules/vite/dist/node/index.js";
import laravel from "file:///C:/laragon/www/PRACTICE/livewire-alpine-datatables/node_modules/laravel-vite-plugin/dist/index.js";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: ["resources/css/app.css", "resources/js/app.js"],
      refresh: true
    })
  ],
  server: {
    host: true,
    // port: 8080,
    hmr: {
      host: "192.168.5.129",
      protocol: "https"
    }
    // watch: {
    //     usePolling: true
    // }
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxsYXJhZ29uXFxcXHd3d1xcXFxQUkFDVElDRVxcXFxsaXZld2lyZS1hbHBpbmUtZGF0YXRhYmxlc1wiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9maWxlbmFtZSA9IFwiQzpcXFxcbGFyYWdvblxcXFx3d3dcXFxcUFJBQ1RJQ0VcXFxcbGl2ZXdpcmUtYWxwaW5lLWRhdGF0YWJsZXNcXFxcdml0ZS5jb25maWcuanNcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfaW1wb3J0X21ldGFfdXJsID0gXCJmaWxlOi8vL0M6L2xhcmFnb24vd3d3L1BSQUNUSUNFL2xpdmV3aXJlLWFscGluZS1kYXRhdGFibGVzL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSAndml0ZSc7XG5pbXBvcnQgbGFyYXZlbCBmcm9tICdsYXJhdmVsLXZpdGUtcGx1Z2luJztcblxuZXhwb3J0IGRlZmF1bHQgZGVmaW5lQ29uZmlnKHtcbiAgICBwbHVnaW5zOiBbXG4gICAgICAgIGxhcmF2ZWwoe1xuICAgICAgICAgICAgaW5wdXQ6IFsncmVzb3VyY2VzL2Nzcy9hcHAuY3NzJywgJ3Jlc291cmNlcy9qcy9hcHAuanMnXSxcbiAgICAgICAgICAgIHJlZnJlc2g6IHRydWUsXG4gICAgICAgIH0pLFxuICAgIF0sXG4gICAgc2VydmVyOiB7XG4gICAgICAgIGhvc3Q6IHRydWUsXG4gICAgICAgIC8vIHBvcnQ6IDgwODAsXG4gICAgICAgIGhtcjoge1xuICAgICAgICAgICAgaG9zdDogJzE5Mi4xNjguNS4xMjknLFxuICAgICAgICAgICAgcHJvdG9jb2w6ICdodHRwcycsXG4gICAgICAgIH0sXG4gICAgICAgIC8vIHdhdGNoOiB7XG4gICAgICAgIC8vICAgICB1c2VQb2xsaW5nOiB0cnVlXG4gICAgICAgIC8vIH1cbiAgICB9LFxuXG59KTtcbiJdLAogICJtYXBwaW5ncyI6ICI7QUFBa1YsU0FBUyxvQkFBb0I7QUFDL1csT0FBTyxhQUFhO0FBRXBCLElBQU8sc0JBQVEsYUFBYTtBQUFBLEVBQ3hCLFNBQVM7QUFBQSxJQUNMLFFBQVE7QUFBQSxNQUNKLE9BQU8sQ0FBQyx5QkFBeUIscUJBQXFCO0FBQUEsTUFDdEQsU0FBUztBQUFBLElBQ2IsQ0FBQztBQUFBLEVBQ0w7QUFBQSxFQUNBLFFBQVE7QUFBQSxJQUNKLE1BQU07QUFBQTtBQUFBLElBRU4sS0FBSztBQUFBLE1BQ0QsTUFBTTtBQUFBLE1BQ04sVUFBVTtBQUFBLElBQ2Q7QUFBQTtBQUFBO0FBQUE7QUFBQSxFQUlKO0FBRUosQ0FBQzsiLAogICJuYW1lcyI6IFtdCn0K
