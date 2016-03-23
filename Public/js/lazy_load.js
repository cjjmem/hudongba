	/**
	 * 发现页数据
	 */
	var lazy_load_model = avalon.define({ //avalon model定义方式
		$id: "lazy_load_controll",
		pic_height: 0,
		
		/**
   		 * 初始化懒加载
   		 * @param {Object} pic_height 图片的默认高度
   		 */
   		init : function(pic_height){
   			lazy_load_model.pic_height = pic_height;
   			//调用懒加载
   			require(["oniui/lazyload/avalon.lazyload"], function(avalon) {
   				avalon.scan();
			})
   		},
	})
	
	
   	
	
