<div class="product-box">
  <a href="<?php echo $product["url"]; ?>" target="_blank">
 <img src="products-img/<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>" style="max-width:100%;" />
	 </a>
	 <div class="shop-caption">
	   <span class="prod-title"><?php echo $product["name"]; ?></span><br>
	   <span class="price">$<?php echo $product["price"]; ?></span><br>
	    <a href="<?php echo $product["cart"]; ?>" target="_blank">
	   <button class="button-cart shop-button">Add to Cart</button>
	   </a>
	 </div>
</div>