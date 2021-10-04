<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div id="kjkj">
   

    <?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>
        
           <div class="container-fluid py-md-5">
               <div class="row flex-column my-md-3">
               <h2 class="gkgk  my-md-5 text-center"><?php echo $list[$i]['wr_subject'] ?></h2>
                   <div class="col-12 d-flex flex-sm-row flex-column hphp"> <?php echo $list[$i]['wr_content'] ?></div>
            <?php
            

           
           

            if ($list[$i]['comment_cnt'])  echo "
            <span class=\"lt_cmt\">".$list[$i]['wr_comment']."</span>";

            ?>
        </div>
    </div>  
        
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    
    <?php }  ?>
    
    

</div>
