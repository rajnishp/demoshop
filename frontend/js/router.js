// Filename: router.js

define([
    'jquery',
    'underscore',
    'backbone',
    'views/category/CategoryListView',
    'views/category/CategoryEditView',
    
], function ($, _, Backbone,
        CategoryListView,
        CategoryEditView
        ) {

    var AppRouter = Backbone.Router.extend({
        routes: {
            // Define some URL routes
            
            'edit/:id': 'editCategory',
            'new': 'editCategory',
            // Default
            '*actions': 'defaultAction'

        }
    });

    window.BASE_URL = 'http://api.loc.cornershop.com/v0';
    window.app_router = new AppRouter;
    //console.log("new router request");
    var initialize = function () {

        app_router.on('route:defaultAction', function (actions) {

            // We have no matching route, lets display the home page
            console.log("defaultAction");
            var categoryListView = new CategoryListView();
            categoryListView.render();
        });

        var categoryEditView = new CategoryEditView();
        app_router.on('route:editCategory', function (id) {

            // We have no matching route, lets display the home page
            console.log("edit CategoryEditView");

            categoryEditView.render({id: id});
        });


        // Unlike the above, we don't call render on this view as it will handle
        // the render call internally after it loads data. Further more we load it
        // outside of an on-route function to have it loaded no matter which page is
        // loaded initially.
        //var footerView = new FooterView();

        Backbone.history.start();
    };
    return {
        initialize: initialize
    };
});
