// -------------------------------------
// Grunt imagemin
// -------------------------------------

module.exports = {

  // ----- Minify all images ----- //

  all: {
    files: [{
      expand: true,
      cwd: 'dev/img',
      src: '*.{jpg,gif}',
      dest: 'deploy/child/img'
    }]
  }
};
