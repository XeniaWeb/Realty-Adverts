import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'selector',
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        transparent: "transparent",
        // primary: "#5540af",
        outline: "#65a30d",
        primary: "#65a30d",
        "primary-hover": "#84cc16",
        "primary-focus": "#4d7c0f",
        "primary-active": "#3f6212",
        secondary: "#737373",
        'secondary-hover': "#a3a3a3",
        'secondary-focus': "#525252",
        'secondary-active': "#404040",
        danger: "#dc2626",
        'danger-hover': "#ef4444",
        'danger-focus': "#b91c1c",
        'danger-active': "#991b1b",
        warning: "#f59e0b",
        'warning-hover': "#fbbf24",
        'warning-focus': "#d97706",
        'warning-active': "#b45309",
        success: "#10b981",
        'success-hover': "#34d399",
        'success-focus': "#059669",
        'success-active': "#047857",
        info: "#0284c7",
        'info-hover': "#0ea5e9",
        'info-focus': "#0369a1",
        'info-active': "#075985",
        white: "#ffffff",
        black: "#000000",
      }
    },
  },

  plugins: [forms],
};
