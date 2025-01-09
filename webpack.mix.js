const mix = require('laravel-mix');

// Proses file CSS dan JS untuk dashboard
mix
  .css('resources/css/admin.css', 'public/css')
  .js('resources/js/admin.js', 'public/js')
  .version();  // Menambahkan hash untuk cache busting
