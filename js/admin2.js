$(document).ready(function(){
	//document.body.style.overflow = 'hidden';
	showListPendingUsr();
	showListPendingUsr2();
	showMyJournalxNNx();
	$('#dataimg').hover(function(){
		$('#recog').slideDown();
	});
	$('#dataimg').mouseleave(function(){
		$('#recog').slideUp();
	});

	// Articles Area display
	
	// End Articles Area display

	$('#cclckspecial').click(function(){
		$('#cclckspecial').css('background','#fcdfae');
		$('#cclck0').css('background','white');
		$('#cclck1').css('background','white');
		$('#cclck2').css('background','white');
		$('#cclck3').css('background','white');
		$('#cclck4').css('background','white');
		$('#cclck5').css('background','white');

		$('#RRwr').slideDown();
		$('#forHome').slideUp();
		$('#forPersonalInfo').slideUp();
		$('#forPublishedJourn').slideUp();
		$('#forCoAuthors').slideUp();
		$('#forMessages').slideUp();
		$('#forSettings').slideUp();
	});
	$('#cclck0').click(function(){
		$('#cclckspecial').css('background','white');
		$('#cclck0').css('background','#fcdfae');
		$('#cclck1').css('background','white');
		$('#cclck2').css('background','white');
		$('#cclck3').css('background','white');
		$('#cclck4').css('background','white');
		$('#cclck5').css('background','white');

		$('#RRwr').slideUp();
		$('#forHome').slideDown();
		$('#forPersonalInfo').slideUp();
		$('#forPublishedJourn').slideUp();
		$('#forCoAuthors').slideUp();
		$('#forMessages').slideUp();
		$('#forSettings').slideUp();
	});
	$('#cclck1').click(function(){
		$('#cclckspecial').css('background','white');
		$('#cclck0').css('background','white');
		$('#cclck1').css('background','#fcdfae');
		$('#cclck2').css('background','white');
		$('#cclck3').css('background','white');
		$('#cclck4').css('background','white');
		$('#cclck5').css('background','white');

		$('#RRwr').slideUp();
		$('#forHome').slideUp();
		$('#forPersonalInfo').slideDown();
		$('#forPublishedJourn').slideUp();
		$('#forCoAuthors').slideUp();
		$('#forMessages').slideUp();
		$('#forSettings').slideUp();
	});
	$('#cclck2').click(function(){
		$('#cclckspecial').css('background','white');
		$('#cclck0').css('background','white');
		$('#cclck1').css('background','white');
		$('#cclck2').css('background','#fcdfae');
		$('#cclck3').css('background','white');
		$('#cclck4').css('background','white');
		$('#cclck5').css('background','white');

		$('#RRwr').slideUp();
		$('#forHome').slideUp();
		$('#forPersonalInfo').slideUp();
		$('#forPublishedJourn').slideDown();
		$('#forCoAuthors').slideUp();
		$('#forMessages').slideUp();
		$('#forSettings').slideUp();
	});
	$('#cclck3').click(function(){
		$('#cclckspecial').css('background','white');
		$('#cclck0').css('background','white');
		$('#cclck1').css('background','white');
		$('#cclck2').css('background','white');
		$('#cclck3').css('background','#fcdfae');
		$('#cclck4').css('background','white');
		$('#cclck5').css('background','white');

		$('#RRwr').slideUp();
		$('#forHome').slideUp();
		$('#forPersonalInfo').slideUp();
		$('#forPublishedJourn').slideUp();
		$('#forCoAuthors').slideDown();
		$('#forMessages').slideUp();
		$('#forSettings').slideUp();
	});
	$('#cclck4').click(function(){
		$('#cclckspecial').css('background','white');
		$('#cclck0').css('background','white');
		$('#cclck1').css('background','white');
		$('#cclck2').css('background','white');
		$('#cclck3').css('background','white');
		$('#cclck4').css('background','#fcdfae');
		$('#cclck5').css('background','white');

		$('#RRwr').slideUp();
		$('#forHome').slideUp();
		$('#forPersonalInfo').slideUp();
		$('#forPublishedJourn').slideUp();
		$('#forCoAuthors').slideUp();
		$('#forMessages').slideDown();
		$('#forSettings').slideUp();
	});
	$('#cclck5').click(function(){
		$('#cclckspecial').css('background','white');
		$('#cclck0').css('background','white');
		$('#cclck1').css('background','white');
		$('#cclck2').css('background','white');
		$('#cclck3').css('background','white');
		$('#cclck4').css('background','white');
		$('#cclck5').css('background','#fcdfae');

		$('#RRwr').slideUp();
		$('#forHome').slideUp();
		$('#forPersonalInfo').slideUp();
		$('#forPublishedJourn').slideUp();
		$('#forCoAuthors').slideUp();
		$('#forMessages').slideUp();
		$('#forSettings').slideDown();
	});
	$('#cclck7').click(function(){
		$('#topBaseS').slideUp();
		$('#fox').animate({height:'130%'}, 0);
		$('#cclck7').hide('fast');
		$('#cclck8').show('fast');
	});
	$('#cclck8').click(function(){
		$('#topBaseS').slideDown();
		$('#fox').animate({height:'101%'}, 0);
		$('#cclck8').hide('fast');
		$('#cclck7').show('fast');
	});

	$('#btnToHomeArea').click(function(){
		$('#newResearchersAdmn').slideUp();
		$('#ResearchrsArea').slideUp();
		$('#JournalxArea').slideUp();
		$('#AmessageArea').slideUp();
		$('#homeAreaAdmn').slideDown();
		$('#paginationCnt').html("Admin Dashboard");
		$('#AnnPPlviewAreax').slideUp();

		$('#btnAnnPPl').css('border-left','none');
		$('#btnToHomeArea').css('border-left','3px solid #dd9221');
		$('#btnToNewResearchers').css('border-left','none');
		$('#btnREsearchrsArea').css('border-left','none');
		$('#btnJournalsArea').css('border-left','none');
		$('#btnACtiveMes').css('border-left','none');
	});
	var pends = 0;
	$('#newSignUps').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#ResearchrsArea').slideUp();
		$('#JournalxArea').slideUp();
		$('#AmessageArea').slideUp();
		$('#newResearchersAdmn').slideDown();
		$('#paginationCnt').html("New Researchers");
		$('#AnnPPlviewAreax').slideUp();

		$('#btnAnnPPl').css('border-left','none');
		$('#btnToHomeArea').css('border-left','none');
		$('#btnToNewResearchers').css('border-left','3px solid #dd9221');
		$('#btnREsearchrsArea').css('border-left','none');
		$('#btnJournalsArea').css('border-left','none');
		$('#btnACtiveMes').css('border-left','none');

		if(pends = 0){
			showListPendingUsr();
			showListPendingUsr2();
		}
		pends = 1;
	});
	$('#btnToNewResearchers').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#ResearchrsArea').slideUp();
		$('#JournalxArea').slideUp();
		$('#AmessageArea').slideUp();
		$('#newResearchersAdmn').slideDown();
		$('#paginationCnt').html("New Researchers");
		$('#AnnPPlviewAreax').slideUp();

		$('#btnAnnPPl').css('border-left','none');
		$('#btnToHomeArea').css('border-left','none');
		$('#btnToNewResearchers').css('border-left','3px solid #dd9221');
		$('#btnREsearchrsArea').css('border-left','none');
		$('#btnJournalsArea').css('border-left','none');
		$('#btnACtiveMes').css('border-left','none');

		if(pends = 0){
			showListPendingUsr();
			showListPendingUsr2();
		}
		pends = 1;
	});
	var pends2 = 0;
	$('#btnREsearchrsArea').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#newResearchersAdmn').slideUp();
		$('#JournalxArea').slideUp();
		$('#AmessageArea').slideUp();
		$('#ResearchrsArea').slideDown();
		$('#paginationCnt').html("Researchers");
		$('#AnnPPlviewAreax').slideUp();

		$('#btnAnnPPl').css('border-left','none');
		$('#btnToHomeArea').css('border-left','none');
		$('#btnToNewResearchers').css('border-left','none');
		$('#btnREsearchrsArea').css('border-left','3px solid #dd9221');
		$('#btnJournalsArea').css('border-left','none');
		$('#btnACtiveMes').css('border-left','none');
		if(pends2 == 0){
			showListResearchsNw();
			showListResearchsNw2();
			showListResearchsNw3();
		}
		pends2 = 1;
	});
	$('#newARcctcles').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#newResearchersAdmn').slideUp();
		$('#ResearchrsArea').slideUp();
		$('#AmessageArea').slideUp();
		$('#JournalxArea').slideDown();
		$('#paginationCnt').html("Article List");
		$('#AnnPPlviewAreax').slideUp();

		$('#btnAnnPPl').css('border-left','none');
		$('#btnToHomeArea').css('border-left','none');
		$('#btnToNewResearchers').css('border-left','none');
		$('#btnREsearchrsArea').css('border-left','none');
		$('#btnJournalsArea').css('border-left','3px solid #dd9221');
		$('#btnACtiveMes').css('border-left','none');
	});
	$('#btnJournalsArea').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#newResearchersAdmn').slideUp();
		$('#ResearchrsArea').slideUp();
		$('#AmessageArea').slideUp();
		$('#JournalxArea').slideDown();
		$('#paginationCnt').html("Article List");
		$('#AnnPPlviewAreax').slideUp();

		$('#btnAnnPPl').css('border-left','none');
		$('#btnToHomeArea').css('border-left','none');
		$('#btnToNewResearchers').css('border-left','none');
		$('#btnREsearchrsArea').css('border-left','none');
		$('#btnJournalsArea').css('border-left','3px solid #dd9221');
		$('#btnACtiveMes').css('border-left','none');
	});
	$('#btnAnnPPl').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#newResearchersAdmn').slideUp();
		$('#ResearchrsArea').slideUp();
		$('#AmessageArea').slideUp();
		$('#JournalxArea').slideUp();
		$('#paginationCnt').html("Announcements and Posts");
		$('#AnnPPlviewAreax').slideDown();

		$('#btnAnnPPl').css('border-left','3px solid #dd9221');
		$('#btnToHomeArea').css('border-left','none');
		$('#btnToNewResearchers').css('border-left','none');
		$('#btnREsearchrsArea').css('border-left','none');
		$('#btnJournalsArea').css('border-left','none');
		$('#btnACtiveMes').css('border-left','none');
	});
	$('#clickLiliAnn').click(function(){
		$('#liliViewAnn').slideDown();
		$('#liliViewPosts').slideUp();
		$('#clickLiliAnn').css('border-bottom','2px solid red');
		$('#clickLiliPosts').css('border-bottom','none');
	});
	$('#clickLiliPosts').click(function(){
		$('#liliViewPosts').slideDown();
		$('#liliViewAnn').slideUp();
		$('#clickLiliPosts').css('border-bottom','2px solid red');
		$('#clickLiliAnn').css('border-bottom','none');
	});

	$('#btnACtiveMes').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#newResearchersAdmn').slideUp();
		$('#ResearchrsArea').slideUp();
		$('#JournalxArea').slideUp();
		$('#AmessageArea').slideDown();
		$('#paginationCnt').html("Messages");
		
		$('#btnToHomeArea').css('border-left','none');
		$('#btnToNewResearchers').css('border-left','none');
		$('#btnREsearchrsArea').css('border-left','none');
		$('#btnJournalsArea').css('border-left','none');
		$('#btnACtiveMes').css('border-left','3px solid #dd9221');
	});


	$('#primaMenu').click(function(){
		$('#primaMenu').css('border-bottom','2px solid #f77b67');
		$('#forRevMenu').css('border-bottom','none');
		$('#forReviewArea').hide('fast');
		$('#forPrimaryArea').show('fast');
		$('#paginationCnt').html("New Researchers");
	});
	$('#forRevMenu').click(function(){
		$('#primaMenu').css('border-bottom','none');
		$('#forRevMenu').css('border-bottom','2px solid #f77b67');
		$('#forPrimaryArea').hide('fast');
		$('#forReviewArea').show('fast');
		$('#paginationCnt').html("New Researchers");
	});
	$('#generalActvResearchrs1').click(function(){
		$('#reSearchErsArea3').slideUp();
		$('#reSearchErsArea2').slideUp();
		$('#reSearchErsArea1').slideDown();
		$('#vid1div3').hide();
		$('#vid1div2').hide();
		$('#vid1div1').show();

		$('#generalActvResearchrs1').css('border-bottom','2px solid #f77b67');
		$('#generalActvResearchrs2').css('border-bottom','none');
		$('#generalActvResearchrs3').css('border-bottom','none');
	});
	$('#generalActvResearchrs2').click(function(){
		$('#reSearchErsArea1').slideUp();
		$('#reSearchErsArea3').slideUp();
		$('#reSearchErsArea2').slideDown();
		$('#vid1div3').hide();
		$('#vid1div2').show();
		$('#vid1div1').hide();

		$('#generalActvResearchrs1').css('border-bottom','none');
		$('#generalActvResearchrs3').css('border-bottom','none');
		$('#generalActvResearchrs2').css('border-bottom','2px solid #f77b67');
	});
	$('#generalActvResearchrs3').click(function(){
		$('#reSearchErsArea2').slideUp();
		$('#reSearchErsArea1').slideUp();
		$('#reSearchErsArea3').slideDown();
		$('#vid1div3').show();
		$('#vid1div2').hide();
		$('#vid1div1').hide();

		$('#generalActvResearchrs1').css('border-bottom','none');
		$('#generalActvResearchrs3').css('border-bottom','2px solid #f77b67');
		$('#generalActvResearchrs2').css('border-bottom','none');
	});
	getAllUniqueYear();
	getAllUniqueYear2();
	function getAllUniqueYear(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/gtAllYrInf',
			async:true,
			dataType:'json',
			success:function(data){
				var html = '';
				var i;
				html += '<option name="yrElemXx" value="">Select Year</option>';
				for(i = 0; i < data.length; i++){
					html += '<option name="yrElemXx" value="'+data[i].yearrsubmit+'">'+data[i].yearrsubmit+'</option>';
				}
				$('#yrElemXx').html(html);
			},error:function(data){console.log(data);}
		});
	}
	function getAllUniqueYear2(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/gtAllYrInf2pub',
			async:true,
			dataType:'json',
			success:function(data){
				//console.log(data);
				var html = '';
				var i;
				htmlL = '<option name="yrElemXx_2" value="">Select Year</option>';
				for(i = 0; i < data.length; i++){
					htmlL += '<option name="yrElemXx_2" value="'+data[i].year+'">'+data[i].year+'</option>';
				}
				$('#yrElemXx_2').html(htmlL);
			},error:function(data){console.log(data);}
		});
	}
	showListResearchsNw();
	showListResearchsNw2();
	showListResearchsNw3();
	$('#srOopXx_sr3').click(function(){
		$('input[name=vid1div3op]').val("");
		showListResearchsNw3();
	});
	$('#srOopXx_sr2').click(function(){
		$('input[name=vid1div2op]').val("");
		showListResearchsNw2();
	});
	$('#srOopXx_sr1').click(function(){
		$('input[name=vid1div1op]').val("");
		showListResearchsNw();
	});
	$('#goSear1x1').click(function(){
		var vid1div1op = $('input[name=vid1div1op]');
		if(vid1div1op.val() == ""){
			alert("ERROR: Empty search filled!");
			$('#vid1div1op').css('border','1px solid red');
		}else{
			$('#vid1div1op').css('border','1px solid #aeaeae');
			$.ajax({
				type:'ajax',
				method:'get',
				data:{data:vid1div1op.val()},
				url:'Cmendwll/reqstActvResearchrs_SearS1',
				async:true,
				dataType:'json',
				success:function(data){
					var num = 0, flag = 0;
					var html = '', sta = '';
					var i, a = 0, nwCntT = 0;
					if(!data){
						num = 11;
					}else{
						num = Number(data.length);
					}
					if(num < 10){
						flag = num;
						num = 10;
					}
					for(i = 0;i<num;i++){
						a++;
						sta = '';
						if(i > flag - 1){
							html+='<tr id="tabData" style="background:white;">'+
								'<td style="width:20%;padding:7px;">'+
									'<div style="height:40px;">'+
										'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
											'<div class="col-md-1" style="font-size:10px;padding:0px;"></div>'+
											'<div class="col-md-3" style="padding:0px;"></div>'+
											'<div class="col-md-8" style="padding:0px;"></div>'+
										'</div>'+
									'</div>'+
								'</td>'+
								'<td style="width:20%;padding:7px;">'+
									'<div style="height:40px;overflow:hidden" title="Affiliation"></div>'+
								'</td>'+
								'<td style="width:10%;padding:7px;">'+
									'<div style="height:40px;overflow:hidden" title="Country Code and Name"></div>'+
								'</td>'+
								'<td style="width:5%;padding:7px;">'+
									'<div style="height:40px;" title="User Type"></div>'+
								'</td>'+
								'<td style="width:5%;padding:7px;">'+
									'<div style="height:40px;overflow:hidden" title="Date Signed"></div>'+
								'</td>'+
								'<td style="width:10%;padding:7px;">'+
									'<div style="height:40px;font-size:14px;"></div>'+
								'</td>'+
								'<td style="width:30%;padding:7px;">'+
									'<div style="height:40px;font-size:14px;"></div>'+
								'</td>'+
							'</tr>';
						}else{
							nwCntT++;
							html+='<tr id="tabData">'+
								'<td style="width:20%;padding:7px;">'+
									'<div style="height:40px;">'+
										'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
											'<div class="col-md-1" style="font-size:10px;padding:0px;">'+a+'</div>'+
											'<div class="col-md-3" style="padding:0px;"><img src="nwng/user.png" style="width:35px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
											'<div class="col-md-8" style="padding:0px;">'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>'+
										'</div>'+
									'</div>'+
								'</td>'+
								'<td style="width:20%;padding:7px;">'+
									'<div style="height:40px;overflow:hidden" title="Affiliation">'+data[i].affiliation+'</div>'+
								'</td>'+
								'<td style="width:10%;padding:7px;">'+
									'<div style="height:40px;overflow:hidden" title="Country Code and Name"><b>('+data[i].country_code+') - '+data[i].country_name+'</b></div>'+
								'</td>'+
								'<td style="width:5%;padding:7px;">'+
									'<div style="height:40px;" title="User Type">';
										if(data[i].admin == 1 && data[i].reviewer == 1){
											html+='Author and Reviewer';
										}else if(data[i].reviewer == "yes"){
											html+='Reviewer';
										}else if(data[i].check_author == "yes"){
											html+='Author';
										}
									html+='</div>'+
								'</td>'+
								'<td style="width:12%;padding:7px;">'+
									'<div style="height:40px;overflow:hidden" title="Date Signed">'+data[i].dateSigned+'</div>'+
								'</td>'+
								'<td style="width:13%;padding:7px;">'+
									'<div style="height:40px;font-size:14px;">'+
										''+data[i].email+''+
									'</div>'+
								'</td>'+
								'<td align="center" style="width:20%;padding:7px;">'+
									'<div style="height:40px;">'+
										'<center><span class="confrmActA1oooo22" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="Accept" data-toggle="modal" data-target=".bs-confirmBan-modal-lg"><font style="font-size:12px;">invite</font> <i class="fa fa-google-plus-square"></i></span>'+
										'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2x2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View"><i class="fa fa-eye"></i> View</span>'+
										'</center>'+
									'</div>'+
								'</td>'+
							'</tr>';
						}
					}
					$('#contentResearchersxX').html(html);
					i = nwCntT;
					$('#ggInf1').html("<b>"+i+"</b>");
				},error:function(data){console.log(data);}
			});
		}
	});

	$('#contentResearchersxX').on('click','.confrmActA1oooo22',function(){
		$('#Utype8').prop('selectedIndex',0);
		$('#appFootr3').show();
		$('#appFootr2').hide();
		$('#appFootr1').hide();
		$('#mainB2').show();
		$('#mainB1').hide();
		$('#ffxxll').show();
		$('#backR2').hide();

		var userid = $(this).attr('userid');
		$('input[name=useridCred]').val(userid);
		$('input[name=thisIDrecepient]').val(userid);
		var email = $(this).attr('email');
		$('input[name=emailDtailtox]').val(email);
		$('input[name=resEmail]').val(email);
		var fullName = $(this).attr('fullName');
		fullNameXn = fullName;
		$('#cmpNnName').html(fullName);
		var cntryName = $(this).attr('cntryName');
		var cntryCode = $(this).attr('cntryCode');
		var sta = $(this).attr('sta');
		var html = "";
		html+='Complete Name:<br>&nbsp&nbsp&nbsp&nbsp<font style="font-size:17px;font-style:bold">'+fullName+'</font><br>'+
			'Country (Code):<br>&nbsp&nbsp&nbsp&nbsp<font style="font-size:17px;font-style:bold">'+cntryName+' ('+cntryCode+')</font>'+
			'<br>User type:<br>&nbsp&nbsp&nbsp&nbsp<font style="font-size:17px;font-style:bold">Author (Default)</font>';
		$('#InfoDAtaofNwUsr').html(html);
	});

	function showListResearchsNw(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/reqstActvResearchrs',
			async:true,
			dataType:'json',
			success:function(data){
				var num = 0, flag = 0;
				var html = '', sta = '';
				var i, a = 0, nwCntT = 0;
				if(!data){
					num = 11;
				}else{
					num = Number(data.length);
				}
				if(num < 10){
					flag = num;
					num = 10;
				}
				for(i = 0;i<num;i++){
					a++;
					sta = '';
					if(i > flag - 1){
						html+='<tr id="tabData" style="background:white;">'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
										'<div class="col-md-1" style="font-size:10px;padding:0px;"></div>'+
										'<div class="col-md-3" style="padding:0px;"></div>'+
										'<div class="col-md-8" style="padding:0px;"></div>'+
									'</div>'+
								'</div>'+
							'</td>'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Affiliation"></div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Country Code and Name"></div>'+
							'</td>'+
							'<td style="width:5%;padding:7px;">'+
								'<div style="height:40px;" title="User Type"></div>'+
							'</td>'+
							'<td style="width:5%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Date Signed"></div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;font-size:14px;"></div>'+
							'</td>'+
							'<td style="width:30%;padding:7px;">'+
								'<div style="height:40px;font-size:14px;"></div>'+
							'</td>'+
						'</tr>';
					}else{
						nwCntT++;
						html+='<tr id="tabData">'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
										'<div class="col-md-1" style="font-size:10px;padding:0px;">'+a+'</div>'+
										'<div class="col-md-3" style="padding:0px;"><img src="nwng/user.png" style="width:35px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
										'<div class="col-md-8" style="padding:0px;">'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>'+
									'</div>'+
								'</div>'+
							'</td>'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Affiliation">'+data[i].affiliation+'</div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Country Code and Name"><b>('+data[i].country_code+') - '+data[i].country_name+'</b></div>'+
							'</td>'+
							'<td style="width:5%;padding:7px;">'+
								'<div style="height:40px;" title="User Type">';
									if(data[i].admin == 1 && data[i].reviewer == 1){
										html+='Author and Reviewer';
									}else if(data[i].reviewer == "yes"){
										html+='Reviewer';
									}else if(data[i].check_author == "yes"){
										html+='Author';
									}
								html+='</div>'+
							'</td>'+
							'<td style="width:12%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Date Signed">'+data[i].dateSigned+'</div>'+
							'</td>'+
							'<td style="width:13%;padding:7px;">'+
								'<div style="height:40px;font-size:14px;">'+
									''+data[i].email+''+
								'</div>'+
							'</td>'+
							'<td align="center" style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'<center><span id="xpBtnAccpt" class="confrmActA1oooo22" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="Accept" data-toggle="modal" data-target=".bs-confirmBan-modal-lg" style="border:1px solid #dedede"><font style="font-size:12px;">invite</font> <i class="fa fa-google-plus-square"></i></span>'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2x2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View"><i class="fa fa-eye"></i> View</span>'+
									'</center>'+
								'</div>'+
							'</td>'+
						'</tr>';
					}
				}
				$('#contentResearchersxX').html(html);
				i = nwCntT;
				$('#ggInf1').html("<b>"+i+"</b>");
			},error:function(data){console.log(data);}
		});
	}
	$('#goSear1x3').click(function(){
		var vid1div3op = $('input[name=vid1div3op]');
		if(vid1div3op.val() == ""){
			alert("ERROR: Empty search filled");
			$('#vid1div3op').css('border','1px solid red');
		}else{
			$('#vid1div3op').css('border','1px solid #aeaeae0');
			$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/reqstActvResearchrs3_SearS3',
			data:{data:vid1div3op.val()},
			async:true,
			dataType:'json',
			success:function(data){
				var num = 0, flag = 0;
				var html = '', sta = '';
				var i, a = 0, nwCntT = 0;
				if(!data){
					num = 11;
				}else{
					num = Number(data.length);
				}
				if(num < 10){
					flag = num;
					num = 10;

				}
				for(i = 0;i<num;i++){
					a++;
					sta = '';
					if(i > flag - 1){
						html+='<tr id="tabData" style="background:white;">'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
										'<div class="col-md-1" style="font-size:10px;padding:0px;"></div>'+
										'<div class="col-md-3" style="padding:0px;"></div>'+
										'<div class="col-md-8" style="padding:0px;"></div>'+
									'</div>'+
								'</div>'+
							'</td>'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Affiliation"></div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Country Code and Name"></div>'+
							'</td>'+
							'<td style="width:5%;padding:7px;">'+
								'<div style="height:40px;" title="User Type"></div>'+
							'</td>'+
							'<td style="width:5%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Date Signed"></div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;font-size:14px;"></div>'+
							'</td>'+
							'<td style="width:30%;padding:7px;">'+
								'<div style="height:40px;font-size:14px;"></div>'+
							'</td>'+
						'</tr>';
					}else{
						nwCntT++;
						html+='<tr id="tabData">'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
										'<div class="col-md-1" style="font-size:10px;padding:0px;">'+a+'</div>'+
										'<div class="col-md-3" style="padding:0px;"><img src="nwng/user.png" style="width:35px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
										'<div class="col-md-8" style="padding:0px;">'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>'+
									'</div>'+
								'</div>'+
							'</td>'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Affiliation">'+data[i].affiliation+'</div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Country Code and Name"><b>('+data[i].country_code+') - '+data[i].country_name+'</b></div>'+
							'</td>'+
							'<td style="width:5%;padding:7px;">'+
								'<div style="height:40px;" title="User Type">';
									if(data[i].check_author == "yes" && data[i].reviewer == "yes"){
										html+='Author and Reviewer';
									}else if(data[i].reviewer == "yes"){
										html+='Reviewer';
									}else if(data[i].check_author == "yes"){
										html+='Author';
									}
								html+='</div>'+
							'</td>'+
							'<td style="width:12%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Date Signed">'+data[i].dateSigned+'</div>'+
							'</td>'+
							'<td style="width:13%;padding:7px;">'+
								'<div style="height:40px;font-size:14px;">'+
									''+data[i].email+''+
								'</div>'+
							'</td>'+
							'<td align="center" style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2x2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View"><i class="fa fa-eye"></i> View</span>'+
									'</center>'+
								'</div>'+
							'</td>'+
						'</tr>';
					}
				}
				$('#contentResearchersxX3').html(html);
				i = nwCntT;
				$('#ggInf3').html("<b>"+i+"</b>");
			},error:function(data){console.log(data);}
		});
		}
	});
	function showListResearchsNw3(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/reqstActvResearchrs3',
			async:true,
			dataType:'json',
			success:function(data){
				var num = 0, flag = 0;
				var html = '', sta = '';
				var i, a = 0, nwCntT = 0;
				if(!data){
					num = 11;
				}else{
					num = Number(data.length);
				}
				if(num < 10){
					flag = num;
					num = 10;

				}
				for(i = 0;i<num;i++){
					a++;
					sta = '';
					if(i > flag - 1){
						html+='<tr id="tabData" style="background:white;">'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
										'<div class="col-md-1" style="font-size:10px;padding:0px;"></div>'+
										'<div class="col-md-3" style="padding:0px;"></div>'+
										'<div class="col-md-8" style="padding:0px;"></div>'+
									'</div>'+
								'</div>'+
							'</td>'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Affiliation"></div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Country Code and Name"></div>'+
							'</td>'+
							'<td style="width:5%;padding:7px;">'+
								'<div style="height:40px;" title="User Type"></div>'+
							'</td>'+
							'<td style="width:5%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Date Signed"></div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;font-size:14px;"></div>'+
							'</td>'+
							'<td style="width:30%;padding:7px;">'+
								'<div style="height:40px;font-size:14px;"></div>'+
							'</td>'+
						'</tr>';
					}else{
						nwCntT++;
						html+='<tr id="tabData">'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
										'<div class="col-md-1" style="font-size:10px;padding:0px;">'+a+'</div>'+
										'<div class="col-md-3" style="padding:0px;"><img src="nwng/user.png" style="width:35px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
										'<div class="col-md-8" style="padding:0px;">'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>'+
									'</div>'+
								'</div>'+
							'</td>'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Affiliation">'+data[i].affiliation+'</div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Country Code and Name"><b>('+data[i].country_code+') - '+data[i].country_name+'</b></div>'+
							'</td>'+
							'<td style="width:5%;padding:7px;">'+
								'<div style="height:40px;" title="User Type">';
									if(data[i].check_author == "yes" && data[i].reviewer == "yes"){
										html+='Author and Reviewer';
									}else if(data[i].reviewer == "yes"){
										html+='Reviewer';
									}else if(data[i].check_author == "yes"){
										html+='Author';
									}
								html+='</div>'+
							'</td>'+
							'<td style="width:12%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Date Signed">'+data[i].dateSigned+'</div>'+
							'</td>'+
							'<td style="width:13%;padding:7px;">'+
								'<div style="height:40px;font-size:14px;">'+
									''+data[i].email+''+
								'</div>'+
							'</td>'+
							'<td align="center" style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2x2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View"><i class="fa fa-eye"></i> View</span>'+
									'</center>'+
								'</div>'+
							'</td>'+
						'</tr>';
					}
				}
				$('#contentResearchersxX3').html(html);
				i = nwCntT;
				$('#ggInf3').html("<b>"+i+"</b>");
			},error:function(data){console.log(data);}
		});
	}
	$('#goSear1x2').click(function(){
		var vid1div2op = $('input[name=vid1div2op]');
		if(vid1div2op.val() == ""){
			alert("ERROR: Empty search filled");
			$('#vid1div2op').css('border','1px solid red');
		}else{
			$('#vid1div2op').css('border','1px solid #aeaeae');
			$.ajax({
				type:'ajax',
				method:'get',
				url:'Cmendwll/reqstActvResearchrs2_SearS2',
				data:{data:vid1div2op.val()},
				async:true,
				dataType:'json',
				success:function(data){
					console.log(data);
					var num = 0, flag = 0;
					var html = '', sta = '';
					var i, a = 0, nwCntT = 0;
					if(!data){
						num = 11;
					}else{
						num = Number(data.length);
					}
					if(num < 10){
						flag = num;
						num = 10;

					}
					for(i = 0;i<num;i++){
						a++;
						sta = '';
						if(i > flag - 1){
							html+='<tr id="tabData" style="background:white;">'+
								'<td style="width:20%;padding:7px;">'+
									'<div style="height:40px;">'+
										'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
											'<div class="col-md-1" style="font-size:10px;padding:0px;"></div>'+
											'<div class="col-md-3" style="padding:0px;"></div>'+
											'<div class="col-md-8" style="padding:0px;"></div>'+
										'</div>'+
									'</div>'+
								'</td>'+
								'<td style="width:20%;padding:7px;">'+
									'<div style="height:40px;overflow:hidden" title="Affiliation"></div>'+
								'</td>'+
								'<td style="width:10%;padding:7px;">'+
									'<div style="height:40px;overflow:hidden" title="Country Code and Name"></div>'+
								'</td>'+
								'<td style="width:5%;padding:7px;">'+
									'<div style="height:40px;" title="User Type"></div>'+
								'</td>'+
								'<td style="width:5%;padding:7px;">'+
									'<div style="height:40px;overflow:hidden" title="Date Signed"></div>'+
								'</td>'+
								'<td style="width:10%;padding:7px;">'+
									'<div style="height:40px;font-size:14px;"></div>'+
								'</td>'+
								'<td style="width:30%;padding:7px;">'+
									'<div style="height:40px;font-size:14px;"></div>'+
								'</td>'+
							'</tr>';
						}else{
							nwCntT++;
							html+='<tr id="tabData">'+
								'<td style="width:20%;padding:7px;">'+
									'<div style="height:40px;">'+
										'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
											'<div class="col-md-1" style="font-size:10px;padding:0px;">'+a+'</div>'+
											'<div class="col-md-3" style="padding:0px;"><img src="nwng/user.png" style="width:35px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
											'<div class="col-md-8" style="padding:0px;">'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>'+
										'</div>'+
									'</div>'+
								'</td>'+
								'<td style="width:20%;padding:7px;">'+
									'<div style="height:40px;overflow:hidden" title="Affiliation">'+data[i].affiliation+'</div>'+
								'</td>'+
								'<td style="width:10%;padding:7px;">'+
									'<div style="height:40px;overflow:hidden" title="Country Code and Name"><b>('+data[i].country_code+') - '+data[i].country_name+'</b></div>'+
								'</td>'+
								'<td style="width:5%;padding:7px;">'+
									'<div style="height:40px;" title="User Type">';
										if(data[i].check_author == "yes" && data[i].reviewer == "yes"){
											html+='Author and Reviewer';
										}else if(data[i].reviewer == "yes"){
											html+='Reviewer';
										}else if(data[i].check_author == "yes"){
											html+='Author';
										}
									html+='</div>'+
								'</td>'+
								'<td style="width:12%;padding:7px;">'+
									'<div style="height:40px;overflow:hidden" title="Date Signed">'+data[i].dateSigned+'</div>'+
								'</td>'+
								'<td style="width:13%;padding:7px;">'+
									'<div style="height:40px;font-size:14px;">'+
										''+data[i].email+''+
									'</div>'+
								'</td>'+
								'<td align="center" style="width:20%;padding:7px;">'+
									'<div style="height:40px;">'+
										'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2x2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View"><i class="fa fa-eye"></i> View</span>'+
										'</center>'+
									'</div>'+
								'</td>'+
							'</tr>';
						}
					}
					$('#contentResearchersxX2').html(html);
					i = nwCntT;
					$('#ggInf2').html("<b>"+i+"</b>");
				},error:function(data){console.log(data);}
			});
		}
	});
	function showListResearchsNw2(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/reqstActvResearchrs2',
			async:true,
			dataType:'json',
			success:function(data){
				var num = 0, flag = 0;
				var html = '', sta = '';
				var i, a = 0, nwCntT = 0;
				if(!data){
					num = 11;
				}else{
					num = Number(data.length);
				}
				if(num < 10){
					flag = num;
					num = 10;

				}
				for(i = 0;i<num;i++){
					a++;
					sta = '';
					if(i > flag - 1){
						html+='<tr id="tabData" style="background:white;">'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
										'<div class="col-md-1" style="font-size:10px;padding:0px;"></div>'+
										'<div class="col-md-3" style="padding:0px;"></div>'+
										'<div class="col-md-8" style="padding:0px;"></div>'+
									'</div>'+
								'</div>'+
							'</td>'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Affiliation"></div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Country Code and Name"></div>'+
							'</td>'+
							'<td style="width:5%;padding:7px;">'+
								'<div style="height:40px;" title="User Type"></div>'+
							'</td>'+
							'<td style="width:5%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Date Signed"></div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;font-size:14px;"></div>'+
							'</td>'+
							'<td style="width:30%;padding:7px;">'+
								'<div style="height:40px;font-size:14px;"></div>'+
							'</td>'+
						'</tr>';
					}else{
						nwCntT++;
						html+='<tr id="tabData">'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
										'<div class="col-md-1" style="font-size:10px;padding:0px;">'+a+'</div>'+
										'<div class="col-md-3" style="padding:0px;"><img src="nwng/user.png" style="width:35px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
										'<div class="col-md-8" style="padding:0px;">'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>'+
									'</div>'+
								'</div>'+
							'</td>'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Affiliation">'+data[i].affiliation+'</div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Country Code and Name"><b>('+data[i].country_code+') - '+data[i].country_name+'</b></div>'+
							'</td>'+
							'<td style="width:5%;padding:7px;">'+
								'<div style="height:40px;" title="User Type">';
									if(data[i].check_author == "yes" && data[i].reviewer == "yes"){
										html+='Author and Reviewer';
									}else if(data[i].reviewer == "yes"){
										html+='Reviewer';
									}else if(data[i].check_author == "yes"){
										html+='Author';
									}
								html+='</div>'+
							'</td>'+
							'<td style="width:12%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Date Signed">'+data[i].dateSigned+'</div>'+
							'</td>'+
							'<td style="width:13%;padding:7px;">'+
								'<div style="height:40px;font-size:14px;">'+
									''+data[i].email+''+
								'</div>'+
							'</td>'+
							'<td align="center" style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2x2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View"><i class="fa fa-eye"></i> View</span>'+
									'</center>'+
								'</div>'+
							'</td>'+
						'</tr>';
					}
				}
				$('#contentResearchersxX2').html(html);
				i = nwCntT;
				$('#ggInf2').html("<b>"+i+"</b>");
			},error:function(data){console.log(data);}
		});
	}
	$('#contentResearchersxX3').on('click','.confrmActA2x2',function(){
		var html = "";
		var dateSigned = $(this).attr('dateSigned');
		var remarks = $(this).attr('remarks');
		var bio_state = $(this).attr('bio_state');
		var mailingaddress = $(this).attr('mailingaddress');
		var fax = $(this).attr('fax');
		var phone = $(this).attr('phone');
		var url = $(this).attr('url');
		var affiliation = $(this).attr('affiliation');
		var gend = $(this).attr('gend');
		var countryName = $(this).attr('countryName');
		var email = $(this).attr('email');
		var sta = $(this).attr('sta');
		var cntryCode = $(this).attr('cntryCode');
		var cntryName = $(this).attr('cntryName');
		var userid = $(this).attr('userid');
		var initials = $(this).attr('initials');
		var fullName = $(this).attr('fullName');
		var orcidid = $(this).attr('orcidid');
		html += ''+fullName+'<br>'+initials+'<br>'+gend+'<br>'+affiliation+'<br>'+email+'<br>'+orcidid+'<br>'+url+'<br>'+phone+'<br>'+fax+'<br>'+mailingaddress+'<br>'+cntryName+'<br>'+bio_state+'<br>'+remarks+'<br>'+dateSigned+' ';
		$('#infoP2xhrhr').html(html);
	});
	$('#contentResearchersxX2').on('click','.confrmActA2x2',function(){
		var html = "";
		var dateSigned = $(this).attr('dateSigned');
		var remarks = $(this).attr('remarks');
		var bio_state = $(this).attr('bio_state');
		var mailingaddress = $(this).attr('mailingaddress');
		var fax = $(this).attr('fax');
		var phone = $(this).attr('phone');
		var url = $(this).attr('url');
		var affiliation = $(this).attr('affiliation');
		var gend = $(this).attr('gend');
		var countryName = $(this).attr('countryName');
		var email = $(this).attr('email');
		var sta = $(this).attr('sta');
		var cntryCode = $(this).attr('cntryCode');
		var cntryName = $(this).attr('cntryName');
		var userid = $(this).attr('userid');
		var initials = $(this).attr('initials');
		var fullName = $(this).attr('fullName');
		var orcidid = $(this).attr('orcidid');
		html += ''+fullName+'<br>'+initials+'<br>'+gend+'<br>'+affiliation+'<br>'+email+'<br>'+orcidid+'<br>'+url+'<br>'+phone+'<br>'+fax+'<br>'+mailingaddress+'<br>'+cntryName+'<br>'+bio_state+'<br>'+remarks+'<br>'+dateSigned+' ';
		$('#infoP2xhrhr').html(html);
	});
	$('#contentResearchersxX').on('click','.confrmActA2x2',function(){
		var html = "";
		var dateSigned = $(this).attr('dateSigned');
		var remarks = $(this).attr('remarks');
		var bio_state = $(this).attr('bio_state');
		var mailingaddress = $(this).attr('mailingaddress');
		var fax = $(this).attr('fax');
		var phone = $(this).attr('phone');
		var url = $(this).attr('url');
		var affiliation = $(this).attr('affiliation');
		var gend = $(this).attr('gend');
		var countryName = $(this).attr('countryName');
		var email = $(this).attr('email');
		var sta = $(this).attr('sta');
		var cntryCode = $(this).attr('cntryCode');
		var cntryName = $(this).attr('cntryName');
		var userid = $(this).attr('userid');
		var initials = $(this).attr('initials');
		var fullName = $(this).attr('fullName');
		var orcidid = $(this).attr('orcidid');
		html += ''+fullName+'<br>'+initials+'<br>'+gend+'<br>'+affiliation+'<br>'+email+'<br>'+orcidid+'<br>'+url+'<br>'+phone+'<br>'+fax+'<br>'+mailingaddress+'<br>'+cntryName+'<br>'+bio_state+'<br>'+remarks+'<br>'+dateSigned+' ';
		$('#infoP2xhrhr').html(html);
	});
	function showListPendingUsr(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/reqstPendingUsrs',
			async:true,
			dataType:'json',
			success:function(data){
				//console.log(data);
				var num = 0, flag = 0;
				var html = '', sta = '';
				var i, a = 0, nwCntT = 0;
				if(!data){
					num = 11;
				}else{
					num = Number(data.length);
				}
				if(num < 10){
					flag = num;
					num = 10;
				}
				for(i = 0;i<num;i++){
					a++;
					sta = '';
					if(i > flag - 1){
						html+='<tr id="tabData" style="background:white;height:50px;">'+
							'<td style="width:20%;padding:7px;"></td>'+
							'<td style="width:20%;padding:7px;"></td>'+
							'<td style="width:20%;padding:7px;"></td>'+
							'<td style="width:10%;padding:7px;"></td>'+
							'<td style="width:10%;padding:7px;"></td>'+
							'<td align="center" style="width:20%;padding:7px;"></div>'+
							'</td>'+
						'</tr>';
					}else{
						nwCntT++;
						html+='<tr id="tabData">'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
										'<div class="col-md-1" style="font-size:10px;padding:0px;">'+a+'</div>'+
										'<div class="col-md-3" style="padding:0px;"><img src="nwng/user.png" style="width:35px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
										'<div class="col-md-8" style="padding:0px;">'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>'+
									'</div>'+
								'</div>'+
							'</td>'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Affiliation">'+data[i].affiliation+'</div>'+
							'</td>'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Country Code and Name"><b>('+data[i].country_code+') - '+data[i].country_name+'</b></div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;" title="User Type">';
									if(data[i].check_author == "yes" && data[i].reviewer == "yes"){
										html+='Author and Reviewer';
									}else if(data[i].reviewer == "yes"){
										html+='Reviewer';
									}else if(data[i].check_author == "yes"){
										html+='Author';
									}
								html+='</d40pxiv>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Date Signed">'+data[i].dateSigned+'</div>'+
							'</td>'+
							'<td align="center" style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'<center><span id="xpBtnAccpt" class="confrmActA1" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="Accept" data-toggle="modal" data-target=".bs-confirmBan-modal-lg"><i class="fa fa-check-circle-o"></i></span>'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View"><i class="fa fa-eye"></i> View</span>'+
									'</center>'+
								'</div>'+
							'</td>'+
						'</tr>';
					}
				}
				$('#displayPrimaryList').html(html);
				i = nwCntT;
				$('#bhgInf1').html("<b>"+i+"</b>");
				$('#xxggbg121').html(i);
			},error:function(data){console.log(data);}
		});
	}
	
	function showListPendingUsr2(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/reqstPendingUsrs2',
			async:true,
			dataType:'json',
			success:function(data){
				//console.log(data);
				var num = 0, flag = 0;
				var html = '', sta = '';
				var i, a = 0, nwCntT = 0;
				if(!data){
					num = 11;
				}else{
					num = Number(data.length);
				}
				if(num < 10){
					flag = num;
					num = 10;
				}
				for(i = 0;i<num;i++){
					a++;
					sta = '';
					if(i > flag - 1){
						html+='<tr id="tabData" style="background:white;height:50px;">'+
							'<td style="width:20%;padding:7px;"></td>'+
							'<td style="width:20%;padding:7px;"></td>'+
							'<td style="width:20%;padding:7px;"></td>'+
							'<td style="width:10%;padding:7px;"></td>'+
							'<td style="width:10%;padding:7px;"></td>'+
							'<td align="center" style="width:20%;padding:7px;"></div>'+
							'</td>'+
						'</tr>';
					}else{
						nwCntT++;
						html+='<tr id="tabData">'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
										'<div class="col-md-1" style="font-size:10px;padding:0px;">'+a+'</div>'+
										'<div class="col-md-3" style="padding:0px;"><img src="nwng/user.png" style="width:35px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
										'<div class="col-md-8" style="padding:0px;">'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>'+
									'</div>'+
								'</div>'+
							'</td>'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Affiliation">'+data[i].affiliation+'</div>'+
							'</td>'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Country Code and Name"><b>('+data[i].country_code+') - '+data[i].country_name+'</b></div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;" title="User Type">';
									if(data[i].check_author == "yes" && data[i].reviewer == "yes"){
										html+='Author and Reviewer';
									}else if(data[i].reviewer == "yes"){
										html+='Reviewer';
									}else if(data[i].check_author == "yes"){
										html+='Author';
									}
								html+='</d40pxiv>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Date Signed">'+data[i].dateSigned+'</div>'+
							'</td>'+
							'<td align="center" style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'<center><span id="xpBtnAccpt" class="confrmActA1" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="Accept" data-toggle="modal" data-target=".bs-confirmBan-modal-lg"><i class="fa fa-download"></i></span>'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View"><i class="fa fa-eye"></i> View</span>'+
									'</center>'+
								'</div>'+
							'</td>'+
						'</tr>';
					}
				}
				$('#displayPrimaryList2').html(html);
				i = nwCntT;
				$('#bhgInf2').html("<b>"+i+"</b>");
			},error:function(data){console.log(data);}
		});
	}
	$('#displayPrimaryList2').on('click','.confrmActA2',function(){
		var html = "";
		var dateSigned = $(this).attr('dateSigned');
		var remarks = $(this).attr('remarks');
		var bio_state = $(this).attr('bio_state');
		var mailingaddress = $(this).attr('mailingaddress');
		var fax = $(this).attr('fax');
		var phone = $(this).attr('phone');
		var url = $(this).attr('url');
		var affiliation = $(this).attr('affiliation');
		var gend = $(this).attr('gend');
		var countryName = $(this).attr('countryName');
		var email = $(this).attr('email');
		var sta = $(this).attr('sta');
		var cntryCode = $(this).attr('cntryCode');
		var cntryName = $(this).attr('cntryName');
		var userid = $(this).attr('userid');
		var initials = $(this).attr('initials');
		var fullName = $(this).attr('fullName');
		var orcidid = $(this).attr('orcidid');
		html += ''+fullName+'<br>'+initials+'<br>'+gend+'<br>'+affiliation+'<br>'+email+'<br>'+orcidid+'<br>'+url+'<br>'+phone+'<br>'+fax+'<br>'+mailingaddress+'<br>'+cntryName+'<br>'+bio_state+'<br>'+remarks+'<br>'+dateSigned+' ';
		$('#infoP2xhrhr').html(html);
	});
	$('#displayPrimaryList').on('click','.confrmActA2',function(){
		var html = "";
		var dateSigned = $(this).attr('dateSigned');
		var remarks = $(this).attr('remarks');
		var bio_state = $(this).attr('bio_state');
		var mailingaddress = $(this).attr('mailingaddress');
		var fax = $(this).attr('fax');
		var phone = $(this).attr('phone');
		var url = $(this).attr('url');
		var affiliation = $(this).attr('affiliation');
		var gend = $(this).attr('gend');
		var countryName = $(this).attr('countryName');
		var email = $(this).attr('email');
		var sta = $(this).attr('sta');
		var cntryCode = $(this).attr('cntryCode');
		var cntryName = $(this).attr('cntryName');
		var userid = $(this).attr('userid');
		var initials = $(this).attr('initials');
		var fullName = $(this).attr('fullName');
		var orcidid = $(this).attr('orcidid');
		html += ''+fullName+'<br>'+initials+'<br>'+gend+'<br>'+affiliation+'<br>'+email+'<br>'+orcidid+'<br>'+url+'<br>'+phone+'<br>'+fax+'<br>'+mailingaddress+'<br>'+cntryName+'<br>'+bio_state+'<br>'+remarks+'<br>'+dateSigned+' ';
		$('#infoP2xhrhr').html(html);
	});
	var fullNameXn = '';
	$('#backR2').click(function(){
		$('input[name=inpTTdConfpassword]').val("");
		$('#Utype8').prop('selectedIndex',0);
		$('#appFootr3').hide();
		$('#appFootr2').hide();
		$('#appFootr1').show();
		$('#ffxxll').show();
		$('#mainB2').slideUp();
		$('#mainB1').slideDown();
	});
	$('#backR1').click(function(){
		$('#Utype8').prop('selectedIndex',0);
		$('#appFootr3').hide();
		$('#appFootr2').hide();
		$('#appFootr1').show();
		$('#ffxxll').show();
	});
	$('#displayPrimaryList').on('click','.confrmActA1',function(){
		$('#Utype8').prop('selectedIndex',0);
		$('#appFootr3').hide();
		$('#appFootr2').hide();
		$('#appFootr1').show();
		$('#mainB2').hide();
		$('#mainB1').show();
		$('#ffxxll').show();
		$('#backR2').show();

		var userid = $(this).attr('userid');
		$('input[name=useridCred]').val(userid);
		$('input[name=thisIDrecepient]').val(userid);
		var email = $(this).attr('email');
		$('input[name=emailDtailtox]').val(email);
		$('input[name=resEmail]').val(email);
		var fullName = $(this).attr('fullName');
		fullNameXn = fullName;
		$('#cmpNnName').html(fullName);
		var cntryName = $(this).attr('cntryName');
		var cntryCode = $(this).attr('cntryCode');
		var sta = $(this).attr('sta');
		var html = "";
		html+='Complete Name:<br>&nbsp&nbsp&nbsp&nbsp<font style="font-size:17px;font-style:bold">'+fullName+'</font><br>'+
			'Country (Code):<br>&nbsp&nbsp&nbsp&nbsp<font style="font-size:17px;font-style:bold">'+cntryName+' ('+cntryCode+')</font>'+
			'<br>User type:<br>&nbsp&nbsp&nbsp&nbsp<font style="font-size:17px;font-style:bold">Author (Default)</font>';
		$('#InfoDAtaofNwUsr').html(html);
	});
	//viewPersonalRec
	$('#Utype8').change(function(){
		$("#inpTTdConfpassword").css("border","1px solid #aeaeae");
		$('#invalidMes').html("");
		var get = Number($(this).val());
		$('input[name=selectedBS8]').val(get);
		if(get !== 1){
			$('#appFootr1').hide('fast');
			$('#appFootr2').show('fast');
			$('#ffxxll').hide();
		}else{
			$('#appFootr2').hide('fast');
			$('#appFootr1').show('fast');
			$('#ffxxll').show();
		}
	});
	$('#submitNewEmployee2x2').click(function(){
		$('#appFootr2').hide();
		$('#appFootr3').show();
		$('#mainB1').slideUp();
		$('#mainB2').slideDown();
		$("#inpTTdConfpassword").css("border","1px solid #aeaeae");
		$('#invalidMes').html("");

		var xpew = $('#Utype8'). children("option:selected"). val();
		if(xpew == 2){
			$('#kklxxssdd').html('As Reviewer and Author');
		}else if(xpew == 3){
			$('#kklxxssdd').html('As Editor and Author');
		}else if(xpew == 4){
			$('#kklxxssdd').html('As Editor, Reviewer and Author');
		}
		$('input[name=opfffff322]').val(xpew);
	});

	$('#filT').click(function(){
		var yrElemXx = $('#yrElemXx').find(":selected").text();
		var semXxJr = $('#semXxJr').find(":selected").text();
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/getDataFilter',
			data:{yrElemXx:yrElemXx, semXxJr:semXxJr},
			async:true,
			dataType:'json',
			success:function(data){
				var html = '', authors = '';
				var i, a;
				var takeMeed = 0;
				for(i = 0;i<data.length;i++){
					authors = '';
					for(a = 0;a<data[i].aut.length;a++){
						authors+=', &nbsp&nbsp'+data[i].aut[a].completename+'';
					}
					if(data[i].fileDatax[0].filename == ""){
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#d89388">';
						takeMeed = 1;
					}else{
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#fff3e2">';
					}
						html+='<span style="float:right">'+
							'<div id="hovArt" class="animated slideDown">'+
								'<div>Manage &nbsp&nbsp<i class="fa fa-level-down"></i> <font style="float:right;color:red;margin-top:-5px;">Pending</font></div>'+
								'<div id="thsPrt">Submitted on (Date/Time): '+
									''+data[i].datetimeSub+'<br>'+
									'Attached File: ';
									if(data[i].fileDatax[0].filename == ""){
										html+='<font style="color:#db361c">No attached file</font><br>';
									}else{
										html+='<a href="'+data[i].fileDatax[0].path+'" target="__blank">'+data[i].fileDatax[0].filename+'</a><br>';
									}
									html+='<center><font id="aSsRev" email="'+data[i].email+'" authrIDpls="'+data[i].authrIDpls+'" j_id="'+data[i].j_id+'" title="'+data[i].title+'" abstract="'+data[i].abstract+'" keywords="'+data[i].keywords+'" authors="'+data[i].realAuth+''+authors+'" datetimeSub="'+data[i].datetimeSub+'" filePath="'+data[i].fileDatax[0].path+'" fileN="'+data[i].fileDatax[0].filename+'" class="btn btn-default" style="padding:0px;width:45%;color:black" data-toggle="modal" data-target=".bs-assignReView-modal-lg"><b>Manage</b></font>';
									html+='<font id="aSsRevDeciLLop" authrIDpls="'+data[i].authrIDpls+'" j_id="'+data[i].j_id+'" title="'+data[i].title+'" abstract="'+data[i].abstract+'" keywords="'+data[i].keywords+'" authors="'+data[i].realAuth+''+authors+'" datetimeSub="'+data[i].datetimeSub+'" filePath="'+data[i].fileDatax[0].path+'" fileN="'+data[i].fileDatax[0].filename+'" class="btn btn-default" style="padding:0px;width:45%;background:#cde5a0;color:black" data-toggle="modal" data-target=".bs-assignReViewOpxx101-modal-lg"><b>Decision</b></font></center>'+
								'</div>'+
							'</div>'+
						'</span>'+
						'<b>Title:</b><i><div style="padding-left:10px;">'+data[i].title+'</div><b>Abstract:</b><div style="padding-left:10px;">'+data[i].abstract+'</div><b>Keywords:</b><div style="padding-left:10px;">'+data[i].keywords+'</div></i>'+
						'<div style="height:50px;"><i style="float:right">'+data[i].realAuth+''+authors+'</i></div>'+
					'</div>';
				}
				if(i == 0){
					$('#displayMyJournalx').html('<Br><font style="margin-left:10px;">No Article submitted...</font>');
				}else{
					$('#displayMyJournalx').html(html);
				}
				$('#olowpwp9011xx').html(i);
			},error:function(data){console.log(data);}
		});
	});
	$('#refREssFJr').click(function(){
		$('#yrElemXx').prop('selectedIndex',0);
		$('#semXxJr').prop('selectedIndex',0);
		$('input[name=sercPlidd]').val("");
		showMyJournalxNNx();
	});
	$('#serachPPljnxnxx').click(function(){
		var sercPlidd = $('input[name=sercPlidd]');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/getJournalxPPTSerchPol',
			data:{dataSer:sercPlidd.val()},
			async:true,
			dataType:'json',
			success:function(data){
				var html = '', authors = '';
				var i, a;
				var takeMeed = 0;
				for(i = 0;i<data.length;i++){
					authors = '';
					for(a = 0;a<data[i].aut.length;a++){
						authors+=', &nbsp&nbsp'+data[i].aut[a].completename+'';
					}
					if(data[i].fileDatax[0].filename == ""){
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#d89388">';
						takeMeed = 1;
					}else{
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#fff3e2">';
					}
						html+='<span style="float:right">'+
							'<div id="hovArt" class="animated slideDown">'+
								'<div>Manage &nbsp&nbsp<i class="fa fa-level-down"></i> <font style="float:right;color:red;margin-top:-5px;">Pending</font></div>'+
								'<div id="thsPrt">Submitted on (Date/Time): '+
									''+data[i].datetimeSub+'<br>'+
									'Attached File: ';
									if(data[i].fileDatax[0].filename == ""){
										html+='<font style="color:#db361c">No attached file</font><br>';
									}else{
										html+='<a href="'+data[i].fileDatax[0].path+'" target="__blank">'+data[i].fileDatax[0].filename+'</a><br>';
									}
									html+='<center><font id="aSsRev" email="'+data[i].email+'" authrIDpls="'+data[i].authrIDpls+'" j_id="'+data[i].j_id+'" title="'+data[i].title+'" abstract="'+data[i].abstract+'" keywords="'+data[i].keywords+'" authors="'+data[i].realAuth+''+authors+'" datetimeSub="'+data[i].datetimeSub+'" filePath="'+data[i].fileDatax[0].path+'" fileN="'+data[i].fileDatax[0].filename+'" class="btn btn-default" style="padding:0px;width:45%;color:black" data-toggle="modal" data-target=".bs-assignReView-modal-lg"><b>Manage</b></font>';
									html+='<font id="aSsRevDeciLLop" authrIDpls="'+data[i].authrIDpls+'" j_id="'+data[i].j_id+'" title="'+data[i].title+'" abstract="'+data[i].abstract+'" keywords="'+data[i].keywords+'" authors="'+data[i].realAuth+''+authors+'" datetimeSub="'+data[i].datetimeSub+'" filePath="'+data[i].fileDatax[0].path+'" fileN="'+data[i].fileDatax[0].filename+'" class="btn btn-default" style="padding:0px;width:45%;background:#cde5a0;color:black" data-toggle="modal" data-target=".bs-assignReViewOpxx101-modal-lg"><b>Decision</b></font></center>'+
								'</div>'+
							'</div>'+
						'</span>'+
						'<b>Title:</b><i><div style="padding-left:10px;">'+data[i].title+'</div><b>Abstract:</b><div style="padding-left:10px;">'+data[i].abstract+'</div><b>Keywords:</b><div style="padding-left:10px;">'+data[i].keywords+'</div></i>'+
						'<div style="height:50px;"><i style="float:right">'+data[i].realAuth+''+authors+'</i></div>'+
					'</div>';
				}
				if(i == 0){
					$('#displayMyJournalx').html('<Br><font style="margin-left:10px;">No Article submitted...</font>');
				}else{
					html+='<div style="padding:10px;font-weight:bold;">Total: '+i+'</div>';
					$('#displayMyJournalx').html(html);
				}
			},error:function(data){console.log(data);}
		});
	});
	function showMyJournalxNNx(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/getJournalxPPT',
			async:true,
			dataType:'json',
			success:function(data){
				var html = '', authors = '';
				var i, a;
				var takeMeed = 0;
				for(i = 0;i<data.length;i++){
					authors = '';
					for(a = 0;a<data[i].aut.length;a++){
						authors+=', &nbsp&nbsp'+data[i].aut[a].completename+'';
					}
					if(data[i].fileDatax[0].filename == ""){
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#d89388">';
						takeMeed = 1;
					}else{
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#fff3e2">';
					}
						html+='<span style="float:right">'+
							'<div id="hovArt" class="animated slideDown">'+
								'<div>Manage &nbsp&nbsp<i class="fa fa-level-down"></i> <font style="float:right;color:red;margin-top:-2px;">Under Review</font></div>'+
								'<div id="thsPrt">Submitted on (Date/Time): '+
									''+data[i].datetimeSub+'<br>'+
									'Attached File: ';
									if(data[i].fileDatax[0].filename == ""){
										html+='<font style="color:#db361c">No attached file</font><br>';
									}else{
										html+='<a href="'+data[i].fileDatax[0].path+'" target="__blank">'+data[i].fileDatax[0].filename+'</a><br>';
									}
									html+='<center><font id="aSsRev" email="'+data[i].email+'" authrIDpls="'+data[i].authrIDpls+'" j_id="'+data[i].j_id+'" title="'+data[i].title+'" abstract="'+data[i].abstract+'" keywords="'+data[i].keywords+'" authors="'+data[i].realAuth+''+authors+'" datetimeSub="'+data[i].datetimeSub+'" filePath="'+data[i].fileDatax[0].path+'" fileN="'+data[i].fileDatax[0].filename+'" class="btn btn-default" style="padding:0px;width:45%;color:black" data-toggle="modal" data-target=".bs-assignReView-modal-lg"><b>Manage</b></font>';
									html+='<font id="aSsRevDeciLLop" authrIDpls="'+data[i].authrIDpls+'" j_id="'+data[i].j_id+'" title="'+data[i].title+'" abstract="'+data[i].abstract+'" keywords="'+data[i].keywords+'" authors="'+data[i].realAuth+''+authors+'" datetimeSub="'+data[i].datetimeSub+'" filePath="'+data[i].fileDatax[0].path+'" fileN="'+data[i].fileDatax[0].filename+'" class="btn btn-default" style="padding:0px;width:45%;background:#cde5a0;color:black" data-toggle="modal" data-target=".bs-assignReViewOpxx101-modal-lg"><b>Decision</b></font></center>'+
								'</div>'+
							'</div>'+
						'</span>'+
						'<b>Title:</b><i><div style="padding-left:10px;">'+data[i].title+'</div><b>Abstract:</b><div style="padding-left:10px;">'+data[i].abstract+'</div><b>Keywords:</b><div style="padding-left:10px;">'+data[i].keywords+'</div></i>'+
						'<div style="height:50px;"><i style="float:right">'+data[i].realAuth+''+authors+'</i></div>'+
					'</div>';
				}
				if(i == 0){
					$('#displayMyJournalx').html("<div style='padding:20px;'>No result...</div>");
				}else{
					html+='<div style="padding:10px;font-weight:bold;">Total: '+i+'</div>';
					$('#displayMyJournalx').html(html);
				}
			},error:function(data){console.log(data);}
		});
	}

	$('#procDec001').click(function(){
		document.getElementById("procDec001").disabled = true;
		$('#procDec001').html("Please wait...");
		var data = $('#contentxRevDecFinl_form').serialize();
		var getVakl = $('#seleJournalPPmm').find(":selected").val();
		if(getVakl !== "0"){
			$.ajax({
				type:'ajax',
				method:'POST',
				url:'Cmendwll/submitProcDsFnl',
				data:data,
				async:true,
				dataType:'json',
				success:function(data){
					$('#seleJournalPPmm').css('border','2px solid #aeaeae');
					if(data.success){
						if(getVakl == "1"){ alert("Article was successfully published!");
						}else{ alert("Article was successfully refused!"); }
						$('.bs-assignReViewOpxx101-modal-lg').hide();
						showMyJournalxNNx();showMyJournalxNNx2();showMyJournalxNNx3();
					}else{alert("ERROR: Please try again later.");}
					document.getElementById("procDec001").disabled = false;
					$('#procDec001').html("Proceed");
				},error:function(data){alert("ERROR: Please try again later.");}
			});
		}else{
			alert("ERROR: Please select a decision.");
			$('#seleJournalPPmm').css('border','2px solid red');
		}
	});

	$('#filT_2').click(function(){
		var yrElemXx_2 = $('#yrElemXx_2').find(":selected").text();
		var semXxJr_2 = $('#semXxJr_2').find(":selected").text();
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/getJournalxPPT2_2',
			data:{yrElemXx:yrElemXx_2, semXxJr:semXxJr_2},
			async:true,
			dataType:'json',
			success:function(data){
				console.log(data);
				var html = '', authors = '';
				var i, a;
				for(i = 0;i<data.length;i++){
					authors = '';
					for(a = 0;a<data[i].aut.length;a++){
						authors+=', &nbsp&nbsp'+data[i].aut[a].completename+'';
					}
					if(data[i].fileDatax[0].filename == null){
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#d89388">';
					}else{
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#fff3e2">';
					}
						html+='<span style="float:right">'+
							'<div id="hovArt" class="animated slideDown">'+
								'<div>Additional Details &nbsp&nbsp<i class="fa fa-level-down"></i> <font style="float:right;color:red;margin-top:-5px;">Pending</font></div>'+
								'<div id="thsPrt">Submitted on (Date/Time): '+
									''+data[i].datetimeSub+'<br>'+
									'Attached File: ';
									if(data[i].fileDatax[0].filename == null){
										html+='<font style="color:#db361c">No attached file</font><br>';
									}else{
										html+='<a href="'+data[i].fileDatax[0].path+'" target="__blank">'+data[i].fileDatax[0].filename+'</a><br>';
									}
								html+='</div>'+
							'</div>'+
						'</span>'+
						'<b>Title:</b><i><div style="padding-left:10px;">'+data[i].title+'</div><b>Abstract:</b><div style="padding-left:10px;">'+data[i].abstract+'</div><b>Keywords:</b><div style="padding-left:10px;">'+data[i].keywords+'</div><br><br>'+data[i].year+', '+data[i].month+'</i>'+
						'<div style="height:20px;"><i style="float:right">'+data[i].realAuth+''+authors+'</i></div>'+
					'</div>';
				}
				if(i == 0){
					$('#displayOfartOpubL').html('<Br><font style="margin-left:10px;">No Article submitted...</font>');
				}else{
					$('#displayOfartOpubL').html(html);
				}
				$('#olowpwp9011xx').html(i);
			},error:function(data){console.log(data);}
		});
	});
	$('#refREssFJr_2').click(function(){
		$('#yrElemXx_2').prop('selectedIndex',0);
		$('#semXxJr_2').prop('selectedIndex',0);
		$('input[name=sercPlidd_2]').val("");
		showMyJournalxNNx2();
	});
	showMyJournalxNNx2();
	function showMyJournalxNNx2(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/getJournalxPPT2',
			async:true,
			dataType:'json',
			success:function(data){
				var html = '', authors = '';
				var i, a;
				for(i = 0;i<data.length;i++){
					authors = '';
					for(a = 0;a<data[i].aut.length;a++){
						authors+=', &nbsp&nbsp'+data[i].aut[a].completename+'';
					}
					if(data[i].fileDatax[0].filename == null){
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#d89388">';
					}else{
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#fff3e2">';
					}
						html+='<span style="float:right">'+
							'<div id="hovArt" class="animated slideDown">'+
								'<div>Additional Details &nbsp&nbsp<i class="fa fa-level-down"></i> <font style="float:right;color:darkgreen;margin-top:-2px;">Published</font></div>'+
								'<div id="thsPrt">Submitted on (Date/Time): '+
									''+data[i].datetimeSub+'<br>'+
									'Attached File: ';
									if(data[i].fileDatax[0].filename == null){
										html+='<font style="color:#db361c">No attached file</font><br>';
									}else{
										html+='<a href="'+data[i].fileDatax[0].path+'" target="__blank">'+data[i].fileDatax[0].filename+'</a><br>';
									}
								html+='</div>'+
							'</div>'+
						'</span>'+
						'<b>Title:</b><i><div style="padding-left:10px;">'+data[i].title+'</div><b>Abstract:</b><div style="padding-left:10px;">'+data[i].abstract+'</div><b>Keywords:</b><div style="padding-left:10px;">'+data[i].keywords+'</div><br><br>'+data[i].year+', '+data[i].month+'</i>'+
						'<div style="height:20px;"><i style="float:right">'+data[i].realAuth+''+authors+'</i></div>'+
					'</div>';
				}
				if(i == 0){
					$('#displayOfartOpubL').html('<Br><font style="margin-left:10px;">No Article submitted...</font>');
				}else{
					html+='<div style="padding:10px;font-weight:bold;">Total: '+i+'</div>';
					$('#displayOfartOpubL').html(html);
				}
			},error:function(data){console.log(data);}
		});
	}
	$('#serachPPljnxnxx_2').click(function(){
		var sercPlidd_2 = $('input[name=sercPlidd_2]');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/getJournalxPPT2_SEr',
			data:{dataRpox:sercPlidd_2.val()},
			async:true,
			dataType:'json',
			success:function(data){
				console.log(data);
				var html = '', authors = '';
				var i, a;
				for(i = 0;i<data.length;i++){
					authors = '';
					for(a = 0;a<data[i].aut.length;a++){
						authors+=', &nbsp&nbsp'+data[i].aut[a].completename+'';
					}
					if(data[i].fileDatax[0].filename == null){
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#d89388">';
					}else{
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#fff3e2">';
					}
						html+='<span style="float:right">'+
							'<div id="hovArt" class="animated slideDown">'+
								'<div>Additional Details &nbsp&nbsp<i class="fa fa-level-down"></i> <font style="float:right;color:red;margin-top:-5px;">Pending</font></div>'+
								'<div id="thsPrt">Submitted on (Date/Time): '+
									''+data[i].datetimeSub+'<br>'+
									'Attached File: ';
									if(data[i].fileDatax[0].filename == null){
										html+='<font style="color:#db361c">No attached file</font><br>';
									}else{
										html+='<a href="'+data[i].fileDatax[0].path+'" target="__blank">'+data[i].fileDatax[0].filename+'</a><br>';
									}
								html+='</div>'+
							'</div>'+
						'</span>'+
						'<b>Title:</b><i><div style="padding-left:10px;">'+data[i].title+'</div><b>Abstract:</b><div style="padding-left:10px;">'+data[i].abstract+'</div><b>Keywords:</b><div style="padding-left:10px;">'+data[i].keywords+'</div><br><br>'+data[i].year+', '+data[i].month+'</i>'+
						'<div style="height:20px;"><i style="float:right">'+data[i].realAuth+''+authors+'</i></div>'+
					'</div>';
				}
				if(i == 0){
					$('#displayOfartOpubL').html('<Br><font style="margin-left:10px;">No Article submitted...</font>');
				}else{
					html+='<div style="padding:10px;font-weight:bold;">Total: '+i+'</div>';
					$('#displayOfartOpubL').html(html);
				}
			},error:function(data){console.log(data);}
		});
	});
	$('#refREssFJr_3').click(function(){
		$('input[name=sercPlidd_3]').val("");
		showMyJournalxNNx3();
	});
	showMyJournalxNNx3();
	function showMyJournalxNNx3(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/getJournalxPPT3',
			async:true,
			dataType:'json',
			success:function(data){
				var html = '', authors = '';
				var i, a;
				for(i = 0;i<data.length;i++){
					authors = '';
					for(a = 0;a<data[i].aut.length;a++){
						authors+=', &nbsp&nbsp'+data[i].aut[a].completename+'';
					}
					if(data[i].fileDatax[0].filename == null){
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#d89388">';
					}else{
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#fff3e2">';
					}
						html+='<span style="float:right">'+
							'<div id="hovArt" class="animated slideDown">'+
								'<div>Controls &nbsp&nbsp<i class="fa fa-level-down"></i> </div>'+
								'<div id="thsPrt">Submitted on (Date/Time): '+
									''+data[i].datetimeSub+'<br>'+
									'Attached File: ';
									if(data[i].fileDatax[0].filename == null){
										html+='<font style="color:#db361c">No attached file</font><br>';
									}else{
										html+='<a href="'+data[i].fileDatax[0].path+'" target="__blank">'+data[i].fileDatax[0].filename+'</a><br>';
									}
									html+='<font id="aSsRev2xx" authrIDpls="'+data[i].authrIDpls+'" j_id="'+data[i].j_id+'" title="'+data[i].title+'" abstract="'+data[i].abstract+'" keywords="'+data[i].keywords+'" authors="'+data[i].realAuth+''+authors+'" datetimeSub="'+data[i].datetimeSub+'" filePath="'+data[i].fileDatax[0].path+'" fileN="'+data[i].fileDatax[0].filename+'" class="btn btn-default" style="padding:0px;width:98%" data-toggle="modal" data-target=".bs-assignReView2xyyhh-modal-lg"><b>Restore</b></font>'+
								'</div>'+
							'</div>'+
						'</span>'+
						'<b>Title:</b><i><div style="padding-left:10px;">'+data[i].title+'</div><b>Abstract:</b><div style="padding-left:10px;">'+data[i].abstract+'</div><b>Keywords:</b><div style="padding-left:10px;">'+data[i].keywords+'</div><br><br>'+data[i].yearrsubmit+', '+data[i].monthsubmit+'</i>'+
						'<div style="height:20px;"><i style="float:right">'+data[i].realAuth+''+authors+'</i></div>'+
					'</div>';
				}
				if(i == 0){
					$('#displayOfartORef').html('<Br><font style="margin-left:10px;">No Article submitted...</font>');
				}else{
					html+='<div style="padding:10px;font-weight:bold;">Total: '+i+'</div>';
					$('#displayOfartORef').html(html);
				}
			},error:function(data){console.log(data);}
		});
	}
	$('#displayOfartORef').on('click','#aSsRev2xx',function(){
		var authrIDpls = $(this).attr('authrIDpls');
		var j_id = $(this).attr('j_id');
		var title = $(this).attr('title');
		$('input[name=restttttt1_id]').val(j_id);
		$('input[name=restttttt1_ttle]').val(title);
		$('input[name=authOwnPlx]').val(authrIDpls);
		$('#lstenrest2r').html("Restoring an Article entitled: <b>"+title+"</b>");
	});
	$('#procResTore').click(function(){
		var data = $('#res2rarr_form').serialize();
		$.ajax({
			type:'ajax',
			method:'POST',
			url:'Cmendwll/sbmtRestore2kR',
			data:data,
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					alert("SUCCESS: Article restored successfully!");
					showMyJournalxNNx3();
					showMyJournalxNNx();
				}else{ alert("ERROR: Please try again later."); }
			},error:function(data){console.log(data);}
		});
	});
	$('#serachPPljnxnxx_3').click(function(){
		var sercPlidd_3 = $('input[name=sercPlidd_3]');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/getJournalxPPT3_Serach',
			data:{sercPlidd_3:sercPlidd_3.val()},
			async:true,
			dataType:'json',
			success:function(data){
				console.log(data);
				var html = '', authors = '';
				var i, a;
				for(i = 0;i<data.length;i++){
					authors = '';
					for(a = 0;a<data[i].aut.length;a++){
						authors+=', &nbsp&nbsp'+data[i].aut[a].completename+'';
					}
					if(data[i].fileDatax[0].filename == null){
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#d89388">';
					}else{
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#fff3e2">';
					}
						html+='<span style="float:right">'+
							'<div id="hovArt" class="animated slideDown">'+
								'<div>Controls &nbsp&nbsp<i class="fa fa-level-down"></i> </div>'+
								'<div id="thsPrt">Submitted on (Date/Time): '+
									''+data[i].datetimeSub+'<br>'+
									'Attached File: ';
									if(data[i].fileDatax[0].filename == null){
										html+='<font style="color:#db361c">No attached file</font><br>';
									}else{
										html+='<a href="'+data[i].fileDatax[0].path+'" target="__blank">'+data[i].fileDatax[0].filename+'</a><br>';
									}
									html+='<font id="aSsRev2xx" authrIDpls="'+data[i].authrIDpls+'" j_id="'+data[i].j_id+'" title="'+data[i].title+'" abstract="'+data[i].abstract+'" keywords="'+data[i].keywords+'" authors="'+data[i].realAuth+''+authors+'" datetimeSub="'+data[i].datetimeSub+'" filePath="'+data[i].fileDatax[0].path+'" fileN="'+data[i].fileDatax[0].filename+'" class="btn btn-default" style="padding:0px;width:98%" data-toggle="modal" data-target=".bs-assignReView2xyyhh-modal-lg"><b>Restore</b></font>'+
								'</div>'+
							'</div>'+
						'</span>'+
						'<b>Title:</b><i><div style="padding-left:10px;">'+data[i].title+'</div><b>Abstract:</b><div style="padding-left:10px;">'+data[i].abstract+'</div><b>Keywords:</b><div style="padding-left:10px;">'+data[i].keywords+'</div><br><br>'+data[i].yearrsubmit+', '+data[i].monthsubmit+'</i>'+
						'<div style="height:20px;"><i style="float:right">'+data[i].realAuth+''+authors+'</i></div>'+
					'</div>';
				}
				if(i == 0){
					$('#displayOfartORef').html('<Br><font style="margin-left:10px;">No Article submitted...</font>');
				}else{
					html+='<div style="padding:10px;font-weight:bold;">Total: '+i+'</div>';
					$('#displayOfartORef').html(html);
				}
			},error:function(data){console.log(data);}
		});
	});

	$('#displayMyJournalx').on('click','#aSsRevDeciLLop',function(){
		var j_id = $(this).attr('j_id');
		var title = $(this).attr('title');
		$('input[name=idJournalPPmm]').val(j_id);
		$('input[name=titLeJournalPPmm]').val(title);
		$('#contentxRevDecFinl').html('<center>This is the Final decision for an article entitled: <b>'+title+'</b> <br>If you wish to set the Journal as published, select Published and click "Proceed".</center>');
	});

	var titlBBnnx="", emailofaut4444 = "", idofAut4444 = ""; var cpcp1, cpcp2;
	$('#displayMyJournalx').on('click','#aSsRev',function(){
		var j_id = $(this).attr('j_id');
		var authrIDpls = $(this).attr('authrIDpls');
		cpcp1 = j_id;
		cpcp2 = authrIDpls;
		$('input[name=realAuthIDxx]').val(authrIDpls);
		$('input[name=authorDIbasdallxx]').val(authrIDpls);
		$('input[name=j_idCopied]').val(j_id);
		$('input[name=journalID4task]').val(j_id);
		$('input[name=idofAuthorPPOx]').val(authrIDpls);
		var title = $(this).attr('title');
		emailofaut4444 = $(this).attr('email');
		idofAut4444 = authrIDpls;
		$('input[name=TitleJournxxXcpoyx]').val(title);
		var abstract = $(this).attr('abstract');
		var keywords = $(this).attr('keywords');
		var authors = $(this).attr('authors');
		var datetimeSub = $(this).attr('datetimeSub');
		var filePath = $(this).attr('filePath');
		var fileN = $(this).attr('fileN');
		var jsjsdalww = '';
		jsjsdalww += '<font style="float:right">Date & Time Submitted: '+datetimeSub+'</font>'+
			'<b>Title:</b> <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font style="font-size:21px;">'+title+'</font><br>'+
			'<b>Abstract:</b> <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'+abstract+'<br>'+
			'<b>Keywords:</b> <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'+keywords+'<br>';
			if(fileN == "null"){
				jsjsdalww+='<b>File Attached: <font style="color:#db361c">No attached file</font></b>';
			}else{
				jsjsdalww+='<b>File Attached: <a href="'+filePath+'" target="__blank">'+fileN+'</a></b>';
			}
			jsjsdalww+='<div style="height:20px;"><font style="float:right">'+authors+'</font></div>';
		titlBBnnx = title;
		showLisTRevvwxx(j_id, authrIDpls);
		showLisTRevvwxx2xx2hj(j_id);
		showDetailTAskAct(j_id);
		$('#jsjsdalww').html(jsjsdalww);
	});
	$('#cancelSrchPlexx1').click(function(){
		$('input[name=searchRevAll]').val("");
		showLisTRevvwxx(cpcp1, cpcp2);
	});
	function showLisTRevvwxx(dataIDjournal, authrIDpls){
		$('input[name=idofJournx]').val(dataIDjournal);
		$('input[name=idofAuth]').val(authrIDpls);
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/listofResearchersXx2x2',
			data:{idpw:dataIDjournal, authrIDpls:authrIDpls},
			async:true,
			dataType:'json',
			success:function(data){
				//console.log(data);
				var num = 0, flag = 0;
				var html = '', sta = '', viewAall = '';
				var i, a = 0, nwCntT = 0;
				if(!data){
					num = 10;
				}else{
					num = Number(data.length);
				}
				if(num < 9){
					flag = num;
					num = 9;
				}
				for(i = 0;i<num;i++){
					a++;
					sta = '';
					if(i > flag - 1){
						html+='<tr id="tabData" style="background:white;height:50px;">'+
							'<td style="padding:7px;"></td>'+
							'<td style="width:10%;padding:7px;"></td>'+
						'</tr>';
						viewAall+='<tr id="tabData" style="background:white;height:50px;">'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="width:1%;padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px" align="center"></td>'+
                        '</tr>';
					}else if(data[i].userid !== "null"){
						nwCntT++;
						html+='<tr id="tabData">'+
							'<td style="padding:7px;">'+
								'<div style="height:40px;">'+
									'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
										'<div class="col-md-1" style="font-size:10px;padding:0px;">'+a+'</div>'+
										'<div class="col-md-2" style="padding:0px;"><img src="nwng/user.png" style="width:40px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
										'<div class="col-md-9" style="padding:0px;">'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>'+
									'</div>'+
								'</div>'+
							'</td>'+
							'<td align="center" style="width:10%;padding:7px;">'+
								'<font class="btn btn-default slectREvxX" email="'+data[i].email+'" userid="'+data[i].userid+'" fName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" data-toggle="modal" data-target=".bs-xxssaasd-modal-lg" style="padding:1px;padding-left:7px;padding-right:7px;">Select</font>'+
							'</td>'+
						'</tr>';
						viewAall+='<tr id="tabData">'+
							'<td style="padding:3px;">'+data[i].salutation+'</td>'+
							'<td style="padding:3px;">'+data[i].u_lname+'</td>'+
							'<td style="padding:3px;width:1%">,</td>'+
							'<td style="padding:3px;">'+data[i].u_fname+'</td>'+
							'<td style="padding:3px;">'+data[i].u_mname+'</td>'+
							'<td style="padding:3px;">'+data[i].u_gender+'</td>'+
							'<td style="padding:3px;">'+data[i].affiliation+'</td>'+
							'<td style="padding:3px;">'+data[i].bio_state+'</td>'+
							'<td style="padding:3px;">'+data[i].country_name+'</td>'+
							'<td style="padding:3px;">'+data[i].email+'</td>'+
							'<td style="padding:3px;">'+data[i].orcid_id+'</td>'+
							'<td style="padding:3px;">'+data[i].url+'</td>'+
							'<td style="padding:3px;">'+data[i].phone+'</td>'+
							'<td style="padding:3px;">'+data[i].fax+'</td>'+
							'<td style="padding:3px;">'+data[i].mailingaddrss+'</td>'+
							'<td style="padding:3px;" align="center"><font class="btn btn-default slectREvxX" userid="'+data[i].userid+'" fName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" data-toggle="modal" data-target=".bs-xxssaasd-modal-lg" style="padding:1px;padding-left:7px;padding-right:7px;">Select</font></td>'+
						'</tr>';
					}
				}
				$('#vgvaxxx12sx').html(html);
				$('#viewAllRevGetNZZsw').html(viewAall);
				i = nwCntT;
				$('#tttXg').html("<b>"+i+"</b>");
			},error:function(data){console.log(data);}
		});
	}
	$('#searchNowBrxxAllRVxx').click(function(){
		var data = $('#formView_arc').serialize();
		$.ajax({
			type:'ajax',
			method:'POST',
			url:'Cmendwll/getAllRevFrmSrchXX1',
			data:data,
			async:true,
			dataType:'json',
			success:function(data){
				//console.log(data);
				var num = 0, flag = 0;
				var html = '', sta = '', viewAall = '';
				var i, a = 0, nwCntT = 0;
				if(!data){
					num = 10;
				}else{
					num = Number(data.length);
				}
				if(num < 9){
					flag = num;
					num = 9;
				}
				for(i = 0;i<num;i++){
					a++;
					sta = '';
					if(i > flag - 1){
						html+='<tr id="tabData" style="background:white;height:50px;">'+
							'<td style="padding:7px;"></td>'+
							'<td style="width:10%;padding:7px;"></td>'+
						'</tr>';
						viewAall+='<tr id="tabData" style="background:white;height:50px;">'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="width:1%;padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px"></td>'+
                            '<td style="padding:2px" align="center"></td>'+
                        '</tr>';
					}else if(data[i].userid !== "null"){
						nwCntT++;
						html+='<tr id="tabData">'+
							'<td style="padding:7px;">'+
								'<div style="height:40px;">'+
									'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
										'<div class="col-md-1" style="font-size:10px;padding:0px;">'+a+'</div>'+
										'<div class="col-md-2" style="padding:0px;"><img src="nwng/user.png" style="width:40px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
										'<div class="col-md-9" style="padding:0px;">'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>'+
									'</div>'+
								'</div>'+
							'</td>'+
							'<td align="center" style="width:10%;padding:7px;">'+
								'<font class="btn btn-default slectREvxX" email="'+data[i].email+'" userid="'+data[i].userid+'" fName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" data-toggle="modal" data-target=".bs-xxssaasd-modal-lg" style="padding:1px;padding-left:7px;padding-right:7px;">Select</font>'+
							'</td>'+
						'</tr>';
						viewAall+='<tr id="tabData">'+
							'<td style="padding:3px;">'+data[i].salutation+'</td>'+
							'<td style="padding:3px;">'+data[i].u_lname+'</td>'+
							'<td style="padding:3px;width:1%">,</td>'+
							'<td style="padding:3px;">'+data[i].u_fname+'</td>'+
							'<td style="padding:3px;">'+data[i].u_mname+'</td>'+
							'<td style="padding:3px;">'+data[i].u_gender+'</td>'+
							'<td style="padding:3px;">'+data[i].affiliation+'</td>'+
							'<td style="padding:3px;">'+data[i].bio_state+'</td>'+
							'<td style="padding:3px;">'+data[i].country_name+'</td>'+
							'<td style="padding:3px;">'+data[i].email+'</td>'+
							'<td style="padding:3px;">'+data[i].orcid_id+'</td>'+
							'<td style="padding:3px;">'+data[i].url+'</td>'+
							'<td style="padding:3px;">'+data[i].phone+'</td>'+
							'<td style="padding:3px;">'+data[i].fax+'</td>'+
							'<td style="padding:3px;">'+data[i].mailingaddrss+'</td>'+
							'<td style="padding:3px;" align="center"><font class="btn btn-default slectREvxX" userid="'+data[i].userid+'" fName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" data-toggle="modal" data-target=".bs-xxssaasd-modal-lg" style="padding:1px;padding-left:7px;padding-right:7px;">Select</font></td>'+
						'</tr>';
					}
				}
				$('#vgvaxxx12sx').html(html);
				$('#viewAllRevGetNZZsw').html(viewAall);
				i = nwCntT;
				$('#tttXg').html("<b>"+i+"</b>");
			},error:function(data){console.log(data);}
		});
	});
	$('#vgvaxxx12sx').on('click','.slectREvxX',function(){
		var userid = $(this).attr('userid');
		var fName = $(this).attr('fName');
		var email = $(this).attr('email');
		$('input[name=userIDcopied]').val(userid);
		$('input[name=emailhhgg]').val(email);
		$('input[name=ttleOloxxxx]').val(titlBBnnx);
		$('#msgCntXX1122ppppppppp').html('<center>Inviting <b>'+fName+'</b> as Reviewer of an Article <br>entitled "'+titlBBnnx+'"</center>');
	});
	$('#viewAllRevGetNZZsw').on('click','.slectREvxX',function(){
		var userid = $(this).attr('userid');
		var fName = $(this).attr('fName');
		var email = $(this).attr('email');
		$('input[name=userIDcopied]').val(userid);
		$('input[name=emailhhgg]').val(email);
		$('input[name=ttleOloxxxx]').val(titlBBnnx);
		$('#msgCntXX1122ppppppppp').html('<center>Inviting <b>'+fName+'</b> as Reviewer of an Article <br>entitled "'+titlBBnnx+'"</center>');
	});

	$('#confirmRevAssgnmnt').click(function(){
		$('#confirmRevAssgnmnt').html("Sending invitation, please wait...");
		document.getElementById("confirmRevAssgnmnt").disabled = true;
		var data = $('#submitAccptRevwr_frm').serialize();
		var j_idCopied = $('input[name=j_idCopied]');
		var authCCp = $('input[name=realAuthIDxx]');
		$.ajax({
			type:'ajax',
			method:'POST',
			url:'Cmendwll/sbMitRevAssignment',
			data:data,
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					$('.bs-xxssaasd-modal-lg').hide();
					document.getElementById("confirmRevAssgnmnt").disabled = false;
					$('#confirmRevAssgnmnt').html("Confirm");
					alert("Invitation successfully submitted via email and notification...");
					showLisTRevvwxx(j_idCopied.val(), authCCp.val());
					showLisTRevvwxx2xx2hj(j_idCopied.val());
				}else{ alert("ERROR: Slow internet connection or try again later."); }
			},error:function(data){alert("ERROR: Please consult your web administrator regarding the matter.");}
		});
	});

	var LXXpid = 0;
	function showDetailTAskAct(j_id){
		LXXpid = j_id;
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/getAllGEnTaskPlHre',
			data:{idData:j_id},
			async:true,
			dataType:'json',
			success:function(data){
				var num = 0, flag = 0;
				var html = '';
				var i, a = 0, x = 0;
				num = Number(data.length);
				for(i = 0;i<num;i++){
					html+='<table width="100%" style="margin-top:8px;">'+
                        '<tbody style="font-family:calibri">'+
                            '<tr style="padding:5px;">'+
                                '<td style="width:6%">'+
                                    '<div>'+
                                        '<center><i class="fa fa-user" style="font-size:25px;color:#9dc67f"></i><br><font style="font-size:9px;">Reviewer</font></center>'+
                                    '</div>'+
                                '</td>'+
                                '<td style="width:94%">'+
                                    '<div id="bet1" class="fireBaseMesTask" j_id="'+j_id+'" taskID="'+data[i].taskid+'" mesTas="'+data[i].mess_task+'" style="cursor:pointer;padding-left:6px;">';
                                       	if(data[i].approvedbyeditor == 1){
                                       		if(data[i].fileDatax[0].filename == ""){
                                       			html+='<font style="float:right">'+data[i].date+' '+data[i].time+'</font><b>'+data[i].fullNameRev+'</b>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br><font style="font-size:19px;">'+data[i].mess_task+'</font><br><font style="font-size:14px;">File Attached: None &nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp<font color="green">Approved and validated</font></font>';
                                       		}else{
                                       			html+='<font style="float:right">'+data[i].date+' '+data[i].time+'</font><b>'+data[i].fullNameRev+'</b>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br><font style="font-size:19px;">'+data[i].mess_task+'</font><br><font style="font-size:14px;">File Attached: <a href="'+data[i].fileDatax[0].path+'" style="color:darkblue;text-decoration:none"><u>'+data[i].fileDatax[0].filename+'</u></a> &nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp<font color="green">Approved and validated</font></font>';
                                       		}
                                       	}else{ html+='<font style="float:right">'+data[i].date+' '+data[i].time+'</font><b>'+data[i].fullNameRev+'</b>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br><font style="font-size:19px;">'+data[i].mess_task+'</font><br><font style="font-size:14px;">File Attached: <a href="'+data[i].fileDatax[0].path+'" style="color:darkblue;text-decoration:none"><u>'+data[i].fileDatax[0].filename+'</u></a> &nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp<button id="btn-Speationasd" tastIDxx="'+data[i].taskid+'" j_idj_id="'+j_id+'" mess_task="'+data[i].mess_task+'" data-toggle="modal" data-target=".bs-azscasasdklisd-modal-lg">Click to Accept</button></font>'; }
                                    html+='</div>'+
                                '</td>'+
                            '</tr>'+
                        '</tbody>'+
                    '</table>';
                    flag = Number(data[i].replies.length);
                    if(flag > 0){
                    	html+='<div style="margin-left:37px;padding-top:5px;">'+
	                        '<table width="100%">';
	                        	for(x = 0; x < flag; x++){
	                        		html+='<tr style="padding:5px;font-family:calibri">'+
	                                    '<td style="width:6%">'+
	                                        '<div style="padding-left:15px;">';
	                                        if(data[i].replies[x].usertype == 2){
	                                            html+='<center><i class="fa fa-user" style="font-size:25px;color:#aeaeae"></i><br><font style="font-size:9px;">Reviewer</font></center>';
	                                        }else{
	                                        	html+='<center><i class="fa fa-user" style="font-size:25px;color:#aeaeae"></i><br><font style="font-size:9px;"><b>Author</b></font></center>';
	                                        }
	                                        html+='</div>'+
	                                    '</td>'+
	                                    '<td style="width:94%;padding:2px;">';
		                                    	if(data[i].replies[x].usertype == 2){
		                                    		html+='<div id="bet2" style="background:#d4e0f4;padding-left:6px;">'+
		                                    		'<font style="float:right">'+data[i].replies[x].date+' '+data[i].replies[x].time+'</font><b>'+data[i].replies[x].u_fname+' '+data[i].replies[x].u_mname+' '+data[i].replies[x].u_lname+'</b>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br><font style="font-size:19px;margin-top:-16px;">'+data[i].replies[x].message+'</font><br>';
		                                    		if(data[i].replies[x].approvedbyeditor == 1){
		                                    			html+='<font style="color:green">Approved and validated</font>';
		                                    		}else{ html+='<button id="btn-Speationasd2" tastIDxx="'+data[i].replies[x].id+'" j_idj_id="'+j_id+'" mess_task="'+data[i].replies[x].message+'" data-toggle="modal" data-target=".bs-azscasasdklisd2-modal-lg">Click to Accept</button></font>'; }
		                                    	}else{
		                                    		html+='<div id="bet2" style="background:#efdba5;padding-left:6px;">'+
		                                    		'<font style="float:right">'+data[i].replies[x].date+' '+data[i].replies[x].time+'</font><b>'+data[i].replies[x].u_fname+' '+data[i].replies[x].u_mname+' '+data[i].replies[x].u_lname+'</b>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br><font style="font-size:19px;margin-top:-16px;">'+data[i].replies[x].message+'</font><br>';
		                                    		if(data[i].replies[x].approvedbyeditor == 1){
		                                    			html+='<font style="color:green">Approved and validated</font>';
		                                    		}else{ html+='<button id="btn-Speationasd2" tastIDxx="'+data[i].replies[x].id+'" j_idj_id="'+j_id+'" mess_task="'+data[i].replies[x].message+'" data-toggle="modal" data-target=".bs-azscasasdklisd2-modal-lg">Click to Accept</button></font>'; }
		                                    	}
	                                        html+='</div>'+
	                                    '</td>'+
	                                '</tr>';
	                        	}
	                        html+='</table>'+
	                    '</div>';
                    }
				}
				$('#listofGeneralTaskHere').html(html);
				if(i < 1){
					$('#listofGeneralTaskHere').html("No result...");
				}
			},error:function(data){console.log(data);}
		});
	}
	$('#listofGeneralTaskHere').on('click','#btn-Speationasd',function(){
		var tastIDxx = $(this).attr('tastIDxx');
		var mess_task = $(this).attr('mess_task');
		var j_idj_id = $(this).attr('j_idj_id');
		$('input[name=taskidggnss]').val(tastIDxx);
		$('input[name=messageRecvvv]').val(mess_task);
		$('input[name=j_idj_id]').val(j_idj_id);
	});
	$('#listofGeneralTaskHere').on('click','#btn-Speationasd2',function(){
		var tastIDxx = $(this).attr('tastIDxx');
		var mess_task = $(this).attr('mess_task');
		var j_idj_id = $(this).attr('j_idj_id');
		$('input[name=taskidggnss2]').val(tastIDxx);
		$('input[name=messageRecvvv2]').val(mess_task);
		$('input[name=j_idj_id2]').val(j_idj_id);
	});
	$('#yesappTask').click(function(){
		document.getElementById("yesappTask").disabled = true;
		$('#yesappTask').html("Please wait...");
		var taskidggnss = $('input[name=taskidggnss]');
		var messageRecvvv = $('input[name=messageRecvvv]');
		var j_idj_id = $('input[name=j_idj_id]');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/azscasasdklisd',
			data:{taskidggnss:taskidggnss.val(), messageRecvvv:messageRecvvv.val(), j_idj_id:j_idj_id.val()},
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					$('.bs-azscasasdklisd-modal-lg').hide('fast');
					alert("SUCCESS: The author of this article will be informed about the task given via email and notification.");
					showAllTaskFRomRev(j_idj_id.val());
					showDetailTAskAct(j_idj_id.val());
				}else{
					alert("ERROR: Slow internet connection. Try again later.");
				}
				document.getElementById("yesappTask").disabled = false;
				$('#yesappTask').html("Yes");
			},error:function(data){alert("ERROR: Try again later.");}
		});
	});
	$('#yesappTask2').click(function(){
		document.getElementById("yesappTask2").disabled = true;
		$('#yesappTask2').html("Please wait...");
		var taskidggnss = $('input[name=taskidggnss2]');
		var messageRecvvv = $('input[name=messageRecvvv2]');
		var j_idj_id = $('input[name=j_idj_id2]');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/azscasasdklisd2',
			data:{taskidggnss:taskidggnss.val(), messageRecvvv:messageRecvvv.val(), j_idj_id:j_idj_id.val()},
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					$('.bs-azscasasdklisd2-modal-lg').hide('fast');
					alert("SUCCESS: The author of this article will be informed about the task given via email and notification.");
					showAllTaskFRomRev(j_idj_id.val());
					showDetailTAskAct(j_idj_id.val());
				}else{
					alert("ERROR: Slow internet connection. Try again later.");
				}
				document.getElementById("yesappTask2").disabled = false;
				$('#yesappTask2').html("Yes");
			},error:function(data){alert("ERROR: Try again later.");}
		});
	});

	$('#messageforTaskofAut').keyup(function(){
		var messageforTaskofAut = $('textarea[name=messageforTaskofAut]');
		if(messageforTaskofAut.val() !== ""){ document.getElementById("sbmtNewTskN").disabled = false;
		}else{ document.getElementById("sbmtNewTskN").disabled = true; }
	});
	$('#newT').click(function(){
		$("#modalTemp").slideDown();
		document.getElementById("sbmtNewTskN").disabled = true;
	});
	$('#cancelsbmtNewTskN').click(function(){
		$("#modalTemp").slideUp();
		$('input[name=messageforTaskofAut]').val("");
		$('.bs-azasadawasasdasdasdawad-modal-lg').hide();
	});
	var draggable = $('#modalTemp'); //element
	draggable.on('mousedown', function(e){
		var dr = $(this).addClass("dtrag").css("cursor","move");
		height = dr.outerHeight();
		width = dr.outerWidth();
		ypos = dr.offset().top + height - e.pageY,
		xpos = dr.offset().left + width - e.pageX;
		$(document.body).on('mousemove', function(e){
			var itop = e.pageY + ypos - height;
			var ileft = e.pageX + xpos - width;
			if(dr.hasClass("dtrag")){
				dr.offset({top: itop,left: ileft});
			}
		}).on('mouseup', function(e){
				dr.removeClass("dtrag");
		});
	});
	$('#uploadfile222022').on('submit',function(e){
		e.preventDefault();
		$(this).ajaxSubmit({
			beforeSend:function(){
				$('#psw1x1').html("<i>File is uploading, please wait...</i>");
				$('#prog').attr('value','0');
				$('#percentageCMP').html('0%');
			},uploadProgress:function(event, position, total, percentageComplete){
				$('#prog').attr('value',percentageComplete);
				$('#percentageCMP').html(percentageComplete+'%');
				/*if(percentageComplete == 100){
					document.getElementById("submitNWjourmn").disabled = false;
				}*/
			},success:function(data){
				$('#psw1x12').html("<font color='green'>File uploaded successfully...</font>");
				getFILEd();
			},error:function(){
				alert("ERROR: You can change the name of the file, please contact the Administrator if it still doens't work.");
			}
		});
	});
	$('#sbmtNewTskN').click(function(){
		var journalID4task = $('input[name=journalID4task]');
		var idofAuthorPPOx = $('input[name=idofAuthorPPOx]');
		var messageforTaskofAut = $('textarea[name=messageforTaskofAut]');
		$('#sbmtNewTskN').html('Please wait...');
		document.getElementById("sbmtNewTskN").disabled = true;
		if(messageforTaskofAut.val() !== ""){
			$('#messageforTaskofAut').css('border','1px solid #aeaeae');
			$.ajax({
				type:'ajax',
				method:'get',
				url:'gtEdtrRr/sbmtMessageAsTasksx',
				data:{journalID4task:journalID4task.val(), idofAuthorPPOx:idofAuthorPPOx.val(), messageforTaskofAut:messageforTaskofAut.val(), emailofaut4444:emailofaut4444, idofAut4444:idofAut4444, titlBBnnx:titlBBnnx},
				async:true,
				dataType:'json',
				success:function(data){
					if(data.success){
						$('.bs-azasadawasasdasdasdawad-modal-lg').hide('fast');
						alert("SUCCESS: Tasks submitted successfully and was emailed to the author of this article");
						$('#firstContextBes22').hide();
						$("#firstContextBes21").show();
						$('textarea[name=messageforTaskofAut]').val("");
						$('#uploadfile222022')[0].reset();
						$("#percentageCMP").html("0%");
						$('#prog').attr('value','0');
						$('#psw1x12').html("");
						getListofTaskMy(journalID4task.val());
					}else{
						alert("ERROR: Slow internet connection. Try again later.");
					}
					$('#sbmtNewTskN').html('Submit Task');
					document.getElementById("sbmtNewTskN").disabled = false;
				},error:function(data){alert("ERROR: Try again later.");}
			});
		}else{
			$('#sbmtNewTskN').html('Submit Task');
			document.getElementById("sbmtNewTskN").disabled = false;
			alert("ERROR: Please fill field(s) marked in red!");
			$('#messageforTaskofAut').css('border','1px solid red');
		}
	});
	function showAllTaskFRomRev(j_id){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtEdtrRr/getAllGEnTaskPlHre',
			data:{idData:j_id},
			async:true,
			dataType:'json',
			success:function(data){
				var num = 0, flag = 0;
				var html = '';
				var i, a = 0, x = 0;
				num = Number(data.length);
				for(i = 0;i<num;i++){
					html+='<table width="100%" style="margin-top:8px;">'+
                        '<tbody style="font-family:calibri">'+
                            '<tr style="padding:5px;">'+
                                '<td style="width:6%">'+
                                    '<div>'+
                                        '<center><i class="fa fa-user" style="font-size:25px;color:#9dc67f"></i><br><font style="font-size:9px;">Reviewer</font></center>'+
                                    '</div>'+
                                '</td>'+
                                '<td style="width:94%">'+
                                    '<div id="bet1" class="fireBaseMesTask" j_id="'+j_id+'" taskID="'+data[i].taskid+'" mesTas="'+data[i].mess_task+'" style="cursor:pointer;padding-left:6px;">';
                                       	if(data[i].approvedbyeditor == 1){
                                       		if(data[i].fileDatax[0].filename == ""){
                                       			html+='<font style="float:right">'+data[i].date+' '+data[i].time+'</font><b>'+data[i].fullNameRev+'</b>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br><font style="font-size:19px;">'+data[i].mess_task+'</font><br><font style="font-size:14px;">File Attached: None &nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp<font color="green">Approved and validated</font></font>';
                                       		}else{
                                       			html+='<font style="float:right">'+data[i].date+' '+data[i].time+'</font><b>'+data[i].fullNameRev+'</b>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br><font style="font-size:19px;">'+data[i].mess_task+'</font><br><font style="font-size:14px;">File Attached: <a href="'+data[i].fileDatax[0].path+'" style="color:darkblue;text-decoration:none"><u>'+data[i].fileDatax[0].filename+'</u></a> &nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp<font color="green">Approved and validated</font></font>';
                                       		}
                                       	}else{ html+='<font style="float:right">'+data[i].date+' '+data[i].time+'</font><b>'+data[i].fullNameRev+'</b>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br><font style="font-size:19px;">'+data[i].mess_task+'</font><br><font style="font-size:14px;">File Attached: <a href="'+data[i].fileDatax[0].path+'" style="color:darkblue;text-decoration:none"><u>'+data[i].fileDatax[0].filename+'</u></a> &nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp<button id="btn-Speationasd" tastIDxx="'+data[i].taskid+'" j_idj_id="'+j_id+'" mess_task="'+data[i].mess_task+'" data-toggle="modal" data-target=".bs-azscasasdklisd-modal-lg">Click to Accept</button></font>'; }
                                    html+='</div>'+
                                '</td>'+
                            '</tr>'+
                        '</tbody>'+
                    '</table>';
                    flag = Number(data[i].replies.length);
                    if(flag > 0){
                    	html+='<div style="margin-left:37px;padding-top:5px;">'+
	                        '<table width="100%">';
	                        	for(x = 0; x < flag; x++){
	                        		html+='<tr style="padding:5px;font-family:calibri">'+
	                                    '<td style="width:6%">'+
	                                        '<div style="padding-left:15px;">';
	                                        if(data[i].replies[x].usertype == 2){
	                                            html+='<center><i class="fa fa-user" style="font-size:25px;color:#aeaeae"></i><br><font style="font-size:9px;">Reviewer</font></center>';
	                                        }else{
	                                        	html+='<center><i class="fa fa-user" style="font-size:25px;color:#aeaeae"></i><br><font style="font-size:9px;"><b>Author</b></font></center>';
	                                        }
	                                        html+='</div>'+
	                                    '</td>'+
	                                    '<td style="width:94%;padding:2px;">';
		                                    	if(data[i].replies[x].usertype == 2){
		                                    		html+='<div id="bet2" style="background:#d4e0f4;padding-left:6px;">'+
		                                    		'<font style="float:right">'+data[i].replies[x].date+' '+data[i].replies[x].time+'</font><b>'+data[i].replies[x].u_fname+' '+data[i].replies[x].u_mname+' '+data[i].replies[x].u_lname+'</b>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br><font style="font-size:19px;margin-top:-16px;">'+data[i].replies[x].message+'</font><br>';
		                                    		if(data[i].replies[x].approvedbyeditor == 1){
		                                    			html+='<font style="color:green">Approved and validated</font>';
		                                    		}else{ html+='<button id="btn-Speationasd2" j_idj_id="'+j_id+'" tastIDxx="'+data[i].replies[x].id+'" mess_task="'+data[i].replies[x].message+'" data-toggle="modal" data-target=".bs-azscasasdklisd2-modal-lg">Click to Accept</button></font>'; }
		                                    	}else{
		                                    		html+='<div id="bet2" style="background:#efdba5;padding-left:6px;">'+
		                                    		'<font style="float:right">'+data[i].replies[x].date+' '+data[i].replies[x].time+'</font><b>'+data[i].replies[x].u_fname+' '+data[i].replies[x].u_mname+' '+data[i].replies[x].u_lname+'</b>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br><font style="font-size:19px;margin-top:-16px;">'+data[i].replies[x].message+'</font><br>';
		                                    		if(data[i].replies[x].approvedbyeditor == 1){
		                                    			html+='<font style="color:green">Approved and validated</font>';
		                                    		}else{ html+='<button id="btn-Speationasd2" tastIDxx="'+data[i].replies[x].id+'" j_idj_id="'+j_id+'" mess_task="'+data[i].replies[x].message+'" data-toggle="modal" data-target=".bs-azscasasdklisd2-modal-lg">Click to Accept</button></font>'; }
		                                    	}
	                                        html+='</div>'+
	                                    '</td>'+
	                                '</tr>';
	                        	}
	                        html+='</table>'+
	                    '</div>';
                    }
				}
				$('#listofGeneralTaskHere').html(html);
				if(i < 1){
					$('#listofGeneralTaskHere').html("No result...");
				}
			},error:function(data){console.log(data);}
		});
	}
	function getListofTaskMy(j_id){
		showAllTaskFRomRev(j_id);
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtEdtrRr/getAllTaskNNw',
			data:{idData:j_id},
			async:true,
			dataType:'json',
			success:function(data){
				console.log(data);
				var num = 0, flag = 0;
				var html = '';
				var i, a = 0, x = 0;
				num = Number(data.length);
				for(i = 0;i<num;i++){
					html+='<table width="100%" style="margin-top:8px;">'+
                        '<tbody style="font-family:calibri">'+
                            '<tr style="padding:5px;">'+
                                '<td style="width:10%">'+
                                    '<div>'+
                                        '<center><i class="fa fa-user" style="font-size:25px;color:#9dc67f"></i><br><font style="font-size:9px;">You</font></center>'+
                                    '</div>'+
                                '</td>'+
                                '<td style="width:80%">'+
                                    '<div id="bet1" style="cursor:pointer;padding-left:6px;"><font style="font-size:10px;float:right;">'+data[i].date+' '+data[i].time+'</font>';
                                        if(data[i].approvedbyeditor == 1){ html+='Status: <font color="green">Accepted...</font>';
                                        }else{ html+='Status: <font color="#bf2618">Pending...</font>'; }
                                        if(data[i].fileDatax[0].filename == ""){
                                        	html+='<br><font style="font-size:15px">'+data[i].mess_task+'</font>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br>Attached File: None';
                                        }else{
                                        	html+='<br><font style="font-size:15px">'+data[i].mess_task+'</font>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br>Attached File: <u><a href="'+data[i].fileDatax[0].path+'" style="text-decoration:none;color:darkblue;"><button>'+data[i].fileDatax[0].filename+'</button></a></u>';
                                        }
                                    html+='</div>'+
                                '</td>'+
                                '<td style="width:10%;padding:2px;" align="center">'+
                                	'<font id="fireBaseMesTask" j_id="'+j_id+'" taskID="'+data[i].taskid+'" mesTas="'+data[i].mess_task+'" class="btn btn-default" style="padding:8px;width:70%;"><i class="fa fa-mail-reply-all"></i></font>'+
                                '</td>'+
                            '</tr>'+
                        '</tbody>'+
                    '</table>';
                    flag = Number(data[i].replies.length);
                    if(flag > 0){
                    	html+='<div style="margin-left:37px;padding-top:5px;">'+
	                        '<table width="100%">';
	                        	for(x = 0; x < flag; x++){
	                        		html+='<tr style="padding:5px;font-family:calibri">'+
	                                    '<td style="width:10%">'+
	                                        '<div style="padding-left:10px;">';
	                                        if(data[i].replies[x].usertype == 2){
	                                            html+='<center><i class="fa fa-user" style="font-size:25px;color:#aeaeae"></i><br><font style="font-size:9px;">You</font></center>';
	                                        }else{
	                                        	html+='<center><i class="fa fa-user" style="font-size:25px;color:#aeaeae"></i><br><font style="font-size:9px;"><b>Author</b></font></center>';
	                                        }
	                                        html+='</div>'+
	                                    '</td>'+
	                                    '<td style="width:80%;padding:2px;">';
		                                    	if(data[i].replies[x].usertype == 2){
		                                    		html+='<div id="bet2" style="background:#d4e0f4;padding-left:6px;">'+
		                                    		'<font style="font-size:10px;float:right">'+data[i].replies[x].date+' '+data[i].replies[x].time+'</font>';
			                                    		if(data[i].replies[x].approvedbyeditor == 1){
			                                    			html+='Status: <font style="color:green">Accepted</font><br>';
			                                    		}else{ html+='Status: <font style="color:#c42317">Pending...</font><br>'; }
			                                    		html+='<font style="font-size:15px">'+data[i].replies[x].message+'</font>';
		                                    	}else{
		                                    		html+='<div id="bet2" style="background:#efdba5;padding-left:6px;">'+
		                                    		'<font style="font-size:10px;float:right">'+data[i].replies[x].date+' '+data[i].replies[x].time+'</font>'+
			                                    	'<font style="font-size:15px">'+data[i].replies[x].message+'</font>';
		                                    	}
	                                        html+='</div>'+
	                                    '</td>'+
	                                    '<td style="width:10%"></td>'+
	                                '</tr>';
	                        	}
	                        html+='</table>'+
	                    '</div>';
                    }
				}
				$('#resListofTaskConv').html(html);
				$('#tttXg').html("<b>"+i+"</b>");
				if(i < 1){
					$('#resListofTaskConv').html("No result...");
				}
			},error:function(data){console.log(data);}
		});
	}

	function getFILEd(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtEdtrRr/getListIDdd',
			async:true,
			dataType:'json',
			success:function(data){
				$('#firstContextBes21').hide();
				$('#firstContextBes22').show();
				var html = '';
				html += '<tr>'+
                    '<td style="width:30%" align="center"><img src="nwng/msword.png" style="width:70%;height:35%;"></td>'+
                    '<td style="width:70%;padding:3px;"><div style="height:54%;">File Name: '+data[0].filename+'</div></td>'+
                '</tr>';
				$('input[name=cpyRowIDofNEWFLLE]').val(data[0].fileid);
				$('#basedspFileNNd').html(html);
			},error:function(data){console.log(data);}
		});
	}


	$('#closeThisModal1').click(function(){
		$('.bs-viewAllTRKSxxrev-modal-lg').hide();
	});
	function showLisTRevvwxx2xx2hj(dataIDjournal){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/getListofAssnedRE',
			data:{artID:dataIDjournal},
			async:true,
			dataType:'json',
			success:function(data){
				console.log(data);
				var num = 0, flag = 0;
				var html = '', sta = '';
				var i, a = 0, nwCntT = 0, kx = 0;
				if(!data){
					num = 5;
				}else{
					num = Number(data.length);
				}
				if(num < 4){
					flag = num;
					num = 4;
				}
				for(i = 0;i<num;i++){
					a++;
					sta = '';
					if(i > flag - 1){
						html+='<tr id="tabData" style="background:white;height:47px;">'+
							'<td style="padding:7px;width:65%;"></td>'+
							'<td style="width:10%;padding:7px;"></td>'+
							'<td style="width:15%;padding:7px;"></td>'+
							'<td style="width:10%;padding:7px;"></td>'+
						'</tr>';
					}else{
						nwCntT++;
						html+='<tr id="tabData">'+
							'<td style="padding:7px;width:65%;">'+
								'<div style="height:40px;">'+
									'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
										'<div class="col-md-1" style="font-size:10px;padding:0px;">'+a+'</div>'+
										'<div class="col-md-2" style="padding:0px;"><img src="nwng/user.png" style="width:40px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
										'<div class="col-md-6" style="padding:0px;">'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>';
										if(data[i].deaddateass == "" || data[i].deadtimeass == ""){
											html+='<div class="col-md-3" style="padding:0px;">Date of acceptance - not set</div>';
										}else{
											html+='<div class="col-md-3" style="padding:0px;"><small>MM-DD-YYYY</small><br>'+data[i].deaddateass+'&nbsp&nbsp|&nbsp&nbsp'+data[i].deadtimeass+'</div>';
										}
									html+='</div>'+
								'</div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<font style="color:#c62513">';
									if(data[i].stat == 'pending'){
										html+='Invitation idle';
									}else{
										html+='...';
									}
								html+='</font>'+
							'</td>'+
							'<td style="width:15%;padding:7px;">';
							if(data[i].finalapproval == 1){
								html+='<font style="color:green;">Approved</font>';
							}else{
								html+='<font style="color:#c62513">';
									if(data[i].stat == 'pending'){
										html+='...';
									}else{
										html+='Checking...';
									}
								html+='</font>';
							}
							html+='</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<font class="btn btn-danger" id="REmAssgndRev" dataIDjournal="'+dataIDjournal+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" data-toggle="modal" data-target=".bs-xxssaas2dREvmREv-modal-lg" style="padding:3px;padding-left:7px;padding-right:7px;float:right" title="Remove as Reviewer"><i class="fa fa-remove"></i></font>'+
								'<font class="btn btn-default" id="viewDetASsnRcxx2" dateapp="'+data[i].dateapp+'" timeapp="'+data[i].timeapp+'" statApp="'+data[i].finalapproval+'" bio_state="'+data[i].bio_state+'" mailingaddrss="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" email="'+data[i].email+'" affiliation="'+data[i].affiliation+'" gender="'+data[i].u_gender+'" countryCode="'+data[i].country_code+'" country="'+data[i].country_name+'" dataIDjournal="'+dataIDjournal+'" userid="'+data[i].userid+'" fName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" data-toggle="modal" data-target=".bs-xxssaas2d2x3-modal-lg" style="padding:3px;padding-left:7px;padding-right:7px;float:right;background:#669b76;color:white;"><i class="fa fa-eye"></i></font>'+
							'</td>'+
						'</tr>';
					}
				}
				$('#cntntBsdRvwrxx212').html(html);
				i = nwCntT;
				$('#tttXg2').html("<b>"+i+"</b>");
			},error:function(data){console.log(data);}
		});
	}

	$('#cntntBsdRvwrxx212').on('click','#REmAssgndRev',function(){
		var dataIDjournal = $(this).attr('dataIDjournal');
		var userid = $(this).attr('userid');
		var fullName = $(this).attr('fullName');
		$('input[name=datakkgggggggidJ]').val(dataIDjournal);
		$('input[name=remUSEEEid]').val(userid);
		$('input[name=revFUllaName]').val(fullName);
		$('#olgRev').html("<b>"+fullName+"</b> will be removed as reviewer of an article entitled: <b>"+titlBBnnx+"</b>. Would you like to proceed?");
	});
	$('#remvRevvvvvvOldd').click(function(){
		var data = $('#olggggglglg').serialize();
		var datidd = $('input[name=datakkgggggggidJ]');
		var revFUllaName = $('input[name=revFUllaName]');
		var remUSEEEid = $('input[name=remUSEEEid]');
		$.ajax({
			type:'ajax',
			method:'POST',
			url:'Cmendwll/revSetReviddw',
			data:data,
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					$('.bs-xxssaas2dREvmREv-modal-lg').hide();
					alert("Reviewer has been successfully removed from reviewing an article");
					showLisTRevvwxx2xx2hj(datidd.val());
				 	showLisTRevvwxx(datidd.val(), remUSEEEid.val());
				}else{ 
					alert("ERROR: Cannot set this time. Try again later..."); 
				}
			},error:function(data){console.log(data);}
		});
	});

	$('#closeThisModal1').click(function(){
		$('.bs-viewAllTRKSxxrev-modal-lg').hide();
	});
	$('#closeThisModal2').click(function(){
		$('.bs-advanceModeXxx1-modal-lg').hide();
	});
	getAlladminXstat();
	function getAlladminXstat(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/getAlDmilipole',
			async:true,
			dataType:'json',
			success:function(data){
				var html1 = '', html2 = '', name = '', typeU = '';
				var i;
				for(i = 0;i<data.length;i++){
					name = ''+data[i].u_fname+' '+data[i].u_mname+' '+data[i].u_lname+'';
					if(data[i].reviewer == 1 && data[i].editor == 1){
						html1+='<option name="listOFadmxxn" value="'+data[i].userid+'" style="padding:10px;">'+name.toUpperCase()+'     -     Editor and Reviewer</option>';
						typeU = 'Editor and Reviewer';
					}else if(data[i].editor == 1 && data[i].reviewer == 0){
						html1+='<option name="listOFadmxxn" value="'+data[i].userid+'" style="padding:10px;">'+name.toUpperCase()+'     -     Editor</option>';
						typeU = 'Editor';
					}else if(data[i].reviewer == 1 && data[i].editor == 0){
						html1+='<option name="listOFadmxxn" value="'+data[i].userid+'" style="padding:10px;">'+name.toUpperCase()+'     -     Reviewer</option>';
						typeU = 'Reviewer';
					}else{
						html1+='<option name="listOFadmxxn" value="'+data[i].userid+'" style="padding:10px;">'+name.toUpperCase()+'     -     Author only</option>';
						typeU = 'Author Only';
					}
					
					html2+='<div style="background:#eafcc7;box-shadow:inset 1px 0px 3px rgba(0, 0, 0, .23);border-radius:4px;padding:7px;width:380px;display: inline-block;margin-left:20px;margin-top:7px;">'+
                        '<table width="100%">'+
                            '<tr>'+
                                '<td style="width:72%;color:#838f99;font-size:12px;">'+
                                    '<div class="fox3" style="height:129px;overflow:auto;">'+
                                        '<font style="font-size:14px;"><b>'+name.toUpperCase()+'</b></font>'+
                                        '<br><strong>Affiliation: </strong><div style="padding-left:7px;">'+data[i].affiliation+'</div>'+
                                        '<i class="fa fa-map-marker"></i> <strong>Mailing Address:</strong> <div style="padding-left:7px;">'+data[i].mailingaddrss+'</div>'+
                                        '<i class="fa fa-google"></i> <strong>Email:</strong><div style="padding-left:7px;">elkapitanromaguera@gmail.com</div>'+
                                        '<div style="color:#d31515;padding:5px;"><b>'+typeU+'</b></div>'+
                                    '</div>'+
                                '</td>'+
                                '<td style="width:28%">'+
                                    '<div class="fox3" style="height:129px;overflow:auto;">'+
                                        '<center>'+
                                            '<img src="nwng/user.png" style="width:100%;height:100px;border-radius:5%;border:2px solid white;box-shadow:1px 1px 1px rgba(0, 0, 0, .23)"><br>'+
                                            '<font id="argLSps" data-dismiss="modal" userid="'+data[i].userid+'" class="btn btn-default" style="padding:2px;width:90%;padding-right:7px;padding-left:7px;font-size:9px;margin-top:4px;">Select</font>'+
                                        '</center>'+
                                    '</div>'+
                                '</td>'+
                            '</tr>'+
                        '</table>'+
                    '</div>';
				}
				$('#listOFadmxxn').html(html1);
				$('#cnntOLDdoi1').html(html2);
			},error:function(data){console.log(data);}
		});
	}
	$('#cnntOLDdoi1').on('click','#argLSps',function(){
		var userid = $(this).attr('userid');
		document.getElementById('listOFadmxxn').value = userid;
	});
	// Copied FileUpload for Messaging Ssytem
	$(document).on('change','#file_mod2',function(){
		$('#kllklaaxxtyyy2').slideUp();
		$('#kllklaaxxtyyy1').slideDown();
		var err = 0;
		var fileSize = 0;
		var propertyxx01 = document.getElementById("file_mod2").files[0];
		var image_name = propertyxx01.name;
		$('#attnameFFLdd').html(image_name + "&nbsp&nbsp&nbsp<i id='remFmes' class='fa fa-remove' style='color:darkblue;cursor:pointer;'></i>");
		$('#attnameFFLdd').css('color','black');
		$('#attdataFleSS').hide();
		var file_extension = image_name.split('.').pop().toLowerCase();
		if(jQuery.inArray(file_extension,['doc']) == -1){
			if(jQuery.inArray(file_extension,['docs']) == -1){
				if(jQuery.inArray(file_extension,['docx']) == -1){
					alert("ERROR: We accept Microsoft Word document format only...");
					$('#attnameFFLdd').html("No attached file (1 file per message)");
					$('#attdataFleSS').show();
					$('#attnameFFLdd').css('color','#aeaeae');
					$("input[name=file_mod2]").val("");
				}
			}
		}
		$('#SBmitFF2x2').show();
		$('#SBmitFF2x22321').hide();
		
		fileSize = Number(document.getElementById("file_mod2").files[0].size);
		if(fileSize > 200000000){
			alert("ERROR: File was too large...");
			$('#attnameFFLdd').html("No attached file (1 file per message)");
			$('#attdataFleSS').show();
			$('#attnameFFLdd').css('color','#aeaeae');
			$("input[name=file_mod2]").val("");
			$('#uploadfile_mod2')[0].reset();
		}
	});
	$('#setAnnBTTTffx').click(function(){
		var data = $('#setAnnouncementLIk_form').serialize();
		$.ajax({
			type:'ajax',
			method:'POST',
			url:'Cmendwll/setAnnLNnow',
			data:data,
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					alert("New announcement was submitted successfully!");
					$('#setAnnouncementLIk_form')[0].reset();
					displAnnProj();
				}else{ 
					alert("ERROR: Cannot set this time. Try again later..."); 
				}
			},error:function(data){console.log(data);}
		});
	});
	var d = new Date();
	var fullDate =  d.getMonth()+1 + '/' + d.getDate() + '/' + d.getFullYear();
	displAnnProj();
	function displAnnProj(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/getAllNNNNpolxx',
			async:true,
			dataType:'json',
			success:function(data){
				var html = '', html2 = '', html3 = '';
				var i, active = 0, cntr = 0;
				for(i = 0; i < data.length; i++){
					cntr = 0;
					if(new Date(fullDate) >= new Date(data[i].datestartann) && new Date(fullDate) <= new Date(data[i].dateendann)){
						active++;
						html+='<div style="font-size:11px;padding:2px;margin-top:4px;background:#7cbc87;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42);cursor:pointer;">';
						html2+='<div style="font-size:11px;padding:2px;margin-top:4px;background:white;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42);cursor:pointer;">';
						html2+='<font style="float:right;font-size:12px;">Start: '+data[i].datestartann+' &nbsp&nbsp<b>|</b>&nbsp&nbsp End: '+data[i].dateendann+'</font>'+
	                    '<div style="padding:2px;margin-top:9">'+
	                      '<font><b>Subject: '+data[i].subject+'</b></font><Br>'+
	                      '<font style="font-size:11px;">'+data[i].anndetail+'</font>'+
	                    '</div>'+
	                '</div>';
					}else if(new Date(fullDate) > new Date(data[i].dateendann)){
						cntr = 1;
						html3+='<div style="font-size:11px;padding:2px;margin-top:4px;background:white;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42);cursor:pointer;">';
					}else{
						active++;
						html+='<div style="font-size:11px;padding:2px;margin-top:4px;background:white;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42);cursor:pointer;">';
						html2+='<div style="font-size:11px;padding:2px;margin-top:4px;background:white;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42);cursor:pointer;">';
						html2+='<font style="float:right;font-size:12px;">Start: '+data[i].datestartann+' &nbsp&nbsp<b>|</b>&nbsp&nbsp End: '+data[i].dateendann+'</font>'+
	                    '<div style="padding:2px;margin-top:9">'+
	                      '<font><b>Subject: '+data[i].subject+'</b></font><Br>'+
	                      '<font style="font-size:11px;">'+data[i].anndetail+'</font>'+
	                    '</div>'+
	                '</div>';
					}
					if(cntr == 0){
						html+='<font style="float:right;font-size:12px;">Start: '+data[i].datestartann+' &nbsp&nbsp<b>|</b>&nbsp&nbsp End: '+data[i].dateendann+'</font>'+
	                    '<div style="padding:2px;margin-top:9">'+
	                      '<font><b>Subject: '+data[i].subject+'</b></font><Br>'+
	                      '<font style="font-size:11px;">'+data[i].anndetail+'</font>'+
	                    '</div>'+
	                '</div>';
	            	}else{
	            		html3+='<font style="float:right;font-size:12px;">Start: '+data[i].datestartann+' &nbsp&nbsp<b>|</b>&nbsp&nbsp End: '+data[i].dateendann+'</font>'+
	                    '<div style="padding:2px;margin-top:9">'+
	                      '<font><b>Subject: '+data[i].subject+'</b></font><Br>'+
	                      '<font style="font-size:11px;">'+data[i].anndetail+'</font>'+
	                    '</div>'+
	                '</div>';
	            	}
				}
				$('.klikkxxPop').html(html);
				$('.klikkxxPop2').html(html2);
				$('.klikkxxPop202').html(html3);
				$('#oasoaosd').html(active);
			},error:function(data){console.log(data);}
		});
	}
	$('#shwActvve').click(function(){
		$('.klikkxxPop').slideDown();
		$('.klikkxxPop202').slideUp();
		$('#shwActvve').css('border-bottom','2px solid red');
		$('#shwActvveNonAct').css('border-bottom','none');
		$('#searhchss110').hide();
	});
	$('#shwActvveNonAct').click(function(){
		$('.klikkxxPop').slideUp();
		$('.klikkxxPop202').slideDown();
		$('#shwActvve').css('border-bottom','none');
		$('#shwActvveNonAct').css('border-bottom','2px solid red');
		$('#searhchss110').show();
	});
	$('#SBmitFF2x22321').click(function(){
		$('#remFmes').hide();
		$('#psw1x1xxxx01').html("<i>Sending your message, please wait...</i>");
		$('#PartAsendingNNe1').hide();
		$('#PartAsendingNNe2').show();
		var data = $('#uploadfile_mod2').serialize();
		$.ajax({
			type:'ajax',
			method:'POST',
			url:'Cmendwll/sbmtMessPLxxgge',
			data:data,
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					$('#psw1x1xxxx01').html("<font color='green'>Message Sent</font>");
					$('#uploadfile_mod2')[0].reset();
					$('#PartAsendingNNe1').show();
					$('#PartAsendingNNe2').hide();
					$('#progxxxx01').hide();
					$('#attnameFFLdd').html("No attached file (1 file per message)");
					$('#attdataFleSS').show();
					$('#attnameFFLdd').css('color','#aeaeae');
					$("input[name=file_mod2]").val("");
					$('#remFmes').show();
					alert("Message sent!");
					$('#SBmitFF2x2').hide();
					$('#SBmitFF2x22321').show();
				}else{
					alert("ERROR: Cannot send this time. Try again later...");
				}
			},error:function(data){console.log(data);}
		});
	});
	//document.getElementById("SBmitFF2x2").disabled = true;
	$('#foxMEsARea').keyup(function(){
		var foxMEsARea = $('textarea[name=foxMEsARea]');
		if(foxMEsARea.val() !== ""){
			document.getElementById("SBmitFF2x2").disabled = false;
		}else{
			document.getElementById("SBmitFF2x2").disabled = true;
		}
	});
	$('#attnameFFLdd').on('click','#remFmes',function(){
		$('#attnameFFLdd').html("No attached file (1 file per message)");
		$('#attdataFleSS').show();
		$('#attnameFFLdd').css('color','#aeaeae');
		$("input[name=file_mod2xxx]").val("");
	});
	$('#resEMmes').click(function(){
		$('#attnameFFLdd').html("No attached file (1 file per message)");
		$('#attdataFleSS').show();
		$('#attnameFFLdd').css('color','#aeaeae');
		$('#uploadfile_mod2')[0].reset();
		document.getElementById("SBmitFF2x2").disabled = true;
	});
	$('#cancelBaseChangeFxxmd').click(function(){
		$('#part2askArtBase').hide();
		$('#part1askArtBase').show();
	});
	$('#attdataFleSS').click(function(){
		$('#kllklaaxxtyyy1').slideUp();
		$('#kllklaaxxtyyy2').slideDown();
	});
	$('#uploadfile_mod2').on('submit',function(e){
		e.preventDefault();
		$(this).ajaxSubmit({
			beforeSend:function(){
				$('#remFmes').hide();
				$('#psw1x1xxxx01').html("<i>Sending your message, please wait...</i>");
				$('#progxxxx01').attr('value','0');
				$('#PartAsendingNNe1').hide();
				$('#PartAsendingNNe2').show();
				$('#progxxxx01').show();
				//$('#percentageCMPxxxx01').html('0%');
			},uploadProgress:function(event, position, total, percentageComplete){
				$('#progxxxx01').attr('value',percentageComplete);
				//$('#percentageCMPxxxx01').html(percentageComplete+'%');
			},success:function(data){
				$('#psw1x1xxxx01').html("<font color='green'>Message Sent</font>");
				$('#uploadfile_mod2')[0].reset();
				$('#PartAsendingNNe1').show();
				$('#PartAsendingNNe2').hide();
				$('#progxxxx01').hide();
				$('#attnameFFLdd').html("No attached file (1 file per message)");
				$('#attdataFleSS').show();
				$('#attnameFFLdd').css('color','#aeaeae');
				$("input[name=file_mod2]").val("");
				$('#remFmes').show();
				$('#SBmitFF2x2').hide();
				$('#SBmitFF2x22321').show();
				alert("Message sent!");
				//getAllMyMessgExx202sent();
			},error:function(){
				alert("ERROR: You can change the name of the file, please contact the Administrator if it still doens't work.");
				$('#PartAsendingNNe1').show();
				$('#PartAsendingNNe2').hide();
				$('#progxxxx01').hide();
				$('#attnameFFLdd').html("No attached file (1 file per message)");
				$('#attdataFleSS').show();
				$('#attnameFFLdd').css('color','#aeaeae');
				$("input[name=file_mod2]").val("");
				$('#remFmes').show();
				$('#SBmitFF2x2').hide();
				$('#SBmitFF2x22321').show();
			}
		});
	});
	$('#keepILSMS').on('click','#repLiXX',function(){
		var senderID = $(this).attr('senderID');
		var message = $(this).attr('message');
		var path = $(this).attr('path');
		var file = $(this).attr('file');
		var from = $(this).attr('from');
		var html = '';
		document.getElementById('listOFadmxxn').value = senderID;
		html += 'From: <b>'+from+'</b><br>Message:<br><div style="padding-left:10px;">'+message+'</div><br>Attached file: <a href="'+path+'" target="__blank">'+file+'</a>';
		$('#Idenfry019').html(html);
	});
	$('#sendMes').click(function(){
		$('#createAreaMes001').slideUp();
		$('#SendMesArea').slideDown();
		//getAllMyMessgExx202sent();
	});
	$('#createMes').click(function(){
		$('#SendMesArea').slideUp();
		$('#createAreaMes001').slideDown();
	});
	$('#cntntBsdRvwrxx212').on('click','#viewDetASsnRcxx2',function(){
		var html = '', html2 = '', html3 = '';
		var bio_state = $(this).attr('bio_state');
		var mailingaddrss = $(this).attr('mailingaddrss');
		var fax = $(this).attr('fax');
		var phone = $(this).attr('phone');
		var url = $(this).attr('url');
		var orcidid = $(this).attr('orcidid');
		var email = $(this).attr('email');
		var affiliation = $(this).attr('affiliation');
		var gender = $(this).attr('gender');
		var countryCode = $(this).attr('countryCode');
		var country = $(this).attr('country');
		var dataIDjournal = $(this).attr('dataIDjournal');
		var userid = $(this).attr('userid');
		var fName = $(this).attr('fName');
		var statApp = $(this).attr('statApp');
		var dateapp = $(this).attr('dateapp');
		var timeapp = $(this).attr('timeapp');
		if(statApp == 1){
			html = '<center>Task Status: <font style="color:green"><b>Approved</b><br>Date: '+dateapp+'<br>Time: '+timeapp+'</font></center>';
		}else{
			html = '<center>Task Status: <font style="color:#c62513">Checking...</font></center>';
		}
		html2 += '<b>Name</b>: '+fName+'<br>'+
			'<b>Country</b>: '+country+'<br>'+
			'<b>Country Code</b>: '+countryCode+'<br>'+
			'<b>Gender</b>: '+gender+'<br>'+
			'<b>Affiliation</b>: '+affiliation+'<br>'+
			'<b>Email</b>: '+email+'';
		html3 += '<b>ORCID ID</b>: '+orcidid+'<br>'+
			'<b>URL</b>: '+url+'<br>'+
			'<b>Phone</b>: '+phone+'<br>'+
			'<b>Fax</b>: '+fax+'<br>'+
			'<b>Mailing Address</b>: '+mailingaddrss+'<br>'+
			'<b>Bio State</b>: '+bio_state+'<br>';
		$('#baseContDetofRevLLp').html(html);
		$('#personLLp').html(html2);
		$('#personLLp2').html(html3);
	});
	$('#submitNewEmployee2x3').click(function(){
		var pOrig = $('input[name=getPassWRD]');
		var confPassGet = $('input[name=passWcntcf]');
		if(confPassGet.val() !== ""){
			$('#passWcntcf').css('border','1px solid #aeaeae');
			if(pOrig.val() == CryptoJS.MD5(confPassGet.val())){
				var data = $('#sbmitEmail_Form').serialize();
				document.getElementById("submitNewEmployee2x3").disabled = true;
				$('#submitNewEmployee2x3').html("Sending invitation. Please wait...");
				$.ajax({
					type:'ajax',
					method:'POST',
					url:'Cmendwll/sbmitEmail',
					data:data,
					async:true,
					dataType:'json',
					success:function(data){
						if(data.success){
							$('.bs-confirmBan-modal-lg').hide();
							$('#noteArr').show();
							$('#noteArr').html(""+fullNameXn+" successfully registered!");
							$("#noteArr").delay(5200).fadeOut(300);
							$('input[name=subjctDtail]').val("");
							document.getElementById("submitNewEmployee2x3").disabled = false;
							$('#submitNewEmployee2x3').html("Send Invitation");
							showListPendingUsr(); showListPendingUsr2();
						}else{
							alert("ERROR: Slow network, try again later");
							document.getElementById("submitNewEmployee2x3").disabled = false;
							$('#submitNewEmployee2x3').html("Send Invitation");
						}
					},error:function(data){console.log(data);}
				});
			}else{
				alert("ERROR: Password did not matched! exiting...");
				window.location.href = "Cmendwll/lcklc";
			}
		}else{
			alert("ERROR: Please fill field(s) marked in red!");
			$('#passWcntcf').css('border','1px solid red');
		}
	});
	$('#addThsAut').click(function(){
		var data = $('#form-SaveAuthor').serialize();
		var err = 0;
		var autEmail = $('input[name=autEmail]');
		var insComp = $('input[name=insComp]');
		var authorName = $('input[name=authorName]');
		if(autEmail.val() == ""){
			$('#autEmail').css('border','1px solid red');err = 1;
		}else{
			if(mail(autEmail.val()) == 1){
				$('#autEmail').css('border','1px solid red');err = 1;
			}else{
				$('#autEmail').css('border','1px solid #aeaeae');
			}
		}
		if(insComp.val() == ""){
			$('#insComp').css('border','1px solid red');err = 1;
		}else{
			$('#insComp').css('border','1px solid #aeaeae');
		}
		if(authorName.val() == ""){
			$('#authorName').css('border','1px solid red');err = 1;
		}else{
			$('#authorName').css('border','1px solid #aeaeae');
		}
		if(err !== 1){
			$.ajax({
				type:'ajax',
				method:'POST',
				url:'gtReglr/sbmitNewAuthor',
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
		}else{alert("ERROR: Please fill the field(s) marked in red!");}
	});
	$('#clickAddNwJJrxx').click(function(){
		showAuthojrxxs();
		callDocs();
	});
	var docxXx = 0;
	function callDocs(){
		$.ajax({
			type:'ajax',
			url:'gtReglr/getNameofFile',
			async:true,
			dataType:'json',
			success:function(data){
				if(data[0].filename !== null){
					$('#uploadfile')[0].reset();
					var html = '';
					html += ''+data[0].filename+' &nbsp&nbsp<button id="redhatREmFile" style="position:absolute"> X </button>';
					$('#duscxx').html(html);
					$('#duscxx').css('color','black');
					docxXx = 1;
					document.getElementById("submitNWjourmn").disabled = false;
					document.getElementById("file").disabled = true;
					document.getElementById("SBmitFF").disabled = true;
				}else{
					document.getElementById("submitNWjourmn").disabled = true;
					document.getElementById("file").disabled = false;
					document.getElementById("SBmitFF").disabled = false;
					$('#duscxx').html('<font style="color:#aeaeae">No file</font>');
					$("#psw1x1").html("");
					$('#prog').attr('value','0');
					$('#percentageCMP').html('0%');
				}
			},error:function(data){console.log(data);}
		});
	}
	$('#duscxx').on('click','#redhatREmFile',function(){
		$.ajax({
			type:'ajax',
			url:'gtReglr/remFileAtt',
			async:true,
			dataType:'json',
			success:function(data){
				callDocs();
			},error:function(data){console.log(data);}
		});
	});
	function showAuthojrxxs(){
		var xp = $('input[name=usridfrAut]');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReglr/getlslsaauthor',
			data:{givenID:xp.val()},
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
	
	$(document).on('change','#file',function(){
		var err = 0;
		var fileSize = 0;
		var property = document.getElementById("file").files[0];
		var image_name = property.name;
		var file_extension = image_name.split('.').pop().toLowerCase();
		if(jQuery.inArray(file_extension,['pdf']) == -1){
			alert("ERROR: We accept PDF file format only...");
			$('#uploadfile')[0].reset();
		}
		fileSize = Number(document.getElementById("file").files[0].size);
		if(fileSize > 4500100){
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
	$('#submitNewEmployee').click(function(){
		$('#submitNewEmployee').html("Please wait...");
		document.getElementById("submitNewEmployee").disabled = true;
		var getPassWRD = $('input[name=getPassWRD]');
		var inpTTdConfpassword = $('input[name=inpTTdConfpassword]');
		var dataPass = CryptoJS.MD5(inpTTdConfpassword.val());
		if(inpTTdConfpassword.val() == ""){
			$('#inpTTdConfpassword').css('border','1px solid red');
			$('#invalidMes').html("Please fill the field marked in red..");
			$('#submitNewEmployee').html("Accept");
			document.getElementById("submitNewEmployee").disabled = false;
		}else{
			$('#inpTTdConfpassword').css('border','1px solid #aeaeae');
			if(dataPass == getPassWRD.val()){
				$('#invalidMes').html("");
				var data = $('#requestAcc_frm').serialize();
				$.ajax({
					type:'ajax',
					method:'POST',
					url:'Cmendwll/requestACcC',
					data:data,
					async:true,
					dataType:'json',
					success:function(data){
						if(data.success){
							$('#requestAcc_frm')[0].reset();
							$('.bs-confirmBan-modal-lg').hide();
							$('#noteArr').show();
							$('#noteArr').html(""+fullNameXn+" successfully registered!");
							$("#noteArr").delay(5200).fadeOut(300);
							showListPendingUsr();
						}else{
							alert("ERROR: Check your internet connection or try again later. You can also report this issue to the Developer of this System.");
						}
						document.getElementById("submitNewEmployee").disabled = false;
						$('#submitNewEmployee').html("Accept");
					},error:function(data){console.log(data);}
				});
			}else{
				$('#invalidMes').html("<i class='fa fa-warning'></i> Invalid Password!");
				hdehde();
			}
		}
	});
	$('#Utype').change(function(){
		var e = document.getElementById("Utype");
		var strOpUser = e.options[e.selectedIndex].value;
		if(strOpUser !== 4){
			$.ajax({
				type:'ajax',
				method:'get',
				url:'Cmendwll/asdawliansdlkawasdadawjbgnljkassaw',
				data:{OP:strOpUser},
				async:true,
				dataType:'json',
				success:function(data){
					if(data.success){
						window.location.href = "Cmendwll?epr=artcl";
					}
				},error:function(data){console.log(data);}
			});
		}
	});
	function hdehde(){
		setTimeout(function(){
			window.location.href = "Cmendwll/lcklc";
		},2000);
	}
	var indica2r4slide = 0, absol1 = 0, absol2 = 0, absol3 = 0, absol4 = 0, absol5 = 0;
	$('#btn-Slider1').click(function(){
		if(absol1 == 1){
			$('#slideBasis101').html('<img src="nwng/slider2/1.jpg" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);width:800px;height:450px;">');
		}else{
			$('#slideBasis101').html('<img src="nwng/slider/1.jpg" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);width:800px;height:450px;">');
		}
		indica2r4slide = 1;
	});
	$('#btn-Slider2').click(function(){
		if(absol2 == 1){
			$('#slideBasis101').html('<img src="nwng/slider2/2.jpg" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);width:800px;height:450px;">');
		}else{
			$('#slideBasis101').html('<img src="nwng/slider/2.jpg" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);width:800px;height:450px;">');
		}
		indica2r4slide = 2;
	});
	$('#btn-Slider3').click(function(){
		if(absol3 == 1){
			$('#slideBasis101').html('<img src="nwng/slider2/3.jpg" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);width:800px;height:450px;">');
		}else{
			$('#slideBasis101').html('<img src="nwng/slider/3.jpg" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);width:800px;height:450px;">');
		}
		indica2r4slide = 3;
	});
	$('#btn-Slider4').click(function(){
		if(absol4 == 1){
			$('#slideBasis101').html('<img src="nwng/slider2/4.jpg" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);width:800px;height:450px;">');
		}else{
			$('#slideBasis101').html('<img src="nwng/slider/4.jpg" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);width:800px;height:450px;">');
		}
		indica2r4slide = 4;
	});
	$('#btn-Slider5').click(function(){
		if(absol5 == 1){
			$('#slideBasis101').html('<img src="nwng/slider2/5.jpg" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);width:800px;height:450px;">');
		}else{
			$('#slideBasis101').html('<img src="nwng/slider/5.jpg" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);width:800px;height:450px;">');
		}
		indica2r4slide = 5;
	});

	// Image Cropping
	$image_crop = $('#image_demo').croppie({
		enableExif:true,
		viewport:{
			width:1600,
			height:450,
			type:'square' // circle
		},
		boundary:{
			width:1660,
			height:500
		}
	});
	
	$('#insert_image').on('change',function(){
		$('#notDemo').hide();
		$('#insert_image').hide();
		$('#submitBTTR').show();
		$('#image_demo').show();
		var reader = new FileReader();
		reader.onload = function(event){
			$image_crop.croppie('bind', {
				url:event.target.result
			}).then(function(){
				console.log('jquery bind complete');
			});
		}
		reader.readAsDataURL(this.files[0]);
	});
	$('#cropNowimg').click(function(event){
		document.getElementById("cropNowimg").disabled = true;
		$('#progxxxx012').show();
		$('#psw1x1xxxx012').show();
		var textar = $('textarea[name=tagLinexx2oxx]');
		var datasel = $("#sldierAssto option:selected").attr('data-id');
    	if(textar.val() == ""){
    		$('#tagLinexx2oxx').css('border','1px solid red');
    		alert("ERROR: Please fill field marked with red!");
    	}else{
    		$('#tagLinexx2oxx').css('border','1px solid #aeaeae');
    		$image_crop.croppie('result', {
				type:'canvas',
				size:'viewport'
			}).then(function(response){
				$.ajax({
					beforeSend:function(){
						$('#remFmes').hide();
						$('#psw1x1xxxx012').html("<i>Sending your message, please wait...</i>");
						$('#progxxxx012').attr('value','0');
						$('#progxxxx012').show();
					},
					uploadProgress:function(event, position, total, percentageComplete){
						$('#progxxxx012').attr('value',percentageComplete);
						//$('#percentageCMPxxxx01').html(percentageComplete+'%');
					},
					method:'POST',
					url:'Cmendwll/uploadMyProfImage',
					data:{'image':response, 'indi':datasel, 'textar':textar.val()},
					success:function(data){
						alert("Image uploaded successfully!");
						document.getElementById("cropNowimg").disabled = false;
						$('.bs-UploadXpli-modal-lg').hide();
						$('#progxxxx012').hide();
						$('#psw1x1xxxx012').hide();
						$('#submitBTTR').hide();
						$('#image_demo').hide();
						$('#notDemo').show();
						$('#insert_image').show();
						$('#insert_image').val("");
						showAllSliderIMG();
					},error:function(){
						alert("ERROR: You can change the name of the file, please contact the Administrator if it still doens't work.");
					}
				});
			})
    	}
	});

	// Image Cropping 4
	$image_crop_4 = $('#image_demo_4').croppie({
		enableExif:true,
		viewport:{
			width:800,
			height:600,
			type:'square' // circle
		},
		boundary:{
			width:900,
			height:700
		}
	});
	
	$('#insert_image_4').on('change',function(){
		$('#notDemo_4').hide();
		$('#insert_image_4').hide();
		$('#submitBTTR_4').show();
		$('#image_demo_4').show();
		var reader = new FileReader();
		reader.onload = function(event){
			$image_crop_4.croppie('bind', {
				url:event.target.result
			}).then(function(){
				console.log('jquery bind complete');
			});
		}
		reader.readAsDataURL(this.files[0]);
	});
	
	$('#cropNowimg_4').click(function(event){
		document.getElementById("cropNowimg_4").disabled = true;
		$('#progxxxx012_4').show();
		$('#psw1x1xxxx012_4').show();
		var inptTitle = $('input[name=titleNewsASdxp]');
		var textar = $('textarea[name=tagLinexx2oxx_4]');
		var newwebsiteLink = $('input[name=newwebsiteLink]');
		//var datasel = $("#sldierAssto option:selected").attr('data-id');
    	if(textar.val() == "" && inptTitle.val() == ""){
    		alert("ERROR: Please fill field(s)");
    	}else{
    		$image_crop_4.croppie('result', {
				type:'canvas',
				size:'viewport'
			}).then(function(response){
				$.ajax({
					beforeSend:function(){
						$('#psw1x1xxxx012_4').html("<i>Saving data... Please wait...</i>");
						$('#progxxxx012_4').attr('value','0');
						$('#progxxxx012_4').show();
					},
					uploadProgress:function(event, position, total, percentageComplete){
						$('#progxxxx012_4').attr('value',percentageComplete);
						//$('#percentageCMPxxxx01').html(percentageComplete+'%');
					},
					method:'POST', // uploadMyProfImage
					url:'Cmendwll/uploadNewsxOlx',
					data:{'image':response, 'intitle':inptTitle.val(), 'textar':textar.val(), 'newwebsiteLink':newwebsiteLink.val()},
					success:function(data){
						alert("Image uploaded successfully!");
						document.getElementById("cropNowimg_4").disabled = false;
						$('#progxxxx012_4').hide();
						$('#psw1x1xxxx012_4').hide();
						$('#submitBTTR_4').hide();
						$('#image_demo_4').hide();
						$('#notDemo_4').show();
						$('#insert_image_4').show();
						$('#insert_image_4').val("");
						$('input[name=titleNewsASdxp]').val("");
						$('textarea[name=tagLinexx2oxx_4]').val("");
						$('input[name=newwebsiteLink]').val("");
						showPlxxiLaNews();
					},error:function(){
						alert("ERROR: You can change the name of the file, please contact the Administrator if it still doens't work.");
					}
				});
			})
    	}
	});

	// Image Cropping 5
	$image_crop_5 = $('#image_demo_5').croppie({
		enableExif:true,
		viewport:{
			width:400,
			height:250,
			type:'square' // circle
		},
		boundary:{
			width:500,
			height:350
		}
	});
	
	$('#insert_image_5').on('change',function(){
		$('#notDemo_5').hide();
		$('#insert_image_5').hide();
		$('#submitBTTR_5').show();
		$('#image_demo_5').show();
		var reader = new FileReader();
		reader.onload = function(event){
			$image_crop_5.croppie('bind', {
				url:event.target.result
			}).then(function(){
				console.log('jquery bind complete');
			});
		}
		reader.readAsDataURL(this.files[0]);
	});
	$('#cropNowimg_5').click(function(event){
		document.getElementById("cropNowimg_5").disabled = true;
		$('#progxxxx012_5').show();
		$('#psw1x1xxxx012_5').show();
		var titleEA = $('textarea[name=titleEA]');
		var textar = $('textarea[name=descrpion]');
		//var datasel = $("#sldierAssto option:selected").attr('data-id');
    	if(textar.val() == ""){
    		alert("ERROR: Please fill field(s)");
    	}else{
    		$image_crop_5.croppie('result', {
				type:'canvas',
				size:'viewport'
			}).then(function(response){
				$.ajax({
					beforeSend:function(){
						$('#psw1x1xxxx012_5').html("<i>Saving data... Please wait...</i>");
						$('#progxxxx012_5').attr('value','0');
						$('#progxxxx012_5').show();
					},
					uploadProgress:function(event, position, total, percentageComplete){
						$('#progxxxx012_5').attr('value',percentageComplete);
						$('#progxxxx012_5').html(percentageComplete+'%');
					},
					method:'POST',
					url:'Cmendwll/uploadaactDtt',
					data:{'image':response, 'titleEA':titleEA.val(), 'textar':textar.val()},
					success:function(data){
						alert("Activity/Event uploaded successfully!");
						document.getElementById("cropNowimg_5").disabled = false;
						$('#progxxxx012_5').hide();
						$('#psw1x1xxxx012_5').hide();
						$('#submitBTTR_5').hide();
						$('#image_demo_5').hide();
						$('#notDemo_5').show();
						$('#insert_image_5').show();
						$('#insert_image_5').val("");
						$('textarea[name=titleEA]').val("");
						$('textarea[name=descrpion]').val("");
						showPlxxiActEvt();
					},error:function(){
						alert("ERROR: You can change the name of the file, please contact the Administrator if it still doens't work.");
					}
				});
			})
    	}
	});
	// Image Cropping 6
	$image_crop_6 = $('#image_demo_6').croppie({
		enableExif:true,
		viewport:{
			width:200,
			height:200,
			type:'circle' // circle
		},
		boundary:{
			width:300,
			height:300
		}
	});
	
	$('#insert_image_6').on('change',function(){
		$('#notDemo_6').hide();
		$('#insert_image_6').hide();
		$('#submitBTTR_6').show();
		$('#image_demo_6').show();
		var reader = new FileReader();
		reader.onload = function(event){
			$image_crop_6.croppie('bind', {
				url:event.target.result
			}).then(function(){
				console.log('jquery bind complete');
			});
		}
		reader.readAsDataURL(this.files[0]);
	});
	$('#cropNowimg_6').click(function(event){
		document.getElementById("cropNowimg_6").disabled = true;
		$('#progxxxx012_6').show();
		$('#psw1x1xxxx012_6').show();
		var orgName001 = $('textarea[name=orgName001]');
		var orgDesc001 = $('textarea[name=orgDesc001]');
		var wEbLiknOrg = $('textarea[name=wEbLiknOrg]');
		//var datasel = $("#sldierAssto option:selected").attr('data-id');
    	if(orgName001.val() == "" || orgDesc001.val() == ""){
    		alert("ERROR: Please fill field(s)");
    	}else{
    		$image_crop_6.croppie('result', {
				type:'canvas',
				size:'viewport'
			}).then(function(response){
				$.ajax({
					beforeSend:function(){
						$('#psw1x1xxxx012_6').html("<i>Saving data... Please wait...</i>");
						$('#progxxxx012_6').attr('value','0');
						$('#progxxxx012_6').show();
					},
					uploadProgress:function(event, position, total, percentageComplete){
						$('#progxxxx012_6').attr('value',percentageComplete);
						$('#progxxxx012_6').html(percentageComplete+'%');
					},
					method:'POST',
					url:'Cmendwll/uploadOrgPart',
					data:{'image':response, 'orgName001':orgName001.val(), 'orgDesc001':orgDesc001.val(), 'wEbLiknOrg':wEbLiknOrg.val()},
					success:function(data){
						alert("Org added successfully!");
						document.getElementById("cropNowimg_6").disabled = false;
						$('#progxxxx012_6').hide();
						$('#psw1x1xxxx012_6').hide();
						$('#submitBTTR_6').hide();
						$('#image_demo_6').hide();
						$('#notDemo_6').show();
						$('#insert_image_6').show();
						$('#insert_image_6').val("");
						$('textarea[name=orgName001]').val("");
						$('textarea[name=orgDesc001]').val("");
						showPlxxiPLrrqqqqqqwa();
					},error:function(){
						alert("ERROR: You can change the name of the file, please contact the Administrator if it still doens't work.");
					}
				});
			})
    	}
	});
	showPlxxiPLrrqqqqqqwa();
	function showPlxxiPLrrqqqqqqwa(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/getLalxxPartOrgpopo',
			async:true,
			dataType:'json',
			success:function(data){
				var html='';
				var i;
				for(i = 0; i < data.length; i++){
					html+='<div class="col-md-12 opxlx" style="border-bottom:1px solid #aeaeae;padding:5px;">'+
                        '<div class="col-md-2">'+
                            '<center><img src="nwng/partorg/'+data[i].orgimage+'" style="width:40%;"></center>'+
                        '</div>'+
                        '<div class="col-md-3">'+
                            ''+data[i].orgname+''+
                        '</div>'+
                        '<div class="col-md-3">'+
                            ''+data[i].orgdesc+''+
                        '</div>'+
                        '<div class="col-md-2" style="overflow:auto;">'+
                            '<a href="'+data[i].orglink+'" target="__blank">'+data[i].orglink+'</a>'+
                        '</div>'+
                        '<div class="col-md-2">'+
                            '<center><font id="delBtnPOpp" orgimage="'+data[i].orgimage+'" orgname="'+data[i].orgname+'" rwID="'+data[i].id+'" data-toggle="modal" data-target=".bs-delPlxxPObtn001-modal-lg" class="btn btn-default" style="padding:2px;padding-right:7px;padding-left:7px;" title="Remove/Trash"><i class="fa fa-trash"></i></font></center>'+
                        '</div>'+
                    '</div>';
				}
				$('#POlxxowOgPrt').html(html);
				$('#TopclAS').html('Total: <b>'+i+'</b>');
			},error:function(data){console.log(data);}
		});
	}
	$('#POlxxowOgPrt').on('click','#delBtnPOpp',function(){
		var orgimage = $(this).attr('orgimage');
		var orgname = $(this).attr('orgname');
		var rwID = $(this).attr('rwID');
		$('input[name=orgimage]').val(orgimage);
		$('input[name=idrrwforOp]').val(rwID);
		$('#popokik').html(orgname);
	});
	$('#PlotPOyesx').click(function(){
		var idrrwforOp = $('input[name=idrrwforOp]');
		var orgimage = $('input[name=orgimage]');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/PoCmsnut',
			data:{orgimage:orgimage.val(), idrrwforOp:idrrwforOp.val()},
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					alert("Organization has been successfully removed!");
					showPlxxiPLrrqqqqqqwa();
				}else{ alert("ERROR: try again later..."); }
			},error:function(data){console.log(data);}
		});
	});
	showPlxxiActEvt();
	function showPlxxiActEvt(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/showPlxxiActEvt',
			async:true,
			dataType:'json',
			success:function(data){
				var html='';
				var i;
				for(i = 0; i < data.length; i++){
					html+='<div class="col-md-12" style="border-top:1px solid #aeaeae;">'+
                        '<div class="col-md-3">'+
                            '<a imgPol="nwng/actevent/'+data[i].actimage+'" id="Olxaspekek" data-toggle="modal" data-target=".bs-viewCorsMinS-modal-lg" style="cursor:pointer;"><img src="nwng/actevent/'+data[i].actimage+'" style="width:100%" /></a>'+
                        '</div>'+
                        '<div class="col-md-7">'+
                            '<h3>Title: '+data[i].acttitle+'</h3>'+
                            ''+data[i].actdesc+'<br><br><br><small style="color:#77777a">'+data[i].date+' &nbsp&nbsp '+data[i].time+'</small>'+
                        '</div>'+
                        '<div class="col-md-2">'+
                            '<button id="btnREvNewLxa2xa" actdesc="'+data[i].actdesc+'" acttitle="'+data[i].acttitle+'" actimage="'+data[i].actimage+'" idPlx="'+data[i].id+'" data-toggle="modal" data-target=".bs-remLaNewsxx2xx-modal-lg" class="btn btn-default">Remove Activity or Event</button>'+
                        '</div>'+
                    '</div>';
				}
				$('#lssevntActxxx1w').html(html);
			},error:function(data){console.log(data);}
		});
	}
	$('#lssevntActxxx1w').on('click','#Olxaspekek',function(){
		var imgPol = $(this).attr('imgPol');
		$('#pcViewer').html('<img src="'+imgPol+'" style="width:100%">');
	});
	showPlxxiLaNews();
	function showPlxxiLaNews(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/getAllLaNews',
			async:true,
			dataType:'json',
			success:function(data){
				//console.log(data);
				var html='';
				var i;
				for(i = 0; i < data.length; i++){
					html+='<div class="col-md-12" style="border-top:1px solid #aeaeae;">'+
                        '<div class="col-md-3">'+
                            '<a id="btnImgOclc" imgPol="nwng/lanews/'+data[i].newsimage+'" data-toggle="modal" data-target=".bs-viewCorsMinS-modal-lg" style="cursor:pointer;"><img src="nwng/lanews/'+data[i].newsimage+'" style="width:100%" /></a>'+
                        '</div>'+
                        '<div class="col-md-7">'+
                        	'<small style="color:#77777a">'+data[i].date+' &nbsp&nbsp '+data[i].time+'</small>'+
                            '<h3>Title: '+data[i].newsname+'</h3>'+
                            ''+data[i].newsdesc+'<br><br><br><small style="color:#77777a">Link: <a href="http://'+data[i].weblink+'" target="__blank">'+data[i].weblink+'</a></small>'+
                        '</div>'+
                        '<div class="col-md-2">'+
                            '<button id="btnREvNewLa" newsdesc="'+data[i].newsdesc+'" newsname="'+data[i].newsname+'" newsimage="'+data[i].newsimage+'" idPlx="'+data[i].id+'" data-toggle="modal" data-target=".bs-remLaNewsxx-modal-lg" class="btn btn-default">Remove News</button>'+
                        '</div>'+
                    '</div>';
				}
				$('#cntPlxxllssl').html(html);
			},error:function(data){console.log(data);}
		});
	}
	$('#cntPlxxllssl').on('click','#btnImgOclc',function(){
		var imgPol = $(this).attr('imgPol');
		$('#pcViewer').html('<img src="'+imgPol+'" style="width:100%">');
	});

	$('#cntPlxxllssl').on('click','#btnREvNewLa',function(){
		var idPlx = $(this).attr('idPlx');
		var newsdesc = $(this).attr('newsdesc');
		var newsname = $(this).attr('newsname');
		var newsimage = $(this).attr('newsimage');
		$('#Plxxoaospdas11sa').html('<div class="col-md-12" style="border-top:1px solid #aeaeae;">'+
                        '<div class="col-md-4">'+
                            '<img src="nwng/lanews/'+newsimage+'" style="width:100%" />'+
                        '</div>'+
                        '<div class="col-md-8">'+
                            '<h3>Title: '+newsname+'</h3>'+
                            ''+newsdesc+''+
                        '</div>'+
                    '</div><font style="font-size:1px">.</font>');
		$('input[name=idlaNwxxnws]').val(idPlx);
	});
	$('#yesRemLanews').click(function(){
		var idlaNwxxnws = $('input[name=idlaNwxxnws]');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/remNewsLxldd',
			data:{opData:idlaNwxxnws.val()},
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					alert("News successfully removed!");
					showPlxxiLaNews();
				}else{ alert("ERROR: try again later..."); }
			},error:function(data){console.log(data);}
		});
	});

	showAllSliderIMG();
	function showAllSliderIMG(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/getImgSldede',
			async:true,
			dataType:'json',
			success:function(data){
				var html = '';
				html+='<center><span style="width:520px;display:inline-block;margin:5px;">'+
					'<b><font style="font-size:25px;">Slider 1:</font></b>'+
                    '<a class="opxxImgViewBG" imgname="nwng/slider/'+data[0].imgname+'" data-toggle="modal" data-target=".bs-viewCorsMinS-modal-lg" style="cursor:pointer;"><img src="nwng/slider/'+data[0].imgname+'" style="width:100%;"></a>'+
                    'Tag: '+data[0].tagline+''+
                '</span>'+
                '<span style="width:520px;display:inline-block;margin:5px;">'+
                	'<b><font style="font-size:25px;">Slider 2:</font></b>'+
                    '<a class="opxxImgViewBG" imgname="nwng/slider/'+data[1].imgname+'" data-toggle="modal" data-target=".bs-viewCorsMinS-modal-lg" style="cursor:pointer;"><img src="nwng/slider/'+data[1].imgname+'" style="width:100%;"></a>'+
                    'Tag: '+data[1].tagline+''+
                '</span>'+
                '<span style="width:520px;display:inline-block;margin:5px;">'+
                	'<b><font style="font-size:25px;">Slider 3:</font></b>'+
                    '<a class="opxxImgViewBG" imgname="nwng/slider/'+data[2].imgname+'" data-toggle="modal" data-target=".bs-viewCorsMinS-modal-lg" style="cursor:pointer;"><img src="nwng/slider/'+data[2].imgname+'" style="width:100%;"></a>'+
                    'Tag: '+data[2].tagline+''+
                '</span>'+
                '<span style="width:520px;display:inline-block;margin:5px;">'+
                	'<b><font style="font-size:25px;">Slider 4:</font></b>'+
                    '<a class="opxxImgViewBG" imgname="nwng/slider/'+data[3].imgname+'" data-toggle="modal" data-target=".bs-viewCorsMinS-modal-lg" style="cursor:pointer;"><img src="nwng/slider/'+data[3].imgname+'" style="width:100%;"></a>'+
                    'Tag: '+data[3].tagline+''+
                '</span>'+
                '<span style="width:520px;display:inline-block;margin:5px;">'+
                	'<b><font style="font-size:25px;">Slider 5:</font></b>'+
                    '<a class="opxxImgViewBG" imgname="nwng/slider/'+data[4].imgname+'" data-toggle="modal" data-target=".bs-viewCorsMinS-modal-lg" style="cursor:pointer;"><img src="nwng/slider/'+data[4].imgname+'" style="width:100%;"></a>'+
                    'Tag: '+data[4].tagline+''+
                '</span></center>';
				$('#sliddpPPOxx').html(html);
			},error:function(data){console.log(data);}
		});
	}
	$('#sliddpPPOxx').on('click','.opxxImgViewBG',function(){
		var imgname = $(this).attr('imgname');
		$('#pcViewer').html('<center><img src="'+imgname+'" style="width:100%;"></center>');
	});
	// End Image Cropping

	// Image Cropping 2
	$image_crop_2 = $('#image_demo_2').croppie({
		enableExif:true,
		viewport:{
			width:650,
			height:330,
			type:'square' // circle
		},
		boundary:{
			width:700,
			height:430
		}
	});
	
	$('#insert_image_2').on('change',function(){
		$('#notDemo_2').hide();
		$('#insert_image_2').hide();
		$('#submitBTTR_2').show();
		$('#image_demo_2').show();
		var reader_2 = new FileReader();
		reader_2.onload = function(event){
			$image_crop.croppie('bind', {
				url:event.target.result
			}).then(function(){
				console.log('jquery bind complete');
			});
		}
		reader_2.readAsDataURL(this.files[0]);
	});
	$('#cropNowimg_2').click(function(event){
		document.getElementById("cropNowimg_2").disabled = true;
		$('#progxxxx012_2').show();
		$('#psw1x1xxxx012_2').show();
		var cap = $('textarea[name=capActvtvt_2]');
		$image_crop_2.croppie('result', {
			type:'canvas',
			size:'viewport'
		}).then(function(response){
			$.ajax({
				beforeSend:function(){
					$('#psw1x1xxxx012_2').html("<i>Sending your message, please wait...</i>");
					$('#progxxxx012_2').attr('value','0');
					$('#progxxxx012_2').show();
				},
				uploadProgress:function(event, position, total, percentageComplete){
					$('#progxxxx012_2').attr('value',percentageComplete);
					//$('#percentageCMPxxxx01').html(percentageComplete+'%');
				},
				type:'POST',
				url:'Cmendwll/uploadMyProfImage_2',
				data:{'image':response, "cap":cap},
				success:function(data){
					alert("Image uploaded successfully!");
					document.getElementById("cropNowimg_2").disabled = false;
					$('.bs-changePhot-modal-lg').hide();
					$('#progxxxx012_2').hide();
					$('#psw1x1xxxx012_2').hide();
					$('#submitBTTR_2').hide();
					$('#image_demo_2').hide();
					$('#notDemo_2').show();
					$('#insert_image_2').show();
					$('#insert_image_2').val("");
				},error:function(){
					alert("ERROR: You can change the name of the file, please contact the Administrator if it still doens't work.");
				}
			});
		})
	});
	// End Image Cropping

	// Uploading of File as Downloadable for External User
	$(document).on('change','#file_2',function(){
		var err = 0;
		var fileSize = 0;
		var property = document.getElementById("file_2").files[0];
		var image_name = property.name;
		var file_extension = image_name.split('.').pop().toLowerCase();
		if(jQuery.inArray(file_extension,['doc']) == -1){
			if(jQuery.inArray(file_extension,['docs']) == -1){
				if(jQuery.inArray(file_extension,['docx']) == -1){
					if(jQuery.inArray(file_extension,['pdf']) == -1){
						$('#uploadfile_2')[0].reset();
						alert("ERROR: We accept MSWord document format and pdf only");
					}
				}
			}
		}
		fileSize = Number(document.getElementById("file_2").files[0].size);
		if(fileSize > 200000000){
			alert("ERROR: File was too large...");
			$('#uploadfile_2')[0].reset();
		}
	});
	$('#uploadfile_2').on('submit',function(e){
		document.getElementById("SBmitFF_2").disabled = true;
		e.preventDefault();
		$(this).ajaxSubmit({
			beforeSend:function(){
				$('#psw1x1_2').html("<i>File is uploading, please wait...</i>");
				$('#prog_2').attr('value','0');
				$('#percentageCMP_2').html('0%');
			},uploadProgress:function(event, position, total, percentageComplete){
				$('#prog_2').attr('value',percentageComplete);
				$('#percentageCMP_2').html(percentageComplete+'%');
			},success:function(data){
				$('#psw1x1_2').html("<font color='green'>File uploaded successfully...</font>");
				document.getElementById("SBmitFF_2").disabled = false;
				$('.bs-ascawwwww-modal-lg').hide();
				showwxfileDnwloada();
			},error:function(){
				alert("ERROR: You can change the name of the file, please contact the Administrator if it still doens't work.");
			}
		});
	});
	showwxfileDnwloada();
	function showwxfileDnwloada(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/getXLlasd',
			async:true,
			dataType:'json',
			success:function(data){
				var html = '';
				var i, a = 0;
				for(i = 0; i < data.length; i++){
					a++;
					html+='<tr id="POdata" style="border-bottom:1px solid #717272">'+
						'<td style="padding:5px;">'+a+'.</td>'+
						'<td style="padding:5px;">'+data[i].filedesc+'</td>'+
						'<td style="padding:5px;">'+data[i].filename+'</td>'+
						'<td style="padding:5px;">'+data[i].date+' &nbsp '+data[i].time+'</td>'+
						'<td style="padding:5px;">'+
							'<a href="nwng/downloada/'+data[i].filename+'"><font class="btn btn-success" id="btn-dte" style="padding:2px;padding-left:7px;padding-right:7px;" title="Download"><i class="fa fa-download"></i></font></a>'+
							'<font class="btn btn-warning" id="btn-dte" idRow="'+data[i].id+'" filename="'+data[i].filename+'" data-toggle="modal" data-target=".bs-downloadaConfDel-modal-lg" style="padding:2px;padding-left:7px;padding-right:7px;" title="Delete"><i class="fa fa-trash"></i></font>'+
						'</td>'+
					'</tr>';
				}
				$('#lssevntActxxx1wxxDnwfile').html(html);
				$('#PlxxoInfoCCx').html('Total: <b>'+i+'</b>');
			},error:function(data){console.log(data);}
		});
	}
	$('#yesDelprcccPrc').click(function(){
		var idrrw = $('input[name=idofRowToDel]');
		var filn = $('input[name=filn]');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/deleXX',
			data:{idrrw:idrrw.val(), filn:filn.val()},
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					alert("Downloadable file has been successfully removed!");
					showwxfileDnwloada();
				}else{ alert("ERROR: try again later..."); }
			},error:function(data){console.log(data);}
		});
	});
	$('#lssevntActxxx1wxxDnwfile').on('click','#btn-dte',function(){
		var idRow = $(this).attr('idRow');
		var filename = $(this).attr('filename');
		$('input[name=filn]').val(filename);
		$('input[name=idofRowToDel]').val(idRow);
		$('#PlxxoFileRefXx').html(filename);
	});
	$('#artOnew').click(function(){
		$('#displayOfartOpubL').slideUp();
		$('#displayOfartORef').slideUp();
		$('#displayMyJournalx').slideDown();

		$('#artOpubL').css('border-bottom','none');
		$('#artOnew').css('border-bottom','2px solid red');
		$('#artORef').css('border-bottom','none');

		$('#part1SerNw').show();
		$('#part2SerNw').hide();
		$('#part3SerNw').hide();
	});
	$('#artOpubL').click(function(){
		$('#displayMyJournalx').slideUp();
		$('#displayOfartORef').slideUp();
		$('#displayOfartOpubL').slideDown();

		$('#artOpubL').css('border-bottom','2px solid red');
		$('#artOnew').css('border-bottom','none');
		$('#artORef').css('border-bottom','none');

		$('#part2SerNw').show();
		$('#part1SerNw').hide();
		$('#part3SerNw').hide();
	});
	$('#artORef').click(function(){
		$('#displayMyJournalx').slideUp();
		$('#displayOfartOpubL').slideUp();
		$('#displayOfartORef').slideDown();

		$('#artOpubL').css('border-bottom','none');
		$('#artOnew').css('border-bottom','none');
		$('#artORef').css('border-bottom','2px solid red');

		$('#part3SerNw').show();
		$('#part2SerNw').hide();
		$('#part1SerNw').hide();
	});

	$('#tnb1').click(function(){
		$('textarea[name=oth1]').val("");
	});
	$('#nltnb1').click(function(){
		var iliox1 = $('textarea[name=oth1]');
		$('textarea[name=oth1]').val(bradd(iliox1.val()));
	});
	$('#tnb2').click(function(){
		$('textarea[name=oth2]').val("");
	});
	$('#nltnb2').click(function(){
		var iliox2 = $('textarea[name=oth2]');
		$('textarea[name=oth2]').val(bradd(iliox2.val()));
	});
	$('#tnb3').click(function(){
		$('textarea[name=oth3]').val("");
	});
	$('#nltnb3').click(function(){
		var iliox3 = $('textarea[name=oth3]');
		$('textarea[name=oth3]').val(bradd(iliox3.val()));
	});
	$('#tnb4').click(function(){
		$('textarea[name=oth4]').val("");
	});
	$('#nltnb4').click(function(){
		var iliox4 = $('textarea[name=oth4]');
		$('textarea[name=oth4]').val(bradd(iliox4.val()));
	});
	$('#tnb5').click(function(){
		$('textarea[name=oth5]').val("");
	});
	$('#nltnb5').click(function(){
		var iliox5 = $('textarea[name=oth5]');
		$('textarea[name=oth5]').val(bradd(iliox5.val()));
	});
	//getOthInfo();
	function getOthInfo(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/getOthOlxx',
			async:true,
			dataType:'json',
			success:function(data){
				$('textarea[name=oth1]').val(data[0].hotline);
				$('textarea[name=oth2]').val(data[0].schedule);
				$('textarea[name=oth3]').val(data[0].mailingacc);
				$('textarea[name=oth4]').val(data[0].officeaddress);
				$('textarea[name=oth5]').val(data[0].pristatement);
				$('#LUUx').html('<b>'+data[0].lastupdate+' | '+data[0].lastuptime+'</b>');
			},error:function(data){console.log(data);}
		});
	}
	$('#savceOth').click(function(){
		var data = $('#form_othrOlx').serialize();
		var oth1 = $('textarea[name=oth1]');
		var oth2 = $('textarea[name=oth2]');
		var oth3 = $('textarea[name=oth3]');
		var oth4 = $('textarea[name=oth4]');
		var oth5 = $('textarea[name=oth5]');
		var err = 0;
		if(oth5.val() == ""){
			err = 1;$('#oth5').css('border','1px solid red');
		}else{
			$('#oth5').css('border','1px solid #aeaeae');
		}
		if(oth4.val() == ""){
			err = 1;$('#oth4').css('border','1px solid red');
		}else{
			$('#oth4').css('border','1px solid #aeaeae');
		}
		if(oth3.val() == ""){
			err = 1;$('#oth3').css('border','1px solid red');
		}else{
			$('#oth3').css('border','1px solid #aeaeae');
		}
		if(oth2.val() == ""){
			err = 1;$('#oth2').css('border','1px solid red');
		}else{
			$('#oth2').css('border','1px solid #aeaeae');
		}
		if(oth1.val() == ""){
			err = 1;$('#oth1').css('border','1px solid red');
		}else{
			$('#oth1').css('border','1px solid #aeaeae');
		}

		if(err !== 1){
			$.ajax({
				type:'ajax',
				method:'POST',
				url:'Cmendwll/sbmtfrmOp',
				data:data,
				async:true,
				dataType:'json',
				success:function(data){
					if(data.success){
						alert("Basic information has been successfully updated!");
						getOthInfo();
					}else{alert("ERROR: Try again later!")}
				},error:function(data){console.log(data);}
			});
		}else{alert("ERROR: Please fill field(s) marked with red!")}
	});
	getAllDashINF();
	function getAllDashINF(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/gtAlDsh',
			async:true,
			dataType:'json',
			success:function(data){
				$('#Poxl1').html(nCwithPoint(data.data1[0].tot));
				$('#Poxl2').html(nCwithPoint(data.data2[0].tot)+" <b>/</b> <font style='color:#1abb9c;text-shadow:0.2px 0.2px 0.2px black'>"+nCwithPoint(data.data8[0].tot)+"</font>");
				var ttlx = Number(data.data3[0].tot) + Number(data.data7[0].tot);
				$('#Poxl3').html(nCwithPoint(ttlx.toString()));
				$('#Poxl4').html(nCwithPoint(data.data4[0].tot));
				$('#Poxl5').html(nCwithPoint(data.data5[0].tot));
				$('#Poxl6').html(nCwithPoint(data.data6));
			},error:function(data){console.log(data);}
		});
	}
	getAllDashINF2();
	function getAllDashINF2(){
		var userid = $('input[name=userid]');
		$.ajax({
			type:'ajax',
			url:'Cmendwll/gtAlDsh2',
			async:true,
			dataType:'json',
			success:function(data){
				var html = '', compName = '';
				var i;
				for( i = 0; i < data.length; i++){
					html += '<li>'+
                        '<div class="block">'+
                            '<div class="block_content">'+
                                '<h2 class="title">';
                                if(userid.val() == data[i].userid){
                                    html+='<a style="color:#525252"><b>You</b></a>';
                                }else{
                                	html+='<a style="color:#525252"><b>'+data[i].u_fname+' '+data[i].u_lname+'</b></a>';
                                }
                                html+='</h2>'+
                                '<div class="byline">'+
                                    '<span style="color:#525252">'+data[i].datelog+' | '+data[i].timelog+'</span>'+
                                '</div>'+
                                '<p class="excerpt">'+data[i].log+' '+
                                '</p>'+
                            '</div>'+
                        '</div>'+
                    '</li>';
				}
				$('#POxl121238x').html(html);
			},error:function(data){console.log(data);}
		});
	}
	getAllDashINF3();
	function getAllDashINF3(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/gtAlDsh3',
			async:true,
			dataType:'json',
			success:function(data){
				var html = '';
				var i;
				for( i = 0; i < data.length; i++){
					var d = new Date(data[i].date);//yyyy-mm-dd
					var n = Number(d.getMonth());
					html += '<article class="media event" style="cursor:pointer;" id="llss" data-toggle="modal" data-target=".bs-Poasdawbaasdansldawa-modal-lg">'+
                        '<font class="pull-left date" style="background:#525252">';
	                        if(n == 0){html+='<p class="month">Jan</p>';}
	                        else if(n == 1){html+='<p class="month">Feb</p>';}
	                        else if(n == 2){html+='<p class="month">Mar</p>';}
	                        else if(n == 3){html+='<p class="month">Apr</p>';}
	                        else if(n == 4){html+='<p class="month">May</p>';}
	                        else if(n == 5){html+='<p class="month">Jun</p>';}
	                        else if(n == 6){html+='<p class="month">Jul</p>';}
	                        else if(n == 7){html+='<p class="month">Aug</p>';}
	                        else if(n == 8){html+='<p class="month">Sep</p>';}
	                        else if(n == 9){html+='<p class="month">Oct</p>';}
	                        else if(n == 10){html+='<p class="month">Nov</p>';}
	                        else if(n == 11){html+='<p class="month">Dec</p>';}
                            html+='<p class="day">'+data[i].date[8]+''+data[i].date[9]+'</p>'+
                        '</font>'+
                        '<div class="media-body">'+
                            '<font class="title" href="#"><b>'+data[i].acttitle+'</b></font>'+
                            '<p>'+data[i].actdesc+'</p>'+
                            '<div style="padding-top:10px;"><img src="nwng/actevent/'+data[i].actimage+'" style="width:100%"></div>'+
                        '</div>'+
                    '</article>';
				}
				$('#PlasxO555').html(html);
			},error:function(data){console.log(data);}
		});
	}
	var ix = 0;
	getAllNoteM();
	PolxxUpddrMsUp();
	function getAllNoteM(){
		setTimeout(function(){
			PolxxUpddrMsUp();
			getAllNoteM();
		},30000);
	}
	function PolxxUpddrMsUp(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/PolxxUpddrMsUp',
			async:true,
			dataType:'json',
			success:function(data){
				if(data[0].tot > 0){
					$('#ditp22ne').html('<span style="position:absolute;background:#d93f3f;color:white;padding:3px;border-radius:50%;padding-left:10px;padding-right:10px;border:.7px solid white;box-shadow:.5px .5px 1px rgba(0, 0, 0, .3);margin-top:-19px;margin-left:2%;">'+data[0].tot+'</span>');
				}else{
					$('#ditp22ne').html('');
				}
			},error:function(data){console.log(data);}
		});
	}
	$('.Poxlx888xx').click(function(){
		showLixxp2XXnote();
	});
	function showLixxp2XXnote(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/PolxxUpddrMsUpgetOxpx',
			async:true,
			dataType:'json',
			success:function(data){
				var spanHT = '', html = '';
				var i, a = 0, num = 0;
				num = Number(data);
				for(i = 0; i < data.length; i++){
					html+='<div style="font-size:12px;padding:2px;margin-top:4px;background:#dce5df;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42)">'+
                        '<font style="float:right;color:#aeaeae;font-size:10px;">Posted: '+data[i].date+' | '+data[i].time+'</font>'+
                        '<div style="padding:2px;margin-top:9">'+
                          '<i class="fa fa-user"></i> &nbsp&nbsp '+data[i].messagenote+''+
                        '</div>'+
                    '</div>';
				}
				$('#displatNotexAA').html(html);
				$('#ditp22ne').html("");
			},error:function(data){console.log(data);}
		});
	}

	$('#yssPlggg').click(function(){
		var sectionDxEpl = $('input[name=sectionDxEpl]');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/submitSerctionFac',
			data:{data:sectionDxEpl.val()},
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					showAllFacSec();
				}else{ alert("ERROR: Try again later..."); }
			},error:function(data){console.log(data);}
		});
	});
	showAllFacSec();
	function showAllFacSec(){
		$.ajax({
			type:'ajax',
			url:'Cmendwll/getAllFacSec',
			async:true,
			dataType:'json',
			success:function(data){
				var html = '', alt = '';   // use http://ovprie.carsu.edu.ph/
				var i, a = 0;
				for(i = 0; i < data.length; i++){
					a++;
					html += '<div style="margin:10px;box-shadow:0 0 2px rgba(0, 0, 0, 23);padding:10px;">'+
                        '<span style="float:right">'+
                            '<button id="adSecOlxix" description="'+data[i].description+'" facid="'+data[i].facid+'" class="btn btn-default" data-toggle="modal" data-target=".bs-adSEcImages-modal-lg"><i class="fa fa-plus"></i>&nbsp&nbsp Add Image</button>'+
                            '<button id="deleFacSEc" sssx="'+data[i].facid+'" class="btn btn-default"><i class="fa fa-trash"></i></button>'+
                        '</span>'+
                        '<h2>'+data[i].description+'</h2>'+
                        '<div style="overflow:hidden;width:100%;">';
                        	var numX = 0, x = 0;
                        	numX = Number(data[i].imagees.length);
                        	if(numX > 0){
                        		for(x = 0;x < numX; x++){
                        			html+='<img src="nwng/facilities/'+data[i].imagees[x].image+'" style="display:inline-block;width:210px;height:120px;margin:3px;">';
                        		}
                        	}else{
                        		html += '<font style="color:#bababa">No Attachments...</font>';
                        	}
                        html+='</div>'+
                    '</div>';
				}
				$('#asdwwwxxww1231x').html(html);
			},error:function(data){$('#asdwwwxxww1231x').html("No Data...");}
		});
	}
	$('#asdwwwxxww1231x').on('click','#deleFacSEc',function(){
		var sssx = $(this).attr('sssx');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'Cmendwll/delPlxoxFacSec',
			data:{data:sssx},
			async:true,
			dataType:'json',
			success:function(data){
				alert("Section of Facility has been successfully deleted!");
				showAllFacSec();
			},error:function(data){console.log(data);}
		});
	});
	$('#asdwwwxxww1231x').on('click','#adSecOlxix',function(){
		var description = $(this).attr('description');
		var facid = $(this).attr('facid');
		$('#secDet').html(description);
		$('input[name=idOflxxOpkxasdhawasdd001]').val(facid);
	});


	// Image Cropping 5
	$image_crop5 = $('#image_demo5').croppie({
		enableExif:true,
		viewport:{
			width:600,
			height:350,
			type:'square' // circle
		},
		boundary:{
			width:730,
			height:513
		}
	});
	$('#insert_image5').on('change',function(){
		document.getElementById("cropNowimg5").disabled = false;
		$('#insert_image5').hide();
		$('#image_demo5').show();
		$('#baseInfoXx').hide();
		$('#submitBTTR5').show();
		var reader = new FileReader();
		reader.onload = function(event){
			$image_crop5.croppie('bind', {
				url:event.target.result
			}).then(function(){
				console.log('jquery bind complete');
			});
		}
		reader.readAsDataURL(this.files[0]);
	});
	$('#cropNowimg5').click(function(event){
		document.getElementById("cropNowimg5").disabled = true;
		$('#progress5').show();
		var idOflxxOpkxasdhawasdd001 = $('input[name=idOflxxOpkxasdhawasdd001]');
		$image_crop5.croppie('result', {
			type:'canvas',
			size:'viewport'
		}).then(function(response){
			$.ajax({
				beforeSend:function(){
					$('.progress-bar5').width('0%');
				},
				uploadProgress:function(event, position, total, percentageComplete){
					$('.progress-bar5').width(percentageComplete+'%');
					$('.progress-bar5').html('<div id="progress-status">'+percentageComplete+'%</div>');
				},
				method:'POST',
				url:'Cmendwll/attachImgFacSEc',
				data:{'image5':response, 'idOflxxOpkxasdhawasdd001':idOflxxOpkxasdhawasdd001.val()},
				success:function(data){
					alert("Image uploaded successfully!");
					document.getElementById("cropNowimg5").disabled = true;
					$('#progress5').hide();
					$('#image_demo5').hide();
					$('#insert_image5').show();
					$('#submitBTTR5').hide();
					$('#insert_image5').val("");
					showAllFacSec();
				},error:function(){
					alert("ERROR: You can change the name of the file, please contact the Administrator if it still doens't work.");
				}
			});
		})
	});

	/* ********* Additional functions age ********* */
	function bradd(val){
		return val+"<br>";
	}
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
			if(arr == "gmail.com"){return 0;}else{return 1;}
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
});