$(document).ready(function(){
	var spa = $('input[name=spa]');
	if(spa.val() == 1){
		GetBaseARtcleRX();
	}else if(spa.val() == 3){
		GTcntry();
	}else if(spa.val() == 5){
		gtAllNSXup(0, 5);
	}else if(spa.val() == 6){
		swhoxlAllRanO();
	}else if(spa.val() == 9){
		showAllDDxResearchOutput();
	}

	var htmlGlobal = '';
	var r1 = 0, r2 = 5;
	$('#shwMrrr').click(function(){
		$('#shwMrrr').hide();
		r1 += 5;
		r2 += 5;
		gtAllNSXup(r1, r2);
	});

	function gtAllNSXup(num1, num2){
		var n1 = Number(num1);
		var n2 = Number(num2);
		$.ajax({
			type:'ajax',
			url:'../Strt/gtAllNsxxWop',
			async:true,
			dataType:'json',
			success:function(data){
				console.log(data);
				var i, a;
				var rellen = Number(data.length);
				if(rellen < n2){
					n2 = rellen;
				}
				for(i = n1; i < n2; i++){
					htmlGlobal+='<div class="row post-entry-big" style="margin:20px;">'+
		                '<div class="col-lg-5" style="">'+
		                  '<a target="__blank" href="http://'+data[i].weblink+'" class="img-link mr-4"><img src="../../nwng/lanews/'+data[i].newsimage+'" alt="Image" class="img-fluid"></a>'+
		                '</div>'+
		                '<div class="col-lg-7" style="">'+
		                  '<font style="float:right;color:#939191;font-size:12px;">Date / Time: '+data[i].date+' <b>|</b> '+data[i].time+'</font><br>'+
		                  '<div style="text-align:justify">'+
		                    '<h4 class="post-heading"><a target="__blank" href="http://'+data[i].weblink+'"><font style="color:#065c15">'+data[i].newsname+'</font></a></h4>'+
		                    '<font>'+data[i].newsdesc+'</font>'+
		                  '</div>'+
		                '</div>'+
		              '</div>';
				}
				if(rellen > n2){
					$('#shwMrrr').show();
				}
				$('#cntenthere').html(htmlGlobal);
			},error:function(data){console.log(data);}
		});
	}

	$('#btn-loggedin').click(function(){
		$('#noteArea').hide();
		var err = 0;
		var data = $('#userlogged_frm').serialize();
		var usernNjj = $('input[name=usernNjj]');
		var passWjj = $('input[name=passWjj]');
		if(usernNjj.val() == ""){
			$('#usernNjj').css('border','1px solid red');
			err = 1;
		}if(passWjj.val() == ""){
			$('#passWjj').css('border','1px solid red');
			err = 1;
		}

		if(err !== 1){
			$.ajax({
				type:'ajax',
				method:'POST',
				url:'../Strt/reqstLoggedIn',
				data:data,
				async:true,
				dataType:'json',
				success:function(data){
					console.log(data);
					if(data[0].U_admin == "null" && data[0].U_reviewer == "null" && data[0].U_editor == "null" && data[0].U_author == "null"){
						$('#noteContent').html("ERROR: Invalid User Account");
						$('.baseRD').css('color','red');
						$('#noteArea').show();
					}else{
						if(data[0].U_admin == 1){
							window.location.href = "../Strt/admnRdRct";
						}
						else if(data[0].U_reviewer == 1){
							window.location.href = "../Strt/reviewerArea";
						}
						else if(data[0].U_editor == 1){
							window.location.href = "../Strt/editorArea";
						}
						else if(data[0].U_admin == 0 && data[0].U_reviewer == 0 && data[0].U_editor == 0 && data[0].U_author == 1){
							window.location.href = "../Strt/reglrRdRct";
						}
					}
				},error:function(data){console.log(data);}
			});
		}else{
			$('#noteContent').html("ERROR: Plaese fill-in the required field(s) marked with red.");
			$('.baseRD').css('color','red');
			$('#noteArea').show();
		}
	});

	function GetBaseARtcleRX(){
		$.ajax({
			type:'ajax',
			url:'/index.php/Strt/gtDolxxRO',
			async:true,
			dataType:'json',
			success:function(data){
				console.log(data);
				var html = '';
				var i, a;
				for(i = 0; i < data.length; i++){
					if(i == 0){
						html += '<div class="row">';
					}else{
						html += '<div class="row" style="padding-top:40px;">';
					}
			          html+='<div class="col-lg-12">'+
			            '<small style="float:right">Date: '+data[i].datetimepublished+'</small>'+
			            'Title: <br>'+
			            '<b><font style="font-size:21px">'+data[i].title+'</font></b><br>'+
			            '<div style="padding-top:20px;text-align:justify;">'+
			              '<font style="float:right">New</font>'+
			              'Abstract: <Br>'+
			              '<b><font style="font-size:21px">'+showMore(data[i].abstract)+'...</font></b>'+
			            '</div>'+
			            '<div style="padding-top:20px;text-align:justify;">'+
			              '<b><font style="font-size:17px">';
			              var xb = Number(data[i].aut.length);
			              html+='<font style="float:right">';
			              for(a = 0;a < data[i].aut.length;a++){
			              	html+='<i>'+data[i].aut[a].completename+'</i>';
			              	if(a !== xb-1){
			              		html+=', ';
			              	}
			              }
			              html+='</font>'+
			              '</font></b>'+
			            '</div>'+
			          '</div>'+
			        '</div>';
				}
				$('#ContentPldodx').html(html);
			},error:function(data){console.log(data);}
		});
		$('#handWarnfirstUserN').hide();
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
				url:'../strt/sbmitRegFrm',
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


	// reference here...
	var seconds2 = 0;                // This is important
	var counterFxx2 = 5, a2 = 0;

	countdown2();
	function countdown2() {
		tick2();
		function tick2() {
		    seconds2++;
		    if(counterFxx2 == seconds2){
		    	counterFxx2+=5;
		    	a2++;
		    	if(a2 == 1){
		    		$('#imgSlider1').hide();
		    		$('#imgSlider2').show();
		    		$('#imgSlider3').hide();
		    		$('#imgSlider4').hide();
		    		$('#imgSlider5').hide();
		    	}else if(a2 == 2){
		    		$('#imgSlider1').hide();
		    		$('#imgSlider2').hide();
		    		$('#imgSlider3').show();
		    		$('#imgSlider4').hide();
		    		$('#imgSlider5').hide();
		    	}else if(a2 == 3){
		    		$('#imgSlider1').hide();
		    		$('#imgSlider2').hide();
		    		$('#imgSlider3').hide();
		    		$('#imgSlider4').show();
		    		$('#imgSlider5').hide();
		    	}else if(a2 == 4){
		    		$('#imgSlider1').hide();
		    		$('#imgSlider2').hide();
		    		$('#imgSlider3').hide();
		    		$('#imgSlider4').hide();
		    		$('#imgSlider5').show();
		    	}else if(a2 == 5){
		    		$('#imgSlider1').show();
		    		$('#imgSlider2').hide();
		    		$('#imgSlider3').hide();
		    		$('#imgSlider4').hide();
		    		$('#imgSlider5').hide();
		    		seconds2 = 1;
		    		counterFxx2 = 5;
		    		a2 = 0;
		    	}
		    }
		    if(seconds2 > 0 ) {
		    	$('#olasda').html(seconds2);
		      setTimeout(tick2, 1000);
		    }
		}
	}
	$('#preSpan').click(function(){
		counterFxx2 = counterFxx2 - 5;
		a2 = a2 - 1;
		if(a2 == 0){
    		$('#imgSlider1').show();
    		$('#imgSlider2').hide();
    		$('#imgSlider3').hide();
    		$('#imgSlider4').hide();
    		$('#imgSlider5').hide();
    		seconds2 = 1;
    		counterFxx2 = 5;
    		a2 = 0;
    	}else if(a2 == 1){
    		$('#imgSlider1').hide();
    		$('#imgSlider2').show();
    		$('#imgSlider3').hide();
    		$('#imgSlider4').hide();
    		$('#imgSlider5').hide();
    		seconds2 = 5;
    		counterFxx2 = 10;
    		a2 = 1;
    	}else if(a2 == 2){
    		$('#imgSlider1').hide();
    		$('#imgSlider2').hide();
    		$('#imgSlider3').show();
    		$('#imgSlider4').hide();
    		$('#imgSlider5').hide();
    		seconds2 = 10;
    		counterFxx2 = 15;
    		a2 = 2;
    	}else if(a2 == 3){
    		$('#imgSlider1').hide();
    		$('#imgSlider2').hide();
    		$('#imgSlider3').hide();
    		$('#imgSlider4').show();
    		$('#imgSlider5').hide();
    		seconds2 = 15;
    		counterFxx2 = 20;
    		a2 = 3;
    	}else if(a2 == 4){
    		$('#imgSlider1').hide();
    		$('#imgSlider2').hide();
    		$('#imgSlider3').hide();
    		$('#imgSlider4').hide();
    		$('#imgSlider5').show();
    		seconds2 = 20;
    		counterFxx2 = 25;
    		a2 = 4;
    	}else if(a2 == 5){
    		$('#imgSlider1').show();
    		$('#imgSlider2').hide();
    		$('#imgSlider3').hide();
    		$('#imgSlider4').hide();
    		$('#imgSlider5').hide();
    		seconds2 = 1;
    		counterFxx2 = 5;
    		a2 = 0;
    	}
	});
	$('#nextSpan').click(function(){
		counterFxx2 = counterFxx2 + 5;
		a2 = a2 + 1;
		if(a2 == 0){
    		$('#imgSlider1').show();
    		$('#imgSlider2').hide();
    		$('#imgSlider3').hide();
    		$('#imgSlider4').hide();
    		$('#imgSlider5').hide();
    		seconds2 = 1;
    		counterFxx2 = 5;
    		a2 = 0;
    	}else if(a2 == 1){
    		$('#imgSlider1').hide();
    		$('#imgSlider2').show();
    		$('#imgSlider3').hide();
    		$('#imgSlider4').hide();
    		$('#imgSlider5').hide();
    		seconds2 = 5;
    		counterFxx2 = 10;
    		a2 = 1;
    	}else if(a2 == 2){
    		$('#imgSlider1').hide();
    		$('#imgSlider2').hide();
    		$('#imgSlider3').show();
    		$('#imgSlider4').hide();
    		$('#imgSlider5').hide();
    		seconds2 = 10;
    		counterFxx2 = 15;
    		a2 = 2;
    	}else if(a2 == 3){
    		$('#imgSlider1').hide();
    		$('#imgSlider2').hide();
    		$('#imgSlider3').hide();
    		$('#imgSlider4').show();
    		$('#imgSlider5').hide();
    		seconds2 = 15;
    		counterFxx2 = 20;
    		a2 = 3;
    	}else if(a2 == 4){
    		$('#imgSlider1').hide();
    		$('#imgSlider2').hide();
    		$('#imgSlider3').hide();
    		$('#imgSlider4').hide();
    		$('#imgSlider5').show();
    		seconds2 = 20;
    		counterFxx2 = 25;
    		a2 = 4;
    	}else if(a2 == 5){
    		$('#imgSlider1').show();
    		$('#imgSlider2').hide();
    		$('#imgSlider3').hide();
    		$('#imgSlider4').hide();
    		$('#imgSlider5').hide();
    		seconds2 = 1;
    		counterFxx2 = 5;
    		a2 = 0;
    	}
	});

	function swhoxlAllRanO(){
		$.ajax({
			type:'ajax',
			url:'../Strt/takeRandO',
			async:true,
			dataType:'json',
			success:function(data){
				var html = '', alt = '';
				var i, a = 0;
				for(i = 0; i < data.length; i++){
					a++;
					html += '<div style="margin:10px;padding:10px;">'+
                        '<span style="float:right">'+
                            'Photo updated on: '+data[i].date+' <b>|</b> '+data[i].time+''+
                        '</span>'+
                        '<h2 style="width:100%;border-bottom:1px solid #aeaeae;color:#065c15;padding:10px;">'+data[i].description+'</h2>'+
                        '<div style="overflow:hidden;width:100%;margin-left:20px;">';
                        	var numX = 0, x = 0;
                        	numX = Number(data[i].imagees.length);
                        	if(numX > 0){
                        		for(x = 0;x < numX; x++){
                        			html+='<a href="../../nwng/facilities/'+data[i].imagees[x].image+'" target="__blank" style="cursor:pointer;"><img src="../../nwng/facilities/'+data[i].imagees[x].image+'" style="display:inline-block;width:250px;margin:3px;"></a>';
                        		}
                        	}else{
                        		html += '<font style="color:#bababa">No Attachments...</font>';
                        	}
                        html+='</div>'+
                    '</div>';
				}
				$('#owllxxmnmnmn').html(html);
			},error:function(data){console.log(data);}
		});
	}

	$('#ref').click(function(){
		showAllDDxResearchOutput();
		$('input[name=searchOlex]').val("");
		$('#pagination').show();
	});
	
	var pageTootal = 0, updateset = 7;
	function showAllDDxResearchOutput(){
		$('#cnnttXLx').html("Please wait... Data will appear after a while...");
		$.ajax({
			type:'ajax',
			url:'../Strt/gtPleoxlsas',
			async:true,
			dataType:'json',
			success:function(data){
				console.log(data);
				var html = '', page = '';
				var i, a = 0, num = 0, mod = 0, max = 7, l = 0;
				pageTootal = Number(data.length);
				if(pageTootal < 7){
					max = Number(data.length);
				}
				num = Number(data.length) / 7;
				mod = Number(data.length) % 7;
				for(i = 0; i < max; i++){
					a++;
					html += '<tr style="" class="POData">'+
                        '<td style="padding:3px;">'+a+'.</td>';
                        html+='<td style="padding:3px;">'+data[i].vol_volume+'</td>';
                        html+='<td style="padding:3px;">'+data[i].vol_number+'</td>';
                        html+='<td style="padding:3px;">'+data[i].vol_year+'</td>';
                        html+='<td style="padding:3px;">'+data[i].vol_page+'</td>';
                        var xb = Number(data[i].aut.length);
                        	html+='<td style="padding:3px;">';
			              for(l = 0;l < data[i].aut.length;l++){
			              	html+=''+data[i].aut[l].completename+'';
			              	if(l !== xb-1){
			              		html+=', ';
			              	}
			              }
			              html+='</td>';
                        html+='<td style="padding:3px;">'+data[i].title+'</td>'+
                        '<td style="padding:3px;" align="center"><a href="../../'+data[i].fileDatax[0].path+'" target="__blank">View</a></td>'+
                        '<td style="padding:3px;" align="center">'+data[i].datetimepublished+'</td>'+
                    '</tr>';
				}
				i = 0; a = 0;
				page += '&nbsp&nbsp <font class="prevV" style="cursor:pointer;font-weight:bold;display:none;"><< Previous</font> &nbsp&nbspPage: &nbsp';
				while(i<num){
					a++;
					if( i == 0 ){
						page += '<b><font class="clickPage1" style="cursor:pointer;color:black;padding:2px;background:#d4d4d4;color:red" valtake="'+a+'">'+a+'</font></b>&nbsp&nbsp';
					}else{
						page += '<b><font class="clickPage1" style="cursor:pointer;color:black;padding:2px;background:#d4d4d4" valtake="'+a+'">'+a+'</font></b>&nbsp&nbsp';
					}
					i++;
				}
				if(pageTootal > 7){
					page += '&nbsp&nbsp <font class="nextT" style="cursor:pointer;font-weight:bold">Next >></font>';
				}
				$('#pagination').html(page);
				$('#cnnttXLx').html(html);
				$('#addsnxxInROE').html('Total: <font style="font-size:20px;"><b>'+pageTootal+'</b></font>');
				if(pageTootal < 7){
					$('#nextT').hide();
				}
			},error:function(data){console.log(data);}
		});
	}
	$('#pagination').on('click','.nextT',function(){
		$('#cnnttXLx').html("Please wait... Data will appear after a while...");
		var nextpage = updateset + 7;
		var oldsetpage = nextpage - 7;
		updateset = nextpage;
		if(nextpage > pageTootal){
			nextpage = pageTootal;
			$('.nextT').hide();
		}else{
			$('.nextT').show();
		}
		$.ajax({
			type:'ajax',
			method:'get',
			url:'../Strt/gtPleoxlsasGEtPage',
			data:{data1:oldsetpage, data2:nextpage},
			async:true,
			dataType:'json',
			success:function(data){
				var html = '', page = '';
				var i, a = oldsetpage, num = 0, mod = 0, max = 7;
				pageTootal = Number(data.length);
				if(pageTootal < 7){
					max = Number(data.length);
				}
				num = Number(data.length) / 7;
				mod = Number(data.length) % 7;
				for(i = oldsetpage; i < nextpage; i++){
					a++;
					html += '<tr style="" class="POData">'+
                        '<td style="padding:3px;">'+a+'.</td>'+
                        '<td style="padding:3px;">'+data[i].realAuth+'</td>'+
                        '<td style="padding:3px;">'+data[i].title+'</td>'+
                        '<td style="padding:3px;" align="center"><a href="../../'+data[i].fileDatax[0].path+'" target="__blank">View</a></td>'+
                        '<td style="padding:3px;" align="center">'+data[i].datetimepublished+'</td>'+
                    '</tr>';
				}
				i = 0; a = 0;
				page += '&nbsp&nbsp <font class="prevV" style="cursor:pointer;font-weight:bold;display:none;"><< Previous</font> &nbsp&nbspPage: &nbsp';
				var getPointer = updateset;
				getPointer = getPointer / 7;
				getPointer = parseInt(getPointer);
				while(i<num){
					a++;
					if( i == getPointer-1 ){
						page += '<b><font class="clickPage1" style="cursor:pointer;color:black;padding:2px;background:#d4d4d4;color:red" valtake="'+a+'">'+a+'</font></b>&nbsp&nbsp';
					}else{
						page += '<b><font class="clickPage1" style="cursor:pointer;color:black;padding:2px;background:#d4d4d4" valtake="'+a+'">'+a+'</font></b>&nbsp&nbsp';
					}
					i++;
				}
				if(pageTootal > 7){
					page += '&nbsp&nbsp <font class="nextT" style="cursor:pointer;font-weight:bold;">Next >></font>';
				}
				$('#pagination').html(page);
				$('#cnnttXLx').html(html);
				$('#addsnxxInROE').html('Total: <font style="font-size:20px;"><b>'+pageTootal+'</b></font>');
				if(nextpage > 7){
					$('.prevV').show();
				}else{
					$('.prevV').hide();
				}
				if(nextpage >= pageTootal){
					$('.nextT').hide();
				}
			},error:function(data){console.log(data);}
		});
	});
	$('#pagination').on('click','.prevV',function(){
		$('#cnnttXLx').html("Please wait... Data will appear after a while...");
		if(updateset > 7){
			var nextpage = updateset - 7;
			var oldsetpage = nextpage - 7;
			updateset = nextpage;
			$('.nextT').show();
			$('.prevV').show();
			$.ajax({
				type:'ajax',
				method:'get',
				url:'../Strt/gtPleoxlsasGEtPage',
				data:{data1:oldsetpage, data2:nextpage},
				async:true,
				dataType:'json',
				success:function(data){
					var html = '', page = '';
					var i, a = oldsetpage, num = 0, mod = 0;
					pageTootal = Number(data.length);
					if(pageTootal < 7){
						max = Number(data.length);
					}
					num = Number(data.length) / 7;
					mod = Number(data.length) % 7;
					for(i = oldsetpage; i < nextpage; i++){
						a++;
						html += '<tr style="" class="POData">'+
	                        '<td style="padding:3px;">'+a+'.</td>'+
	                        '<td style="padding:3px;">'+data[i].realAuth+'</td>'+
	                        '<td style="padding:3px;">'+data[i].title+'</td>'+
	                        '<td style="padding:3px;" align="center"><a href="../../'+data[i].fileDatax[0].path+'" target="__blank">View</a></td>'+
	                        '<td style="padding:3px;" align="center">'+data[i].datetimepublished+'</td>'+
	                    '</tr>';
					}
					i = 0; a = 0;
					page += '&nbsp&nbsp <font class="prevV" style="cursor:pointer;font-weight:bold;"><< Previous</font> &nbsp&nbspPage: &nbsp';
					var getPointer = updateset;
					getPointer = getPointer / 7;
					getPointer = parseInt(getPointer);
					while(i<num){
						a++;
						if( i == getPointer-1 ){
							page += '<b><font class="clickPage1" style="cursor:pointer;color:black;padding:2px;background:#d4d4d4;color:red" valtake="'+a+'">'+a+'</font></b>&nbsp&nbsp';
						}else{
							page += '<b><font class="clickPage1" style="cursor:pointer;color:black;padding:2px;background:#d4d4d4" valtake="'+a+'">'+a+'</font></b>&nbsp&nbsp';
						}
						i++;
					}
					if(pageTootal > 7){
						page += '&nbsp&nbsp <font class="nextT" style="cursor:pointer;font-weight:bold">Next >></font>';
					}
					$('#pagination').html(page);
					$('#cnnttXLx').html(html);
					$('#addsnxxInROE').html('Total: <font style="font-size:20px;"><b>'+pageTootal+'</b></font>');
					if(updateset <= 7){
						$('.prevV').hide();
					}
					if(nextpage >= pageTootal){
						$('.nextT').hide();
					}
				},error:function(data){console.log(data);}
			});
		}else{
			$('.prevV').hide();
		}
	});
	$('#pagination').on('click','.clickPage1',function(){
		$('#cnnttXLx').html("Please wait... Data will appear after a while...");
		var valtake = $(this).attr('valtake');
		var nextpage = valtake * 7;
		var oldsetpage = nextpage - 7;
		updateset = nextpage;
		if(nextpage > pageTootal){
			nextpage = pageTootal;
			$('.nextT').hide();
		}else{
			$('.nextT').show();
		}
		$.ajax({
			type:'ajax',
			method:'get',
			url:'../Strt/gtPleoxlsasGEtPage',
			data:{data1:oldsetpage, data2:nextpage},
			async:true,
			dataType:'json',
			success:function(data){
				var html = '', page = '';
				var i, a = oldsetpage, num = 0, mod = 0;
				pageTootal = Number(data.length);
				if(pageTootal < 7){
					max = Number(data.length);
				}
				num = Number(data.length) / 7;
				mod = Number(data.length) % 7;
				for(i = oldsetpage; i < nextpage; i++){
					a++;
					html += '<tr style="" class="POData">'+
                        '<td style="padding:3px;">'+a+'.</td>'+
                        '<td style="padding:3px;">'+data[i].realAuth+'</td>'+
                        '<td style="padding:3px;">'+data[i].title+'</td>'+
                        '<td style="padding:3px;" align="center"><a href="../../'+data[i].fileDatax[0].path+'" target="__blank">View</a></td>'+
                        '<td style="padding:3px;" align="center">'+data[i].datetimepublished+'</td>'+
                    '</tr>';
				}
				i = 0; a = 0;
				page += '&nbsp&nbsp <font class="prevV" style="cursor:pointer;font-weight:bold;display:none;"><< Previous</font> &nbsp&nbspPage: &nbsp';
				while(i<num){
					a++;
					if( i == valtake-1 ){
						page += '<b><font class="clickPage1" style="cursor:pointer;color:black;padding:2px;background:#d4d4d4;color:red" valtake="'+a+'">'+a+'</font></b>&nbsp&nbsp';
					}else{
						page += '<b><font class="clickPage1" style="cursor:pointer;color:black;padding:2px;background:#d4d4d4" valtake="'+a+'">'+a+'</font></b>&nbsp&nbsp';
					}
					i++;
				}
				if(pageTootal > 7){
					page += '&nbsp&nbsp <font class="nextT" style="cursor:pointer;font-weight:bold">Next >></font>';
				}
				$('#pagination').html(page);
				$('#cnnttXLx').html(html);
				$('#addsnxxInROE').html('Total: <font style="font-size:20px;"><b>'+pageTootal+'</b></font>');
				if(nextpage > 7){
					$('.prevV').show();
				}else{
					$('.prevV').hide();
				}
				if(nextpage >= pageTootal){
					$('.nextT').hide();
				}else{
					$('.nextT').show();
				}
			},error:function(data){console.log(data);}
		});
	});
	$('#searqPlxo').click(function(){
		var data = $('input[name=searchOlex]');
		$('#pagination').hide();
		$.ajax({
			type:'ajax',
			method:'get',
			url:'../Strt/gtPleoxlsasSearch',
			data:{data:data.val()},
			async:true,
			dataType:'json',
			success:function(data){
				var html = '';
				var i, a = 0, num = 0;
				num = 3 / Number(data.length);
				for(i = 0; i < data.length; i++){
					a++;
					html += '<tr style="" class="POData">'+
                        '<td style="padding:3px;">'+a+'.</td>'+
                        '<td style="padding:3px;">'+data[i].realAuth+'</td>'+
                        '<td style="padding:3px;">'+data[i].title+'</td>'+
                        '<td style="padding:3px;" align="center"><a href="../../'+data[i].fileDatax[0].path+'" target="__blank">View</a></td>'+
                        '<td style="padding:3px;" align="center">'+data[i].datetimepublished+'</td>'+
                    '</tr>';
				}
				$('#cnnttXLx').html(html);
				$('#addsnxxInROE').html('Total: <font style="font-size:20px;"><b>'+i+'</b></font>');
			},error:function(data){console.log(data);}
		});
	});
	
	$('#cncnter2').click(function(){
		$('.plxx2').toggle();

	});
	$('#cncnter').click(function(){
		$('.plxx').toggle();

	});
	var grad = 0;
	$('#btnGrad').click(function(){
		$('#graduateSchool').toggle();
		if(grad == 0){
			$('#gradi1').hide(); $('#gradi2').show();
			grad = 1;
		}else{
			$('#gradi1').show(); $('#gradi2').hide();
			grad = 0;
		}

	});
	var staff = 0;
	$('#btnstaff').click(function(){
		$('.staffarea').toggle();
		if(staff == 0){
			$('#staffi1').hide(); $('#staffi2').show();
			staff = 1;
		}else{
			$('#staffi1').show(); $('#staffi2').hide();
			staff = 0;
		}

	});
	var it = 0;
	$('#btnit').click(function(){
		$('#informationtechnology').toggle();
		if(it == 0){
			$('#iti1').hide(); $('#iti2').show();
			it = 1;
		}else{
			$('#iti1').show(); $('#iti2').hide();
			it = 0;
		}

	});
	var is = 0;
	$('#btnis').click(function(){
		$('#informationsystems').toggle();
		if(is == 0){
			$('#isi1').hide(); $('#isi2').show();
			is = 1;
		}else{
			$('#isi1').show(); $('#isi2').hide();
			is = 0;
		}

	});
	var cs = 0;
	$('#btncs').click(function(){
		$('#computerscience').toggle();
		if(cs == 0){
			$('#csi1').hide(); $('#csi2').show();
			cs = 1;
		}else{
			$('#csi1').show(); $('#csi2').hide();
			cs = 0;
		}

	});
	$('#click1').click(function(){
		$('#drop1').toggle();
		$('#drop2').hide();
		$('#drop3').hide();
		$('#drop4').hide();
	});
	$('#click2').click(function(){
		$('#drop1').hide();
		$('#drop2').toggle();
		$('#drop3').hide();
		$('#drop4').hide();
	});
	$('#click3').click(function(){
		$('#drop1').hide();
		$('#drop2').hide();
		$('#drop3').toggle();
		$('#drop4').hide();
	});
	$('#click4').click(function(){
		$('#drop1').hide();
		$('#drop2').hide();
		$('#drop3').hide();
		$('#drop4').toggle();
	});
	$('#socialBtn').click(function(){
		$('#navmy2').show();
	});
	$('#hideCllokx').click(function(){
		$('#navmy2').hide();
	});
	if(screen.width > 1203){
		$('#navmy2').hide();
	}

	/* ********* Additional functions age ********* */
	function tSize(val){
		var len = 0;
		len = val.length;
		return len;
	}
	function x(val){
		var i;
		for(i=0;i<val.length;i++){
			if(val[i] == '1' || val[i] == '2' || val[i] == '3' || val[i] == '4' || val[i] == '5' || val[i] == '6' || val[i] == '7' || val[i] == '8' || val[i] == '9' || val[i] == '0' || val[i] == "'" || val[i] == '"' || val[i] == '/' || val[i] == '@' || val[i] == '+' || val[i] == ')' || val[i] == '(' || val[i] == '&' || val[i] == '^' || val[i] == '$' || val[i] == '#' || val[i] == '!' || val[i] =='%' || val[i] =='*' || val[i] =='=' || val[i] ==';' || val[i] ==':' || val[i] =='?' || val[i] =='>' || val[i] =='<' || val[i] =='|' || val[i] == "{" || val[i] =='}' || val[i] =='[' || val[i] ==']'){
				return 1;
			}
		}
		return 0;
	}
	function y(num){
		var i;
		for(i=0;i<num.length;i++){
			if(num[i] == 'a' || num[i] == 'b' || num[i] == 'c' || num[i] == 'd' || num[i] == 'e' || num[i] == 'f' || num[i] == 'g' || num[i] == 'h' || num[i] == 'i' || num[i] == 'j' || num[i] == 'k' || num[i] == 'l' || num[i] == 'm' || num[i] == 'n' || num[i] == 'm' || num[i] == 'o' || num[i] == 'p' || num[i] == 'q' || num[i] == 'r' || num[i] == 's' || num[i] == 't' || num[i] == 'u' || num[i] == 'v' || num[i] == 'w' || num[i] == 'x' || num[i] == 'y' || num[i] == 'z' || num[i] == 'A' || num[i] == 'B' || num[i] == 'C' || num[i] == 'D' || num[i] == 'E' || num[i] == 'F' || num[i] == 'G' || num[i] == 'H' || num[i] == 'I' || num[i] == 'J' || num[i] == 'K' || num[i] == 'L' || num[i] == 'M' || num[i] == 'N' || num[i] == 'M' || num[i] == 'O' || num[i] == 'P' || num[i] == 'Q' || num[i] == 'R' || num[i] == 'S' || num[i] == 'T' || num[i] == 'U' || num[i] == 'W' || num[i] == 'V' || num[i] == 'X' || num[i] == 'Y' || num[i] == 'Z' || num[i] == "'" || num[i] == '"' || num[i] == '/' || num[i] == '@' || num[i] == '+' || num[i] == '-' || num[i] == ')' || num[i] == '(' || num[i] == '&' || num[i] == '^' || num[i] == '$' || num[i] == '#' || num[i] == '!' || num[i] =='%' || num[i] =='*' || num[i] =='=' || num[i] ==';' || num[i] ==':' || num[i] =='?' || num[i] =='>' || num[i] =='<' || num[i] =='|' || num[i] == "{" || num[i] =='}' || num[i] =='[' || num[i] ==']'){
				return 1;
			}
		}
		return 0;
	}
	function mail(str){
		var len = Number(str.length);
		var arr="";
		var i = 0, have = 0;
		while(i < len){
			if(have == 1){arr += str[i];}
			if(str[i] == '@'){have = 1;}
			i++;
		}
		if(have == 1){
			if(arr == "yahoo.com" || arr == "gmail.com"){return 0;}else{return 1;}
		}
		return 1;
	}
	function valDocsExt(str){
		var len = Number(str.length);
		var arr="";
		while(len >= 0){
			len--;
			if(str[len] == '.'){
				break;
			}else{
				arr += str[len];
			}
		}
		return arr;
	}
	
	function age(valnum){
		var yrNow = $('input[name=yearNow]');
		var i = 0, yy = 0;
		yy = Number(yrNow.val());
		var str = "";
		while(i < 4){
			str += valnum[i];
			i++;
		}
		var age = Number(str);
		var tot = yy - age;
		return tot;
	}
	function nCwithPoint(valnum){
		var i = 0, a = 1, xxx = 0;
		var str = "", getWithoutP = "", getWithP = "";
		var finalHtml = "";
		var len = Number(valnum.length);
		var counterPoint = 0;
		while(xxx < len){
			if(valnum[xxx] == '.'){
				counterPoint = 1;
			}
			if(counterPoint == 0){
				getWithoutP+=valnum[xxx];
			}else{
				getWithP+=valnum[xxx];
			}
			xxx++;
		}
		var lens = Number(getWithoutP.length);
		if(lens > 3){
			i = lens;
			while(i > 0){
				i--;
				if(a==4 || a == 7 || a == 10 || a == 13 || a == 16){
					str+=','+getWithoutP[i]+'';
				}
				else{
					str+=''+getWithoutP[i]+'';
				}
				a++;
			}
			len = Number(str.length);
			i = len;
			while(i > 0){
				i--;
				finalHtml+=''+str[i]+'';
			}
			finalHtml+=''+getWithP+'';
			return finalHtml;
		}else{
			str+=''+valnum+'';
			return str;
		}
	}
	function showMore(str){
		var len = Number(str.length);
		var x = 0;
		var arr="";
		while(x < len){
			arr += str[x];
			if(x >= 350){
				break;
			}
			x++;
		}
		return arr;
	}
});