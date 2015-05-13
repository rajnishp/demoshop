define([
  'jquery',
  'underscore',
  'backbone',
  'models/category/CategoryModel',
  'text!templates/category/categoryEditTemplate.html'
  ], function($, _, Backbone, PostModel, categoryEditTemplate){

    var CategoryEditView = Backbone.View.extend({

     el : $("#page"),
     events: {
      'submit .edit-category-form': 'saveCategory',
      'click #delcategory': 'deleteCategory'
    },

    initialize : function() {

      var that = this;
      console.log("i am in CategoryEditView");
      that.bind("reset", that.clearView);
    },

    saveCategory: function (ev) {
      var that = this;
      console.log("saveCategory");
      console.log(this);
      var categoryDetails = {};
        //console.log(ev.currentTarget);
        categoryDetails.root = $(ev.currentTarget).serializeObject1();

        if(this.post != null)
          var category = new CategoryModel({id: this.category.id});
        else
          var category = new CategoryModel({id: null});
        
        console.log(categoryDetails);
        
        category.save(categoryDetails,{

          success: function (category) {
            console.log(category.toJSON);
            alert(" added successfuly");
            that.bind("reset", that.clearView);
            //that.render({id: null});

            delete category;
            delete this.category;
            window.app_router.navigate('category', {trigger:true});
            
          },
          error: function (categoryDetails,response) {

            console.log(JSON.parse(response.responseText));
            alert(JSON.parse(response.responseText).internal_status.message );



          }

        });
        return false;
      },
      deleteCategory: function (ev) {
        var that = this;
        
        this.post.destroy({
          success: function () {
            console.log('destroyed');
            
            delete that.category;
            
            delete category;
            
            window.app_router.navigate('category', {trigger:true});
            //router.navigate('', {trigger:true});
          }
        })
      },

      render: function (options) {

        var that = this;
        if(options.id) {

          that.category = new CategoryModel({id: options.id});
          that.category.fetch({
            success: function (category) {

              console.log(category.attributes.data.category);

              var template = _.template(categoryEditTemplate, {category: category.attributes.data.category[0]});
              //#edit-organization-template
              $('#edit-category-template').html(template);
              that.$el.html(template);
              return that;
            }
          })
        } else {
          var template = _.template(categoryEditTemplate, {category: null});
          $('#edit-category-template').html(template);
          that.$el.html(template);
          return that;
        }
      }

    });

return CategoryEditView;

});
