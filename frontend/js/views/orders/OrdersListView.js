define([
  'jquery',
  'underscore',
  'backbone',
  'datatable',
  'collections/orders/OrdersCollection',
  'text!templates/orders/ordersTemplate.html'
], function($, _, Backbone, Datatable, OrdersCollection, ordersTemplate){
  
  var OrdersListView = Backbone.View.extend({
    
   el : $("#page"),

    initialize : function() {
     
      var that = this;
      console.log("i am in ListView");
      that.bind("reset", that.clearView);
    },

    render: function () {
      var that = this;
      
      var orders = new OrdersCollection();
      console.log("inside render");
      orders.fetch({
        success: function (orders) {
           //defining teplate
        console.log("inside render success");  
        console.log(orders);
        var template = _.template(ordersTemplate, {orders: orders.models[0].attributes.data.orders});
        $('#orders-list-template').html(template); 
        console.log(template);
        
        that.$el.html(template);

        $('#ordersTable').DataTable();
        //console.log("there m i .........");
        return that;
          }
      });

    }
   
  });


  
  return OrdersListView;

});

