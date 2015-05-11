require.config({
    paths: {
        jquery: '../bower_components/jquery/dist/jquery.min',
        'flight/lib/advice': '../bower_components/flight/lib/advice',
        'flight/lib/base': '../bower_components/flight/lib/base',
        'flight/lib/component': '../bower_components/flight/lib/component',
        'flight/lib/compose': '../bower_components/flight/lib/compose',
        'flight/lib/debug': '../bower_components/flight/lib/debug',
        'flight/lib/logger': '../bower_components/flight/lib/logger',
        'flight/lib/registry': '../bower_components/flight/lib/registry',
        'flight/lib/utils': '../bower_components/flight/lib/utils'
    },
    urlArgs: 'v=' +  Date.now()
});

require([
    'jquery',
    'app'
], function ($, app) {
    app.go();
});
