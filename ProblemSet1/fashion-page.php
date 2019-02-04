<?php /* Template Name: fashion */ ;?>

<?php get_header(); ?>

<section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>穿搭</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        主页
                                    </a>
                                </li>
                                <li class="active">穿搭灵感与购买链接</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--
==================================================
    Service Page Title  Start
================================================== -->
<section id="service-page" class="pages service-page">

  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <!-- Modal content-->
  <div class="modal-content">
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;
  </button>
  <h4 class="modal-title">搭配商品</h4>
  </div>
  <div class="modal-body " id="main-content">
  <p>正在加载商品信息</p>
  </div>
    <!-- Modal footer-->
  <div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">关闭
  </button>
  </div>
  </div>
  </div>
  </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">简约ins风</h2>
                    <br>
                    <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
                        简单又chic的Instagram风格，最不容易出错，适合大部分想要开始改变风格的女生。<br>
                        喜欢某件穿搭就在下方的心心上点一下，赞下它吧！
                    </p>
                  </div>


                  </div>
                  </div>
                  </div>
                </section>
                <!--
                ==================================================
                    Service Page Products  Start
                ================================================== -->
<section class="about-feature clearfix">
    <div class="container-fluid">
        <div class="row" id="box">

<script>
          var data = [];
          $.ajaxSetup({async:false});
            var airtable_read_endpoint = "https://api.airtable.com/v0/appTLnwsg6opF4Dcj/What%20I%20wear?api_key=keytIXhS7YQcZwe4a";
            $.getJSON(airtable_read_endpoint, function(result) {
                   $.each(result.records, function(key,value) {
                       items = {};
                           items["name"] = value.fields.Items;
                           items["image_url"] = value.fields.Images[0].thumbnails.large.url;
                           items["brand"] = value.fields.Brand;
                           items["color"] = value.fields.Color;
                           items["price"] = value.fields.Price;
                           items["url"] = value.fields.Shoppinglink;
                           data.push(items);
                           // console.log(items);
                    }); // end .each
            }); // end getJSON

          var count = 0
            for (i = 0; i < data.length; i++){
              document.getElementById('box').innerHTML += '<div class="block about-feature-' +
                 (count%3+1) + ' wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"><h2>LOOK ' +
                  (count+1) + '</h2><div class="container"><div class="row"><div class="col-sm-3"> ' +
                  ' <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms"><div class="img-wrapper"><img src="' +
                  data[i].image_url + '" class="img-responsive" alt="this is a title"><div class="overlay"><div class="buttons">'+
                  // ' <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms"><div class="img-wrapper"><img src="' +
                  // 'images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title"><div class="overlay"><div class="buttons">'+
                  '<a rel="gallery" class="fancybox" href="' + data[i].image_url + '">大图</a><a target="_blank" data-index="' + i + '" data-toggle="modal" data-target="#myModal">购买</a></div> </div></div><figcaption><h4>'+
                  '<a href="#">博主穿搭</a></h4><p class="like">&#10084;</p></figcaption></figure></div></div></div></div>';
                  count += 1
            };

          $(document).ready(function(){
              $('#myModal').on('shown.bs.modal', function(e) {
                var i = $(e.relatedTarget).data('index');
            //    console.log(i);
                $("#main-content").html('<div class="box3"> <font family="Roboto Condensed", sans-serif; color="red" size=3px>点击图片即可购买</font> <br/>'  + data[i].brand + '<br>' +
                data[i].name + '<br>'+ data[i].color + '<br>'+ data[i].price + '<br>'+
              '<a href="' + data[i].url + '" target="_blank">'+ '<img src="' + data[i].image_url+'"width="200"+><br>' + '</div>');
            })
          });
          </script>
        </div>
	</div>
</section>





<!--
==================================================
    Works Section Start
================================================== -->
<section class="works service-page">
    <div class="container">
        <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">查看其他穿搭风格</h2>
            <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
                大部分想成为真正会穿搭的人，模仿和借鉴是他们的第一步。<br>
                找到喜欢的风格和与自己身材相仿的博主，现在就开始探索吧。
            </p>
        <div class="row">
            <div class="col-sm-3">
                 <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/portfolio/item-2.jpg" class="img-responsive" alt="this is a title" >
                        <div class="overlay" align="center">
                            <div class="buttons">
                              <a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/portfolio/item-2.jpg">大图</a>
                              <a target="_blank" href="American.html">查看</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                          <a href="American.html">
                              美式休闲
                          </a>
                      </h4>
                      <p>
                          街拍最常见，可甜可咸
                        </p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-sm-3">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/portfolio/item-3.jpg" class="img-responsive" alt="this is a title" >
                        <div class="overlay">
                            <div class="buttons">
                              <a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/portfolio/item-3.jpg">大图</a>
                              <a target="_blank" href="French.html">查看</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                          <a href="French.html">
                              法风穿搭
                          </a>
                      </h4>
                      <p>
                          性感神秘的法国风情谁不爱
                        </p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-sm-3">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/portfolio/item-4.jpg" class="img-responsive" alt="" >
                        <div class="overlay">
                            <div class="buttons">
                              <a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/portfolio/item-4.jpg">大图</a>
                              <a target="_blank" href="little.html">查看</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                          <a href="little.html">
                              小个子穿搭
                          </a>
                      </h4>
                      <p>
                          娇小女生特有的穿搭法则
                        </p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-sm-3">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="img-wrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/portfolio/item-5.jpg" class="img-responsive" alt="" >
                        <div class="overlay">
                            <div class="buttons">
                              <a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/portfolio/item-5.jpg">大图</a>
                              <a target="_blank" href="office.html">查看</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                          <a href="office.html">
                              轻熟职场OL
                          </a>
                      </h4>
                      <p>
                          大方得体又不失风格与活力
                        </p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-sm-3">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="img-wrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/portfolio/item-6.jpg" class="img-responsive" alt="" >
                        <div class="overlay">
                            <div class="buttons">
                              <a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/portfolio/item-6.jpg">大图</a>
                              <a target="_blank" href="mature.html">查看</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                          <a href="mature.html">
                              轻性感和高级风
                          </a>
                      </h4>
                      <p>
                          舒适，质感与低饱和度的美
                        </p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
