/** @type {import("tailwindcss").Config} */
module.exports = {
  content: require('fast-glob').sync([
      'source/**/*.html',
      'source/**/*.md',
      'source/**/*.js',
      'source/**/*.php',
      'source/**/*.vue',
  ]),
  options: {
    whitelist: [
      /language/,
    ],
  },
  theme: {
    extend: {},
  },
}
