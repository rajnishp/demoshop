define([
  'underscore',
  'backbone',
], function(_, Backbone) {

 var ProductsModel = Backbone.Model.extend({

 	initialize: function(options) {
    	this.id = options.id;
  	},

 	url : function() {
 		if(this.id == null)
        	return window.BASE_URL+'/products';
        return window.BASE_URL+'/products/'+ this.id;
      } 
    });

  return ProductsModel;

});
