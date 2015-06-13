define([
  'jquery',
  'underscore',
  'backbone',
  'datatable',
  'collections/products/ProductsCollection',
  'text!templates/products/productsTemplate.html'
], function($, _, Backbone, Datatable, ProductsCollection, productsTemplate){
  
  var ProductsListView = Backbone.View.extend({
    
   el : $("#page"),

    initialize : function() {
     
      var that = this;
      console.log("i am in ProductsListView");
      that.bind("reset", that.clearView);
    },

    render: function () {
      var that = this;
      
      var products = new ProductsCollection();
      console.log("inside render");
      products.fetch({
        success: function (products) {
           //defining teplate
        console.log("inside render success");  
        console.log(products);
        var template = _.template(productsTemplate, {products: products.models[0].attributes.data.products});
        $('#product-list-template').html(template); 
        console.log(template);
        that.$el.html(template);
        $('#productTable').DataTable();
        return that;
          }
      });

    }
   
  });


  
  return ProductsListView;

});

