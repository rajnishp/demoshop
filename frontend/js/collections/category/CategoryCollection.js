define([
  'underscore',
  'backbone',
  'models/category/CategoryModel'
], function(_, Backbone, CategoryModel){

  var CategoryCollection = Backbone.Collection.extend({
      
      model: CategoryModel,

      initialize : function(models, options) {

        console.log("starting Collections");
      },
      
      url : function() {
        return window.BASE_URL+'/category';
      }        
     
  });

  return CategoryCollection;

});
