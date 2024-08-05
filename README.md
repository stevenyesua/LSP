# LSP


Framework : Laravel
Css : Tailwind

referensi navbar :
https://flowbite.com/docs/components/navbar/

Install Tailwind compare with laravel : 

1. npm install -D tailwindcss postcss autoprefixer
2. npx tailwindcss init -p
3. edit tailwind.config.js : 
  /** @type {import('tailwindcss').Config} */
  export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  }
4. app.cs : 
  @tailwind base;
  @tailwind components;
  @tailwind utilities;

5. npm install @tailwindcss/forms
6.  @vite('resources/css/app.css')
   
