define([
  'underscore',
  'backbone',
  'models/products/ProductsModel'
], function(_, Backbone, ProductsModel){

  var ProductsCollection = Backbone.Collection.extend({
      
      model: ProductsModel,

      initialize : function(models, options) {

        console.log("starting Collections");
      },
      
      url : function() {
        return window.BASE_URL+'/products';
      }        
     
  });

  return ProductsCollection;

});
