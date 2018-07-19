<?php
foreach($category_details as $cat){ 
	$base_cat_id = $cat->id;
	$cat_name = $cat->category_name;
	$cat_desc = $cat->category_desc;
	$cat_image = $cat->category_image;
	if ($cat_image == ''){
		$cat_image = 'no_category.png';
	}
	$cat_image_url = base_url()."assets/category/".$cat_image;
}
?>
        <!-- Page Breadcrumb Start -->
        <div class="mb-100" style="background: rgba(0, 0, 0, 0) url(<?php echo $cat_image_url; ?>) no-repeat scroll center center / cover;">
        
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center ptb-70" >
                            <h1><?php echo $cat_name;?></h1>
                            <ul class="breadcrumb-list breadcrumb">
                                <li><a href="<?php echo base_url(); ?>">home</a></li>
                                <li><?php echo $cat_name;?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Breadcrumb End -->
        <!-- Categories Product Start -->
        <div class="all-categories pb-100">
            <div class="container">
                <div class="row">
                   <!-- Sidebar Content Start -->
                    <div class="col-md-9 col-md-push-3">
                        <!-- Sidebar Right Top Content Start -->
                        <div class="sidebar-desc-content">
                            <p><?php echo $cat_desc; ?></p><hr>
                        </div>
                        <!-- Sidebar Right Top Content Start -->
                        <!-- Best Seller Product Start -->
                        <div class="best-seller">
                            <div class="row mt-20">
                                <div class="col-md-3 col-sm-4 pull-left"><!--
                                    <div class="grid-list-view">
                                        <ul class="list-inline">
                                            <li class="active"><a data-toggle="tab" href="#grid-view" aria-expanded="true"><i class="zmdi zmdi-view-dashboard"></i><i class="pe-7s-keypad"></i></a></li>
                                            <li><a data-toggle="tab" href="#list-view" aria-expanded="false"><i class="zmdi zmdi-view-list"></i><i class="pe-7s-menu"></i></a></li>
                                        </ul>
                                    </div>-->
                                </div>
                                <div class="col-md-4 col-sm-5 pull-right">
                                    <select name="shorer" id="shorter" class="form-control select-varient">
                                        <option value="#">Sort By:Default</option>
                                        <option value="#">Sort By:Name (A - Z)</option>
                                        <option value="#">Sort By:Name (Z - A)</option>
                                        <option value="#">Sort By:Price (Low > High)</option>
                                        <option value="#">Sort By:Price (High > Low)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="tab-content categorie-list ">
                                        <div id="list-view" class="tab-pane fade">
                                            <div class="row">                                              
                                               <?php
											if (count($cat_products)>0){
												foreach($cat_products as $prod){ 
                                            ?>  
                                                
                                                
                                                <!-- Main Single Product Start -->
                                                <div class="main-single-product fix">
                                                    <div class="col-sm-4">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product">
                                                            <!-- Product Image Start -->
                                                            <div class="pro-img">
                                                                <a href="<?php echo base_url(); ?>product_details/">
                                                                    <img class="primary-img" src="<?php echo base_url(); ?>assets/front/img/new-products/2_1.jpg" alt="single-product">
                                                                </a>
                                                                <div class="quick-view">
                                                                    <a href="#" data-toggle="modal" data-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                                                </div>
                                                                <span class="sticker-new">new</span>
                                                            </div>
                                                            <!-- Product Image End -->
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <!-- Product Content Start -->
                                                        <div class="thubnail-desc fix">
                                                            <h4 class="product-header"><a href="<?php echo base_url(); ?>product_details/">Carte Postal Clock</a></h4>
                                                            <!-- Product Price Start -->
                                                            <div class="pro-price mb-15">
                                                                <ul class="pro-price-list">
                                                                    <li class="price">$122.00</li>
                                                                    <li class="mtb-50">
                                                                        <p>Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presentation features on a huge w..</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- Product Price End -->
                                                            <!-- Product Button Actions Start -->
                                                            <div class="product-button-actions">
                                                                <button class="add-to-cart" data-toggle="tooltip" title="Add to Cart">add to cart</button>
                                                                <a href="wish-list.html" data-toggle="tooltip" title="Add to Wishlist" class="same-btn mr-15"><i class="pe-7s-like"></i></a>
                                                                <button data-toggle="tooltip" title="Compare this Product" class="same-btn"><i class="pe-7s-repeat"></i></button>
                                                            </div>
                                                            <!-- Product Button Actions End -->
                                                        </div>
                                                        <!-- Product Content End -->
                                                    </div>
                                                </div>
                                                <!-- Main Single Product Start -->
  											<?php
												}
											}
											?>
                                            </div>
                                            <!-- Row End -->
                                           
                                        </div>
                                        <!-- #list-view End -->
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <div id="grid-view" class="tab-pane fade in active mt-40">
                                            <div class="row">
                                            <?php
											if (count($cat_products)>0){
												foreach($cat_products as $prod){ 
                                            ?>
                                                <div class="col-md-4 col-sm-6">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product">
                                                        <!-- Product Image Start -->
                                                        <div class="pro-img">
                                                            <a href="<?php echo base_url(); ?>product_details/">
                                                                <img class="primary-img" src="<?php echo base_url(); ?>assets/front/img/new-products/1_1.jpg" alt="single-product">
                                                                <img class="secondary-img" src="<?php echo base_url(); ?>assets/front/img/new-products/1_2.jpg" alt="single-product">
                                                            </a>
                                                            <div class="quick-view">
                                                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                                            </div>
                                                            <span class="sticker-new">new</span>
                                                        </div>
                                                        <!-- Product Image End -->
                                                        <!-- Product Content Start -->
                                                        <div class="pro-content text-center">
                                                            <h4><a href="<?php echo base_url(); ?>product_details/">Sheepskin Pillow2</a></h4>
                                                            <p class="price"><span>$241.99</span></p>
                                                            <div class="action-links2">
                                                                <a data-toggle="tooltip" title="Add to Cart" href="cart.html">add to cart</a>
                                                            </div>
                                                        </div>
                                                        <!-- Product Content End -->
                                                    </div>
                                                    <!-- Single Product End -->
                                                </div>
                                               <?php
												}
											}
											?>
 
                                            </div>
                                            <!-- Row End -->

                                        </div>
                                        <!-- #Grid-view End -->
                                    </div>
                                    <!-- .Tab Content End -->
                                </div>
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Best Seller Product End -->
                    </div>
                    <!-- Sidebar Content End -->
                    <!-- Sidebar Start -->
                    <div class="col-md-3 col-md-pull-9">
                        <aside class="categorie-sidebar mb-100">
                            <!-- Categories Module Start -->
                            <div class="categorie-module mb-80">
                                <h3>categories</h3>
                                 <ul class="categorie-list">
								<?php 
									if (count($main_catmenu)>0){
										foreach($main_catmenu as $rowm){ 
										$cat_id = $rowm->id;
										//$cat_count = $rowm->count;
										$category_id = $rowm->id * 564738;
										$category_name = strtolower(preg_replace("/[^\w]/", "-", $rowm->category_name));
										$enc_category_id = base64_encode($category_id);
										if ($base_cat_id == $cat_id){
											echo '<li class="active"><a href="'.base_url().'home/categories/'.$cat_id.'/'.$category_name.'/">'.$rowm->category_name.'</a>';
											} else {
											echo '<li><a href="'.base_url().'home/categories/'.$cat_id.'/'.$category_name.'/">'.$rowm->category_name.'</a>';
										}
                                    	$sub_catmenu = $this->homemodel->get_sub_catmenu($cat_id);
											if (count($sub_catmenu)>0){
                                    			echo '<ul class="sub-categorie pl-30">';
                                          		foreach($sub_catmenu as $rows) {
													$sub_cat_id = $rows->id;
													//$subcat_count = $rows->count;
													$sub_category_id = $rows->id * 564738;
													$sub_category_name = strtolower(preg_replace("/[^\w]/", "-", $rows->category_name));
													$enc_sub_category_id = base64_encode($sub_category_id);
													if ($base_cat_id == $sub_cat_id){
											echo '<li class="active"><a href="'.base_url().'home/subcategories/'.$sub_cat_id.'/'.$sub_category_name.'/">'.$rows->category_name.'</a></li>';
											} else {
											echo '<li><a href="'.base_url().'home/subcategories/'.$sub_cat_id.'/'.$sub_category_name.'/">'.$rows->category_name.'</a></li>';
										}
                                    				
                                    			}
                                    			echo '</ul>';
                                   			}
                                    	echo '</li>';
                                   		}
									} ?>
								</ul><!--
                                <ul class="categorie-list">
                                    <li class="active"><a href="#">Furniture (19)</a>
                                        <ul class="sub-categorie pl-30">
                                            <li><a href="#">Sofas & Loveseats (19)</a></li>
                                            <li><a href="#">Chairs & Recliners (19)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Sectionals (16)</a></li>
                                    <li><a href="#">Decor (19)</a></li>
                                    <li><a href="#">Decorative Accessories (19)</a></li>
                                    <li><a href="#">Window Treatments (16)</a></li>
                                    <li><a href="#">Bookshelves (16)</a></li>
                                    <li><a href="#">Coffee & Accent Tables (17)</a></li>
                                </ul>-->
                            </div>
                            <!-- Categories Module End -->
                            <!-- Filter Option Start -->
                            <div class="flter-option mb-80">
                                <h3>PRICE FILTER</h3>
                                <form action="#">
                                    <div id="slider-range"></div>
                                    <input type="text" id="amount" class="amount" readonly>
                                </form>
                            </div>
                            <!-- Filter Option End -->
                            <!-- Categories Color Start -->
                            <div class="cat-color mb-80">
                               <h3>Color</h3>
                                <ul class="cat-color-list">
                                    <li><a href="#">Black (13)</a></li>
                                    <li><a href="#">Blue (13)</a></li>
                                    <li><a href="#">Grey (13)</a></li>
                                    <li><a href="#">Green (13)</a></li>
                                    <li><a href="#">Red (13)</a></li>
                                </ul>
                            </div>
                            <!-- Categories Color End -->
                            
                            
                        </aside>
                    </div>
                    <!-- Sidebar End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Categories Product End -->