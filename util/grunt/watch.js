// -------------------------------------
// Grunt watch
// -------------------------------------

module.exports = {

  // ----- Watch tasks ----- //

  scss: {
    files: ['lib/scss/**/*.scss', 'dev/scss/**/*.scss'],
    tasks: [
      'sass:expanded',
      'autoprefixer:expanded',
      'rsync:deploy_child'
    ]
  },
  js: {
    files: ['lib/js/**/*.js', 'dev/js/*.js'],
    tasks: [
      'concat:all',
      'rsync:deploy_child'
    ]
  },
  php: {
    files: ['dev/php/templates/*.php', 'dev/php/includes/*.php'],
    tasks: [
      'newer:copy:php_child',
      'delete_sync:php_templates',
      'delete_sync:php_includes',
      'rsync:deploy_child'
    ]
  },
  css: {
    files: ['dev/css/style.child'],
    tasks: [
      'copy:css_child',
      'rsync:deploy_child'
    ]
  },
  img: {
    files: ['dev/img/**/*'],
    tasks: [
      'newer:imagemin:all',
      'delete_sync:img',
      'rsync:deploy_child'
    ]
  },

  // ----- Enable livereload ----- //

  livereload: {
    options: {
      livereload: true
    },
    files: ['deploy/child/**/*']
  }
};
