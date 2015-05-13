// Filename: router.js

define([
    'jquery',
    'underscore',
    'backbone',
    'views/category/CategoryListView',
    'views/category/CategoryEditView',
    'views/orders/OrdersListView',
    'views/orders/OrdersEditView',
    
], function ($, _, Backbone,
        CategoryListView,
        CategoryEditView,
        OrdersListView,
        OrdersEditView

        ) {

    var AppRouter = Backbone.Router.extend({
        routes: {
            // Define some URL routes
            
            'edit/:id': 'editCategory',
            'new': 'editCategory',
            'edit/:id': 'editOrder',
            'new': 'editOrder',
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
            //var categoryListView = new CategoryListView();
            var ordersListView = new OrdersListView();
            //var productsListView = new ProductsListView();
            //categoryListView.render();
            ordersListView.render();
        });

        var categoryEditView = new CategoryEditView();
        app_router.on('route:editCategory', function (id) {

            // We have no matching route, lets display the home page
            console.log("edit categoryEditView");

            categoryEditView.render({id: id});
        });

        /*var orderEditView = new OrdersEditView();
        app_router.on('route:editOrder', function (id) {

            // We have no matching route, lets display the home page
            console.log("edit orderEditView");

            orderEditView.render({id: id});
        });*/


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
