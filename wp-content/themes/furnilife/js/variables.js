		var furnilife_brandnumber = 6,
			furnilife_brandscrollnumber = 2,
			furnilife_brandpause = 3000,
			furnilife_brandanimate = 2000;
		var furnilife_brandscroll = false;
							furnilife_brandscroll = true;
					var furnilife_categoriesnumber = 6,
			furnilife_categoriesscrollnumber = 2,
			furnilife_categoriespause = 3000,
			furnilife_categoriesanimate = 2000;
		var furnilife_categoriesscroll = false;
					var furnilife_blogpause = 3000,
			furnilife_blfurnilifemate = 2000;
		var furnilife_blogscroll = false;
							furnilife_blogscroll = true;
					var furnilife_testipause = 3000,
			furnilife_testianimate = 2000;
		var furnilife_testiscroll = false; 
							furnilife_testiscroll = false;
					var furnilife_catenumber = 6,
			furnilife_catescrollnumber = 2,
			furnilife_catepause = 3000,
			furnilife_cateanimate = 700;
		var furnilife_catescroll = false;
					var furnilife_menu_number = 9; 

		var furnilife_sticky_header = false;
							furnilife_sticky_header = true;
			
		var furnilife_item_first = 12,
			furnilife_moreless_products = 4;

		jQuery(document).ready(function(){
			jQuery("#ws").focus(function(){
				if(jQuery(this).val()=="Search product..."){
					jQuery(this).val("");
				}
			});
			jQuery("#ws").focusout(function(){
				if(jQuery(this).val()==""){
					jQuery(this).val("Search product...");
				}
			});
			jQuery("#wsearchsubmit").click(function(){
				if(jQuery("#ws").val()=="Search product..." || jQuery("#ws").val()==""){
					jQuery("#ws").focus();
					return false;
				}
			});
			jQuery("#search_input").focus(function(){
				if(jQuery(this).val()=="Search..."){
					jQuery(this).val("");
				}
			});
			jQuery("#search_input").focusout(function(){
				if(jQuery(this).val()==""){
					jQuery(this).val("Search...");
				}
			});
			jQuery("#blogsearchsubmit").click(function(){
				if(jQuery("#search_input").val()=="Search..." || jQuery("#search_input").val()==""){
					jQuery("#search_input").focus();
					return false;
				}
			});
		});
		