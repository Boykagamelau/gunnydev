
function cuonghoavk(id){
	var bmt = $('#bmtinput').is(':checked');
    $('#load_do').show();
	$('#btch').attr('href','javascript:void(0);');
			$.ajax({
			url : '/ajax/thongtindo.php?cuonghoavk',
			type : 'POST',
			data: {id : id, bmt : bmt},
			success: function(result){
			$('#load_do').hide();
			getData = $.parseJSON(result);
			if(!getData.error){
				$('#ttnv').slideUp();
				if(getData.win >0)
					neww('Cường hóa thành công lên +'+getData.win);
				else
					neww('Cường hoá thất bại !');
			    $('#btch').attr('href','javascript:cuonghoavk('+id+');');
				$('#tip3').hide();
	$('#tip4').show();
				$('#thongtincuonghoa').html(getData.ttchx).fadeIn();
				$('#dch').html(getData.dch);
				$('#dch_can').html(getData.dch_can);
				$('#bmt').html(getData.bmt);
				$('#tltc_all').html(getData.tltc_all);
				$('#tltc_them').html(getData.tltc_them);
				$('#bmm').html(getData.bmm);
				if(getData.cap ==6 || getData.cap ==9 || getData.cap ==12)
				$('#avatarch').attr('src',getData.img);
				 if(getData.cap >=5)
				$('#bmtinput').show();
				if(getData.cap ==15)
				$('#cuonghoa').html('<div class="clearfix"></div><b>ĐÃ ĐẠT CẤP TỐI ĐA</b>');
				if(getData.cap <5 || getData.cap ==15)
				$('#bmtinput').hide();
				if(getData.dch < getData.dch_can || getData.bmt <2)
				neww('Không đủ tài nguyên');
			    update_chiso();
				update_avatar();
			}  
		}
	});
}
function cuonghoa(id){
	var bmt = $('#bmtinput').is(':checked');
    $('#load_do').show();
	$('#btch').attr('href','javascript:void(0);');
			$.ajax({
			url : '/ajax/thongtindo.php?cuonghoa',
			type : 'POST',
			data: {id : id, bmt : bmt},
			success: function(result){
			$('#load_do').hide();
			getData = $.parseJSON(result);
			if(!getData.error){
				$('#ttnv').slideUp();
				if(getData.win >0)
					neww('Cường hóa thành công lên +'+getData.win);
				else
					neww('Cường hoá thất bại !');
			    $('#btch').attr('href','javascript:cuonghoa('+id+');');
				$('#thongtincuonghoa').html(getData.ttch).fadeIn();
				$('#dch').html(getData.dch);
				$('#dch_can').html(getData.dch_can);
				$('#bmt').html(getData.bmt);
				$('#tltc_goc').html(getData.tltc_goc);
				$('#tltc_all').html(getData.tltc_all);
				 if(getData.cap >=5)
				$('#bmtinput').show();
				if(getData.cap ==15)
				neww('Không đủ tài nguyên');
				if(getData.cap <5 || getData.cap ==15)
				$('#bmtinput').hide();
			    update_chiso();
			} 
		}
	});
}
function weapon_bag(id){
			$.ajax({
			url : '/ajax/thongtindo.php?weapon_bag',
			type : 'POST',
			data: {id : id},
			success: function(result){
				getData = $.parseJSON(result);
				if(!getData.error){
$('#ttnv').slideUp();
update_avatar();
update_chiso();
if(getData.ok == 1){
$('#mac_vk_8').html('[Tháo]');
neww('Trang bị thành công');
} else {
	$('#mac_vk_8').html('[Mặc]');
neww('Dỡ trang bị thành công');
}
				} else {
					neww(getData.error);
				}
			}
		});
}
function weapon_bagvk(id){
			$.ajax({
			url : '/ajax/thongtindo.php?weapon_bagvk',
			type : 'POST',
			data: {id : id},
			success: function(result){
				getData = $.parseJSON(result);
				if(!getData.error){
				$('#tip2_2').hide();
				$('#tip2_3').show();
$('#ttnv').slideUp();
update_chiso();
giatrimac = $('#mac_vk_6').html();
if(giatrimac == '[Mặc]'){
	$('#mac_vk_6').html('[Tháo]');
neww('Trang bị thành công !');
} else {
	neww('Dỡ trang bị thành công !');
	$('#mac_vk_6').html('[Mặc]');
}
				} else {
				neww(getData.error);
				}
			}
		});
}

function bandovk(id,user){
$('#vk').hide();
	$('#load_do').fadeIn();
	var vitri = $('#load_do').offset().top;
	vitri = vitri-15;
	$('html,body').stop().animate({scrollTop:vitri},500);
	$.ajax({
url: '/ajax/thongtindo.php?bandovk',
type: 'POST',
data: {id : id},
success: function(result){
	$('#load_do').hide();
			var getData = $.parseJSON(result);
			if(!getData.error){
				$('#bando_vk').attr('src',getData.img);
				$('#coban_vk').attr('href','javascript:coban_vk('+id+')');
				$('#khongban_vk').attr('href','javascript:khongban_vk('+id+','+user+')');
				update_chiso();
				$('#bandovk').fadeIn();
			} 
}
});
}

function bando(id,user){
$('#do').hide();
	$('#load_do').fadeIn();
	var vitri = $('#load_do').offset().top;
	vitri = vitri-15;
	$('html,body').stop().animate({scrollTop:vitri},500);
	$.ajax({
url: '/ajax/thongtindo.php?bando',
type: 'POST',
data: {id : id},
success: function(result){
	$('#load_do').hide();
			var getData = $.parseJSON(result);
			if(!getData.error){
				$('#tienban_do').html(getData.tien);
				$('#bando_do').attr('src',getData.img);
				$('#coban_do').attr('href','javascript:coban_do('+id+')');
				$('#khongban_do').attr('href','javascript:khongban_do('+id+','+user+')');
				update_chiso();
				update_avatar();
				$('#bando').fadeIn();
			} 
}
});
}

function khongban_vk(id,user){
$('#bandovk').hide();
thongtindo(id,'bagvk',user);
}
function khongban_do(id,user){
$('#bando').hide();
thongtindo(id,'bag',user);
}
function coban_vk(id){
	$.ajax({
url: '/ajax/thongtindo.php?bandovksubmit',
type: 'POST',
data: {id : id},
success: function(result){
			var getData = $.parseJSON(result);
			if(!getData.error){
				$('#vkthu'+id).hide();
				update_avatar();
				update_money();
				update_chiso();
				$('#bandovk').fadeOut();
			} 
}
});
}
function coban_do(id){
	$.ajax({
url: '/ajax/thongtindo.php?bandosubmit',
type: 'POST',
data: {id : id},
success: function(result){
			var getData = $.parseJSON(result);
			if(!getData.error){
				$('#dothu'+id).hide();
				update_avatar();
				update_money();
				update_chiso();
				$('#bando').fadeOut();
			} 
}
});
}