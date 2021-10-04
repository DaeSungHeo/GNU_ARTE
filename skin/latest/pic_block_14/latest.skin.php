<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>



<div class="video-foreground d-flex">
  <?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="d-block d-md-none position-absolute img-fluid">';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>
      
      

        <iframe class="d-none d-md-block" width:100% src="https://www.youtube.com/embed/<?php echo $list[$i]['wr_subject'] ?>?controls=0&showinfo=0&rel=0&autoplay=1&mute=1&loop=1&playlist=<?php echo $list[$i]['wr_subject'] ?>" frameborder="0" allowfullscreen title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?>  
            
          
           
           
            <div class="hbhb row  justify-content-end">
            <div class="col-md-6 col-12  my-md-40  text-center text-md-left text-white">

            <?php echo $list[$i]['wr_content'] ?>
</div>
        </div>      

           

           

    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
   
    <?php }  ?>
    
    </div>  
   