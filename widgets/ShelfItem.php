<?php
namespace hoaaah\Newshop\widgets;

use yii\web\AssetBundle;
use yii\bootstrap\Widget;

class ShelfItem extends Widget
{
    public $divColumnClass = "col-md-3 cap-left simpleCart_shelfItem";
    public $divClass = "grid-arr";
    public $divClassFigure =  "grid-arrival";
    public $image1 = false;
    public $image2 = false;
    public $riben = false;
    public $ribenText = "";
    public $starBox = false;
    public $starRate = 0; // 0 - 100
    public $captionClass = "women";
    public $title = "Title";
    public $detail = false;
    public $price = 0;
    public $selected = false;

 

    public function init()
    {
        parent::init();
        $return = <<<HTML
        <div class="col-md-3 cap-left simpleCart_shelfItem">
            <div class="grid-arr">
                <div  class="grid-arrival">
                    <figure>		
                        <a href="single.html">
                            <div class="grid-img">
                                <img  src="http://localhost:8000/bootstrap/new_shop/web/images/p27.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="grid-img">
                                <img  src="http://localhost:8000/bootstrap/new_shop/web/images/p28.jpg" class="img-responsive"  alt="">
                            </div>			
                        </a>		
                    </figure>	
                </div>
                <!-- <div class="ribben1">
                    <p>SALE</p>
                </div>    
                <div class="block">
                    <div class="starbox small ghosting">
                        <div class="positioner">
                            <div class="stars">
                                <div class="ghost" style="display: none; width: 42.5px;"></div>
                                <div class="colorbar" style="width: 42.5px;"></div>
                                <div class="star_holder">
                                    <div class="star star-0"></div>
                                    <div class="star star-1"></div>
                                    <div class="star star-2"></div>
                                    <div class="star star-3"></div>
                                    <div class="star star-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="women">
                    <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                    <span class="size">XL / XXL / S </span>
                    <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                    <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                </div>
            </div>
        </div>           
HTML
        ;

        echo $return;
    }
}
