$(document).ready(function(){
	document.getElementById("submitNWjourmn").disabled = true;
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
	$('#cclckNoteX').click(function(){
		$('#cclckspecial').css('background','white');
		$('#cclck0').css('background','white');
		$('.cclck1x').css('background','white');
		$('#cclck2').css('background','white');
		$('#cclck3').css('background','white');
		$('#cclck4').css('background','white');
		$('#cclck5').css('background','white');
		$('#cclckNoteX').css('background','#cbe894');

		$('#notesAnnxx1').slideDown();
		$('#RRwr').slideUp();
		$('#forHome').slideUp();
		$('#forPersonalInfo').slideUp();
		$('#forPublishedJourn').slideUp();
		$('#forCoAuthors').slideUp();
		$('#forMessages').slideUp();
		$('#forSettings').slideUp();
		$('#homeListDsplaasdaw').slideDown();
		$('#base12bse1').slideUp();

		$('#pubArtViewAreaYYYYx2').slideUp();
		$('#newArtViewAreaYYYYx1').slideDown();
		$('#click123art1').css('border-bottom','2px solid red');
		$('#click123art2').css('border-bottom','none');
	});
	$('#cclckspecial').click(function(){
		$('#cclckspecial').css('background','#cbe894');
		$('#cclck0').css('background','white');
		$('.cclck1x').css('background','white');
		$('#cclck2').css('background','white');
		$('#cclck3').css('background','white');
		$('#cclck4').css('background','white');
		$('#cclck5').css('background','white');
		$('#cclckNoteX').css('background','white');

		$('#notesAnnxx1').slideUp();
		$('#RRwr').slideDown();
		$('#forHome').slideUp();
		$('#forPersonalInfo').slideUp();
		$('#forPublishedJourn').slideUp();
		$('#forCoAuthors').slideUp();
		$('#forMessages').slideUp();
		$('#forSettings').slideUp();
		$('#homeListDsplaasdaw').slideDown();
		$('#base12bse1').slideUp();

		$('#pubArtViewAreaYYYYx2').slideUp();
		$('#newArtViewAreaYYYYx1').slideDown();
		$('#click123art1').css('border-bottom','2px solid red');
		$('#click123art2').css('border-bottom','none');
	});
	$('#cclck0').click(function(){
		$('#cclckspecial').css('background','white');
		$('#cclck0').css('background','#cbe894');
		$('.cclck1x').css('background','white');
		$('#cclck2').css('background','white');
		$('#cclck3').css('background','white');
		$('#cclck4').css('background','white');
		$('#cclck5').css('background','white');
		$('#cclckNoteX').css('background','white');

		$('#notesAnnxx1').slideUp();
		$('#RRwr').slideUp();
		$('#forHome').slideDown();
		$('#forPersonalInfo').slideUp();
		$('#forPublishedJourn').slideUp();
		$('#forCoAuthors').slideUp();
		$('#forMessages').slideUp();
		$('#forSettings').slideUp();
		$('#homeListDsplaasdaw').slideDown();
		$('#base12bse1').slideUp();

		$('#pubArtViewAreaYYYYx2').slideUp();
		$('#newArtViewAreaYYYYx1').slideDown();
		$('#click123art1').css('border-bottom','2px solid red');
		$('#click123art2').css('border-bottom','none');
	});
	$('.cclck1x').click(function(){
		$('#cclckspecial').css('background','white');
		$('#cclck0').css('background','white');
		$('.cclck1x').css('background','#cbe894');
		$('#cclck2').css('background','white');
		$('#cclck3').css('background','white');
		$('#cclck4').css('background','white');
		$('#cclck5').css('background','white');
		$('#cclckNoteX').css('background','white');

		$('#notesAnnxx1').slideUp();
		$('#RRwr').slideUp();
		$('#forHome').slideUp();
		$('#forPersonalInfo').slideDown();
		$('#forPublishedJourn').slideUp();
		$('#forCoAuthors').slideUp();
		$('#forMessages').slideUp();
		$('#forSettings').slideUp();
		$('#homeListDsplaasdaw').slideDown();
		$('#base12bse1').slideUp();

		$('#pubArtViewAreaYYYYx2').slideUp();
		$('#newArtViewAreaYYYYx1').slideDown();
		$('#click123art1').css('border-bottom','2px solid red');
		$('#click123art2').css('border-bottom','none');
	});
	$('#cclck2').click(function(){
		$('#cclckspecial').css('background','white');
		$('#cclck0').css('background','white');
		$('.cclck1x').css('background','white');
		$('#cclck2').css('background','#cbe894');
		$('#cclck3').css('background','white');
		$('#cclck4').css('background','white');
		$('#cclck5').css('background','white');
		$('#cclckNoteX').css('background','white');

		$('#notesAnnxx1').slideUp();
		$('#RRwr').slideUp();
		$('#forHome').slideUp();
		$('#forPersonalInfo').slideUp();
		$('#forPublishedJourn').slideDown();
		$('#forCoAuthors').slideUp();
		$('#forMessages').slideUp();
		$('#forSettings').slideUp();

		$('#pubArtViewAreaYYYYx2').slideUp();
		$('#newArtViewAreaYYYYx1').slideDown();
		$('#click123art1').css('border-bottom','2px solid red');
		$('#click123art2').css('border-bottom','none');
	});
	$('#cclck3').click(function(){
		$('#cclckspecial').css('background','white');
		$('#cclck0').css('background','white');
		$('.cclck1x').css('background','white');
		$('#cclck2').css('background','white');
		$('#cclck3').css('background','#cbe894');
		$('#cclck4').css('background','white');
		$('#cclck5').css('background','white');
		$('#cclckNoteX').css('background','white');

		$('#notesAnnxx1').slideUp();
		$('#RRwr').slideUp();
		$('#forHome').slideUp();
		$('#forPersonalInfo').slideUp();
		$('#forPublishedJourn').slideUp();
		$('#forCoAuthors').slideDown();
		$('#forMessages').slideUp();
		$('#forSettings').slideUp();
		$('#homeListDsplaasdaw').slideDown();
		$('#base12bse1').slideUp();

		$('#pubArtViewAreaYYYYx2').slideUp();
		$('#newArtViewAreaYYYYx1').slideDown();
		$('#click123art1').css('border-bottom','2px solid red');
		$('#click123art2').css('border-bottom','none');
	});
	$('#cclck4').click(function(){
		$('#cclckspecial').css('background','white');
		$('#cclck0').css('background','white');
		$('.cclck1x').css('background','white');
		$('#cclck2').css('background','white');
		$('#cclck3').css('background','white');
		$('#cclck4').css('background','#cbe894');
		$('#cclck5').css('background','white');
		$('#cclckNoteX').css('background','white');

		$('#notesAnnxx1').slideUp();
		$('#RRwr').slideUp();
		$('#forHome').slideUp();
		$('#forPersonalInfo').slideUp();
		$('#forPublishedJourn').slideUp();
		$('#forCoAuthors').slideUp();
		$('#forMessages').slideDown();
		$('#forSettings').slideUp();
		$('#homeListDsplaasdaw').slideDown();
		$('#base12bse1').slideUp();

		$('#pubArtViewAreaYYYYx2').slideUp();
		$('#newArtViewAreaYYYYx1').slideDown();
		$('#click123art1').css('border-bottom','2px solid red');
		$('#click123art2').css('border-bottom','none');
	});
	$('#cclck5').click(function(){
		$('#cclckspecial').css('background','white');
		$('#cclck0').css('background','white');
		$('.cclck1x').css('background','white');
		$('#cclck2').css('background','white');
		$('#cclck3').css('background','white');
		$('#cclck4').css('background','white');
		$('#cclck5').css('background','#cbe894');
		$('#cclckNoteX').css('background','white');

		$('#notesAnnxx1').slideUp();
		$('#RRwr').slideUp();
		$('#forHome').slideUp();
		$('#forPersonalInfo').slideUp();
		$('#forPublishedJourn').slideUp();
		$('#forCoAuthors').slideUp();
		$('#forMessages').slideUp();
		$('#forSettings').slideDown();
		$('#homeListDsplaasdaw').slideDown();
		$('#base12bse1').slideUp();

		$('#pubArtViewAreaYYYYx2').slideUp();
		$('#newArtViewAreaYYYYx1').slideDown();
		$('#click123art1').css('border-bottom','2px solid red');
		$('#click123art2').css('border-bottom','none');
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

		$('#btnToHomeArea').css('border-left','3px solid #dd9221');
		$('#btnToNewResearchers').css('border-left','none');
		$('#btnREsearchrsArea').css('border-left','none');
		$('#btnJournalsArea').css('border-left','none');
		$('#btnACtiveMes').css('border-left','none');
	});
	var pends = 0;
	$('#btnToNewResearchers').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#ResearchrsArea').slideUp();
		$('#JournalxArea').slideUp();
		$('#AmessageArea').slideUp();
		$('#newResearchersAdmn').slideDown();
		$('#paginationCnt').html("New Researchers");

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

		$('#btnToHomeArea').css('border-left','none');
		$('#btnToNewResearchers').css('border-left','none');
		$('#btnREsearchrsArea').css('border-left','3px solid #dd9221');
		$('#btnJournalsArea').css('border-left','none');
		$('#btnACtiveMes').css('border-left','none');
		if(pends2 == 0){
			showListResearchsNw();
			showListResearchsNw2();
		}
		pends2 = 1;
	});
	$('#btnJournalsArea').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#newResearchersAdmn').slideUp();
		$('#ResearchrsArea').slideUp();
		$('#AmessageArea').slideUp();
		$('#JournalxArea').slideDown();
		$('#paginationCnt').html("Journal List");

		$('#btnToHomeArea').css('border-left','none');
		$('#btnToNewResearchers').css('border-left','none');
		$('#btnREsearchrsArea').css('border-left','none');
		$('#btnJournalsArea').css('border-left','3px solid #dd9221');
		$('#btnACtiveMes').css('border-left','none');
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

		$('#generalActvResearchrs1').css('border-bottom','2px solid #f77b67');
		$('#generalActvResearchrs2').css('border-bottom','none');
		$('#generalActvResearchrs3').css('border-bottom','none');
	});
	$('#generalActvResearchrs2').click(function(){
		$('#reSearchErsArea1').slideUp();
		$('#reSearchErsArea3').slideUp();
		$('#reSearchErsArea2').slideDown();

		$('#generalActvResearchrs1').css('border-bottom','none');
		$('#generalActvResearchrs3').css('border-bottom','none');
		$('#generalActvResearchrs2').css('border-bottom','2px solid #f77b67');
	});
	$('#generalActvResearchrs3').click(function(){
		$('#reSearchErsArea2').slideUp();
		$('#reSearchErsArea1').slideUp();
		$('#reSearchErsArea3').slideDown();

		$('#generalActvResearchrs1').css('border-bottom','none');
		$('#generalActvResearchrs3').css('border-bottom','2px solid #f77b67');
		$('#generalActvResearchrs2').css('border-bottom','none');
	});
	function showListResearchsNw(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'cmendwll/reqstActvResearchrs',
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
									if(data[i].admin == 1 && data[i].reviewer == "yes"){
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
									'<a href="#">Pending Article</a><br><a href="#">Published Article</a>'+
								'</div>'+
							'</td>'+
							'<td align="center" style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2x2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View"><i class="fa fa-eye"></i></span>'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="xpBtnAccptCls2 confrmActA3" title="Set for Review"><i class="fa fa-crop"></i></span>'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="xpBtnAccptCls3 confrmActA4" title="Delete / Ignore"><i class="fa fa-trash"></i></span></center>'+
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
	function showListResearchsNw2(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'cmendwll/reqstActvResearchrs2',
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
									'<a href="#">Pending Article</a><br><a href="#">Published Article</a>'+
								'</div>'+
							'</td>'+
							'<td align="center" style="width:20%;padding:7px;">'+
								'<div style="height:40px;">'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2x2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View"><i class="fa fa-eye"></i></span>'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="xpBtnAccptCls2 confrmActA3" title="Set for Review"><i class="fa fa-crop"></i></span>'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="xpBtnAccptCls3 confrmActA4" title="Delete / Ignore"><i class="fa fa-trash"></i></span></center>'+
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
			url:'cmendwll/reqstPendingUsrs',
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
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View"><i class="fa fa-eye"></i></span>'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="xpBtnAccptCls2 confrmActA3" title="Set for Review"><i class="fa fa-crop"></i></span>'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="xpBtnAccptCls3 confrmActA4" title="Delete / Ignore"><i class="fa fa-trash"></i></span></center>'+
								'</div>'+
							'</td>'+
						'</tr>';
					}
				}
				$('#displayPrimaryList').html(html);
				i = nwCntT;
				$('#bhgInf1').html("<b>"+i+"</b>");
			},error:function(data){console.log(data);}
		});
	}
	function showListPendingUsr2(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'cmendwll/reqstPendingUsrs2',
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
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View"><i class="fa fa-eye"></i></span>'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="xpBtnAccptCls2 confrmActA3" title="Set for Review"><i class="fa fa-crop"></i></span>'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="xpBtnAccptCls3 confrmActA4" title="Delete / Ignore"><i class="fa fa-trash"></i></span></center>'+
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

		var userid = $(this).attr('userid');
		$('input[name=useridCred]').val(userid);
		$('input[name=thisIDrecepient]').val(userid);
		var email = $(this).attr('email');
		$('input[name=emailDtailto]').val(email);
		var fullName = $(this).attr('fullName');
		fullNameXn = fullName;
		$('#cmpNnName').html(fullName);
		var cntryName = $(this).attr('cntryName');
		var cntryCode = $(this).attr('cntryCode');
		var sta = $(this).attr('sta');
		var html = "";
		html+='Complete Name:<br>&nbsp&nbsp&nbsp&nbsp<font style="font-size:17px;font-style:bold">'+fullName+'</font><br>'+
			'Country (Code):<br>&nbsp&nbsp&nbsp&nbsp<font style="font-size:17px;font-style:bold">'+cntryName+' ('+cntryCode+')</font>'+
			'<font style="float:right;margin-top:15px;" class="btn btn-default" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg">View Info.</font>'+
			'<br>User type:<br>&nbsp&nbsp&nbsp&nbsp<font style="font-size:17px;font-style:bold">Author (Default)</font>';
		$('#InfoDAtaofNwUsr').html(html);
	});

	$('#Utype').change(function(){
		var e = document.getElementById("Utype");
		var strOpUser = e.options[e.selectedIndex].value;
		if(strOpUser !== 2){
			$.ajax({
				type:'ajax',
				method:'get',
				url:'gtReglr/lckRedrct',
				data:{OP:strOpUser},
				async:true,
				dataType:'json',
				success:function(data){
					console.log(data);
					if(data.success){
						window.location.href = "gtReglr";
					}
				},error:function(data){console.log(data);}
			});
		}
	});
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
					url:'cmendwll/sbmitEmail',
					data:data,
					async:true,
					dataType:'json',
					success:function(data){
						console.log(data);
						if(data.success){
							$('.bs-confirmBan-modal-lg').hide();
							alert("Your invatation was sent via E-mail.");
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
				window.location.href = "cmendwll/lcklc";
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
			$('#autEmail').css('border','1px solid #aeaeae');
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
					html += ''+data[0].filename+' &nbsp&nbsp<button id="redhatREmFile" fileid="'+data[0].fileid+'" style="position:absolute"> X </button>';
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
		var fileid = $(this).attr('fileid');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReglr/remFileAtt',
			data:{fileid:fileid},
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
	$('#clseopdddL2').click(function(){
		$('#opdddL2').slideUp();
		$('#opdddL1').slideDown();
	});
	$('#displayMyJournalx').on('click','#viewRevXXi',function(){
		$('#opdddL1').slideUp();
		$('#opdddL2').slideDown();
		$('#homeListDsplaasdaw').slideUp();
		$('#base12bse1').slideDown();
		var fN = $(this).attr('fN');
		var j_id = $(this).attr('j_id');
		var fPath = $(this).attr('fPath');
		var titleP = $(this).attr('titleP');
		$('#cntainttInf').html(titleP);
		if(fPath == ""){
			$('#cntainLstREv').html("<font style='color:#ce2b12'>(No File attached)</font>");
		}else{
			$('#cntainLstREv').html("<a href='../"+fPath+"' target='__blank'><font>"+fN+"</font></a>");
		}
		getListofTaskMy(j_id);
	});
	getAlladminXstat();
	function getAlladminXstat(){
		$.ajax({
			type:'ajax',
			url:'gtReglr/getAlDmilipole',
			async:true,
			dataType:'json',
			success:function(data){
				var html1 = '', html2 = '', name = '';
				var i;
				for(i = 0;i<data.length;i++){
					name = ''+data[i].u_fname+' '+data[i].u_mname+' '+data[i].u_lname+'';
					html1+='<option name="listOFadmxxn" value="'+data[i].userid+'" style="padding:10px;">'+name.toUpperCase()+'</option>';
					html2+='<div style="background:#eafcc7;box-shadow:inset 1px 0px 3px rgba(0, 0, 0, .23);border-radius:4px;width:300px;padding:5px;display: inline-block;margin-left:20px;margin-top:7px;">'+
                        '<div style="width:210px;color:#838f99;font-size:12px;display:inline-block;text-align:left;">'+
                            '<div class="fox3" style="">'+
                                '<font style="font-size:14px;"><b>'+name.toUpperCase()+'</b></font>'+
                                '<br><strong>Affiliation: </strong><div style="padding-left:7px;">'+data[i].affiliation+'</div>'+
                                '<i class="fa fa-map-marker"></i> <strong>Mailing Address:</strong> <div style="padding-left:7px;">'+data[i].mailingaddrss+'</div><br>'+
                                '<i class="fa fa-google"></i> <strong>Email:</strong><div style="padding-left:7px;">elkapitanromaguera@gmail.com</div>'+
                            '</div>'+
                        '</div>'+
                        '<div id="tabPoxx" style="width:80px;display:inline-block;text-align:left;">'+
                            '<div class="fox3" style="">'+
                                '<center>';
                                    if(data[i].image == ""){
                                    	html2+='<img src="../nwng/user.png" style="width:100%;height:100px;border-radius:5%;border:2px solid white;box-shadow:1px 1px 1px rgba(0, 0, 0, .23)"><br>';
                                    }else{
                                    	html2+='<img src="../userimage/'+data[i].image+'" style="width:100%;height:100px;border-radius:5%;border:2px solid white;box-shadow:1px 1px 1px rgba(0, 0, 0, .23)"><br>';
                                    }
                                    html2+='<font id="argLSps" artview="'+data[i].artview+'" imagecop="'+data[i].image+'" mailcop="'+data[i].mailingaddrss+'" affilcop="'+data[i].affiliation+'" namecop="'+name.toUpperCase()+'" userid="'+data[i].userid+'" data-toggle="modal" data-target=".bs-viewPropAdminxx-modal-lg" class="btn btn-default" style="padding:2px;padding-right:7px;padding-left:7px;font-size:9px;margin-top:4px;">Published Articles</font>'+
                                '</center>'+
                            '</div>'+
                        '</div>'+
                    '</div>';
				}
				if(i == 0){
					html2 = 'No results...';
				}
				$('#listOFadmxxn').html(html1);
				$('#cnntOLDdoi1').html(html2);
			},error:function(data){console.log(data);}
		});
	}
	$('#cnntOLDdoi1').on('click','#argLSps',function(){
		var userid = $(this).attr('userid');
		var mailcop = $(this).attr('mailcop');
		var affilcop = $(this).attr('affilcop');
		var namecop = $(this).attr('namecop');
		var imagecop = $(this).attr('imagecop');
		var artview = $(this).attr('artview');
		var html = '';
			if(imagecop == ""){
	        	html+='<img src="nwng/user.png" style="width:210px;height:220px;border-radius:5%;border:2px solid white;box-shadow:1px 1px 1px rgba(0, 0, 0, .23)"><br>';
	        }else{
	        	html+='<img src="./userimage/'+imagecop+'" style="width:210px;height:220px;border-radius:5%;border:2px solid white;box-shadow:1px 1px 1px rgba(0, 0, 0, .23)"><br>';
	        }
            html+='<div>'+
                '<br><font style="font-size:14px;"><b>'+namecop+'</b></font>'+
                '<br><strong>Affiliation: </strong><div style="padding-left:7px;">'+affilcop+'</div>'+
                '<i class="fa fa-map-marker"></i> <strong>Mailing Address:</strong> <div style="padding-left:7px;">'+mailcop+'</div><br>'+
                '<i class="fa fa-google"></i> <strong>Email:</strong><div style="padding-left:7px;">elkapitanromaguera@gmail.com</div>'+
            '</div>';
		$('#displAInfxx000011').html(html);
		// Display Articles
		if(artview == 0){
			$.ajax({
				type:'ajax',
				method:'get',
				url:'gtReglr/getRelatedArt',
				data:{usercccID:userid},
				async:true,
				dataType:'json',
				success:function(data){
					console.log(data);
					var html = '', autComp = '';
					var i, x = 0;
					for(i = 0; i < data.length; i++){
						autComp = ''+namecop+'';
						for(x = 0;x < data[i].autXxx.length; x++){
							autComp += ', '+data[i].autXxx[x].completename.toUpperCase()+'';
						}
						html+='<div style="font-size:11px;padding:2px;margin-top:4px;background:#ededed;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42)">'+
		                    '<a href="'+data[i].fileCnnc[0].path+'" target="__blank"><font class="pointPDF" style="float:right;font-size:11px;cursor:pointer;margin-top:2px;margin-right:2px;"><i class="fa fa-hand-o-right"></i> view PDF</font></a>'+
		                    '<div style="padding:2px;margin-top:12">'+
		                      '<font class="articlesCCc" style="font-size:17px;"><b>=> '+data[i].title+'</b></font><Br>'+
		                      '<font style="font-size:9px;">&nbsp&nbsp&nbsp<i>'+autComp+'</i></font>'+
		                    '</div>'+
		                  '</div>';
					}
					if(i == 0){
						$('#journfromAtuDDs').html("No Result...");
					}else{
						$('#journfromAtuDDs').html(html);
					}
				},error:function(data){console.log(data);}
			});
		}else{ $('#journfromAtuDDs').html("No result..."); }
	});

	function getListofTaskMy(j_id){
		$('#displayMyJournalxxx33xx').html("Please wait...");
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReglr/getAllTaskNNw',
			data:{dataID:j_id},
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
	                                '<td style="width:90%">'+
	                                    '<div id="bet1" style="cursor:pointer;padding-left:6px;"><font style="font-size:10px;float:right;">'+data[i].date+' '+data[i].time+'</font>'+
	                                        '<br><font style="font-size:15px">'+data[i].mess_task+'</font>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br>Attached File: <u><a href="../'+data[i].fileDatax[0].path+'" style="text-decoration:none;color:darkblue;"><button>'+data[i].fileDatax[0].filename+'</button></a></u>'+
	                                    '</div>'+
	                                '</td>'+
	                                '<td style="width:10%;padding:2px;" align="center">'+
	                                	'<font id="fireBaseMesTask" j_id="'+j_id+'" taskID="'+data[i].taskid+'" mesTas="'+data[i].mess_task+'" class="btn btn-default" style="padding:5px;width:70%;"><i class="fa fa-mail-reply-all"></i></font>'+
	                                '</td>'+
	                            '</tr>'+
	                        '</tbody>'+
	                    '</table>';
	                    flag = Number(data[i].replies.length);
	                    if(flag > 0){
	                    	html+='<div style="margin-left:7px;padding-top:5px;">'+
		                        '<table width="100%">';
		                        	for(x = 0; x < flag; x++){
		                        		html+='<tr style="padding:5px;font-family:calibri">'+
		                                    '<td style="width:10%">'+
		                                        '<div style="padding-left:10px;">';
		                                        if(data[i].replies[x].usertype == 2){
		                                            html+='<center><i class="fa fa-user" style="font-size:25px;color:#aeaeae"></i><br><font style="font-size:9px;">Reviewer</font></center>';
		                                        }else{
		                                        	html+='<center><i class="fa fa-user" style="font-size:25px;color:#aeaeae"></i><br><font style="font-size:9px;"><b>You</b></font></center>';
		                                        }
		                                        html+='</div>'+
		                                    '</td>'+
		                                    '<td style="width:80%;padding:2px;">';
			                                    	if(data[i].replies[x].usertype == 2){
			                                    		html+='<div id="bet2" style="background:#d4e0f4;padding-left:6px;">'+
			                                    		'<font style="font-size:10px;float:right">'+data[i].replies[x].date+' '+data[i].replies[x].time+'</font>';
				                                    		html+='<font style="font-size:15px">'+data[i].replies[x].message+'</font>';
			                                    	}else{
			                                    		html+='<div id="bet2" style="background:#efdba5;padding-left:6px;">'+
			                                    		'<font style="font-size:10px;float:right">'+data[i].replies[x].date+' '+data[i].replies[x].time+'</font>';
				                                    		html+='<font style="font-size:15px">'+data[i].replies[x].message+'</font>';
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
					$('#displayMyJournalxxx33xx').html(html);
					$('#xxxLIx').html("Total: <b>"+i+"</b>");
				if(i < 1){
					$('#displayMyJournalxxx33xx').html("No result...");
				}
				//$('#tttXg').html("<b>"+i+"</b>");
			},error:function(data){console.log(data);}
		});
	}

	$('#sbmtNewTskN').click(function(){
		document.getElementById("sbmtNewTskN").disabled = true;
		$('#sbmtNewTskN').html("Please wait...");
		var data = $('#task_formN').serialize();
		var JournalIDlgt = $('input[name=JournalIDlgt]');
		var messageforTaskofAut = $('textarea[name=messageforTaskofAut]');
		if(messageforTaskofAut.val() !== ""){
			$('#messageforTaskofAut').css('border','1px solid #aeaeae');
			$.ajax({
				type:'ajax',
				method:'POST',
				url:'gtReglr/sbmtMessageAsTasksx',
				data:data,
				async:true,
				dataType:'json',
				success:function(data){
					if(data.success){
						$('.modalTemp').hide('fast');
						alert("SUCCESS: Reply has sent successfully!");
						$('textarea[name=messageforTaskofAut]').val("");
						getListofTaskMy(JournalIDlgt.val());
					}else{alert("ERROR: Try again later...");}
					document.getElementById("sbmtNewTskN").disabled = false;
					$('#sbmtNewTskN').html("Submit");
				},error:function(data){alert("ERROR: Try again later...");}
			});
		}else{
			alert("ERROR: Please fill field(s) marked in red!");
			$('#messageforTaskofAut').css('border','1px solid red');
		}
	});
	$('#displayMyJournalxxx33xx').on('click','#fireBaseMesTask',function(){
		var taskID = $(this).attr('taskID');
		var mesTas = $(this).attr('mesTas');
		var j_id = $(this).attr('j_id');
		$('input[name=journalID4task]').val(taskID);
		$('input[name=JournalIDlgt]').val(j_id);
		$('#messageResTake').html("<b>Task Message:</b><br>"+mesTas);
		$(".modalTemp").slideDown();
	});
	$('#cancelsbmtNewTskN').click(function(){
		$(".modalTemp").slideUp();
		$('input[name=messageforTaskofAut]').val("");
	});
	// Drag Div
	var draggable = $('.modalTemp'); //element
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
	
    // End Drag Div
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
			var references = $('textarea[name=references]');
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
			if(references.val() == ""){
				$('#references').css('border','1px solid red');err = 1;
			}else{
				$('#references').css('border','1px solid #aeaeae');
			}
			if(err !== 1){
				$.ajax({
					type:'ajax',
					method:'POST',
					url:'gtReglr/sbmitThsJournalxXx',
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
	var opdownArtView = 1;
	var savLink = '';
	$('#click123art1').click(function(){
		$('#pubArtViewAreaYYYYx2').slideUp();
		$('#newArtViewAreaYYYYx1').slideDown();
		$('#tttttalofArt').show();
		$('#tttttalofArt2').hide();
		$('#click123art1').css('border-bottom','2px solid red');
		$('#click123art2').css('border-bottom','none');
		savLink = 'gtReglr/getJournalxPPTsearch1';
		opdownArtView = 1;
	});
	$('#click123art2').click(function(){
		$('#newArtViewAreaYYYYx1').slideUp();
		$('#pubArtViewAreaYYYYx2').slideDown();
		$('#tttttalofArt').hide();
		$('#tttttalofArt2').show();
		$('#click123art1').css('border-bottom','none');
		$('#click123art2').css('border-bottom','2px solid red');
		savLink = 'gtReglr/getJournalxPPTsearch2';
		opdownArtView = 2;
	});
	$('#sxjjwwAllshw').click(function(){
		if(opdownArtView == 1){
			showMyJournalxNNx();
		}else if(opdownArtView == 2){
			showMyJournalxNNx222();
		}
		$("input[name=SearchBarArtAutxx01]").val("");
	});
	$('#goSEarchpubArtViewAreaYYYYx').click(function(){
		var SearchBarArtAutxx01 = $('input[name=SearchBarArtAutxx01]');
		if(opdownArtView == 1){
			$('#displayMyJournalx').html("Please wait...");
		}else if(opdownArtView == 2){
			$('#pubArtViewAreaYYYYx2').html("Please wait...");
		}
		if(SearchBarArtAutxx01.val() !== ""){
			$.ajax({
				type:'ajax',
				method:'get',
				url:savLink,
				data:{pp:SearchBarArtAutxx01.val()},
				async:true,
				dataType:'json',
				success:function(data){
					console.log(data);
					var contTen = 0;
					var html = '', authors = '';
					var i, a;
					var num = Number(data.length);
					if(opdownArtView == 1){
						for(i = 0;i<num;i++){
							authors = '';
							for(a = 0;a<data[i].aut.length;a++){
								authors+=''+data[i].aut[a].completename+', &nbsp&nbsp';
							}
							if(data[i].fileDatax[0].path == ""){
								contTen = 1;
								html+='<div id="baseofArtclesBBkx01" style="background:#d8a49c">';
							}else{
								html+='<div id="baseofArtclesBBkx01">';
							}
							html+='<span style="float:right">'+
								'<div id="hovArt" class="animated slideDown">'+
									'<div>Additional Info. &nbsp&nbsp<i class="fa fa-level-down"></i> <font style="float:right;color:red;margin-top:-5px;">Pending</font></div>'+
									'<div id="thsPrt">Submitted on (Date/Time): '+
										''+data[i].datetimeSub+'<br>';
										if(data[i].fileDatax[0].path == ""){
											html+='Attached File: <font style="color:#e5492d">WARNING: No attached file</font><br>';
										}else{
											html+='Attached File: <a href="../'+data[i].fileDatax[0].path+'" target="__blank">'+data[i].fileDatax[0].filename+'</a><br>';
										}
										html+='<center>'+
											'<font id="viewRevXXi" j_id="'+data[i].j_id+'" titleP="'+data[i].titlex+'" fPath="'+data[i].fileDatax[0].path+'" fN="'+data[i].fileDatax[0].filename+'" class="btn btn-default" style="padding:0px;font-size:12px;padding-left:20px;padding-right:20px;">View Article Tasks</font>'+
											'<font id="modiFyxPartArt" j_id="'+data[i].j_id+'" references="'+data[i].references+'" keywords="'+data[i].keywords+'" abstract="'+data[i].abstract+'" titleP="'+data[i].titlex+'" fPath="'+data[i].fileDatax[0].path+'" fN="'+data[i].fileDatax[0].filename+'" class="btn btn-warning" style="padding:0px;font-size:12px;padding-left:20px;padding-right:20px;" data-toggle="modal" data-target=".bs-modifyxPartArtMod-modal-lg">Update</font>'+
										'</center>'+
									'</div>'+
								'</div>'+
							'</span>'+
							'<b>Title:</b><i><div style="padding-left:10px;">'+data[i].titlex+'</div><b>Abstract:</b><div style="padding-left:10px;">'+data[i].abstract+'</div><b>Keywords:</b><div style="padding-left:10px;">'+data[i].keywords+'</div></i>'+
							'<div style="height:50px;"><i style="float:right">'+authors+'</i></div>'+
						'</div>';
						}
						if(i == 0){
							$('#displayMyJournalx').html('<div style="padding:30px;font-size:25px;">Click "Add new article" for review!</div>');
						}else{
							$('#displayMyJournalx').html(html);
							$('#tttttalofArt').html("Total: " + i);
						}
					}else if(opdownArtView == 2){
						for(i = 0;i<num;i++){
							authors = '';
							for(a = 0;a<data[i].aut.length;a++){
								authors+=''+data[i].aut[a].completename+', &nbsp&nbsp';
							}
							html+='<div id="baseofArtclesBBkx01"><span style="float:right">'+
								'<div id="hovArt" class="animated slideDown">'+
									'<div>Additional Info. &nbsp&nbsp<i class="fa fa-level-down"></i> <font style="float:right;color:red;margin-top:-5px;">Pending</font></div>'+
									'<div id="thsPrt">Submitted on (Date/Time): '+
										''+data[i].datetimeSub+'<br>';
										if(data[i].fileDatax[0].path == ""){
											html+='Attached File: <font style="color:#e5492d">WARNING: No attached file</font><br>';
										}else{
											html+='Attached File: <a href="../'+data[i].fileDatax[0].path+'" target="__blank">'+data[i].fileDatax[0].filename+'</a><br>';
										}
										html+='</div>'+
								'</div>'+
							'</span>'+
							'<b>Title:</b><i><div style="padding-left:10px;">'+data[i].titlex+'</div><b>Abstract:</b><div style="padding-left:10px;">'+data[i].abstract+'</div><b>Keywords:</b><div style="padding-left:10px;">'+data[i].keywords+'</div></i>'+
							'<div style="height:20px;"><i style="float:right">'+authors+'</i></div>'+
						'</div>';
						}
						if(i == 0){
							$('#pubArtViewAreaYYYYx2').html('<div style="padding:30px;font-size:25px;">Click "Add new article" for review!</div>');
							$('#tttttalofArt2').html("Total: " + i);
						}else{
							$('#pubArtViewAreaYYYYx2').html(html);
							$('#tttttalofArt2').html("Total: " + i);
						}
					}
				},error:function(data){console.log(data);}
			});
		}else{
			alert("ERROR: Please fill the field marked with red!");
			$('#SearchBarArtAutxx01').css('border','2px solid red');
		}	
	});
	$('#click123art2').click(function(){
		showMyJournalxNNx222();
	});
	function showMyJournalxNNx222(){
		$('#pubArtViewAreaYYYYx2').html("Please wait...");
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReglr/getJournalxPPT2',
			async:true,
			dataType:'json',
			success:function(data){
				var contTen = 0;
				var html = '', authors = '';
				var i, a;
				var num = 0;
				num = Number(data.length);
				for(i = 0;i<num;i++){
					authors = '';
					for(a = 0;a<data[i].aut.length;a++){
						authors+=''+data[i].aut[a].completename+', &nbsp&nbsp';
					}
					if(data[i].fileDatax[0].path == ""){
						html+='<div id="baseofArtclesBBkx01" style="background:#d8a49c;"><span style="float:right">';
					}else{
						html+='<div id="baseofArtclesBBkx01" style="background:white;"><span style="float:right">';
					}
					html+='<div id="hovArt" class="animated slideDown">'+
							'<div>Additional Info. &nbsp&nbsp<i class="fa fa-level-down"></i> <font style="float:right;color:red;margin-top:-5px;">Pending</font></div>'+
							'<div id="thsPrt">Submitted on (Date/Time): '+
								''+data[i].datetimeSub+'<br>';
								if(data[i].fileDatax[0].path == ""){
									html+='Attached File: <font style="color:#e5492d">WARNING: No attached file</font><br>';
								}else{
									html+='Attached File: <a href="../'+data[i].fileDatax[0].path+'" target="__blank">'+data[i].fileDatax[0].filename+'</a><br>';
								}
								html+='</div>'+
						'</div>'+
					'</span>'+
					'<b>Title:</b><i><div style="padding-left:10px;">'+data[i].titlex+'</div><b>Abstract:</b><div style="padding-left:10px;">'+data[i].abstract+'</div><b>Keywords:</b><div style="padding-left:10px;">'+data[i].keywords+'</div></i>'+
					'<div style="height:20px;"><i style="float:right">'+authors+'</i></div>'+
				'</div>';
				}
				if(i == 0){
					$('#pubArtViewAreaYYYYx2').html('<div style="padding:30px;font-size:25px;">Click "Add new article" for review!</div>');
					$('#tttttalofArt2').html("Total: " + i);
				}else{
					$('#pubArtViewAreaYYYYx2').html(html);
					$('#tttttalofArt2').html("Total: " + i);
				}
			},error:function(data){console.log(data);}
		});
	}
	function showMyJournalxNNx(){
		$('#displayMyJournalx').html("Please wait...");
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReglr/getJournalxPPT',
			async:true,
			dataType:'json',
			success:function(data){
				console.log(data);
				var contTen = 0;
				var html = '', authors = '';
				var i, a;
				var num = Number(data.length);
				for(i = 0;i<num;i++){
					authors = '';
					for(a = 0;a<data[i].aut.length;a++){
						authors+=''+data[i].aut[a].completename+', &nbsp&nbsp';
					}
					if(data[i].fileDatax[0].path == ""){
						contTen = 1;
						html+='<div id="baseofArtclesBBkx01" style="background:#d8a49c">';
					}else{
						html+='<div id="baseofArtclesBBkx01">';
					}
					html+='<span style="float:right">'+
						'<div id="hovArt" class="animated slideDown">'+
							'<div>Additional Info. &nbsp&nbsp<i class="fa fa-level-down"></i> <font style="float:right;color:red;margin-top:-5px;">Pending</font></div>'+
							'<div id="thsPrt">Submitted on (Date/Time): '+
								''+data[i].datetimeSub+'<br>';
								if(data[i].fileDatax[0].path == ""){
									html+='Attached File: <font style="color:#e5492d">WARNING: No attached file</font><br>';
								}else{
									html+='Attached File: <a href="../'+data[i].fileDatax[0].path+'" target="__blank">'+data[i].fileDatax[0].filename+'</a><br>';
								}
								html+='<center>'+
									'<font id="viewRevXXi" j_id="'+data[i].j_id+'" titleP="'+data[i].titlex+'" fPath="'+data[i].fileDatax[0].path+'" fN="'+data[i].fileDatax[0].filename+'" class="btn btn-default" style="padding:0px;font-size:12px;padding-left:20px;padding-right:20px;">View Article Tasks</font>'+
									'<font id="modiFyxPartArt" j_id="'+data[i].j_id+'" references="'+data[i].references+'" keywords="'+data[i].keywords+'" abstract="'+data[i].abstract+'" titleP="'+data[i].titlex+'" fPath="'+data[i].fileDatax[0].path+'" fN="'+data[i].fileDatax[0].filename+'" class="btn btn-warning" style="padding:0px;font-size:12px;padding-left:20px;padding-right:20px;" data-toggle="modal" data-target=".bs-modifyxPartArtMod-modal-lg">Update</font>'+
								'</center>'+
							'</div>'+
						'</div>'+
					'</span>'+
					'<b>Title:</b><i><div style="padding-left:10px;">'+data[i].titlex+'</div><b>Abstract:</b><div style="padding-left:10px;">'+data[i].abstract+'</div><b>Keywords:</b><div style="padding-left:10px;">'+data[i].keywords+'</div></i>'+
					'<div style="height:50px;"><i style="float:right">'+authors+'</i></div>'+
				'</div>';
				}
				if(i == 0){
					$('#displayMyJournalx').html('<div style="padding:30px;font-size:25px;">Click "Add new article" for review!</div>');
				}else{
					$('#displayMyJournalx').html(html);
					$('#tttttalofArt').html("Total: " + i);
				}
				if(contTen == 1){
					$('.hjkllllddCont').html("<font style='color:#b72b14'><i class='fa fa-warning'></i> Found article(s) with <b>no</b> attached file!</font>");
				}else{
					$('.hjkllllddCont').html("");
				}
			},error:function(data){console.log(data);}
		});
	}
	var titleXx_mod_glob = '', abstractXx_mod_glob = '', keywordsXx_mod_glob = '', referenceXx_mod_glob = '';
	$('#displayMyJournalx').on('click','#modiFyxPartArt',function(){
		$('#submitNWjourmnSCnnARt').hide();
		$('#percentageCMP_mod').html('0%');
		$('#prog_mod').attr('value',0);
		$('#psw1x1_mod').html("");
		var j_id = $(this).attr('j_id');
		var titleP = $(this).attr('titleP');
		var fPath = $(this).attr('fPath');
		var keywords = $(this).attr('keywords');
		var abstract = $(this).attr('abstract');
		var references = $(this).attr('references');
		if(fPath == "null"){
			$('#part1askArtBase').hide();
			$('#part2askArtBase').show();
		}else{
			$('#part1askArtBase').show();
			$('#part2askArtBase').hide();
		}
		$('input[name=journIDklklxx]').val(j_id);
		$('input[name=journIDklklxx2forFile2]').val(j_id);
		$('input[name=titleCptyaskjdbawxx]').val(titleP);
		$('input[name=journalIdforBbse]').val(j_id);
		$('input[name=titleCptyaskjdbawxx2]').val(titleP);
		$('input[name=journalIdforBbse2]').val(j_id);
		$('input[name=journIDklklxx2forFile]').val(j_id);
		titleXx_mod_glob = titleP;
		abstractXx_mod_glob = abstract;
		keywordsXx_mod_glob = keywords;
		referenceXx_mod_glob = references;
		$('textarea[name=titleXx_mod]').val(titleP);
		$('textarea[name=abstractXx_mod]').val(abstract);
		$('textarea[name=keywordsXx_mod]').val(keywords);
		$('textarea[name=ReferencesXx_mod]').val(references);
		if(fPath == ""){
			$('#part1askArtBase').hide();
			$('#part2askArtBase').show();
		}else{
			$('#part1askArtBase').html('<center><a href="../'+fPath+'">'+titleP+'</a><br><font class="btn btn-default" style="font-size:12px;" id="changePartfileddta" j_id="'+j_id+'" titlepp="'+titleP+'" data-toggle="modal" data-target=".bs-dlanyWYTX-modal-lg">Update/Change File</font></center>');
		}
	});
	var baseResAllCheck = 0;
	$('#keywordsXx_mod').keyup(function(){
		var titleXx_mod = $('textarea[name=titleXx_mod]');
		var abstractXx_mod = $('textarea[name=abstractXx_mod]');
		var keywordsXx_mod = $('textarea[name=keywordsXx_mod]');
		var referencesXx_mod = $('textarea[name=ReferencesXx_mod]');
		if(keywordsXx_mod_glob !== keywordsXx_mod.val()){
			$('#submitNWjourmnSCnnARt').show();
		}else{
			if(titleXx_mod_glob == titleXx_mod.val() && abstractXx_mod_glob == abstractXx_mod.val() && referenceXx_mod_glob == referencesXx_mod.val()){
				$('#submitNWjourmnSCnnARt').hide();
			}
		}
	});
	$('#abstractXx_mod').keyup(function(){
		var titleXx_mod = $('textarea[name=titleXx_mod]');
		var abstractXx_mod = $('textarea[name=abstractXx_mod]');
		var keywordsXx_mod = $('textarea[name=keywordsXx_mod]');
		var referencesXx_mod = $('textarea[name=ReferencesXx_mod]');
		if(abstractXx_mod_glob !== abstractXx_mod.val()){
			$('#submitNWjourmnSCnnARt').show();
		}else{
			if(titleXx_mod_glob == titleXx_mod.val() && keywordsXx_mod_glob == keywordsXx_mod.val() && referenceXx_mod_glob == referencesXx_mod.val()){
				$('#submitNWjourmnSCnnARt').hide();
			}
		}
	});
	$('#titleXx_mod').keyup(function(){
		var titleXx_mod = $('textarea[name=titleXx_mod]');
		var abstractXx_mod = $('textarea[name=abstractXx_mod]');
		var keywordsXx_mod = $('textarea[name=keywordsXx_mod]');
		var referencesXx_mod = $('textarea[name=ReferencesXx_mod]');
		if(titleXx_mod_glob !== titleXx_mod.val()){
			$('#submitNWjourmnSCnnARt').show();
		}else{
			if(abstractXx_mod_glob == abstractXx_mod.val() && keywordsXx_mod_glob == keywordsXx_mod.val() && referenceXx_mod_glob == referencesXx_mod.val()){
				$('#submitNWjourmnSCnnARt').hide();
			}
		}
	});
	$('#ReferencesXx_mod').keyup(function(){
		var titleXx_mod = $('textarea[name=titleXx_mod]');
		var abstractXx_mod = $('textarea[name=abstractXx_mod]');
		var keywordsXx_mod = $('textarea[name=keywordsXx_mod]');
		var referencesXx_mod = $('textarea[name=ReferencesXx_mod]');
		if(referenceXx_mod_glob !== referencesXx_mod.val()){
			$('#submitNWjourmnSCnnARt').show();
		}else{
			if(abstractXx_mod_glob == abstractXx_mod.val() && keywordsXx_mod_glob == keywordsXx_mod.val() && titleXx_mod_glob == titleXx_mod.val()){
				$('#submitNWjourmnSCnnARt').hide();
			}
		}
	});

	$('#part1askArtBase').on('click','#changePartfileddta',function(){
		var titlepp = $(this).attr('titlepp');
		var j_id = $(this).attr('j_id');
		$('input[name=idd_BaseFile]').val(j_id);
		$('#titleofJournBB').html(titlepp);
	});
	$('#viewFullAVsssStract').click(function(){
		var abstractXx_mod = $('textarea[name=abstractXx_mod]');
		$('textarea[name=abstractXx_mod2x]').val(abstractXx_mod.val());
	});
	$('#doneEdAb').click(function(){
		var abstractXx_mod2x = $('textarea[name=abstractXx_mod2x]');
		$('textarea[name=abstractXx_mod]').val(abstractXx_mod2x.val());
	});
	$('#prosAnwy').click(function(){
		$('.bs-dlanyWYTX-modal-lg').hide();
		$('#part1askArtBase').hide();
		$('#part2askArtBase').show();
		var idd_BaseFile = $('input[name=idd_BaseFile]');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReglr/remFilePersXxa',
			data:{dataJourn:idd_BaseFile.val()},
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					alert("WARNING: file has been deleted!");
					showMyJournalxNNx();
				}else{
					alert("ERROR: Perform update later");
				}
			},error:function(data){console.log(data);}
		});
	});
	$('#submitNWjourmnSCnnARt').click(function(){
		var data = $('#journalFFsb-form_mod').serialize();
		var titleXx_mod = $('input[name=titleXx_mod]');
		var abstractXx_mod = $('input[name=abstractXx_mod]');
		var keywordsXx_mod = $('input[name=keywordsXx_mod]');
		var err = 0;
		if(keywordsXx_mod.val() == ""){
			err = 1;$('#keywordsXx_mod').css('border','1px solid red');
		}else{ $('#keywordsXx_mod').css('border','1px solid #aeaeae'); }
		if(abstractXx_mod.val() == ""){
			err = 1;$('#abstractXx_mod').css('border','1px solid red');
		}else{ $('#abstractXx_mod').css('border','1px solid #aeaeae'); }
		if(titleXx_mod.val() == ""){
			err = 1;$('#titleXx_mod').css('border','1px solid red');
		}else{ $('#titleXx_mod').css('border','1px solid #aeaeae'); }
		if(err !== 1){
			$.ajax({
				type:'ajax',
				method:'POST',
				url:'gtReglr/submitUpdateTAK',
				data:data,
				async:true,
				dataType:'json',
				success:function(data){
					if(data.success){
						alert("SUCCESS: Article successfully modified");
						$('.bs-modifyxPartArtMod-modal-lg').hide();
						showMyJournalxNNx();
					}else{
						alert("ERROR: Perform update later");
					}
				},error:function(data){console.log(data);}
			});
		}else{ alert("ERROR: Please fill field(s) marked in red"); }
	});
	$('#cancelBaseChangeFxxmd').click(function(){
		$('#part2askArtBase').hide();
		$('#part1askArtBase').show();
	});
	$('#attdataFleSS').click(function(){
		$('#kllklaaxxtyyy1').slideUp();
		$('#kllklaaxxtyyy2').slideDown();
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
					if(jQuery.inArray(file_extension,['pdf']) == -1){
						if(jQuery.inArray(file_extension,['PDF']) == -1){
							alert("ERROR: We accept Microsoft Word document format only...");
							$('#attnameFFLdd').html("No attached file (1 file per message)");
							$('#attdataFleSS').show();
							$('#attnameFFLdd').css('color','#aeaeae');
							$("input[name=file_mod2]").val("");
						}
					}	
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
	//document.getElementById("SBmitFF2x2").disabled = true;
	$('#foxMEsARea').keyup(function(){
		var foxMEsARea = $('textarea[name=foxMEsARea]');
		if(foxMEsARea.val() !== ""){
			document.getElementById("SBmitFF2x2").disabled = false;
		}else{
			document.getElementById("SBmitFF2x2").disabled = true;
		}
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
			url:'gtReglr/sbmtMessPLxxgge',
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
	$('#uploadfile_mod2').on('submit',function(e){
		var propertyxx01 = document.getElementById("file_mod2").files[0];
		var image_name = propertyxx01.name;
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
	// Copied FileUpload for Modification
	$(document).on('change','#uploadfile_mod',function(){
		var err = 0;
		var fileSize = 0;
		var property = document.getElementById("file_mod").files[0];
		var image_name = property.name;
		var file_extension = image_name.split('.').pop().toLowerCase();
		if(jQuery.inArray(file_extension,['doc']) == -1){
			if(jQuery.inArray(file_extension,['docs']) == -1){
				if(jQuery.inArray(file_extension,['docx']) == -1){
					if(jQuery.inArray(file_extension,['pdf']) == -1){
						if(jQuery.inArray(file_extension,['PDF']) == -1){
							$('#uploadfile_mod')[0].reset();
							alert("ERROR: We accept Microsoft Word document format only...");
						}
					}
				}
			}
		}
		fileSize = Number(document.getElementById("file_mod").files[0].size);
		if(fileSize > 200000000){
			alert("ERROR: File was too large...");
			$('#uploadfile_mod')[0].reset();
		}
	});
	$('#uploadfile_mod').on('submit',function(e){
		e.preventDefault();
		$(this).ajaxSubmit({
			beforeSend:function(){
				$('#psw1x1_mod').html("<i>File is uploading, please wait...</i>");
				$('#prog_mod').attr('value','0');
				$('#percentageCMP_mod').html('0%');
			},uploadProgress:function(event, position, total, percentageComplete){
				$('#prog_mod').attr('value',percentageComplete);
				$('#percentageCMP_mod').html(percentageComplete+'%');
			},success:function(data){
				$('#psw1x1_mod').html("<font color='green'>File updated successfully...</font>");
				$('#uploadfile_mod')[0].reset();
				showMyJournalxNNx();
			},error:function(){
				alert("ERROR: You can change the name of the file, please contact the Administrator if it still doens't work.");
			}
		});
	});
	// End Copied FileUpload for Modification

	$(document).on('change','#file',function(){
		var err = 0;
		var fileSize = 0;
		var property = document.getElementById("file").files[0];
		var image_name = property.name;
		var file_extension = image_name.split('.').pop().toLowerCase();
		if(jQuery.inArray(file_extension,['doc']) == -1){
			if(jQuery.inArray(file_extension,['docs']) == -1){
				if(jQuery.inArray(file_extension,['docx']) == -1){
					if(jQuery.inArray(file_extension,['pdf']) == -1){
						if(jQuery.inArray(file_extension,['PDF']) == -1){
							$('#uploadfile')[0].reset();
							alert("ERROR: We accept Microsoft Word document format only...");
						}
					}
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

	/// Reviewer ARea
	$('#btn-dashReviewer').click(function(){
		$('#ResearchrsArea').slideUp();
		$('#editorsArea').slideUp();
		$('#articlesArea').slideUp();
		$('#homeAreaAdmn').slideDown();
		$('#AmessageArea').slideUp();

		$('#btn-Messagex').css('border-left','none');
		$('#btn-dashReviewer').css('border-left','3px solid #7aad40');
		$('#btn-ArticlesX').css('border-left','none');
		$('#btn-EditorsX').css('border-left','none');
		$('#btn-ViewReserachrs').css('border-left','none');
		$('#paginationCnt').html("Admin Dashboard");
	});
	$('#btn-ViewReserachrs').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#editorsArea').slideUp();
		$('#articlesArea').slideUp();
		$('#ResearchrsArea').slideDown();
		$('#AmessageArea').slideUp();

		$('#btn-Messagex').css('border-left','none');
		$('#btn-ViewReserachrs').css('border-left','3px solid #7aad40');
		$('#btn-ArticlesX').css('border-left','none');
		$('#btn-EditorsX').css('border-left','none');
		$('#btn-dashReviewer').css('border-left','none');
		$('#paginationCnt').html("Researchers");
	});
	$('#btn-EditorsX').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#ResearchrsArea').slideUp();
		$('#articlesArea').slideUp();
		$('#editorsArea').slideDown();
		$('#AmessageArea').slideUp();

		$('#btn-Messagex').css('border-left','none');
		$('#btn-EditorsX').css('border-left','3px solid #7aad40');
		$('#btn-ArticlesX').css('border-left','none');
		$('#btn-ViewReserachrs').css('border-left','none');
		$('#btn-dashReviewer').css('border-left','none');
		$('#paginationCnt').html("Editors");
	});
	$('#btn-ArticlesX').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#ResearchrsArea').slideUp();
		$('#editorsArea').slideUp();
		$('#articlesArea').slideDown();
		$('#AmessageArea').slideUp();

		$('#btn-Messagex').css('border-left','none');
		$('#btn-ArticlesX').css('border-left','3px solid #7aad40');
		$('#btn-EditorsX').css('border-left','none');
		$('#btn-ViewReserachrs').css('border-left','none');
		$('#btn-dashReviewer').css('border-left','none');
		$('#paginationCnt').html("Articles");
	});
	$('#btn-Messagex').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#ResearchrsArea').slideUp();
		$('#editorsArea').slideUp();
		$('#articlesArea').slideUp();
		$('#AmessageArea').slideDown();

		$('#btn-Messagex').css('border-left','3px solid #7aad40');
		$('#btn-ArticlesX').css('border-left','none');
		$('#btn-EditorsX').css('border-left','none');
		$('#btn-ViewReserachrs').css('border-left','none');
		$('#btn-dashReviewer').css('border-left','none');
		$('#paginationCnt').html("Articles");
	});
	/// End Reviewer ARea
	/// Editor ARea
	$('#E-btn-dashReviewer').click(function(){
		$('#E-ResearchrsArea').slideUp();
		$('#E-editorsArea').slideUp();
		$('#E-articlesArea').slideUp();
		$('#E-homeAreaAdmn').slideDown();
		$('#E-AmessageArea').slideUp();

		$('#E-btn-Messagex').css('border-left','none');
		$('#E-btn-dashReviewer').css('border-left','3px solid #7aad40');
		$('#E-btn-ArticlesX').css('border-left','none');
		$('#E-btn-EditorsX').css('border-left','none');
		$('#E-btn-ViewReserachrs').css('border-left','none');
		$('#E-paginationCnt').html("Admin Dashboard");
	});
	$('#E-btn-ViewReserachrs').click(function(){
		$('#E-homeAreaAdmn').slideUp();
		$('#E-editorsArea').slideUp();
		$('#E-articlesArea').slideUp();
		$('#E-ResearchrsArea').slideDown();
		$('#E-AmessageArea').slideUp();

		$('#E-btn-Messagex').css('border-left','none');
		$('#E-btn-ViewReserachrs').css('border-left','3px solid #7aad40');
		$('#E-btn-ArticlesX').css('border-left','none');
		$('#E-btn-EditorsX').css('border-left','none');
		$('#E-btn-dashReviewer').css('border-left','none');
		$('#E-paginationCnt').html("Researchers");
	});
	$('#E-btn-EditorsX').click(function(){
		$('#E-homeAreaAdmn').slideUp();
		$('#E-ResearchrsArea').slideUp();
		$('#E-articlesArea').slideUp();
		$('#E-editorsArea').slideDown();
		$('#E-AmessageArea').slideUp();

		$('#E-btn-Messagex').css('border-left','none');
		$('#E-btn-EditorsX').css('border-left','3px solid #7aad40');
		$('#E-btn-ArticlesX').css('border-left','none');
		$('#E-btn-ViewReserachrs').css('border-left','none');
		$('#E-btn-dashReviewer').css('border-left','none');
		$('#E-paginationCnt').html("Editors");
	});
	$('#E-btn-ArticlesX').click(function(){
		$('#E-homeAreaAdmn').slideUp();
		$('#E-ResearchrsArea').slideUp();
		$('#E-editorsArea').slideUp();
		$('#E-articlesArea').slideDown();
		$('#E-AmessageArea').slideUp();

		$('#E-btn-Messagex').css('border-left','none');
		$('#E-btn-ArticlesX').css('border-left','3px solid #7aad40');
		$('#E-btn-EditorsX').css('border-left','none');
		$('#E-btn-ViewReserachrs').css('border-left','none');
		$('#E-btn-dashReviewer').css('border-left','none');
		$('#E-paginationCnt').html("Articles");
	});
	$('#E-btn-Messagex').click(function(){
		$('#E-homeAreaAdmn').slideUp();
		$('#E-ResearchrsArea').slideUp();
		$('#E-editorsArea').slideUp();
		$('#E-articlesArea').slideUp();
		$('#E-AmessageArea').slideDown();

		$('#E-btn-Messagex').css('border-left','3px solid #7aad40');
		$('#E-btn-ArticlesX').css('border-left','none');
		$('#E-btn-EditorsX').css('border-left','none');
		$('#E-btn-ViewReserachrs').css('border-left','none');
		$('#E-btn-dashReviewer').css('border-left','none');
		$('#E-paginationCnt').html("Articles");
	});
	/// End Editor ARea

	// Image Cropping
	$image_crop = $('#image_demo').croppie({
		enableExif:true,
		viewport:{
			width:280,
			height:280,
			type:'square' // circle
		},
		boundary:{
			width:400,
			height:400
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
		document.getElementById("cropNowimg").disabled = false;
		$('#progxxxx012').show();
		$('#psw1x1xxxx012').show();
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
				type:'POST',
				url:'gtReglr/uploadMyProfImage',
				data:{'image':response},
				success:function(data){
					console.log(data);
					alert("Image uploaded successfully!");
					document.getElementById("cropNowimg").disabled = true;
					$('.bs-changePhot-modal-lg').hide();
					$('#progxxxx012').hide();
					$('#psw1x1xxxx012').hide();
					ffffffdsp();
					showLixxp();
				},error:function(){
					alert("ERROR: You can change the name of the file, please contact the Administrator if it still doens't work.");
				}
			});
		})
	});
	function ffffffdsp(){
		$.ajax({
			type:'ajax',
			url:'gtReglr/getIMXx',
			async:true,
			dataType:'json',
			success:function(data){
				console.log(data);
				$('#sappPPLxx').html('<img src="./userimage/'+data[0].image+'" style="width:107px;height:110px;margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22)">');
				$('#sappPPLxx2').html('<img src="./userimage/'+data[0].image+'" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);width:200px;height:200px;">');
				$('#testImg').html('<img src="./userimage/'+data[0].image+'" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);width:400px;height:400px;">');
			},error:function(data){console.log(data);}
		});
	}
	// End Image Cropping
	$('#prosAnwy2xx').click(function(){
		var data = $('#formSEtup_formPRiv').serialize();
		var passwordSetup = $('input[name=passwordSetup]');
		var retypepasswordSetup = $('input[name=retypepasswordSetup]');
		var usernameSetup = $('input[name=usernameSetup]');
		var confirmPasss = $('input[name=confirmPasss]');
		var err = 0, xxpkl = 0;
		if(passwordSetup.val() !== retypepasswordSetup.val()){
			err = 1;
			alert("ERROR: Password did not matched!");
			$('#passwordSetup').css('border','2px solid red');
			$('#retypepasswordSetup').css('border','2px solid red');
		}else{
			$('#passwordSetup').css('border','1px solid #aeaeae');
			$('#retypepasswordSetup').css('border','1px solid #aeaeae');
		}
		if(passwordSetup.val() == ""){
			xxpkl = 1;err = 1;
			$('#passwordSetup').css('border','2px solid red');
		}else{
			$('#passwordSetup').css('border','1px solid #aeaeae');
		}
		if(retypepasswordSetup.val() == ""){
			xxpkl = 1;err = 1;
			$('#retypepasswordSetup').css('border','2px solid red');
		}else{
			$('#retypepasswordSetup').css('border','1px solid #aeaeae');
		}
		if(usernameSetup.val() == ""){
			xxpkl = 1;err = 1;
			$('#usernameSetup').css('border','2px solid red');
		}else{
			$('#usernameSetup').css('border','1px solid #aeaeae');
		}
		if(confirmPasss.val() == ""){
			xxpkl = 1;err = 1;
			$('#confirmPasss').css('border','2px solid red');
		}else{
			$('#confirmPasss').css('border','1px solid #aeaeae');
		}

		if(err !== 1){
			$.ajax({
				type:'ajax',
				method:'POST',
				url:'gtReglr/sbmitPRivChange',
				data:data,
				async:true,
				dataType:'json',
				success:function(data){
					console.log(data);
					if(data.success){
						window.location.href = "gtReglr";
					}else{
						alert("ERROR: Try again later!");
					}
				},error:function(data){console.log(data);}
			});
		}
		if(xxpkl == 1){
			alert("ERROR: Please fill in field(s) marked in red");
		}
	});

	showLixxp();
	function showLixxp(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReglr/logsGet',
			async:true,
			dataType:'json',
			success:function(data){
				var html = '';
				var i, a = 0;
				for(i = 0; i < data.length; i++){
					html+='<div style="font-size:12px;padding:2px;margin-top:4px;background:#dce5df;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42)">'+
                        '<font style="float:right;color:#aeaeae;font-size:10px;">Posted: '+data[i].datelog+' | '+data[i].timelog+'</font>'+
                        '<div style="padding:2px;margin-top:9">'+
                          'You '+data[i].log+''+
                        '</div>'+
                    '</div>';
				}
				$('#displayLogsInfoAreaxxP').html(html);
			},error:function(data){console.log(data);}
		});
	}
	showLixxp2XXnote();
	checkNoteRT();
	function checkNoteRT(){
		setTimeout(function(){
			showLixxp2XXnote();
		},120000);
	}
	function showLixxp2XXnote(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReglr/thisNoteGet',
			async:true,
			dataType:'json',
			success:function(data){
				var spanHT = '', html = '';
				var i, a = 0, num = 0;
				num = Number(data.content1);
				for(i = 0; i < data.content2.length; i++){
					html+='<div style="font-size:12px;padding:2px;margin-top:4px;background:#dce5df;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42)">'+
                        '<font style="float:right;color:#aeaeae;font-size:10px;">Posted: '+data.content2[i].date+' | '+data.content2[i].time+'</font>'+
                        '<div style="padding:2px;margin-top:9">'+
                          ''+data.content2[i].messagenote+''+
                        '</div>'+
                    '</div>';
				}
				if(num > 0){
					spanHT='<span style="background:#c64b4b;border-radius:50%;position:absolute;color:white;margin-left:25px;padding:2px;font-size:12px;margin-top:-10px;border:1px solid white;box-shadow:1px 1px 4px rgba(0, 0, 0, .3);width:26px;"><center>'+num+'</center></span>';
				}else{
					spanHT = "";
				}
				$('#placeNoteHHre').html(spanHT);
				$('#displatNotexAA').html(html);
			},error:function(data){console.log(data);}
		});
	}
	$('#clickToDipsNote').click(function(){
		$('#placeNoteHHre').html("");
		$.ajax({
			type:'ajax',
			url:'gtReglr/UpthisNoteTook',
			async:true,
			dataType:'json'
		});
	});
	$('#uipCodeCcntry').click(function(){
		$('#countryCOdePPLy').hide();
		$('#showCCntEdPPo').show();
		$('input[name=identffklasPP0a1]').val(1);
		GTcntry();
	});
	function GTcntry(){
		$.ajax({
			type:'ajax',
			url:'gtReglr/getCountry',
			async:true,
			dataType:'json',
			success:function(data){
				var html = '';
				var i;
				html+='<option name="RegCountry" value="">Select Country</option>';
				for(i = 0;i < data.length;i++){
					html+='<option name="RegCountry" value="'+data[i].countryid+'">'+data[i].country_name+' &nbsp&nbsp&nbsp&nbsp +'+data[i].country_code+'</option>';
				}
				$('#RegCountryXp').html(html);
			},error:function(data){console.log(data);}
		});
		$('#handWarnfirstUserN').hide();
	}

	$('#prosUpdatePIXscscsc').click(function(){
		var data = $('#perSUpdate_formCs').serialize();
		/*var affiliationEd = $('input[name=affiliationEd]');
		var emailEd = $('input[name=emailEd]');
		var orcid_idEd = $('input[name=orcid_idEd]');
		var urlEd = $('input[name=urlEd]');
		var phoneEd = $('input[name=phoneEd]');
		var faxEd = $('input[name=faxEd]');
		var mailingaddrssEd = $('input[name=mailingaddrssEd]');
		var country_nameEd = $('input[name=country_nameEd]');
		var bio_stateEd = $('input[name=bio_stateEd]');*/
		
		$.ajax({
			type:'ajax',
			method:'POST',
			url:'gtReglr/updateCsFmxPP',
			data:data,
			async:true,
			dataType:'json',
			success:function(data){
				console.log(data);
				if(data.success){
					window.location.href = "gtReglr";
				}else{
					alert("ERROR: Try again later!");
				}
			},error:function(data){console.log(data);}
		});
	});

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