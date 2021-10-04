<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div id="hehe" class="container-fluid overflow-hidden">
    <div class="container py-md-3">
        <div class="row justify-content-center py-md-2">
            
    <h2 class="hll col-md-5  py-3 p-md-5">INTRODUCTION</h2>
    </div>
    </div>  
        <ul class="hehe position-relative">
            <?php
            
            for ($i=0; $i<$list_count; $i++) {
            $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);
            if( $i  === 0 ) { 
                $active = 'active';
                
            } else { 
                $active = '';
            }

            if($thumb['src']) {
                $img = $thumb['ori'];
            } else {
                $img = G5_IMG_URL.'/no_img.png';
                $thumb['alt'] = '이미지가 없습니다.';
            }
            $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'"class="img-fluid" >';
            $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
            ?> 
                
                
            <li class="hkhk hdi<?php echo $i; ?>  <?php echo $active; ?> d-flex">
            <div class="col-md-6 hoho justify-content-md-start my-md-5 my-2">
                <p class=" position-relative p-2 hphp" ><?php echo $list[$i]['wr_subject'] ?></p>
            </div>
            <div class="col-md-6 position-absolute bigImg col-12" >
                <div class="huhu aos-init aos-animate " style='background:url(<?php echo $img; ?>) no-repeat  center ' data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"   > 
                <?php echo $list[$i]['wr_content'] ?>      
            </div>
                 
                
            </div>
         </li>


                        
                        
                        
                    
                
                
            
                    
                
                    
                
                    
                    
                    
                    <?php
                

                
                    
                

                
                    if ($list[$i]['comment_cnt'])

                    ?>


                
            <?php }  ?>
            <?php if ($list_count == 0) { //게시물이 없을 때  ?>
        
            <?php }  ?>
        
        
            </ul>    
           
</div>
<script>

       $(function(){
           $('#hehe .hehe .hkhk').click(function(){
               $('#hehe .hehe .hkhk').removeClass('active')
               $(this).addClass('active')
           });
           
       });
       
      

    </script>