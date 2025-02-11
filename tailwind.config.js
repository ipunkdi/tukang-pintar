import preset from './vendor/filament/support/tailwind.config.preset'

module.exports = {
  presets: [preset],
  content: [
    './app/Filament/**/*.php',
    './resources/views/filament/**/*.blade.php',
    './vendor/filament/**/*.blade.php',
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./src/**/*.{html,js}",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [
      require('flowbite/plugin')
  ],
}
