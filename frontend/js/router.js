// Filename: router.js

define([
    'jquery',
    'underscore',
    'backbone',
    
    'views/category/CategoryListView',
    'views/category/CategoryEditView',
    
    'views/products/ProductsListView',
    'views/products/ProductsEditView',
    
    'views/orders/OrdersListView',
    'views/orders/OrdersEditView'
    
], function ($, _, Backbone,
        CategoryListView,
        CategoryEditView,
        ProductsListView,
        ProductsEditView,
        OrdersListView,
        OrdersEditView

        ) {

    var AppRouter = Backbone.Router.extend({
        routes: {
            // Define some URL routes
            'category': 'showCategories',
            'products': 'showProducts',
            'deliveredOrder': 'deliveredOrder',
            'deliveredOrder/:id': 'showDeliveredOrder',
            
            'editCategory/:id': 'editCategory',            
            'newCategory': 'editCategory',
            
            'editProduct/:id': 'editProduct',
            'newProduct': 'editProduct',

            //Default
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
            
            var ordersListView = new OrdersListView();
            //var productsListView = new ProductsListView();
            ordersListView.render();
        });

        app_router.on('route:editCategory', function (id) {
        var categoryEditView = new CategoryEditView();
            
            // We have no matching route, lets display the home page
            console.log("edit categoryEditView");

            categoryEditView.render({id: id});
        });

        app_router.on('route:editProduct', function (id) {
        var productsEditView = new ProductsEditView();
            
            // We have no matching route, lets display the home page
            console.log("edit productsEditView route editProduct");

            productsEditView.render({id: id});
        });

        app_router.on('route:showCategories', function () {
        var categoryListView = new CategoryListView();
            
            console.log("categoryListView route showCategories");

            categoryListView.render();
        });

        app_router.on('route:showProducts', function () {
        var productsListView = new ProductsListView();
            
            console.log("productsListView route showProducts");

            productsListView.render();
        });

        app_router.on('route:editOrder', function (id) {
            var orderEditView = new OrdersEditView();

            // We have no matching route, lets display the home page
            console.log("edit orderEditView");

            orderEditView.render({id: id});
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
