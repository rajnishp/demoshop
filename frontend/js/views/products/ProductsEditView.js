define([
  'jquery',
  'underscore',
  'backbone',
  'models/products/ProductsModel',
  'text!templates/products/productEditTemplate.html'
  ], function($, _, Backbone, ProductsModel, productEditTemplate){

    var ProductEditView = Backbone.View.extend({

     el : $("#page"),
     events: {
      'submit .edit-product-form': 'saveProduct',
      'click #delproduct': 'deleteProduct'
    },

    initialize : function() {

      var that = this;
      console.log("i am in ProductEditView.............");
      that.bind("reset", that.clearView);
    },

    saveProduct: function (ev) {
      var that = this;
      console.log("saveProduct");
      console.log(this);
      var productDetails = {};
        //console.log(ev.currentTarget);
        productDetails.root = $(ev.currentTarget).serializeObject1();
        //console.log(serializeObject1());

        if(this.product != null)
          var product = new ProductsModel ({id: this.product.id});
        else
          var product = new ProductsModel({id: null});
        
        console.log(productDetails);
        
        product.save(productDetails,{

          success: function (product) {
            console.log(product.toJSON);
            alert(" added successfuly");
            that.bind("reset", that.clearView);
            //that.render({id: null});

            delete product;
            delete this.product;
            window.app_router.navigate('product', {trigger:true});
            
          },
          error: function (productDetails,response) {

            console.log(JSON.parse(response.responseText));
            alert(JSON.parse(response.responseText).internal_status.message );

          }

        });
        return false;
      },
      deleteProduct: function (ev) {
        var that = this;
        
        this.product.destroy({
          success: function () {
            console.log('destroyed');
            
            delete that.product;
            
            delete product;
            
            window.app_router.navigate('product', {trigger:true});
            //router.navigate('', {trigger:true});
          }
        })
      },

      render: function (options) {

        var that = this;
        if(options.id) {

          that.product = new ProductsModel({id: options.id});
          that.product.fetch({
            success: function (product) {

              console.log(product.attributes.data.product);

              var template = _.template(productEditTemplate, {product: product.attributes.data.product[0]});
              //#edit-organization-template
              $('#edit-product-template').html(template);
              that.$el.html(template);
              return that;
            }
          })
        } else {
          var template = _.template(productEditTemplate, {product: null});
          $('#edit-product-template').html(template);
          that.$el.html(template);
          return that;
        }
      }

    });

return ProductEditView;

});
