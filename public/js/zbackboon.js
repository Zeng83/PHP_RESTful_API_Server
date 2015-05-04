   <script type="text/template" id="product-template">
      <tr>
         <td><%- id %></td>
         <td><%- name %></td>
         <td><%- description %></td>
         <td><%- width %></td>
         <td><%- length %></td>
         <td><%- height %></td>
         <td><%- weight %></td>
         <td><% value %></td>
         <td><a class="btn editorder" href="#edit">edit</a>
         <a class="btn deleteorder" data-id="<%- id %>" href="javascript:void(0)">delete</a></td>
      </tr>
   </script>

   //  	(function($){
   //  		var projectModel = Backbone.Model.extend({
   //  			initialize: function() {
   //  				// alert();
   //  			},
   //  			// defaults: {
   //  			// 	id:0,
   //  			// 	name: 'javascript',
   //  			// 	description:'',
   //  			// 	width: 0,
   //  			// 	length:0,
   //  			// 	height:0,
   //  			// 	weight:0,
   //  			// 	value:0
   //  			// }
   //  		});

   //  		var projectCollection = Backbone.Collection.extend({
   //  			model: projectModel,

   //  		});
   //  		projectM1 = new projectCollection();
   //  		projectM2 = new projectCollection();
   //  		projectM1.fetch({
			// 	url:'http://localhost/gopuffers/project/returnlist',
			// 	success:function(model,response){
			// 		for (var i = 0;i<response.length - 1;i++) {
			// 			projectM2.add(response[i]);
			// 		};
			//    		// console.log(projectM1.model(response));
		        	
		 //    	},error:function(){
		 //        alert('error');
			// 	}
			// });

			// console.log(projectM2);

   //  		// collection = new projectCollection({"id":2,"name":"javascript cookbook","description":"for entry level developer","width":0,"length":0,"height":0,"weight":9,"value":0});

   //  		var projectView = Backbone.View.extend({
   //  			el: $("body"),

			//     // Cache the template function for a single item.
			//     template: _.template($('#product-template').html()),

			//     render: function(e){

			//     },

   //  			events: {
   //  				"click .deleteorder": "deleteorder",
   //  				"click .editorder": "editorder",
   //  				"click #addorder": "addOrder"
   //  			},
   //  			deleteorder: function(){
   //  				//TODO: delete order
   //  				Backbone.ajax({
			// 		    dataType: "json",
			// 		    url: "http://localhost/gopuffers/project/delete",
			// 		    data: "",
			// 		    success: function(val){
					    	
			// 			    collection = new projectCollection(val);
			// 		        console.log(collection);
			// 		    }
			// 		});
   //  			},
   //  			render: function() {
			//       this.$el.html(this.template(this.model.toJSON()));
			      
			//       return this;
			//     },
   //  			editorder: function(){
   //  				//TODO: edit order
   //  				Backbone.ajax({
			// 		    dataType: "json",
			// 		    url: "http://localhost/gopuffers/project/edit",
			// 		    data: "",
			// 		    success: function(val){
					    	
			// 			    collection = new projectCollection(val);
			// 		        console.log(collection);
			// 		    }
			// 		});
   //  			},
   //  			addOrder: function(){
   //  				//TODO: add order
   //  				this.$('tbody').html(this.template({"id":"3","name":"unix operating system","description":"unix cook book","width":"1","length":"2","height":"3","weight":"4","value":"5"}));
   //  				console.log();
   //  	// 			Backbone.ajax({
			// 		//     dataType: "json",
			// 		//     url: "http://localhost/gopuffers/project/addCatorgy",
			// 		//     data: "",
			// 		//     success: function(val){
					    	
			// 		// 	    collection = new projectCollection(val);
			// 		//         console.log(collection);
			// 		//     }
			// 		// });
   //  			},
   //  		});
   //  		pv = new projectView;
   //  	})(jQuery);