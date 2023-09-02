<style>
body {background: #000; color:red; }
</style>
<?php
error_reporting(0);
if(isset($_GET['test'])){
	if(1%5)
		echo 'CC';
exit;
}
if(isset($_GET['boss'])){
require '_GNPANEL/_connect.php';
require_once(FUNC);
echo '<link rel="stylesheet" href="/screen/_GD.css"><link rel="stylesheet" href="/screen/animate.css"><style>body {background: #000; color:red; }
.living { animation-play-state: paused; }
.living { animation-play-state: running; animation-fill-mode: forwards; animation-iteration-count: 1;}</style><center>';
echo '
<div class="war_BOSS" id="figure_boss_381" style="z-index: 0; position: absolute;">
<div class="chatball" style="z-index: 1; position: absolute; left: -40px; display: none;" id="boss_chatball_381"><div class="inchatball" id="boss_chat_381">Tới Nộp Mạng Hả ???</div></div>
<div class="div_tt_g5 war_BULLET warnone" id="vk6_griss_381" style="display: none;"><center><div class="tt_g5"></div></center></div>
<div class="div_tt_5 war_BULLET warnone" id="vk6_381" style="display: none;"><center><div class="tt_5"></div></center></div>
<div class="war_BOOM">
<center>
<div class="tt_boom warnone" id="bullet6_381" style="display: none;"></div>
<div class="tt_boom2 warnone" id="bullet6_griss_381" style="display: none;"></div>
</center>
</div>
<div class="pety3_2_skill1 warnone" id="pet_skill1_381" style="position: absolute; z-index: 5; display: none;"></div><div class="pety3_2_skill2 warnone" id="pet_skill2_381" style="position: absolute; z-index: 5; display: none;"></div>
<div style="position: absolute; bottom: 0; width: 100%;">
<center>
<div class="dame" id="dame_user_381"></div>
<div class="sprite_9 warnone" id="boss_turn_381" style="display: none;"></div>
<div class="living living'.$_GET['boss'].' warnone" id="boss_381" style="display: inline-block;"></div>
<div id="boss_name_381" class="pulse animated"><span style="color: blue;" class="living_name">
BOSS
</span></div>
</center></div></div>
<div class="war_BOSS" id="figure_boss_381" style="z-index: 0;">
<div class="chatball" style="z-index: 1; position: absolute; left: -40px; display: none;" id="boss_chatball_381"><div class="inchatball" id="boss_chat_381">Tới Nộp Mạng Hả ???</div></div>
<div class="div_tt_g5 war_BULLET warnone" id="vk6_griss_381" style="display: none;"><center><div class="tt_g5"></div></center></div>
<div class="div_tt_5 war_BULLET warnone" id="vk6_381" style="display: none;"><center><div class="tt_5"></div></center></div>
<div class="war_BOOM">
<center>
<div class="tt_boom warnone" id="bullet6_381" style="display: none;"></div>
<div class="tt_boom2 warnone" id="bullet6_griss_381" style="display: none;"></div>
</center>
</div>
<div class="pety3_2_skill1 warnone" id="pet_skill1_381" style="position: absolute; z-index: 5; display: none;"></div><div class="pety3_2_skill2 warnone" id="pet_skill2_381" style="position: absolute; z-index: 5; display: none;"></div>
<div style="position: absolute; bottom: 0; width: 100%;">
<center>
<div class="dame" id="dame_user_381"></div>
<div class="sprite_9 warnone" id="boss_turn_381" style="display: none;"></div>
<div class="living living'.$_GET['boss'].'_appear " id="boss_appear_381"></div>
<div id="boss_name_381" class="pulse animated"><span style="color: blue;" class="living_name">
APPEAR
</span></div>
</center></div></div>';
echo '<div class="war_BOSS" id="figure_boss_381" style="z-index: 0;">
<div class="chatball" style="z-index: 1; position: absolute; left: -40px; display: none;" id="boss_chatball_381"><div class="inchatball" id="boss_chat_381">Tới Nộp Mạng Hả ???</div></div>
<div class="div_tt_g5 war_BULLET warnone" id="vk6_griss_381" style="display: none;"><center><div class="tt_g5"></div></center></div>
<div class="div_tt_5 war_BULLET warnone" id="vk6_381" style="display: none;"><center><div class="tt_5"></div></center></div>
<div class="war_BOOM">
<center>
<div class="tt_boom warnone" id="bullet6_381" style="display: none;"></div>
<div class="tt_boom2 warnone" id="bullet6_griss_381" style="display: none;"></div>
</center>
</div>
<div class="pety3_2_skill1 warnone" id="pet_skill1_381" style="position: absolute; z-index: 5; display: none;"></div><div class="pety3_2_skill2 warnone" id="pet_skill2_381" style="position: absolute; z-index: 5; display: none;"></div>
<div style="position: absolute; bottom: 0; width: 100%;">
<center>
<div class="dame" id="dame_user_381"></div>
<div class="sprite_9 warnone" id="boss_turn_381" style="display: none;"></div>
<div class="living living'.$_GET['boss'].' warnone" id="boss_381" style="display: inline-block;"></div>
<div id="boss_name_381" class="pulse animated"><span style="color: blue;" class="living_name">
BOSS
</span></div>
</center></div></div>';
echo '
<div class="war_BOSS" id="figure_boss_381" style="z-index: 0; position: absolute;">
<div class="chatball" style="z-index: 1; position: absolute; left: -40px; display: none;" id="boss_chatball_381"><div class="inchatball" id="boss_chat_381">Tới Nộp Mạng Hả ???</div></div>
<div class="div_tt_g5 war_BULLET warnone" id="vk6_griss_381" style="display: none;"><center><div class="tt_g5"></div></center></div>
<div class="div_tt_5 war_BULLET warnone" id="vk6_381" style="display: none;"><center><div class="tt_5"></div></center></div>
<div class="war_BOOM">
<center>
<div class="tt_boom warnone" id="bullet6_381" style="display: none;"></div>
<div class="tt_boom2 warnone" id="bullet6_griss_381" style="display: none;"></div>
</center>
</div>
<div class="pety3_2_skill1 warnone" id="pet_skill1_381" style="position: absolute; z-index: 5; display: none;"></div><div class="pety3_2_skill2 warnone" id="pet_skill2_381" style="position: absolute; z-index: 5; display: none;"></div>
<div style="position: absolute; bottom: 0; width: 100%;">
<center>
<div class="dame" id="dame_user_381"></div>
<div class="sprite_9 warnone" id="boss_turn_381" style="display: none;"></div>
<div class="living living'.$_GET['boss'].' warnone" id="boss_381" style="display: inline-block;"></div>
<div id="boss_name_381" class="pulse animated"><span style="color: blue;" class="living_name">
BOSS
</span></div>
</center></div></div>
<div class="war_BOSS" id="figure_boss_381" style="z-index: 0;">
<div class="chatball" style="z-index: 1; position: absolute; left: -40px; display: none;" id="boss_chatball_381"><div class="inchatball" id="boss_chat_381">Tới Nộp Mạng Hả ???</div></div>
<div class="div_tt_g5 war_BULLET warnone" id="vk6_griss_381" style="display: none;"><center><div class="tt_g5"></div></center></div>
<div class="div_tt_5 war_BULLET warnone" id="vk6_381" style="display: none;"><center><div class="tt_5"></div></center></div>
<div class="war_BOOM">
<center>
<div class="tt_boom warnone" id="bullet6_381" style="display: none;"></div>
<div class="tt_boom2 warnone" id="bullet6_griss_381" style="display: none;"></div>
</center>
</div>
<div class="pety3_2_skill1 warnone" id="pet_skill1_381" style="position: absolute; z-index: 5; display: none;"></div><div class="pety3_2_skill2 warnone" id="pet_skill2_381" style="position: absolute; z-index: 5; display: none;"></div>
<div style="position: absolute; bottom: 0; width: 100%;">
<center>
<div class="dame" id="dame_user_381"></div>
<div class="sprite_9 warnone" id="boss_turn_381" style="display: none;"></div>
<div class="living living'.$_GET['boss'].'_aw warnone" id="aw_381"></div>
<div id="boss_name_381" class="pulse animated"><span style="color: blue;" class="living_name">
AW
</span></div>
</center></div></div>';
echo '
<div class="war_BOSS" id="figure_boss_381" style="z-index: 0; position: absolute;">
<div class="chatball" style="z-index: 1; position: absolute; left: -40px; display: none;" id="boss_chatball_381"><div class="inchatball" id="boss_chat_381">Tới Nộp Mạng Hả ???</div></div>
<div class="div_tt_g5 war_BULLET warnone" id="vk6_griss_381" style="display: none;"><center><div class="tt_g5"></div></center></div>
<div class="div_tt_5 war_BULLET warnone" id="vk6_381" style="display: none;"><center><div class="tt_5"></div></center></div>
<div class="war_BOOM">
<center>
<div class="tt_boom warnone" id="bullet6_381" style="display: none;"></div>
<div class="tt_boom2 warnone" id="bullet6_griss_381" style="display: none;"></div>
</center>
</div>
<div class="pety3_2_skill1 warnone" id="pet_skill1_381" style="position: absolute; z-index: 5; display: none;"></div><div class="pety3_2_skill2 warnone" id="pet_skill2_381" style="position: absolute; z-index: 5; display: none;"></div>
<div style="position: absolute; bottom: 0; width: 100%;">
<center>
<div class="dame" id="dame_user_381"></div>
<div class="sprite_9 warnone" id="boss_turn_381" style="display: none;"></div>
<div class="living living'.$_GET['boss'].' warnone" id="boss_381" style="display: inline-block;"></div>
<div id="boss_name_381" class="pulse animated"><span style="color: blue;" class="living_name">
BOSS
</span></div>
</center></div></div>
<div class="war_BOSS" id="figure_boss_381" style="z-index: 0;">
<div class="chatball" style="z-index: 1; position: absolute; left: -40px; display: none;" id="boss_chatball_381"><div class="inchatball" id="boss_chat_381">Tới Nộp Mạng Hả ???</div></div>
<div class="div_tt_g5 war_BULLET warnone" id="vk6_griss_381" style="display: none;"><center><div class="tt_g5"></div></center></div>
<div class="div_tt_5 war_BULLET warnone" id="vk6_381" style="display: none;"><center><div class="tt_5"></div></center></div>
<div class="war_BOOM">
<center>
<div class="tt_boom warnone" id="bullet6_381" style="display: none;"></div>
<div class="tt_boom2 warnone" id="bullet6_griss_381" style="display: none;"></div>
</center>
</div>
<div class="pety3_2_skill1 warnone" id="pet_skill1_381" style="position: absolute; z-index: 5; display: none;"></div><div class="pety3_2_skill2 warnone" id="pet_skill2_381" style="position: absolute; z-index: 5; display: none;"></div>
<div style="position: absolute; bottom: 0; width: 100%;">
<center>
<div class="dame" id="dame_user_381"></div>
<div class="sprite_9 warnone" id="boss_turn_381" style="display: none;"></div>
<div class="living living'.$_GET['boss'].'_die warnone" id="die_381"></div>
<div id="boss_name_381" class="pulse animated"><span style="color: blue;" class="living_name">
DIE
</span></div>
</center></div></div>';
$num = files(ROOT.'/screen/images/living/living'.$_GET['boss'].'/skill/');
for($i = 1; $i <= $num; $i++){
echo '
<div class="war_BOSS" id="figure_boss_381" style="z-index: 0; position: absolute;">
<div class="chatball" style="z-index: 1; position: absolute; left: -40px; display: none;" id="boss_chatball_381"><div class="inchatball" id="boss_chat_381">Tới Nộp Mạng Hả ???</div></div>
<div class="div_tt_g5 war_BULLET warnone" id="vk6_griss_381" style="display: none;"><center><div class="tt_g5"></div></center></div>
<div class="div_tt_5 war_BULLET warnone" id="vk6_381" style="display: none;"><center><div class="tt_5"></div></center></div>
<div class="war_BOOM">
<center>
<div class="tt_boom warnone" id="bullet6_381" style="display: none;"></div>
<div class="tt_boom2 warnone" id="bullet6_griss_381" style="display: none;"></div>
</center>
</div>
<div class="pety3_2_skill1 warnone" id="pet_skill1_381" style="position: absolute; z-index: 5; display: none;"></div><div class="pety3_2_skill2 warnone" id="pet_skill2_381" style="position: absolute; z-index: 5; display: none;"></div>
<div style="position: absolute; bottom: 0; width: 100%;">
<center>
<div class="dame" id="dame_user_381"></div>
<div class="sprite_9 warnone" id="boss_turn_381" style="display: none;"></div>
<div class="living living'.$_GET['boss'].' warnone" id="boss_381" style="display: inline-block;"></div>
<div id="boss_name_381" class="pulse animated"><span style="color: blue;" class="living_name">
BOSS
</span></div>
</center></div></div>
<div class="war_BOSS" id="figure_boss_381" style="z-index: 0;">
<div class="chatball" style="z-index: 1; position: absolute; left: -40px; display: none;" id="boss_chatball_381"><div class="inchatball" id="boss_chat_381">Tới Nộp Mạng Hả ???</div></div>
<div class="div_tt_g5 war_BULLET warnone" id="vk6_griss_381" style="display: none;"><center><div class="tt_g5"></div></center></div>
<div class="div_tt_5 war_BULLET warnone" id="vk6_381" style="display: none;"><center><div class="tt_5"></div></center></div>
<div class="war_BOOM">
<center>
<div class="tt_boom warnone" id="bullet6_381" style="display: none;"></div>
<div class="tt_boom2 warnone" id="bullet6_griss_381" style="display: none;"></div>
</center>
</div>
<div class="pety3_2_skill1 warnone" id="pet_skill1_381" style="position: absolute; z-index: 5; display: none;"></div><div class="pety3_2_skill2 warnone" id="pet_skill2_381" style="position: absolute; z-index: 5; display: none;"></div>
<div style="position: absolute; bottom: 0; width: 100%;">
<center>
<div class="dame" id="dame_user_381"></div>
<div class="sprite_9 warnone" id="boss_turn_381" style="display: none;"></div>
<div class="living living'.$_GET['boss'].'_skill'.$i.' warnone" id="skill1_381"></div>
<div id="boss_name_381" class="pulse animated"><span style="color: blue;" class="living_name">
SKILL '.$i.'
</span></div>
</center></div></div>';
}
exit;
}
if(isset($_GET['vukhi'])){
echo '<link rel="stylesheet" href="/screen/_GD.css"><link rel="stylesheet" href="/screen/animate.css"><style>body {background: #000; color:red; }</style><center>';
for($i = 1; $i <= 5; $i++){
echo '
<div class="war_BOSS" id="figure_boss_3" style="z-index: 0;">
<div class="chatball" style="z-index: 1;display: none; position: absolute;left: -40px;" id="boss_chatball_3"><div class="inchatball" id="boss_chat_3"></div></div>
<div class="div_'.$_GET['vk'].'_g'.$i.' war_BULLET warnone" id="vk3_griss_3" style="display: none;"><center><div class="'.$_GET['vk'].'_g'.$i.'"></div></center></div>
<div class="div_'.$_GET['vk'].'_'.$i.' war_BULLET warnone slideInDown2 animated infinite" id="vk3_3"><center><div class="'.$_GET['vk'].'_'.$i.'"></div></center></div>
<div class="war_BOOM">
<center>
<div class="'.$_GET['vk'].'_boom warnone" id="bullet3_3" style="animation-iteration-count: infinite; animation-play-state: running;"></div>
<div class="'.$_GET['vk'].'_boom2 warnone" id="bullet3_griss_3" style="display: none;"></div>
</center>
</div>

<div style="position: absolute; bottom: 0; width: 100%;">
<center>
<div class="dame" id="dame_user_3"></div>
<div class="sprite_9 warnone" id="boss_turn_3" style="display: none;"></div>
<div class="living living4_appear warnone" id="boss_appear_3" style="animation-play-state: paused; display: none;"></div>
<div class="living living4 " id="boss_3" style="position: relative; display: block;"></div><div class="living living4_skill1 warnone" id="skill1_3" style="display: none; animation-play-state: paused;"></div>
<div class="living living4_aw warnone" id="aw_3" style="display: none;"></div>
<div class="living living4_die warnone" id="die_3" style="display: none;"></div>
<div id="boss_name_3"><span style="color: blue;" class="living_name">Ảo Ảnh</span> <span class="living_name" style="color:green;" id="boss_hp_3">100%</span><br>
<font color="#000" class="living_name">F:<span id="boss_td_3">69&lt;74&lt;79</span></font></div>
</center></div></div>
<div class="war_BOSS" id="figure_boss_3" style="z-index: 0;">
<div class="chatball" style="z-index: 1;display: none; position: absolute;left: -40px;" id="boss_chatball_3"><div class="inchatball" id="boss_chat_3"></div></div>
<div class="div_'.$_GET['vk'].'_g'.$i.' war_BULLET warnone slideInDown2 animated infinite" id="vk3_griss_3"><center><div class="'.$_GET['vk'].'_g'.$i.'"></div></center></div>
<div class="div_'.$_GET['vk'].'_'.$i.' war_BULLET warnone" id="vk3_3" style="display: none;"><center><div class="'.$_GET['vk'].'_'.$i.'"></div></center></div>
<div class="war_BOOM">
<center>
<div class="'.$_GET['vk'].'_boom warnone" id="bullet3_3" style="display: none;"></div>
<div class="'.$_GET['vk'].'_boom2 warnone" id="bullet3_griss_3" style="animation-iteration-count: infinite; animation-play-state: running;"></div>
</center>
</div>

<div style="position: absolute; bottom: 0; width: 100%;">
<center>
<div class="dame" id="dame_user_3"></div>
<div class="sprite_9 warnone" id="boss_turn_3" style="display: none;"></div>
<div class="living living4_appear warnone" id="boss_appear_3" style="animation-play-state: paused; display: none;"></div>
<div class="living living4 " id="boss_3" style="position: relative; display: block;"></div><div class="living living4_skill1 warnone" id="skill1_3" style="display: none; animation-play-state: paused;"></div>
<div class="living living4_aw warnone" id="aw_3" style="display: none;"></div>
<div class="living living4_die warnone" id="die_3" style="display: none;"></div>
<div id="boss_name_3"><span style="color: blue;" class="living_name">Ảo Ảnh</span> <span class="living_name" style="color:green;" id="boss_hp_3">100%</span><br>
<font color="#000" class="living_name">F:<span id="boss_td_3">69&lt;74&lt;79</span></font></div>
</center></div></div>';
}
exit;
}
function demkytu1($kytu,$text){
$chars=str_split($text);
$count=0;
foreach($chars as &$char)
{
    if($char==$kytu)
    {
  $count++;
    }
}
return $count;
}
if(isset($_GET['css'])){
if(isset($_POST['submit'])){
$_POST['filex'] = str_replace('\\','/',$_POST['filex']);
$_POST['filex'] = str_replace('file:///D:/xampp/htdocs/gunny','http://localhost',$_POST['filex']);
$_POST['filex'] = str_replace('D:/xampp/htdocs/gunny','http://localhost',$_POST['filex']);
$img = getimagesize($_POST['filex']);
if($_POST['type'] == 1){
	$imgww = $img[0]-$_POST['w'];
	$step = $img[0]/$_POST['w']-1;
} else {
	$imgww = $img[0];
	$step = $img[0]/$_POST['w'];
}
if(!$_POST['name']){
	$count = demkytu1('/',$_POST['filex']);
	$ex = explode('/',$_POST['filex']);
	$_POST['name'] = str_replace('.png','',$ex[$count]);
	$auto = 1;
}
$style = ''.($_POST['bullet'] ? '@keyframes bullet {
50%{    filter: contrast(100%);
    -webkit-filter: contrast(100%);}
100%{    filter: contrast(200%);
    -webkit-filter: contrast(200%);}
}' : '@keyframes '.$_POST['name'].' { 
100% { background-position: '.($_POST['am'] ? '-' : '').''.$imgww.'px; }
}').'
.'.$_POST['name'].' {
background: url('.str_replace('http://localhost','',$_POST['filex']).');
width: '.($_POST['w'] ? $_POST['w'] : $img[0]).'px;
height: '.$img[1].'px;
animation: '.($_POST['bullet'] ? 'bullet' : $_POST['name']).' '.$_POST['time'].'s '.($_POST['bullet'] ? '' : 'steps('.round($step).')').' '.(!$_POST['type'] ? 'infinite' : $_POST['type']).';
-moz-animation: '.($_POST['bullet'] ? 'bullet' : $_POST['name']).' '.$_POST['time'].'s '.($_POST['bullet'] ? '' : 'steps('.round($step).')').' '.(!$_POST['type'] ? 'infinite' : $_POST['type']).';
-webkit-animation: '.($_POST['bullet'] ? 'bullet' : $_POST['name']).' '.$_POST['time'].'s '.($_POST['bullet'] ? '' : 'steps('.round($step).')').' '.(!$_POST['type'] ? 'infinite' : $_POST['type']).';
-o-animation: '.($_POST['bullet'] ? 'bullet' : $_POST['name']).' '.$_POST['time'].'s '.($_POST['bullet'] ? '' : 'steps('.round($step).')').' '.(!$_POST['type'] ? 'infinite' : $_POST['type']).';'.($_POST['type'] == 1 ? '
animation-fill-mode: forwards;' : '').''.($_POST['paused'] ? '
animation-play-state: paused;' : '').''.($_POST['center'] ? '
	position : relative;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);' : '').'
}';
$result = '
<textarea style="color:green; height: 500px; width:800px; float:right; background: antiquewhite;">
'.$style.'
</textarea>
';
echo '<style>
'.$style.'
</style>
<center><div class="'.$_POST['name'].'"></div></center>
';
}
echo '
<style>
input { margin: 3px; }
td { padding: 10px; }
</style>
<center>
<table>
<tbody>
<tr>
<td>
<form method="post">
<input type="text" name="name" placeholder="Tên Animation" value="'.($auto ? '' : $_POST['name']).'"><br>
<input type="text" name="filex" placeholder="Link Animation" value="'.$_POST['filex'].'"><br>
FRAME WIDTH <input type="text" name="w" style="width: 50px;" placeholder="W" value="'.$_POST['w'].'"> PX<br>
<input type="text" name="time" placeholder="Time (s)" value="'.$_POST['time'].'"><br>
<input type="text" name="type" placeholder="LOOP (forwards, infinite, int)" value="'.$_POST['type'].'">
<br>
<input type="checkbox" name="paused" value="1" id="checkbox" '.($_POST['paused'] ? 'checked' : '').'><label for="checkbox"> PAUSED</label>
<input type="checkbox" name="am" value="1" id="checkbox2" '.($_POST['am'] ? 'checked' : '').'><label for="checkbox2"> ÂM</label>
<input type="checkbox" name="bullet" value="1" id="checkbox3" '.($_POST['bullet'] ? 'checked' : '').'><label for="checkbox3"> BULLET</label>
<input type="checkbox" name="center" value="1" id="center" '.($_POST['center'] ? 'checked' : '').'><label for="center">CENTER >134px</label><br>
<input type="submit" name="submit" value="GET CSS">
</form>
</td>
<td>'.$result.'</td></tr></tbody></table>
</center>';
exit;
}
require '_GNPANEL/_connect.php';
require_once(FUNC);
if(isset($_GET['loai'])){
function listFolderFiles($dir,$sex){
	global $_con;
    $ffs = scandir($dir);

    unset($ffs[array_search('.', $ffs, true)]);
    unset($ffs[array_search('..', $ffs, true)]);

    // prevent empty ordered elements
    if (count($ffs) < 1)
        return;

    foreach($ffs as $ff){
		if(preg_match('/icon_1[.]png/',$ff)){
		$ex = explode('/',str_replace(ROOT,'',$dir.'/'.$ff));
		$idshop = $ex[5];
		$idshop = str_replace(folder($_GET['loai']),'',$ex[5]);
		if(!mysqli_num_rows(mysqli_query($_con,"SELECT * FROM `shop` WHERE `loai` = '".$_GET['loai']."' AND `id_shop` = $idshop")) && $idshop != 0)
        echo '<a href="#clgt"><img onclick="getdo(this);" DBS="'.$idshop.'" DBsex="'.$sex.'" src="'.str_replace(ROOT,'',$dir.'/'.$ff).'"></a>';
		}
        if(is_dir($dir.'/'.$ff)) listFolderFiles($dir.'/'.$ff,$sex);
    }
}
if($info['sex'] == 'm'){
listFolderFiles(ROOT.'/images/33equip/m/'.folder($_GET['loai']),1);
echo listFolderFiles(ROOT.'/images/33equip/f/'.folder($_GET['loai']),2);
} else {
listFolderFiles(ROOT.'/images/33equip/f/'.folder($_GET['loai']),2);
echo listFolderFiles(ROOT.'/images/33equip/m/'.folder($_GET['loai']),1);
}
exit;
}
if(isset($_GET['xoa'])){
mysqli_query($_con,"DELETE FROM `shop` ORDER BY `id` DESC LIMIT 1");
Header("Location: /cc.php");
}
echo '<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="/screen/_GD.css">
<script src="http://code.jquery.com/jquery-latest.js"></script>
</head><body style="background: #000; color:red; text-align:center; max-width:500px; margin: 0 auto;">';
?>
<script>
var bc = 0;;
setInterval(function(){
bc++;
$('.ngu2').hide();
$('.bieucam'+bc).show();

if(bc ==2)
	bc = 0;

},800);
</script>
<?php
if(isset($_POST['submit'])){
if(!mysqli_num_rows(mysqli_query($_con,"SELECT * FROM `shop` WHERE `id_shop` = '".$_POST['id_do']."' AND `loai` = '".$_POST['loai']."' AND `sex` = '".$_POST['sex']."'")) && $_POST['id_do'] != 0){
mysqli_query($_con,"INSERT INTO `shop` SET
`id_shop` = '".$_POST['id_do']."',
`gia` = '".$_POST[gia]."',
`loai` = '".$_POST[loai]."',
`tenvatpham` = '".$_POST[ten]."',
`sm` = '".$_POST[sm]."',
`hp` = '".$_POST[hp]."',
`phamchat` = '".$_POST['phamchat']."',
`sex` = '".$_POST['sex']."',
`hutmau` = '".$_POST['hutmau']."',
`miennhiem` = '".$_POST['miennhiem']."',
`nhanhnhen` = '".$_POST['nhanh']."',
`baokich` = '".$_POST['bao']."'") or die(mysqli_error($_con));
$id = mysqli_insert_id($_con);
$result .= avatar($id,1);
$result .= '<div><a href="?xoa">XÓA ĐỒ NÀY NẾU LỖi</a></div>';
} else {
$result = '<h1>ĐÃ TỒN TẠI !!!</h1>';
}
}       
?>

<script>
$(function(){
$('#menu').load('/cc.php?loai=<?php echo $_POST['loai'] ? $_POST['loai'] : 'quanao'; ?>');
});
function getdo(obj){
$('input[name=id_do]').val($(obj).attr('dbs'));
$('select[name=sex]').val($(obj).attr('dbsex'));
$('select[name=phamchat]').val('0');
}
function myphamchat(obj){
	var chon = $(obj).val();
	if(chon >0)
	$('input[name=gia]').val('0');
	$('input[name=sm]').val(Number($('input[name=sm]').attr('ndefault'))*(3+(chon-1)));
	$('input[name=hp]').val(Number($('input[name=hp]').attr('ndefault'))*(3+(chon-1)));
	$('input[name=hutmau]').val(Number($('input[name=hutmau]').attr('ndefault'))*(2+(chon-1)));
	$('input[name=bao]').val(Number($('input[name=bao]').attr('ndefault'))*(2+(chon-1)));
	$('input[name=nhanh]').val(Number($('input[name=nhanh]').attr('ndefault'))*(2+(chon-1)));
	$('input[name=miennhiem]').val(Number($('input[name=miennhiem]').attr('ndefault'))*(2+(chon-1)));
}
function myselect(obj){
	var chon = $(obj).val();
	$('#menu').html('');
	$('#menu').load('/cc.php?loai='+chon);
	$('select[name=phamchat]').val('0');
	if(chon == 'quanao'){
	$('input[name=gia]').val(150).attr('ndefault',150);
	$('input[name=sm]').val('800').attr('ndefault',800);
	$('input[name=hp]').val('1000').attr('ndefault',1000);
	$('input[name=hutmau]').val('10').attr('ndefault',10);
	$('input[name=bao]').val('10').attr('ndefault',10);
	}
	if(chon == 'toc')
		$('input[name=gia]').val(130).attr('ndefault',130);
	if(chon == 'bieucam')
		$('input[name=gia]').val(75).attr('ndefault',75);
	if(chon == 'non')
		$('input[name=gia]').val(150).attr('ndefault',150);
		if(chon == 'trangdiem')
		$('input[name=gia]').val(30).attr('ndefault',30);
		if(chon == 'kinh')
		$('input[name=gia]').val(125).attr('ndefault',125);
		if(chon == 'non')
		$('input[name=gia]').val(300).attr('ndefault',300);
	if(chon == 'toc' || chon == 'bieucam' || chon == 'trangdiem'){
	$('input[name=sm]').val('300').attr('ndefault',300);
	$('input[name=hp]').val('300').attr('ndefault',300);
	$('input[name=hutmau]').val('10').attr('ndefault',10);
	$('input[name=bao]').val('10').attr('ndefault',10);
	}
	if(chon == 'non' || chon == 'kinh'){
	$('input[name=sm]').val('600').attr('ndefault',600);
	$('input[name=hp]').val('800').attr('ndefault',800);
	$('input[name=hutmau]').val('10').attr('ndefault',10);
	$('input[name=bao]').val('10').attr('ndefault',10);
	}
	if(chon == 'setquanao'){
	$('input[name=sm]').val('800').attr('ndefault',800);
	$('input[name=hp]').val('2000').attr('ndefault',2000);
	$('input[name=hutmau]').val('10').attr('ndefault',10);
	$('input[name=bao]').val('10').attr('ndefault',10);
	}
}
</script>

<?php
?>
<style>
.FORM { margin: 5px;}
</style>
<h1>THÊM ĐỒ VÀO SHOP</h1>
<div id="menu" style="    height: 300px;
    overflow: auto; border: 1px solid gold;"></div>
	<?php echo $result; ?>
<form method="post" id="clgt">
<div class="FORM">LOẠI: 
<select name="loai" onchange="myselect(this);">
<option value="quanao" <?php echo ($_POST['loai'] == 'quanao' ? 'selected' : ''); ?>>QUẦN ÁO</option>
<option value="toc" <?php echo ($_POST['loai'] == 'toc' ? 'selected' : ''); ?>>TÓC</option>
<option value="bieucam" <?php echo ($_POST['loai'] == 'bieucam' ? 'selected' : ''); ?>>BIỂU CẢM</option>
<option value="non" <?php echo ($_POST['loai'] == 'non' ? 'selected' : ''); ?>>NÓN</option>
<option value="kinh" <?php echo ($_POST['loai'] == 'kinh' ? 'selected' : ''); ?>>KÍNH</option>
<option value="setquanao" <?php echo ($_POST['loai'] == 'setquanao' ? 'selected' : ''); ?>>SET QUẦN ÁO</option>
<option value="trangdiem" <?php echo ($_POST['loai'] == 'trangdiem' ? 'selected' : ''); ?>>TRANG ĐIỂM</option>
</select>
<a href="/cc.php">RELOAD</a>
</div>
<div class="FORM">TÊN: <input type="text" placeholder="TÊN VẬT PHẨM" name="ten"></div>
<div class="FORM">
PHẨM CHẤT: 
<select name="phamchat" onchange="myphamchat(this)">
<option class="phamchat" value="0">0 SAO</option>
<option class="phamchat" value="1">1 SAO</option>
<option class="phamchat" value="2">2 SAO</option>
</select></div>
<div class="FORM">GIỚI TÍNH: <select name="sex"><option class="sex" value="1">NAM</option><option class="sex" value="2">NỮ</option><option class="sex" value="">THỤ</option></select></div>
<div class="FORM">ID ĐỒ: <input type="text" placeholder="ID ĐỒ" name="id_do"></div>
<div class="FORM">GIÁ: <input type="text" placeholder="GIÁ" name="gia" value="150"></div>
<div class="FORM">SM: <input type="text" placeholder="sm" name="sm" value="800" ndefault="800"></div>
<div class="FORM">HP: <input type="text" placeholder="hp" name="hp" value="1000" ndefault="1000"></div>
<div class="FORM">HÚT MÁU: <input type="text" placeholder="DIANA" name="hutmau" value="10" ndefault="10"></div>
<div class="FORM">BẠO KÍCH: <input type="text" placeholder="BẠO" name="bao" value="10" ndefault="10"></div>
<div class="FORM">MIỄN NHIỄM: <input style="background: red;" type="text" placeholder="MIỄN NHIỄM" name="miennhiem" value="0" ndefault="0"></div>
<div class="FORM">NHANH NHẸN: <input style="background: red;" type="text" placeholder="NHANH" name="nhanh" value="0" ndefault="0"></div>
<input name="submit" type="submit" value="HÚT THÊM 500 MÁU !">
</form>