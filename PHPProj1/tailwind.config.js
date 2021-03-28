module.exports = {
  purge: {
    enabled: true,
    content: ['./scripts/PHP/PHPstatic/*.php', './scripts/js/*.js', './*.{php,html}'],
  },
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
