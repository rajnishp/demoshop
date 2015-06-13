define([
  'jquery',
  'underscore',
  'backbone',
  'datatable',
  'Bootstrap',
  'Bootbox',
  'collections/orders/OrdersCollection',
  'text!templates/orders/ordersTemplate.html',
  'models/orders/OrdersModel'
], function($, _, Backbone, Datatable, Bootstrap, Bootbox, OrdersCollection, ordersTemplate, OrdersModel){
  
  var OrdersListView = Backbone.View.extend({
    
   el : $("#page"),
   events: {
      'submit .update_status': 'updateOrderStatus'
    },

    initialize : function() {
     
      var that = this;
      console.log("i am in OrderListView");
      that.bind("reset", that.clearView);
    },

    updateOrderStatus: function (ev) {
      console.log ("inside updateOrderStatus function............");
      var data = $(ev.currentTarget).serializeObject1();
      console.log(data);
      
      Bootbox.confirm("Does this order delivered?", function(result) {
        console.log(result);
        if(result){
          var orderUpdateDetails = {};

          orderUpdateDetails.root = $(ev.currentTarget).serializeObject1();
          
          var orderUpdate = new OrdersModel({id: orderUpdateDetails.root.id});
          //return false;
          orderUpdate.save(orderUpdateDetails,{
            /*beforeSend: function (xhr) {
              xhr.setRequestHeader('AUTH-KEY', key);
            } ,*/
            success: function () {
              
              //delete that.orderUpdate;
              delete orderUpdate;
              Bootbox.alert("Order Delivered and Updated Successfully");
              
              //window.app_router.navigate('order', {trigger:true}); 
            },
            error: function (response) {
              Bootbox.alert("Please try again");
              
            }
          });
        }
        
      });
      console.log(data);
      return false;
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

