(function() {
  'use strict';

  var app = angular.module('myApp', [
    'eehNavigation',
    'eehTuxedoMenu',
    'ui.router'
  ]);

  app.config(['eehNavigationProvider', function(eehNavigationProvider) {
    eehNavigationProvider
      .menuItem('myMenu.home', {
        text: 'Home',
        iconClass: 'glyphicon-home',
        href: '#'
      })
      .menuItem('myMenu.users', {
        text: 'Users',
        iconClass: 'glyphicon-user',
        href: '#'
      })
      .menuItem('myMenu.settings', {
        text: 'Settings',
        iconClass: 'glyphicon-cog',
        href: '#'
      })
      .menuItem('myMenu.alerts', {
        text: 'Alerts',
        iconClass: 'glyphicon-bell',
        href: '#'
      })
      .menuItem('myMenu.Lists', {
        text: 'Lists',
        iconClass: 'glyphicon-list',
        href: '#'
      });
  }]);
})();