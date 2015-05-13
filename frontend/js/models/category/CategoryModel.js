define([
  'underscore',
  'backbone',
], function(_, Backbone) {

 var CategoryModel = Backbone.Model.extend({

 	initialize: function(options) {
    	this.id = options.id;
  	},

 	url : function() {
 		if(this.id == null)
        	return window.BASE_URL+'/cateory';
        return window.BASE_URL+'/category/'+ this.id;
      } 
    });

  return CategoryModel;

});
