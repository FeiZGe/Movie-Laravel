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
  plugins: [
    require('daisyui'),
  ],
  daisyui: {
    themes: [
      {
        mytheme: {
          
          "primary": "#7027f0",
                    
          "primary-content": "#dedaff",
                    
          "secondary": "#8c52ff",
                    
          "secondary-content": "#070216",
                    
          "accent": "#e65ff5",
                    
          "accent-content": "#130315",
                    
          "neutral": "#19152b",
                    
          "neutral-content": "#878fa9",
                    
          "base-100": "#030019",
                    
          "base-200": "#18152a",
                    
          "base-300": "#18152a",
                    
          "base-content": "#fffaff",
                    
          "info": "#3b82f6",
                    
          "info-content": "#18152a",
                    
          "success": "#4ade80",
                    
          "success-content": "#18152a",
                    
          "warning": "#eab308",
                    
          "warning-content": "#18152a",
                    
          "error": "#f43f5e",
                    
          "error-content": "#18152a",
        },
      },
    ],
  },
}

