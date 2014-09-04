// -------------------------------------
// Grunt ftpush
// -------------------------------------

module.exports = {

  // ----- Mirror child theme to server ----- //

  init_deploy_child: {
    auth: {
      host: '178.18.94.73',
      port: 21,
      authKey: 'lokaalgevonden'
    },
    src: 'deploy/child',
    dest: '/wp-content/themes/slate-<%= package.version %>_<%= projectName %>',
    simple: true,
    useList: false
  },

  deploy_child: {
    auth: {
      host: '178.18.94.73',
      port: 21,
      authKey: 'lokaalgevonden'
    },
    src: 'deploy/child',
    dest: '/wp-content/themes/slate-0.1.0_tyrex',
    simple: true,
    useList: true
  },

  // ----- Mirror parent theme to server ----- //

  deploy_parent: {
    auth: {
      host: '178.18.94.73',
      port: 21,
      authKey: 'lokaalgevonden'
    },
    src: 'deploy/parent',
    dest: '/wp-content/themes/slate-<%= package.version %>',
    simple: true,
    useList: false
  }
};
