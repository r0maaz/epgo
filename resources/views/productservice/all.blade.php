<div class="wow_content mb-15 tag_sidebar_widget">
    <div class="valign tag_sidebar_widget_title">
        <b>آخر المنتجات</b>
        <a href="https://new.abofarha.com/products" class="refresh">الكل</a>
    </div>
    <div class="sidebar-product-slider">
        <div class="wow_side_prods_prnt">
            @foreach ($productServices as $productService)
            <div class="wow_side_prods" id="product_2">
                <a href="https://new.abofarha.com/post/8_tablet-wifi.html" data-ajax="?link1=post&amp;id=8"
                    title="{{ $productService->name}}">
                    <div class="avatar">
                        <img src="@if($productService->pro_image){{asset(Storage::url('uploads/pro_image/'.$productService->pro_image))}}@else{{asset(Storage::url('uploads/pro_image/user-2_1654779769.jpg'))}}@endif"
                            alt="Tablet WIFI Profile Picture">
                    </div>
                    <div class="produc_info">
                        <h4 class="truncate">{{ $productService->name}}</h4>
                        <span class="truncate">{{  \Auth::user()->priceFormat($productService->purchase_price )}}</span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="clear"></div>
</div>
