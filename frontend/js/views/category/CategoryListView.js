define([
  'jquery',
  'underscore',
  'backbone',
  'datatable',
  'collections/category/CategoryCollection',
  'text!templates/category/categoryTemplate.html'
], function($, _, Backbone, Datatable, CategoryCollection, categoryTemplate){
  
  var CategoryListView = Backbone.View.extend({
    
   el : $("#page"),

    initialize : function() {
     
      var that = this;
      console.log("i am in ListView");
      that.bind("reset", that.clearView);
    },

    render: function () {
      var that = this;
      
      var categories = new CategoryCollection();
      console.log("inside render");
      categories.fetch({
        success: function (categories) {
           //defining teplate
        console.log("inside render success");  
        console.log(categories);
        var template = _.template(categoryTemplate, {categories: categories.models[0].attributes.data.categories});
        $('#category-list-template').html(template); 
        console.log(template);
        that.$el.html(template);
        $('#categoryTable').DataTable();
        return that;
          }
      });

    }
   
  });


  
  return CategoryListView;

});

