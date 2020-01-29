$(document).ready(function(){
	GTcntry();
	var ysys = 0;
	$('#clckNoSub').click(function(){
		$('#JASSHPart1Header').hide();
		$('#JASSHPart2Header').show();
		$('#zeroPartSumission').hide();
		$('#firstPartSubmission').show();
		$('#JASSHsubFooter1').show();
		$('#uponClckIfno').show();
		ysys = 0;
	});
	$('#clckYesSub').click(function(){
		$('#JASSHPart1Header').hide();
		$('#JASSHPart2Header').show();
		$('#zeroPartSumission').hide();
		$('#firstPartSubmission').show();
		$('#JASSHsubFooter1').show();
		$('#uponClckIfno').show();
		ysys = 1;
	});
	$('#clckYesSub2x').click(function(){
		$('#sixthPartSumission').hide();
		$('#secondPartSumission').show();
		$('#JASSHsubFooter2').show();
		ysys = 1;
	});
	$('.CancelsubmitNWjourmnBase').click(function(){
		$('#fifthPartSumission').hide();
		$('#fourthPartSumission').hide();
		$('#thirdPartSumission').hide();
		$('#sixthPartSumission').hide();
		$('#secondPartSumission').hide();
		$('#firstPartSubmission').hide();
		$('#JASSHsubFooter3').hide();
		$('#JASSHsubFooter2').hide();
		$('#JASSHsubFooter1').hide();
		$('#uponClckIfno').hide();
		$('#JASSHPart4Header').hide();
		$('#JASSHsubFooter1').hide();
		$('#JASSHPart3Header').hide();
		$('#JASSHPart2Header').hide();
		$('#JASSHPart1Header').show();
		$('#zeroPartSumission').show();
	});
	$('#submitNWjourmn').click(function(){
		document.getElementById("submitNWjourmn").disabled = true;
		if(docxXx == 0){
			alert("ERROR: No file attached!");
		}else{
			$('#submitNWjourmn').html("Please wait...");
			var data = $('#journalFFsb-form').serialize();
			var err = 0;
			var titleXx = $('textarea[name=titleXx]');
			var areaXxF = $('textarea[name=areaXxF]');
			var abstractXx = $('textarea[name=abstractXx]');
			var keywordsXx = $('textarea[name=keywordsXx]');
			if(titleXx.val() == ""){
				$('#titleXx').css('border','1px solid red');err = 1;
			}else{
				$('#titleXx').css('border','1px solid #aeaeae');
			}
			if(areaXxF.val() == ""){
				$('#areaXxF').css('border','1px solid red');err = 1;
			}else{
				$('#areaXxF').css('border','1px solid #aeaeae');
			}
			if(abstractXx.val() == ""){
				$('#abstractXx').css('border','1px solid red');err = 1;
			}else{
				$('#abstractXx').css('border','1px solid #aeaeae');
			}
			if(keywordsXx.val() == ""){
				$('#keywordsXx').css('border','1px solid red');err = 1;
			}else{
				$('#keywordsXx').css('border','1px solid #aeaeae');
			}
			if(err !== 1){
				$.ajax({
					type:'ajax',
					method:'POST',
					url:'strt/sbmitThsJournalxXx',
					data:data,
					async:true,
					dataType:'json',
					success:function(data){
						if(data.success){
							$('#journalFFsb-form')[0].reset();
							$('.bs-ADdMyJJournal-modal-lg').hide();
							$('#submitNWjourmnBase').html('<button id="submitNWjourmn" type="button" class="btn btn-success" style="padding:2px;padding-right:10px;padding-left:10px;">Submit</button>');
							document.getElementById("submitNWjourmn").disabled = false;
							$('#submitNWjourmn').html("Submit");
							showMyJournalxNNx();
							$('#duscxx').html('<font style="color:#aeaeae">No file</font>');
							$('#rqUireF').hide();
						}
						//Restore Scroll
						var scroll = $(window).scrollTop();
						$("html").scrollTop(scroll);
					},error:function(data){console.log(data);}
				});
			}else{
				alert("ERROR: Please fill the field(s) marked in red");
				$('#rqUireF').show();
				$('#submitNWjourmn').html("Submit");
			}
		}
	});

	$('#anothrUes').click(function(){
		$('#fifthPartSumission').hide();
		$('#fourthPartSumission').show();
		$('#JASSHsubFooter3').show();
	});
	$('.faff').click(function(){
		$('.bs-submissionDataFinal-modal-lg').hide();
		$('#JASSHPart1Header').show();
		$('#JASSHPart2Header').hide();
		$('#zeroPartSumission').show();
		$('#firstPartSubmission').hide();
		$('#fifthPartSumission').hide();
		$('#sixthPartSumission').hide();
		$('#JASSHsubFooter1').hide();
		$('#JASSHsubFooter2').hide();
		$('#JASSHsubFooter3').hide();
		$('#submitNWjourmn').html("Submit Article");
		document.getElementById("submitNWjourmn").disabled = false;
		$('#uponClckIfno').hide();
		$('#secondPartSumission').hide();
		$('#formRegister_ff2')[0].reset();
		$('#PWjasshff2').html('<button class="btn btn-success proceedPart101" type="button" style="padding:2px;padding-right:10px;padding-left:10px;background:#679645;color:white;">Proceed</button>');
	});
	var holdWidth = $(window).width();
    $(window).on('resize', function () {
        newPercentage = (($(window).width() / holdWidth) * 140) + "%";
        $("body").css("font-size", newPercentage);
        $("#resssszz").css("font-size", newPercentage);
    });
	
	var xV = 0, xVV = 0;
	$('#accpetforSubmissionAR').click(function(){
		$('#nx_RegConfEmail').css('border','1px solid #aeaeae');
		$('#nx_RegCountry').css("border","1px solid #aeaeae");
		$('#nx_RegGend').css("border","1px solid #aeaeae");
		$('#nx_RegConfEmail').css('border','1px solid #aeaeae');
		$('#nx_RegEmail').css('border','1px solid #aeaeae');
		$('#nx_RegLastName').css('border','1px solid #aeaeae');
		$('#nx_RegMiddleName').css('border','1px solid #aeaeae');
		$('#nx_RegFirstName').css('border','1px solid #aeaeae');
		$('#nx_RegUsername').css('border','1px solid #aeaeae');
		$('#nx_RegORCIDiD').css('border','1px solid #aeaeae');
		$('#nx_RegPassW').css('border','1px solid #aeaeae');
		$('#nx_ReTypeRegPassW').css('border','1px solid #aeaeae');
		$('#nx_RegPassW').css('border','1px solid #aeaeae');
		$('#nx_ReTypeRegPassW').css('border','1px solid #aeaeae');
		$('#passFFxx').css('background','#ffff');
		$('#passFFxx2').css('background','#ffff');
		xV = 0;xVV = 0;
		$('#firstPartSubmission').hide();
		$('#uponClckIfno').hide();
		$('#JASSHPart2Header').hide();
		$('#JASSHsubFooter1').hide();
		if(ysys == 1){
			$('#JASSHPart3Header').show();
			$('#JASSHsubFooter2').show();
			$('#secondPartSumission').show();
		}else{
			$('#JASSHPart4Header').show();
			$('#sixthPartSumission').show();
		}
	});
	var $root = $('html, body');
	$('a[href^="#announcements"]').click(function () {
	    $root.animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
	});
	$('a[href^="#RegisterCont"]').click(function () {
	    $root.animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
	});
	$('a[href^="#LoginContent"]').click(function () {
	    $root.animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
	});
	$('a[href^="#AboutUs"]').click(function () {
	    $root.animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
	});
	$('a[href^="#topArea"]').click(function () {
	    $root.animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
	});
	function test(){
		var xpxrdrtng = $('input[name=rdrectng]');
		(Number(xpxrdrtng.val()) == -101) ? window.location.href = "fxwlx" : "";
	}
	function test2(){
		var xpxrdrtng = $('input[name=rdrectng]');
		(Number(xpxrdrtng.val()) == -102) ? window.location.href = "fxRglrData" : "";
	}
	function test3(){
		var xpxrdrtng = $('input[name=rdrectng]');
		(Number(xpxrdrtng.val()) == -103) ? window.location.href = "fxReviewrDtaXXd" : "";
	}
	function test4(){
		var xpxrdrtng = $('input[name=rdrectng]');
		(Number(xpxrdrtng.val()) == -104) ? window.location.href = "fxEdtrDtaXXd" : "";
	}

	function GTcntry(){
		$.ajax({
			type:'ajax',
			url:'../Strt/getCountry',
			async:true,
			dataType:'json',
			success:function(data){
				var html = '',html2 = '';
				var i;
				html+='<option name="nx_RegCountry" value="">Select Country</option>';
				html2+='<option name="RegCountry" value="">Select Country</option>';
				for(i = 0;i < data.length;i++){
					html+='<option name="nx_RegCountry" value="'+data[i].countryid+'">'+data[i].country_name+'</option>';
					html2+='<option name="RegCountry" value="'+data[i].countryid+'">'+data[i].country_name+' &nbsp&nbsp&nbsp&nbsp +'+data[i].country_code+'</option>';
				}
				$('#nx_RegCountry').html(html);
				$('#RegCountry').html(html2);
			},error:function(data){console.log(data);}
		});
		$('#handWarnfirstUserN').hide();
	}
	$('#passFFxx').click(function(){
		var nx_RegPassW = $('input[name=nx_RegPassW]');
		if(nx_RegPassW.val() !== ""){
			xV++;
			if(xV%2 == 0){
				$('#passFFxx').css('background','#ffff');
			}else{
				$('#passFFxx').css('background','#d16655');
			}
			var x = document.getElementById("nx_RegPassW");
			if(x.type === "password"){
				x.type = "text";
			}else{
				x.type = "password";
			}
		}
	});
	$('#passFFxx2').click(function(){
		var nx_ReTypeRegPassW = $('input[name=nx_ReTypeRegPassW]');
		if(nx_ReTypeRegPassW.val() !== ""){
			xVV++;
			if(xVV%2 == 0){
				$('#passFFxx2').css('background','#ffff');
			}else{
				$('#passFFxx2').css('background','#d16655');
			}
			var x = document.getElementById("nx_ReTypeRegPassW");
			if(x.type === "password"){
				x.type = "text";
			}else{
				x.type = "password";
			}
		}
	});
	$('#PWjasshff2').on('click','.proceedPart101',function(){
		$('#PWjasshff2').html("Please wait...");
		var err = 0;
		var data = $('#formRegister_ff2').serialize();
		var RegPassW = $('input[name=nx_RegPassW]');
		var ReTypeRegPassW = $('input[name=nx_ReTypeRegPassW]');
		var nx_RegORCIDiD = $('input[name=nx_RegORCIDiD]');
		var nx_RegUsername = $('input[name=nx_RegUsername]');
		var nx_RegFirstName = $('input[name=nx_RegFirstName]');
		var nx_RegMiddleName = $('input[name=nx_RegMiddleName]');
		var nx_RegLastName = $('input[name=nx_RegLastName]');
		var nx_RegEmail = $('input[name=nx_RegEmail]');
		var nx_RegConfEmail = $('input[name=nx_RegConfEmail]');
		var nx_RegGend = $('#nx_RegGend').find(":selected").text();
		var nx_RegCountry = $('#nx_RegCountry').find(":selected").text();
		if(nx_RegConfEmail.val() == ""){
			err = 1;
			$('#nx_RegConfEmail').css('border','1px solid red');
		}else{
			$('#nx_RegConfEmail').css('border','1px solid #aeaeae');
		}
		if(nx_RegCountry == "Select Country"){
			err = 1;
			$('#nx_RegCountry').css("border","1px solid red");
		}else{
			$('#nx_RegCountry').css("border","1px solid #aeaeae");
		}
		if(nx_RegGend == "Select Gender"){
			err = 1;
			$('#nx_RegGend').css("border","1px solid red");
		}else{
			$('#nx_RegGend').css("border","1px solid #aeaeae");
		}
		if(nx_RegConfEmail.val() == ""){
			err = 1;
			$('#nx_RegConfEmail').css('border','1px solid red');
		}else{
			$('#nx_RegConfEmail').css('border','1px solid #aeaeae');
		}
		if(nx_RegEmail.val() == ""){
			err = 1;
			$('#nx_RegEmail').css('border','1px solid red');
		}else{
			$('#nx_RegEmail').css('border','1px solid #aeaeae');
		}
		if(nx_RegLastName.val() == ""){
			err = 1;
			$('#nx_RegLastName').css('border','1px solid red');
		}else{
			$('#nx_RegLastName').css('border','1px solid #aeaeae');
		}
		if(nx_RegMiddleName.val() == ""){
			err = 1;
			$('#nx_RegMiddleName').css('border','1px solid red');
		}else{
			$('#nx_RegMiddleName').css('border','1px solid #aeaeae');
		}
		if(nx_RegFirstName.val() == ""){
			err = 1;
			$('#nx_RegFirstName').css('border','1px solid red');
		}else{
			$('#nx_RegFirstName').css('border','1px solid #aeaeae');
		}
		if(nx_RegUsername.val() == ""){
			err = 1;
			$('#nx_RegUsername').css('border','1px solid red');
		}else{
			$('#nx_RegUsername').css('border','1px solid #aeaeae');
		}
		if(nx_RegORCIDiD.val() == ""){
			err = 1;
			$('#nx_RegORCIDiD').css('border','1px solid red');
		}else{
			$('#nx_RegORCIDiD').css('border','1px solid #aeaeae');
		}
		if(RegPassW.val() !== ReTypeRegPassW.val()){
			err = 1;
			$('#nx_RegPassW').css('border','1px solid red');
			$('#nx_ReTypeRegPassW').css('border','1px solid red');
		}else{
			$('#nx_RegPassW').css('border','1px solid #aeaeae');
			$('#nx_ReTypeRegPassW').css('border','1px solid #aeaeae');
		}
		if(RegPassW.val() == ""){
			err = 1;
			$('#nx_RegPassW').css('border','1px solid red');
		}else{
			$('#nx_RegPassW').css('border','1px solid #aeaeae');
		}
		if(ReTypeRegPassW.val() == ""){
			err = 1;
			$('#nx_ReTypeRegPassW').css('border','1px solid red');
		}else{
			$('#nx_ReTypeRegPassW').css('border','1px solid #aeaeae');
		}

		if(err == 0){
			$.ajax({
				type:'ajax',
				method:'POST',
				url:'strt/sbmitRegFrm2',
				data:data,
				async:true,
				dataType:'json',
				success:function(data){
					if(data.success){
						$('#formRegister_ff2')[0].reset();
						alert("SUCCESS: Your account has been successfully submitted");
						$('#secondPartSumission').hide();
						$('#thirdPartSumission').show();
						$('#JASSHsubFooter2').hide();
					}else{
						alert("ERROR: Unsuccessfull Entry...");
						var xxp = '';
						xxp += '<button class="btn btn-success proceedPart101" type="button" style="padding:2px;padding-right:10px;padding-left:10px;background:#679645;color:white;">Proceed</button>';
						$('#PWjasshff2').html(xxp);
					}
				},error:function(data){console.log(data);}
			});
		}else{
			alert('ERROR: Please fill field(s) marked in red.');
			var xxp1 = '';
			xxp1 += '<button class="btn btn-success proceedPart101" type="button" style="padding:2px;padding-right:10px;padding-left:10px;background:#679645;color:white;">Proceed</button>';
			$('#PWjasshff2').html(xxp1);
		}
	});
	$('#cont10you').click(function(){
		$('#thirdPartSumission').hide();
		$('#fourthPartSumission').show();
		$('#JASSHsubFooter3').show();
	});
	
	$(document).on('change','#file',function(){
		var err = 0;
		var fileSize = 0;
		var property = document.getElementById("file").files[0];
		var image_name = property.name;
		var file_extension = image_name.split('.').pop().toLowerCase();
		if(jQuery.inArray(file_extension,['doc']) == -1){
			if(jQuery.inArray(file_extension,['docs']) == -1){
				if(jQuery.inArray(file_extension,['docx']) == -1){
					$('#uploadfile')[0].reset();
					alert("ERROR: We accept Microsoft Word document format only...");
				}
			}
		}
		fileSize = Number(document.getElementById("file").files[0].size);
		if(fileSize > 200000000){
			alert("ERROR: File was too large...");
			$('#uploadfile')[0].reset();
		}
	});

	$('#uploadfile').on('submit',function(e){
		e.preventDefault();
		$(this).ajaxSubmit({
			beforeSend:function(){
				$('#psw1x1').html("<i>File is uploading, please wait...</i>");
				$('#prog').attr('value','0');
				$('#percentageCMP').html('0%');
			},uploadProgress:function(event, position, total, percentageComplete){
				$('#prog').attr('value',percentageComplete);
				$('#percentageCMP').html(percentageComplete+'%');
				if(percentageComplete == 100){
					document.getElementById("submitNWjourmn").disabled = false;
				}
			},success:function(data){
				$('#psw1x1').html("<font color='green'>File uploaded successfully...</font>");
				callDocs();
			},error:function(){
				alert("ERROR: You can change the name of the file, please contact the Administrator if it still doens't work.");
			}
		});
	});

	function callDocs(){
		$.ajax({
			type:'ajax',
			url:'strt/getNameofFile',
			async:true,
			dataType:'json',
			success:function(data){
				console.log(data);
				if(data[0].filename !== null){
					$('#swuploadfile')[0].reset();
					var html = '';
					html += ''+data[0].filename+'';
					$('#duscxx').html(html);
					$('#duscxx').css('color','black');
				}
			},error:function(data){console.log(data);}
		});
	}
	$('#addThsAut').click(function(){
		var data = $('#form-SaveAuthor').serialize();
		$.ajax({
			type:'ajax',
			method:'POST',
			url:'strt/sbmitNewAuthor',
			data:data,
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					$('#form-SaveAuthor')[0].reset();
					$('.bs-ADdAut0hor-modal-sm').hide();
					showAuthojrxxs();
				}
			},error:function(data){console.log(data);}
		});
	});

	function showAuthojrxxs(){
		$.ajax({
			type:'ajax',
			url:'strt/getlslsaauthor',
			async:true,
			dataType:'json',
			success:function(data){
				var html = '';
				var i;
				for(i = 0;i<data.length;i++){
					html+='<div style="font-size:12px;margin-top:4px;padding:5px;background:white;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#fff3e2"><font style="float:right" class="close"><span aria-hidden="true">×</span></font> <i>'+data[i].completename+'<br>'+data[i].inscomp+'<br>'+data[i].contactnum+'<br>'+data[i].emailaut+'</i></div>';
				}
				$('#fox2').html(html);
			},error:function(data){console.log(data);}
		});
	}
	/*$('.foc').click(function(){
		var RegORCIDiD = $('input[name=RegORCIDiD]');
		var RegUsername = $('input[name=RegUsername]');
		if(RegORCIDiD.val() == ""){
			$('#handWarnfirstUserN').show();
			soHIDE2();
			document.getElementById("RegORCIDiD").focus();
		}else{
			$.ajax({
				type:'ajax',
				method:'get',
				url:'strt/checkUserName',
				data:{data:RegUsername.val()},
				async:true,
				dataType:'json',
				success:function(data){
					if(data.success){
						document.getElementById("RegORCIDiD").focus();
						$('#handWarnfirstUserN').html('ERROR: The Username is already been taken');
						$('.baseRD').css('color','red');
						$('#handWarnfirstUserN').show();
						soHIDE2();
					}
				},error:function(data){console.log(data);}
			});
			$('#handWarnfirstUserN').hide();
		}
	});*/
	$('#clickChatt').click(function(){
		$('#chattingAreaBody').slideDown('slow');
		$('#WAh').hide();
	});
	$('.thisICONS5').click(function(){
		$('#WAh').fadeIn(2000);
		$('#chattingAreaBody').slideUp('slow');
	});
	test();
	test2();
	test3();
	test4();
	function soHIDE2(){
		setTimeout(function(){
			$('#handWarnfirstUserN').hide('fast');
			soHIDE3();
		},8000);
	}
	function soHIDE3(){
		setTimeout(function(){
			$('#handWarnfirstUserN').html('<i class="fa fa-hand-o-left"></i> Start here...');
		},2000);
	}
	// Registration
	$('#submitFormRegister').click(function(){
		var htmlERR = '';
		var err = 0;
		var data = $('#formRegister_ff').serialize();
		var RegPassW = $('input[name=RegPassW]');
		var ReTypeRegPassW = $('input[name=ReTypeRegPassW]');
		var RegUsername = $('input[name=RegUsername]');
		var RegORCIDiD = $('input[name=RegORCIDiD]');
		var RegFirstName = $('input[name=RegFirstName]');
		var RegLastName = $('input[name=RegLastName]');
		var RegAffiliation = $('textarea[name=RegAffiliation]');
		var RegEmail = $('input[name=RegEmail]');
		var RegConfEmail = $('input[name=RegConfEmail]');
		var RegGend = $('#RegGend').find(":selected").val();
		var RegCountry = $('#RegCountry').find(":selected").val();
		if(RegCountry == ""){
			err = 1;
			$('#p012').html('ERROR: Empty field, No Country selected');
			$('#RegCountry').css('border','1px solid red');
		}
		if(RegGend == ""){
			err = 1;
			$('#p011').html('ERROR: Empty field, No gender selected');
			$('#RegConfEmail').css('border','1px solid red');
		}
		if(RegConfEmail.val() == ""){
			err = 1;
			$('#p010').html('ERROR: Empty field');
			$('#RegConfEmail').css('border','1px solid red');
		}
		if(RegEmail.val() == ""){
			err = 1;
			$('#p009').html('ERROR: Empty field');
			$('#RegEmail').css('border','1px solid red');
		}
		if(RegAffiliation.val() == ""){
			err = 1;
			$('#p008').html('ERROR: Empty field');
			$('#RegAffiliation').css('border','1px solid red');
		}
		if(RegLastName.val() == ""){
			err = 1;
			$('#p007').html('ERROR: Empty field');
			$('#RegLastName').css('border','1px solid red');
		}
		if(RegFirstName.val() == ""){
			err = 1;
			$('#p006').html('ERROR: Empty field');
			$('#RegFirstName').css('border','1px solid red');
		}
		if(RegORCIDiD.val() == ""){
			err = 1;
			$('#p005').html('ERROR: Empty field');
			$('#RegORCIDiD').css('border','1px solid red');
		}
		if(RegUsername.val() == ""){
			err = 1;
			$('#p004').html('ERROR: Empty field');
			$('#RegUsername').css('border','1px solid red');
		}
		if(ReTypeRegPassW.val() == ""){
			err = 1;
			$('#p002').html('ERROR: Empty field');
			$('#ReTypeRegPassW').css('border','1px solid red');
		}
		if(RegPassW.val() == ""){
			err = 1;
			$('#p003').html('ERROR: Empty field');
			$('#RegPassW').css('border','1px solid red');
		}
		if(ReTypeRegPassW.val() !== "" && RegPassW.val() !== ""){
			if(RegPassW.val() !== ReTypeRegPassW.val()){
				err = 1;
				$('#p001').html('ERROR: Password did not matched');
				$('#RegPassW').css('border','1px solid red');
				$('#ReTypeRegPassW').css('border','1px solid red');
			}
		}

		if(err == 0){
			$('#RegPassW').css('border','1px solid #aeaeae');
			$('#ReTypeRegPassW').css('border','1px solid #aeaeae');
			$.ajax({
				type:'ajax',
				method:'POST',
				url:'strt/sbmitRegFrm',
				data:data,
				async:true,
				dataType:'json',
				success:function(data){
					if(data.success){
						$('#formRegister_ff')[0].reset();
						alert("SUCCESS: Your account has been successfully noted! Account activation will be sent to your <b>Email Account</b> given.");
					}else{
						alert("ERROR: Unsuccessfull Entry...");
					}
				},error:function(data){console.log(data);}
			});
		}else{
			alert("ERROR: Please notice errors...");
		}
	});

	$('#btn-loggedin22').click(function(){
		var err = 0;
		var data = $('#userlogged_frm22').serialize();
		var usernNjj = $('input[name=usernNjj22]');
		var passWjj = $('input[name=passWjj22]');
		if(usernNjj.val() == ""){
			$('#usernNjj22').css('border','1px solid red');
			err = 1;
		}if(passWjj.val() == ""){
			$('#passWjj22').css('border','1px solid red');
			err = 1;
		}

		if(err !== 1){
			$.ajax({
				type:'ajax',
				method:'POST',
				url:'strt/reqstLoggedIn2',
				data:data,
				async:true,
				dataType:'json',
				success:function(data){
					if(data[0].U_admin == "null" && data[0].U_reviewer == "null" && data[0].U_editor == "null" && data[0].U_author == "null"){
						alert("ERROR: Invalid User Account");
						$('#userlogged_frm22')[0].reset();
					}else{
						alert("SUCCESS: Your account was successfully noted. You can now proceed to online article submission...");
						$('#sixthPartSumission').hide();
						$('#fourthPartSumission').show();
						$('#JASSHsubFooter3').show();
					}
				},error:function(data){console.log(data);}
			});
		}else{
			alert("ERROR: Plaese fill-in the required field(s) marked with red.");
		}
	});
	

	// Effects

	$(window).scroll(function(){
		if($(window).scrollTop() > 50) {
			$('#helper').hide();
		   	$('#btn-Support').show();
		}else{
			$('#btn-Support').hide();
			$('#helper').show();
		}
	});

	$(window).scroll(function(){
		if($(window).scrollTop() > 650) {
		   	$('#thisDiv').show();
		}else{
			$('#thisDiv').hide();
		}
	});
	$('.thisICONS1').hover(function(e){
	    $(this).attr('title', '');
	});
	$('.thisICONS2').hover(function(e){
	   	$(this).attr('title', '');
	});
	$('.thisICONS3').hover(function(e){
	   	$(this).attr('title', '');
	});
	$('.thisICONS4').hover(function(e){
	   	$(this).attr('title', '');
	});
	$('.thisICONS5').hover(function(e){
	   	$(this).attr('title', '');
	});

	$('#btnPol1').click(function(){
		$('#hand1').show();
		$('#hand2').hide();
		$('#hand3').hide();
		$('#hand4').hide();
		$('#hand5').hide();
		$('#hand6').hide();
		$('#hand7').hide();
	});
	$('#btnPol2').click(function(){
		$('#hand1').hide();
		$('#hand2').show();
		$('#hand3').hide();
		$('#hand4').hide();
		$('#hand5').hide();
		$('#hand6').hide();
		$('#hand7').hide();
	});
	$('#btnPol3').click(function(){
		$('#hand1').hide();
		$('#hand2').hide();
		$('#hand3').show();
		$('#hand4').hide();
		$('#hand5').hide();
		$('#hand6').hide();
		$('#hand7').hide();
	});
	$('#btnPol4').click(function(){
		$('#handSDown').show();
		$('#hand1').hide();
		$('#hand2').hide();
		$('#hand3').hide();
		$('#hand4').show();
		$('#hand5').hide();
		$('#hand6').hide();
		$('#hand7').hide();
		hideHand();
	});
	$('#btnPol5').click(function(){
		$('#handSDown').show();
		$('#hand1').hide();
		$('#hand2').hide();
		$('#hand3').hide();
		$('#hand4').hide();
		$('#hand5').show();
		$('#hand6').hide();
		$('#hand7').hide();
		hideHand();
	});
	$('#btnPol6').click(function(){
		$('#handSDown').show();
		$('#hand1').hide();
		$('#hand2').hide();
		$('#hand3').hide();
		$('#hand4').hide();
		$('#hand5').hide();
		$('#hand6').show();
		$('#hand7').hide();
		hideHand();
	});
	$('#btnPol7').click(function(){
		$('#handSDown').show();
		$('#hand1').hide();
		$('#hand2').hide();
		$('#hand3').hide();
		$('#hand4').hide();
		$('#hand5').hide();
		$('#hand6').hide();
		$('#hand7').show();
		hideHand();
	});
	function hideHand(){
		setTimeout(function(){
			$('#handSDown').hide();
		},2000);
	}
	$('#btnSub1').click(function(){
		$('#subhand1').show();
		$('#subhand2').hide();
		$('#subhand3').hide();
		$('#subhand4').hide();
		$('#subhand5').hide();
	});
	$('#btnSub2').click(function(){
		$('#subhand1').hide();
		$('#subhand2').show();
		$('#subhand3').hide();
		$('#subhand4').hide();
		$('#subhand5').hide();
	});
	$('#btnSub3').click(function(){
		$('#subhand1').hide();
		$('#subhand2').hide();
		$('#subhand3').show();
		$('#subhand4').hide();
		$('#subhand5').hide();
	});
	$('#btnSub4').click(function(){
		$('#handSDown2').show();
		$('#subhand1').hide();
		$('#subhand2').hide();
		$('#subhand3').hide();
		$('#subhand4').show();
		$('#subhand5').hide();
		SubHideHand();
	});
	$('#btnSub5').click(function(){
		$('#handSDown2').show();
		$('#subhand1').hide();
		$('#subhand2').hide();
		$('#subhand3').hide();
		$('#subhand4').hide();
		$('#subhand5').show();
		SubHideHand();
	});
	function SubHideHand(){
		setTimeout(function(){
			$('#handSDown2').hide();
		},2000);
	}
});