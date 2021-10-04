<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 297;
$thumb_height = 212;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


    <?php
    for ($i=0; $i<$list_count; $i++) {
        
        $img_link_html = '';

        $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
        
        if( $i === 0 ) {
            $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

            if(isset($thumb['src']) && $thumb['src']) {
                $img = $thumb['ori'];
            } else {
                $img = G5_IMG_URL.'/no_img.png';
                $thumb['alt'] = '이미지가 없습니다.';
            }
            $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'"class="img-fluid" >';
            $img_link_html = '<a href="'.$list[$i]['wr_link1'].'" class="lt_imgyyyyyy" >'.run_replace('thumb_image_tag', $img_content, $thumb).'</a>';
            
        }
    ?>
        
            <?php echo $img_link_html; ?>
            <?php
            
 
          

          
			
		

            ?>

          
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    
    <?php }  ?>
    



