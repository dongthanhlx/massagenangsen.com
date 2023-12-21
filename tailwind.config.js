/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue"
  ],
  theme: {
    extend: {
        backgroundImage: {
            'background': 'https://fujispacenter.vn/wp-content/uploads/2016/08/CHA04382.png'
        }
    },
  },
  plugins: [],
}

