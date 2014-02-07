
{{ content() }}

<script type="text/javascript">
var is_loading = false;
var data = new Array();
  $(function() {
     $("img.lazy").lazyload({
         effect : "fadeIn"
     }); 
  }); 
$(document).ready(function(){
    $(window).scroll(function(){
        if (!is_loading && $(window).scrollTop()+$(window).height() > $(".dealunit").eq($(".dealunit").length-3).offset().top )
        {   
            is_loading = true;
            curr_deal_cnt = $(".dealunit").length;
            $.ajax({
                cache: false,
                type: 'POST',
                url: '/index/getMore',
                data: { curr_deal_cnt: curr_deal_cnt },
                dataType: 'json',
                success: function(result) {
                    if ( result.result == '1' )
                    {   
                    	$(".lst_shopping").append(result.html);
                    }   
                    is_loading = false;
                },  
                error: function(){
                    alert('error failed');
                    is_loading = false;
                    return; 
                }   
            }); 
            //alert('test');
        }   
    }); 
}); 
</script>

<div class="hero-unit">
    <h1>Welcome to Zzo</h1>
    <p>Zzo is a namkwon</p>
    <p>{{ link_to('session/register', 'Try it for Free &raquo;', 'class': 'btn btn-primary btn-large btn-success') }}</p>
</div>


<div id="wrap">
    <div class="categoryContent shopping">
          <div class="categoryDeals itemLabelSpecial">
                <br />
                <h2 class="categoryLabel">쇼핑 Best</h2>
                <ul class="subCategoryTabList clearFix noTab">
                    <li class="sortByList">
                        <div class="sortBy active">
                            <a href="/shopping.pang?subTab=best" data-cclick="PLP,SORT_BTN,shopping_main,1"><span class="activeSimbol"></span>베스트</a>
                        </div>
                        <div class="sortBy ">
                            <a href="/shopping.pang?subTab=new" data-cclick="PLP,SORT_BTN,shopping_main,2"><span class="activeSimbol"></span>신규상품</a>
                        </div>
                        <div class="sortBy ">
                            <a href="/shopping.pang?subTab=close" data-cclick="PLP,SORT_BTN,shopping_main,3"><span class="activeSimbol"></span>오늘마감</a>
                        </div>
                    </li>
                </ul>
                <div class="dealList">
                    <ul class="clearFix lst_shopping">
        <?php foreach ($deal_infos as $key => $deal){ if($key == 12) break;?>
            <li>
        <div class="dealunit" deal_id="<?php echo $deal->deal_id; ?>" item_cnt=<?php echo $key; ?>>
            <a class="dealunit-link" href="/deal.pang?coupang=54679835&amp;areacode=MRC" data-cclick="SHOPPING_MAIN_IMAGEVIEW,BEST,,0">
                        <div class="dealunit-best dealunit-best__no1">BEST1</div>
                <div class="dealunit-thumb">
                    <div class="dealunit-thumb-box">
                        <div class="dealunit-img">
            <?php if($key > 8){ ?>
                                <img class="lazy" data-original="http://<?php echo str_replace("/home/gagamel/cdn", "image.wemakeprice.com", $deal->img_onecut); ?>" width="292" height="292" alt="" />
                        <?php }else{ ?>
                                <img src="http://<?php echo str_replace("/home/gagamel/cdn", "image.wemakeprice.com", $deal->img_onecut); ?>" width="292" height="292" alt="" />

            <?php } ?>
            </div>
                        <div class="dealunit-badges">

                                    <span class="dealunit-badge dealunit-badge__fixed">무료배송</span>
                        </div>

                        <div class="dealunit-soldout">
                        </div>

                        <div class="dealunit-decoline">
                        </div>
                    </div>
                </div>
                <div class="dealunit-head">
                    <p class="dealunit-desc"><?php echo $deal->line_summary; ?></p>
                    <p class="dealunit-title"><?php echo $deal->main_name; ?></p>
                </div>
                <div class="dealunit-body">
                    <div class="dealunit-type">
                    </div>
                    <div class="dealunit-price">
                        <div class="dealunit-price-originalvalue">
                        </div>
                        <div class="dealunit-price-value">
                            <strong><?php echo $deal->price; ?></strong><span class="unit">원</span>
                        </div>
                    </div>
                </div>
                <div class="dealunit-foot">
                    <div class="dealunit-foot-box">
                        <div class="dealunit-labels">
                        </div>
                        <div class="dealunit-buyinfo">
                                <em class="dealunit-buyinfo-count">준비중...</em>개 구매중
                        </div>
                    </div>
                </div>
            </a>
            <i class="dealunit-border dealunit-border__top"></i>
            <i class="dealunit-border dealunit-border__right"></i>
            <i class="dealunit-border dealunit-border__bottom"></i>
            <i class="dealunit-border dealunit-border__left"></i>
            <a class="dealunit-popup" href="/deal.pang?coupang=54679835&amp;areacode=MRC" data-cclick="PLP,POP_UP,," target="_blank" title="새창열기">새창열기</a>
        </div>

                            </li>
    <?php } ?>
                          </ul>
            <br />
                </div>
            </div>
        </div>
</div>
                