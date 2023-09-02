<?php
require_once('/_GNPANEL/_connect.php');
require_once(FUNC);
require_once(HEADER);
$banner = '	<center>
  <div><div id="carouselExampleControls" class="carousel slide frame_img" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/images/banner1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/banner2.jpg" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <img src="/images/pre.png">
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <img src="/images/next.png">
    <span class="sr-only">Next</span>
  </a>
</div></div>
</center>';
  if($user){
	  $d = mysqli_query($_con,"SELECT `email`, `naptien` FROM `users` WHERE `naptien` >0 ORDER BY `naptien` DESC");
	  $i = 1;
	  while($gd = mysqli_fetch_assoc($d)){
		  	$rank = '['.$i.'th]';
	if($i ==1)
		$rank = '<font color=red><b>[1st]</b></font>';
	if($i ==2)
		$rank = '<font color=blue><b>[2nd]</b></font>';
	if($i ==3)
		$rank = '<font color=green><b>[3rd]</b></font>';
	  $donation .= '<div>'.$rank.' <b>'.$gd['email'].'</b>: '.number_format($gd['naptien']).'đ</div>';
	  $i++;
	  }
	  $all = mysqli_fetch_assoc(mysqli_query($_con,"SELECT SUM(`naptien`) FROM `users` WHERE `naptien` >0"));
	  $percent = round($all['SUM(`naptien`)']*100/2239900,2);
echo '
<div class="modal fade" id="modal_hunter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="t26_title"><i class="fa fa-book"></i> Cẩm Nang Chế Độ Thợ Săn</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="/screen/images/game/close.png"></span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="deschat">
	  Một vũ trụ khác, nơi có sự bất ổn về không gian, thời gian. Nơi xuất hiện những quái thú, bạn là một
	  trong những anh hùng bị lạc vào nó, ra sức chiến đấu, thu thập linh hồn để tìm lối ra.<br>
	  <b style="font-size: larger;">Luật chơi: Cùng thi đấu tới khi boss chết:</b><br>
	  <b style="color:red;">NGƯỜI GIẾT:</b> trở thành Hunter, nhận được thêm linh hồn.<br>
	  <b style="color:green;">THƯỞNG HẠNG SÁT THƯƠNG (1 -> 4):</b> Vật phẩm PET<br>
	  <b style="color:blue;">KHÁC:</b> EXP + ĐCH / ĐHT<br>
	  <b style="color:purple">THỢ SĂN TÀN NHẪN:</b> KS liên tục boss, nhận được thêm linh hồn tương ứng chuỗi <b class="viptxt">(Tối đa 5+cấp VIP)</b>.
	  </div> 
		</div>
		<div class="modal-footer">
		Chuỗi: <b>'.$info['hunter_chuoi'].'</b> <button class="btn btn-danger" onclick="thaotac(\'war/hunter/create.php\',\'war\');">Tham Chiến '.money(1,hb).'</button>
				  </div>
    </div>
  </div>
</div>
<div class="row">
<div class="col-md-7">';
$f = mysqli_query($_con,"SELECT * FROM `forum` WHERE `ghim` = 1");
while($ff = mysqli_fetch_assoc($f)){
echo '<div class="listbm"><a href="/request/forum/thread.php?id='.$ff[id].'#title"><i class="fa fa-bookmark"></i> '.$_GD->BBCODE($ff['text']).'</a></div>';
}
echo '<div style="margin-bottom: 5px; text-align:center;">
<div class="sprite_7 mecung GDEV" onclick="window.location.href=\'/request/war/mecung/\';"></div>
<div class="sprite_7 hunter GDEV" onclick="void(0);" data-target="#modal_hunter" data-toggle="modal" style="position:relative;"><div style="position: absolute; width: 100%; bottom: 3px;"></div></div>
<div class="sprite_7 avc GDEV" style="position:relative;"><div style="position: absolute; width: 100%; bottom: 3px;"></div></div>
<div class="sprite_7 filtergray" style="position:relative;"><div style="position: absolute; width: 100%; bottom: 3px;"><center> <span style="background:aliceblue; font-size:xx-small; padding: 1px;"><i class="fa fa-lock"></i> Sắp Mở</span> </center></div></div>
<div class="sprite_7 pvp filtergray" style="position:relative;"><div style="position: absolute; width: 100%; bottom: 3px;"><center> <span style="background:aliceblue; font-size:xx-small; padding: 1px;"><i class="fa fa-lock"></i> Sắp Mở</span> </center></div></div>
</div></div>
<div class="col-md-5">
'.$banner.'
</div>
</div>
';
?>
<script>
$(function(){
$('.sprite_2').click(function(){
	$(this).hide();
	$('.none').show();
});
});
</script>
<?php
} else {
?>
  <center><img src="/images/neww/logo.png" style="margin-top: 1.5rem;">
  <div class="fixtop pulse infinite animated">WAP GAME "XỊN" NHẤT VIETNAM</div></center>
  <div class="newcontent"></div>
  <div class="row">
    <div class="col-md-5">
<?php echo $banner; ?>
  </div>
  <div class="col-md-7 p2">
  <center>
  <div id="notice" class="des_w75pt"></div>
  <div>Khuyên Dùng <i class="fab fa-chrome"></i> Chrome / Cốc Cốc</div>
  <div class="input-group des_w50pt">
      <span class="input-group-addon" style="border-radius: 50px 0px 0px 50px;">
        <i class="fa fa-user fa-fw"></i>
      </span>
      <input type="text" id="email" class="form-control" placeholder="Tên đăng nhập" style="border-radius: 0px 50px 50px 0px;">
    </div>
	  <div class="input-group fixtop des_w50pt">
      <span class="input-group-addon" style="border-radius: 50px 0px 0px 50px;">
        <i class="fa fa-lock fa-fw"></i>
      </span>
      <input type="text" id="pass" class="form-control" placeholder="Mật khẩu" style="border-radius: 0px 50px 50px 0px;">
	  <input type="hidden" id="ref" value="'.intval($_GET['ref']).'">
    </div>
	<button type="submit" class="btn btn-success fixtop" id="bsw" onclick="register();" style="border-radius: 50px;"><i class="fa fa-user-plus"></i> TẠO TÀI KHOẢN</button>
	<div class="fixtop"><a href="javascript:switchb(1);" id="asw" style="">Đã Có Tài Khoản ?</a></div>
	<div class="fixtop"><small><i class="fa fa-envelope-open"></i> Quên mật khẩu, soạn: <b>ON GUNNY QMK {id} gửi 8085</b> (1000đ)</small></div>
  </center>
  </div>

  </div>
  <?php
}
require FOOTER;
?>
