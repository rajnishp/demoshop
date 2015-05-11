define([
  'underscore',
  'backbone',
  'models/orders/OrdersModel'
], function(_, Backbone, OrdersModel){

  var OrdersCollection = Backbone.Collection.extend({
      
      model: OrdersModel,

      initialize : function(models, options) {

        console.log("starting Collections");
      },
      
      url : function() {
        return window.BASE_URL+'/order';
      }        
     
  });

  return OrdersCollection;

});
