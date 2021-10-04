<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');


$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


<div class="container-fluid ijij py-md-3">
  <div class="row justify-content-center pb-md-0">
    <h2 clas="hshs">LOCATION</h2>
</div>
  <ul class="rimitab align-items-center justify-content-center  d-flex  position-relative ">

    <?php for ($i=0; $i<$list_count; $i++) {

      if( $i  === 0 ) { 
        $active = 'active';
        
      } else { 
        $active = '';
       }


      $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

      if($thumb['src']) {
          $img = $thumb['ori'];
      } else {
          $img = G5_IMG_URL.'/no_img.png';
         
      }
      $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';

      $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);


      ?>
     
        
        <li class="<?php echo $active; ?> p-2" data-store='<?php echo $list[$i]['wr_1']; ?>' data-locationDB='[<?php echo $list[$i]['subject']; ?>]'>
        <div class="hoo justify-content-md-start my-md-5 my-2">
          <div class="hop position-relative"><?php echo $list[$i]['wr_1']; ?></div>
        </div>
        <div class="tap12 position-absolute">
          <div class="tap13 "><?php echo $list[$i]['wr_content'] ?>
        </div>
      </div>
      
      </li>
        
    
        



    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    게시물이 없습니다.
    
    <?php }  ?>
    
   


    </ul>
    </div>
    <div id="map_tab" class="rumitab_content container py-md-0 py-3">
        <div class="Tab11">
          <div id="mapLocation" style="width:100%;height:500px;"></div>


        </div>


    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=	b5d48fac7718c058b3c0d9630290eae1"></script>
    <script>
  
      var locationDS =[ <?php echo $list[0]['subject']; ?> ];
      var storeNm = "<?php echo $list[0]['wr_1']; ?>";



      
      function dasungMap(){

          var mapContainer = document.getElementById('mapLocation'), // 지도를 표시할 div
          mapOption = {
                center: new kakao.maps.LatLng( locationDS[0],  locationDS[1]), // 지도의 중심좌표
                level: 4 // 지도의 확대 레벨
            };

          var map = new kakao.maps.Map(mapContainer, mapOption);

          var imageSrc = '/ganu/theme/basic/img/mar/mar.png', // 마커이미지의 주소입니다
            imageSize = new kakao.maps.Size(30,30 ), // 마커이미지의 크기입니다
            imageOption = {offset: new kakao.maps.Point(27, 69)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

          // 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
          var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption),
            markerPosition = new kakao.maps.LatLng(locationDS[0],  locationDS[1]); // 마커가 표시될 위치입니다

          // 마커를 생성합니다
          var marker = new kakao.maps.Marker({
          position: markerPosition,
          image: markerImage // 마커이미지 설정
          });

          // 마커가 지도 위에 표시되도록 설정합니다
          marker.setMap(map);

          // 커스텀 오버레이에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
          // var content = '<div class="customoverlay">' +
          //   '  <a href="" target="_blank">' +
          //   '    <span class="title" >'+storeNm+\'</span>' +
          //   '  </a>' +
          //   '</div>';

      }

      dasungMap();

      function setCenter() {
            // 이동할 위도 경도 위치를 생성합니다
          var moveLatLon = new kakao.maps.LatLng(<?php echo  $list[0]['subject']; ?>);
            // 지도 중심을 이동 시킵니다
            map.setCenter(moveLatLon);
        }








      $('.rimitab > li').click(function(){

      var  locationDSs =$(this).attr('data-locationDB');
          
          locationDSs =eval('('+locationDSs+')');

          locationDS =[ locationDSs[0], locationDSs[1] ];



       // alart(locationDS)
       $(this).addClass('active').siblings().removeClass('active');
       dasungMap();
       //alert(locationDSs[0]);

      });
      </script>


    
      </div>