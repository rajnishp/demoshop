define([
  'underscore',
  'backbone',
], function(_, Backbone) {

 var OrderModel = Backbone.Model.extend({

 	initialize: function(options) {
    	this.id = options.id;
  	},

 	url : function() {
 		if(this.id == null)
        	return window.BASE_URL+'/order';
        return window.BASE_URL+'/order/'+ this.id;
      } 
    });

  return OrderModel;

});
