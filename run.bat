@echo off
start cmd /k "echo Laravel Server & php artisan serve"
TIMEOUT /T 3
start cmd /k "echo Vite (or Sass) Live Refresh Server & npm run dev"
