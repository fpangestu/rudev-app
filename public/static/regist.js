function loadPage(id,text){
	$('#'+id).html( "Loading..");
	$('#'+id).load( 'load.php?'+text);
}

var passMatch = false ;
function ch_pass(){
	var p1 = $('#f_Password').val();
	var p2 = $('#f_Password1').val();
	if(p1!=p2){
		passMatch = false ;
		$('#passwar').html('<a class="ti-alert"> Password Not Matched</a>');
	}else{
		passMatch = true ;
		$('#passwar').html('');
	}
	
}



function send(){
	if($('#f_Name').val()==""){alert("Name must be filled in"); return ;}
	if($('#f_Institution').val()==""){alert("Institution must be filled in"); return ;}
	if($('#f_Occupation').val()==""){alert("Occupation must be filled in"); return ;}
	if($('#f_Address').val()==""){alert("Address must be filled in"); return ;}
	if($('#f_mail').val()==""){alert("E-Mail must be filled in"); return ;}
	if($('#f_Password').val()==""){alert("Password must be filled in"); return ;}
	if($('#f_Title').val()==""){alert("Title must be filled in"); return ;}
	if($('#f_Abstract').val()==""){alert("Abstract must be filled in"); return ;}

	
	if(passMatch){
			$('#sendingNoty').html('Sending...');
			$.ajax({
				url: 'load.php?q=586bdjfyy782323t8',
				method: 'POST',
				type: 'POST',
				data: $('#Form_Reg').serialize(),
				proccessData: false,
				success:function(result){
						$('#formRegis2').html(result);
				}
			});	
	}else {alert("Password Not Matched"); return ;}
}

function send2(){
	if($('#f_Name').val()==""){alert("Name must be filled in"); return ;}
	if($('#f_Institution').val()==""){alert("Institution must be filled in"); return ;}
	if($('#f_Occupation').val()==""){alert("Occupation must be filled in"); return ;}
	if($('#f_Address').val()==""){alert("Address must be filled in"); return ;}
	if($('#f_mail').val()==""){alert("E-Mail must be filled in"); return ;}
	if($('#f_Password').val()==""){alert("Password must be filled in"); return ;}

	
	if(passMatch){
			$('#sendingNoty').html('Sending...');
			$.ajax({
				url: 'load.php?q=586bdjfyy782323t8',
				method: 'POST',
				type: 'POST',
				data: $('#Form_Reg').serialize(),
				proccessData: false,
				success:function(result){
						$('#formRegis2').html(result);
				}
			});	
	}else {alert("Password Not Matched"); return ;}
}

function uploadfoto(){
		var formData = new FormData($('#f_uploadfoto')[0]);
		$.ajax({
			   url: 'load.php?q=gc86rtfyegwfcwegf',
			   data: formData,
			   async: false,
			   contentType: false,
			   processData: false,
			   cache: false,
			   type: 'POST',
			   success: function(data)
			   {
					location.reload();
					//alert(data);
					//$( "#form_uploadimage" ).load( "load.php?q=46546dfnuhdfh" );
				}
		 }) ;
}

function uploadPayment(){
		var formData = new FormData($('#Payment')[0]);
		$.ajax({
			   url: 'load.php?q=gc86rpaymtfyegwfcwegf',
			   data: formData,
			   async: false,
			   contentType: false,
			   processData: false,
			   cache: false,
			   type: 'POST',
			   success: function(data)
			   {
					location.reload();
					//alert(data);
					//$( "#form_uploadimage" ).load( "load.php?q=46546dfnuhdfh" );
				}
		 }) ;
}

function updateAbts(){
		$('#updateAbst').val('Sending...');
			$.ajax({
				url: 'load.php?q=updanfuseh453',
				method: 'POST',
				type: 'POST',
				data: $('#updateAbstrack').serialize(),
				proccessData: false,
				success:function(result){
					//alert(result)
						location.reload();
				}
			});	
}

function Tampilkan(sts,id){
			$.ajax({
				url: 'load.php?q=srgsr68768er&id='+id+'&sts='+sts,
				method: 'POST',
				type: 'POST',
				proccessData: false,
				success:function(result){
					//alert(result)
					location.reload();
				}
			});	
}

function TampilkanUndangan(sts,id){
			$.ajax({
				url: 'load.php?q=srgsr68768eru&id='+id+'&sts='+sts,
				method: 'POST',
				type: 'POST',
				proccessData: false,
				success:function(result){
					//alert(result)
					location.reload();
				}
			});	
}

function verification(sts,id){
			$.ajax({
				url: 'load.php?q=versrgsr68768eru&id='+id+'&sts='+sts,
				method: 'POST',
				type: 'POST',
				proccessData: false,
				success:function(result){
					//alert(result)
					location.reload();
				}
			});	
}