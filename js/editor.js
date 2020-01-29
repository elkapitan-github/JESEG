$(document).ready(function(){
	document.getElementById("submitNWjourmn").disabled = true;
	//document.body.style.overflow = 'hidden';
	$('#dataimg').hover(function(){
		$('#recog').slideDown();
	});
	$('#dataimg').mouseleave(function(){
		$('#recog').slideUp();
	});
	var downDataOp = 1;
	funcAnnoun();
	rese();
	function rese(){
		setTimeout(function(){
			funcAnnoun();
		},90000);
	}
	function funcAnnoun(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtEdtrRr/getAllAnnce',
			async:true,
			dataType:'json',
			success:function(data){
				var html = '';
				var i = 0;
				for(i = 0;i < data.length; i++){
					html+='<div style="font-size:11px;padding:2px;margin-top:4px;background:#dce5df;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42)">'+
	                    '<font style="float:right;color:#aeaeae;font-size:8px;">Posted: '+data[i].datestartann+'</font>'+
	                    '<div style="padding:2px;margin-top:9">'+
	                      '<font><b>=> '+data[i].subject+'</b></font><Br>'+
	                      '<font style="font-size:11px;">'+data[i].anndetail+'</font>'+
	                   '</div>'+
	                '</div>';
				}
				$('.annBasedAreaDisp').html(html);
				$('#dispAnnCnt').html(i);
			},error:function(data){console.log(data);}
		});
	}
	showLixxp();
	function showLixxp(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtEdtrRr/logsGet',
			async:true,
			dataType:'json',
			success:function(data){
				var html = '';
				var i, a = 0;
				for(i = 0; i < data.length; i++){
					html+='<div style="font-size:14px;padding:2px;margin-top:4px;background:#dce5df;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42)">'+
                        '<font style="float:right;color:#aeaeae;font-size:12px;">Posted: '+data[i].datelog+' | '+data[i].timelog+'</font>'+
                        '<div style="padding:2px;margin-top:9">'+
                          'You '+data[i].log+''+
                        '</div>'+
                    '</div>';
				}
				$('#contentLogsPste').html(html);
				$('#totalLogsmmy').html(i);
			},error:function(data){console.log(data);}
		});
	}


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

	
	/*$(document).on('change','#file',function(){
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
	});*/

	/// Editor ARea
	var purOptionxx = 0;
	$('#E-btn-dashReviewer').click(function(){
		$('#srchCntxxXed').hide('slow');
		$('#srchCntxxXed2').hide();

		$('#E-ResearchrsArea').slideUp('slow');
		$('#E-editorsArea').slideUp('slow');
		$('#E-articlesArea').slideUp('slow');
		$('#E-homeAreaAdmn').slideDown('slow');
		$('#E-AmessageArea').slideUp('slow');

		$('#E-btn-Messagex').css('border-left','none');
		$('#E-btn-dashReviewer').css('border-left','3px solid #7aad40');
		$('#E-btn-ArticlesX').css('border-left','none');
		$('#E-btn-EditorsX').css('border-left','none');
		$('#E-btn-ViewReserachrs').css('border-left','none');
		$('#E-paginationCnt').html("Admin Dashboard");
	});
	$('#E-btn-ViewReserachrs').click(function(){
		$('#srchCntxxXed').show('slow');
		$('#srchCntxxXed2').hide();

		$('#E-homeAreaAdmn').slideUp('slow');
		$('#E-editorsArea').slideUp('slow');
		$('#E-articlesArea').slideUp('slow');
		$('#E-ResearchrsArea').slideDown('slow');
		$('#E-AmessageArea').slideUp('slow');

		$('#E-btn-Messagex').css('border-left','none');
		$('#E-btn-ViewReserachrs').css('border-left','3px solid #7aad40');
		$('#E-btn-ArticlesX').css('border-left','none');
		$('#E-btn-EditorsX').css('border-left','none');
		$('#E-btn-dashReviewer').css('border-left','none');
		$('#E-paginationCnt').html("Researchers");
		purOptionxx = 2;
	});
	$('#E-btn-EditorsX').click(function(){
		$('#srchCntxxXed').show('slow');
		$('#srchCntxxXed2').hide();

		$('#E-homeAreaAdmn').slideUp('slow');
		$('#E-ResearchrsArea').slideUp('slow');
		$('#E-articlesArea').slideUp('slow');
		$('#E-editorsArea').slideDown('slow');
		$('#E-AmessageArea').slideUp('slow');

		$('#E-btn-Messagex').css('border-left','none');
		$('#E-btn-EditorsX').css('border-left','3px solid #7aad40');
		$('#E-btn-ArticlesX').css('border-left','none');
		$('#E-btn-ViewReserachrs').css('border-left','none');
		$('#E-btn-dashReviewer').css('border-left','none');
		$('#E-paginationCnt').html("Editors");
		purOptionxx = 1;
	});
	$('#E-btn-ArticlesX').click(function(){
		$('#displayMyJournalx2').slideUp();
		$('#displayMyJournalx3').slideUp();
		$('#displayMyJournalx').slideDown();

		$('#artOpubL').css('border-bottom','none');
		$('#artOnew').css('border-bottom','2px solid red');
		$('#artORef').css('border-bottom','none');

		$('#srchCntxxXed').hide();
		$('#srchCntxxXed2').show();

		$('#E-homeAreaAdmn').slideUp('slow');
		$('#E-ResearchrsArea').slideUp('slow');
		$('#E-editorsArea').slideUp('slow');
		$('#E-articlesArea').slideDown('slow');
		$('#E-AmessageArea').slideUp('slow');

		$('#E-btn-Messagex').css('border-left','none');
		$('#E-btn-ArticlesX').css('border-left','3px solid #7aad40');
		$('#E-btn-EditorsX').css('border-left','none');
		$('#E-btn-ViewReserachrs').css('border-left','none');
		$('#E-btn-dashReviewer').css('border-left','none');
		$('#E-paginationCnt').html("Articles");

		downDataOp = 1;
		showMyJournalxNNx();
	});
	$('#E-btn-Messagex').click(function(){
		$('#srchCntxxXed').show('slow');
		$('#srchCntxxXed2').hide();

		$('#E-homeAreaAdmn').slideUp('slow');
		$('#E-ResearchrsArea').slideUp('slow');
		$('#E-editorsArea').slideUp('slow');
		$('#E-articlesArea').slideUp('slow');
		$('#E-AmessageArea').slideDown('slow');

		$('#E-btn-Messagex').css('border-left','3px solid #7aad40');
		$('#E-btn-ArticlesX').css('border-left','none');
		$('#E-btn-EditorsX').css('border-left','none');
		$('#E-btn-ViewReserachrs').css('border-left','none');
		$('#E-btn-dashReviewer').css('border-left','none');
		$('#E-paginationCnt').html("Articles");
	});
	$('#artView-btxpol').click(function(){
		$('#srchCntxxXed').hide();
		$('#srchCntxxXed2').show();

		$('#E-homeAreaAdmn').slideUp('slow');
		$('#E-ResearchrsArea').slideUp('slow');
		$('#E-editorsArea').slideUp('slow');
		$('#E-articlesArea').slideDown('slow');
		$('#E-AmessageArea').slideUp('slow');

		$('#E-btn-Messagex').css('border-left','none');
		$('#E-btn-ArticlesX').css('border-left','3px solid #7aad40');
		$('#E-btn-EditorsX').css('border-left','none');
		$('#E-btn-ViewReserachrs').css('border-left','none');
		$('#E-btn-dashReviewer').css('border-left','none');
		$('#E-paginationCnt').html("Articles");
		purOptionxx = 3;
	});
	$('#artViewPub-btxpol2xx').click(function(){
		$('#srchCntxxXed').hide();
		$('#srchCntxxXed2').show();

		$('#E-homeAreaAdmn').slideUp('slow');
		$('#E-ResearchrsArea').slideUp('slow');
		$('#E-editorsArea').slideUp('slow');
		$('#E-articlesArea').slideDown('slow');
		$('#E-AmessageArea').slideUp('slow');

		$('#E-btn-Messagex').css('border-left','none');
		$('#E-btn-ArticlesX').css('border-left','3px solid #7aad40');
		$('#E-btn-EditorsX').css('border-left','none');
		$('#E-btn-ViewReserachrs').css('border-left','none');
		$('#E-btn-dashReviewer').css('border-left','none');
		$('#E-paginationCnt').html("Articles");

		$('#displayMyJournalx2').slideUp();
		$('#displayMyJournalx3').slideUp();
		$('#displayMyJournalx').slideDown();

		$('#artOpubL').css('border-bottom','none');
		$('#artOnew').css('border-bottom','2px solid red');
		$('#artORef').css('border-bottom','none');
		downDataOp = 1;
		showMyJournalxNNx();
	});

	$('#resetSSSer').click(function(){
		showAllReviewersX();showAllResearchersXx();showMyJournalxNNx();
		$('input[name=dataSEarchSErSEr]').val("");
	});
	$('#clicktoSSSer').click(function(){
		var url = "";
		var dataSEarchSErSEr = $('input[name=dataSEarchSErSEr]');
		if(dataSEarchSErSEr.val() !== ""){
			if(purOptionxx == 1){
				url = 'gtEdtrRr/checkReviewersPPxxSEER';
			}else if(purOptionxx == 2){
				url = 'gtEdtrRr/checkResearchersPPxxSEER';
			}
			$.ajax({
				type:'ajax',
				method:'get',
				url:url,
				data:{dataFetch:dataSEarchSErSEr.val()},
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
					if(purOptionxx == 1){
						for(i = 0;i<num;i++){
							a++;
							sta = '';
							if(i > flag - 1){
								html+='<tr id="tabData" style="background:white;height:50px;">'+
									'<td style="width:20%;padding:7px;"></td>'+
									'<td style="width:30%;padding:7px;"></td>'+
									'<td style="width:20%;padding:7px;"></td>'+
									'<td style="width:10%;padding:7px;"></td>'+
									'<td align="center" style="width:20%;padding:7px;"></div>'+
									'</td>'+
								'</tr>';
							}else{
								nwCntT++;
								html+='<tr id="tabData">'+
									'<td style="width:30%;padding:7px;">'+
										'<div style="height:40px;">'+
											'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
												'<div class="col-md-1" style="font-size:10px;padding:0px;">'+a+'</div>'+
												'<div class="col-md-3" style="padding:0px;"><img src="../nwng/user.png" style="width:35px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
												'<div class="col-md-8" style="padding:0px;">'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>'+
											'</div>'+
										'</div>'+
									'</td>'+
									'<td style="width:30%;padding:7px;">'+
										'<div style="height:40px;overflow:hidden" title="Affiliation">'+data[i].affiliation+'</div>'+
									'</td>'+
									'<td style="width:20%;padding:7px;">'+
										'<div style="height:40px;overflow:hidden" title="Country Code and Name"><b>('+data[i].country_code+') - '+data[i].country_name+'</b></div>'+
									'</td>'+
									'<td style="width:10%;padding:7px;">'+
										'<div style="height:40px;overflow:hidden" title="Date Signed">'+data[i].dateSigned+'</div>'+
									'</td>'+
									'<td align="center" style="width:10%;padding:7px;">'+
										'<div style="height:40px;">'+
											'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View">View <i class="fa fa-eye"></i></span>'+
										'</div>'+
									'</td>'+
								'</tr>';
							}
						}
						$('#cntntBsdRvwr').html(html);
						i = nwCntT;
						$('#bhgInf2').html("<b>"+i+"</b>");
					}else if(purOptionxx == 2){
						for(i = 0;i<num;i++){
							a++;
							sta = '';
							if(i > flag - 1){
								html+='<tr id="tabData" style="background:white;height:50px;">'+
									'<td style="width:20%;padding:7px;"></td>'+
									'<td style="width:30%;padding:7px;"></td>'+
									'<td style="width:20%;padding:7px;"></td>'+
									'<td style="width:10%;padding:7px;"></td>'+
									'<td align="center" style="width:20%;padding:7px;"></div>'+
									'</td>'+
								'</tr>';
							}else{
								nwCntT++;
								html+='<tr id="tabData">'+
									'<td style="width:30%;padding:7px;">'+
										'<div style="height:40px;">'+
											'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
												'<div class="col-md-1" style="font-size:10px;padding:0px;">'+a+'</div>'+
												'<div class="col-md-3" style="padding:0px;"><img src="../nwng/user.png" style="width:35px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
												'<div class="col-md-8" style="padding:0px;">'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>'+
											'</div>'+
										'</div>'+
									'</td>'+
									'<td style="width:30%;padding:7px;">'+
										'<div style="height:40px;overflow:hidden" title="Affiliation">'+data[i].affiliation+'</div>'+
									'</td>'+
									'<td style="width:20%;padding:7px;">'+
										'<div style="height:40px;overflow:hidden" title="Country Code and Name"><b>('+data[i].country_code+') - '+data[i].country_name+'</b></div>'+
									'</td>'+
									'<td style="width:10%;padding:7px;">'+
										'<div style="height:40px;overflow:hidden" title="Date Signed">'+data[i].dateSigned+'</div>'+
									'</td>'+
									'<td align="center" style="width:10%;padding:7px;">'+
										'<div style="height:40px;">'+
											'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View">View <i class="fa fa-eye"></i></span>'+
										'</div>'+
									'</td>'+
								'</tr>';
							}
						}
						$('#cntntBsdRsearchrs').html(html);
						i = nwCntT;
						$('#bhgInf3').html("<b>"+i+"</b>");
					}
				},error:function(data){console.log(data);}
			});
		}
	});

	showAllReviewersX();showAllResearchersXx();
	function showAllResearchersXx(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtEdtrRr/listofResearchersXx',
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
							'<td style="width:30%;padding:7px;"></td>'+
							'<td style="width:20%;padding:7px;"></td>'+
							'<td style="width:10%;padding:7px;"></td>'+
							'<td align="center" style="width:20%;padding:7px;"></div>'+
							'</td>'+
						'</tr>';
					}else{
						nwCntT++;
						html+='<tr id="tabData">'+
							'<td style="width:30%;padding:7px;">'+
								'<div style="height:40px;">'+
									'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
										'<div class="col-md-1" style="font-size:10px;padding:0px;">'+a+'</div>'+
										'<div class="col-md-3" style="padding:0px;"><img src="../nwng/user.png" style="width:35px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
										'<div class="col-md-8" style="padding:0px;">'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>'+
									'</div>'+
								'</div>'+
							'</td>'+
							'<td style="width:30%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Affiliation">'+data[i].affiliation+'</div>'+
							'</td>'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Country Code and Name"><b>('+data[i].country_code+') - '+data[i].country_name+'</b></div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Date Signed">'+data[i].dateSigned+'</div>'+
							'</td>'+
							'<td align="center" style="width:10%;padding:7px;">'+
								'<div style="height:40px;">'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View">View <i class="fa fa-eye"></i></span>'+
								'</div>'+
							'</td>'+
						'</tr>';
					}
				}
				$('#cntntBsdRsearchrs').html(html);
				i = nwCntT;
				$('#bhgInf3').html("<b>"+i+"</b>");
			},error:function(data){console.log(data);}
		});
	}
	$('#cntntBsdRsearchrs').on('click','.confrmActA2',function(){
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
	function showAllReviewersX(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtEdtrRr/listofReviewers',
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
							'<td style="width:30%;padding:7px;"></td>'+
							'<td style="width:20%;padding:7px;"></td>'+
							'<td style="width:10%;padding:7px;"></td>'+
							'<td align="center" style="width:20%;padding:7px;"></div>'+
							'</td>'+
						'</tr>';
					}else{
						nwCntT++;
						html+='<tr id="tabData">'+
							'<td style="width:30%;padding:7px;">'+
								'<div style="height:40px;">'+
									'<div class="col-md-12" style="padding:0px;" title="Complete name">'+
										'<div class="col-md-1" style="font-size:10px;padding:0px;">'+a+'</div>'+
										'<div class="col-md-3" style="padding:0px;"><img src="../nwng/user.png" style="width:35px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
										'<div class="col-md-8" style="padding:0px;">'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>'+
									'</div>'+
								'</div>'+
							'</td>'+
							'<td style="width:30%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Affiliation">'+data[i].affiliation+'</div>'+
							'</td>'+
							'<td style="width:20%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Country Code and Name"><b>('+data[i].country_code+') - '+data[i].country_name+'</b></div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<div style="height:40px;overflow:hidden" title="Date Signed">'+data[i].dateSigned+'</div>'+
							'</td>'+
							'<td align="center" style="width:10%;padding:7px;">'+
								'<div style="height:40px;">'+
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View">View <i class="fa fa-eye"></i></span>'+
								'</div>'+
							'</td>'+
						'</tr>';
					}
				}
				$('#cntntBsdRvwr').html(html);
				i = nwCntT;
				$('#bhgInf2').html("<b>"+i+"</b>");
			},error:function(data){console.log(data);}
		});
	}
	$('#cntntBsdRvwr').on('click','.confrmActA2',function(){
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

	/// End Editor ARea
	$('#Utype').change(function(){
		var e = document.getElementById("Utype");
		var strOpUser = e.options[e.selectedIndex].value;
		if(strOpUser !== 3){
			$.ajax({
				type:'ajax',
				method:'get',
				url:'gtEdtrRr/lckRedrct',
				data:{OP:strOpUser},
				async:true,
				dataType:'json',
				success:function(data){
					console.log(data);
					if(data.success){
						window.location.href = "gtEdtrRr";
					}
				},error:function(data){console.log(data);}
			});
		}
	});
	showMyJournalxNNx22();showMyJournalxNNx33();showMyJournalxNNx();
	function showMyJournalxNNx(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtEdtrRr/getJournalxPPT',
			async:true,
			dataType:'json',
			success:function(data){

				console.log(data);
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
										html+='<a href="../'+data[i].fileDatax[0].path+'" target="__blank">'+data[i].fileDatax[0].filename+'</a><br>';
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
					$('#displayMyJournalx').html(html);
				}
				$('#artclxNfo').html(i);
				$('#newARtPPxx001').html(i);
				if(takeMeed == 1){
					$('#warnMeed').html('<i class="fa fa-warning"></i>&nbsp&nbsp Detected an article with no file attached! Note that this will be an error in the future!');
				}else{$('#warnMeed').html("");}
			},error:function(data){console.log(data);}
		});
	}

	function showMyJournalxNNx22(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtEdtrRr/getJournalxPPTdsip22',
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
					if(data[i].fileDatax[0].filename == ""){
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#d89388">';
					}else{
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#fff3e2">';
					}
						html+='<span style="float:right">'+
							'<div id="hovArt" class="animated slideDown">'+
								'<div>Additional Info. &nbsp&nbsp<i class="fa fa-level-down"></i> <font style="float:right;color:red;margin-top:-5px;">Pending</font></div>'+
								'<div id="thsPrt">Submitted on (Date/Time): '+
									''+data[i].datetimeSub+'<br>'+
									'Attached File: ';
									if(data[i].fileDatax[0].filename == ""){
										html+='<font style="color:#db361c">No attached file</font><br>';
									}else{
										html+='<a href="../'+data[i].fileDatax[0].path+'" target="__blank">'+data[i].fileDatax[0].filename+'</a><br>';
									}
									html+='</div>'+
							'</div>'+
						'</span>'+
						'<b>Title:</b><i><div style="padding-left:10px;">'+data[i].title+'</div><b>Abstract:</b><div style="padding-left:10px;">'+data[i].abstract+'</div><b>Keywords:</b><div style="padding-left:10px;">'+data[i].keywords+'</div></i>'+
						'<div style="height:50px;"><i style="float:right">'+data[i].realAuth+''+authors+'</i></div>'+
					'</div>';
				}
				if(i == 0){
					$('#displayMyJournalx2').html("<div style='padding:20px;'>No result...</div>");
				}else{
					$('#displayMyJournalx2').html(html);
				}
				$('#artclxNfo').html(i);
				$('#newARtPPxx001').html(i);
				$('#popppaaxx67').html(i);
			},error:function(data){console.log(data);}
		});
	}
	function showMyJournalxNNx33(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtEdtrRr/getJournalxPPTdsip33',
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
					if(data[i].fileDatax[0].filename == ""){
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#d89388">';
					}else{
						html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#fff3e2">';
					}
						html+='<span style="float:right">'+
							'<div id="hovArt" class="animated slideDown">'+
								'<div>Additional Info. &nbsp&nbsp<i class="fa fa-level-down"></i> <font style="float:right;color:red;margin-top:-5px;">Pending</font></div>'+
								'<div id="thsPrt">Submitted on (Date/Time): '+
									''+data[i].datetimeSub+'<br>'+
									'Attached File: ';
									if(data[i].fileDatax[0].filename == ""){
										html+='<font style="color:#db361c">No attached file</font><br>';
									}else{
										html+='<a href="'+data[i].fileDatax[0].path+'" target="__blank">'+data[i].fileDatax[0].filename+'</a><br>';
									}
									html+='</div>'+
							'</div>'+
						'</span>'+
						'<b>Title:</b><i><div style="padding-left:10px;">'+data[i].title+'</div><b>Abstract:</b><div style="padding-left:10px;">'+data[i].abstract+'</div><b>Keywords:</b><div style="padding-left:10px;">'+data[i].keywords+'</div></i>'+
						'<div style="height:50px;"><i style="float:right">'+data[i].realAuth+''+authors+'</i></div>'+
					'</div>';
				}
				if(i == 0){
					$('#displayMyJournalx3').html("<div style='padding:20px;'>No result...</div>");
				}else{
					$('#displayMyJournalx3').html(html);
				}
				$('#artclxNfo').html(i);
				$('#newARtPPxx001').html(i);
			},error:function(data){console.log(data);}
		});
	}

	$('#displayMyJournalx').on('click','#aSsRevDeciLLop',function(){
		var j_id = $(this).attr('j_id');
		var title = $(this).attr('title');
		$('input[name=idJournalPPmm]').val(j_id);
		$('input[name=titLeJournalPPmm]').val(title);
		$('#contentxRevDecFinl').html('<center>This is the Final decision for an article entitled: <b>'+title+'</b> <br>If you wish to set the Journal as published, select Published and click "Proceed".</center>');
	});
	
	$('#procDec001').click(function(){
		var data = $('#contentxRevDecFinl_form').serialize();
		var getVakl = $('#seleJournalPPmm').find(":selected").val();
		if(getVakl !== "0"){
			$.ajax({
				type:'ajax',
				method:'POST',
				url:'gtEdtrRr/submitProcDsFnl',
				data:data,
				async:true,
				dataType:'json',
				success:function(data){
					$('#seleJournalPPmm').css('border','2px solid #aeaeae');
					if(data.success){
						if(getVakl == "1"){ alert("Article was successfully published!");
						}else{ alert("Article was successfully refused!"); }
						$('.bs-assignReViewOpxx101-modal-lg').hide();
						showMyJournalxNNx22();showMyJournalxNNx33();showMyJournalxNNx();
					}else{alert("ERROR: Please try again later.");}
				},error:function(data){alert("ERROR: Please try again later.");}
			});
		}else{
			alert("ERROR: Please select a decision.");
			$('#seleJournalPPmm').css('border','2px solid red');
		}
	});
	$('#artOnew').click(function(){
		$('#displayMyJournalx2').slideUp();
		$('#displayMyJournalx3').slideUp();
		$('#displayMyJournalx').slideDown();

		$('#artOpubL').css('border-bottom','none');
		$('#artOnew').css('border-bottom','2px solid red');
		$('#artORef').css('border-bottom','none');
		downDataOp = 1;
		showMyJournalxNNx();
	});
	$('#artOpubL').click(function(){
		$('#displayMyJournalx').slideUp();
		$('#displayMyJournalx3').slideUp();
		$('#displayMyJournalx2').slideDown();

		$('#artOpubL').css('border-bottom','2px solid red');
		$('#artOnew').css('border-bottom','none');
		$('#artORef').css('border-bottom','none');
		downDataOp = 2;
		showMyJournalxNNx22();
	});
	$('#artORef').click(function(){
		$('#displayMyJournalx').slideUp();
		$('#displayMyJournalx2').slideUp();
		$('#displayMyJournalx3').slideDown();

		$('#artOpubL').css('border-bottom','none');
		$('#artOnew').css('border-bottom','none');
		$('#artORef').css('border-bottom','2px solid red');
		downDataOp = 3;
		showMyJournalxNNx33();
	});
	$('#artDAtaPolRset').click(function(){
		$('input[name=artDAtaPol]').val("");
		showMyJournalxNNx22();showMyJournalxNNx33();showMyJournalxNNx();
	});
	$('#artDAtaPolGo').click(function(){
		var artDAtaPol = $('input[name=artDAtaPol]');
		var url = '';
		if(artDAtaPol.val() !== ""){
			if(downDataOp == 1){
				url = 'gtEdtrRr/getJournalxPPTS1';
			}else if(downDataOp == 2){
				url = 'gtEdtrRr/getJournalxPPTS2';
			}else if(downDataOp == 3){
				url = 'gtEdtrRr/getJournalxPPTS3';
			}
			$.ajax({
				type:'ajax',
				method:'get',
				url:url,
				data:{dataopSee:artDAtaPol.val()},
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
						if(data[i].fileDatax[0].filename == ""){
							html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#d89388">';
						}else{
							html+='<div style="font-size:12px;margin-top:10px;padding:5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#fff3e2">';
						}
							html+='<span style="float:right">'+
								'<div id="hovArt" class="animated slideDown">'+
									'<div>Additional Info. &nbsp&nbsp<i class="fa fa-level-down"></i> <font style="float:right;color:red;margin-top:-5px;">Pending</font></div>'+
									'<div id="thsPrt">Submitted on (Date/Time): '+
										''+data[i].datetimeSub+'<br>'+
										'Attached File: ';
										if(data[i].fileDatax[0].filename == ""){
											html+='<font style="color:#db361c">No attached file</font><br>';
										}else{
											html+='<a href="../'+data[i].fileDatax[0].path+'" target="__blank">'+data[i].fileDatax[0].filename+'</a><br><center>';
										}
										if(downDataOp == 1){
											html+='<font id="aSsRev" email="'+data[i].email+'" authrIDpls="'+data[i].authrIDpls+'" j_id="'+data[i].j_id+'" title="'+data[i].title+'" abstract="'+data[i].abstract+'" keywords="'+data[i].keywords+'" authors="'+data[i].realAuth+''+authors+'" datetimeSub="'+data[i].datetimeSub+'" filePath="'+data[i].fileDatax[0].path+'" fileN="'+data[i].fileDatax[0].filename+'" class="btn btn-default" style="padding:0px;width:45%;color:black" data-toggle="modal" data-target=".bs-assignReView-modal-lg"><b>Manage</b></font>'+
											'<font id="aSsRevDeciLLop" authrIDpls="'+data[i].authrIDpls+'" j_id="'+data[i].j_id+'" title="'+data[i].title+'" abstract="'+data[i].abstract+'" keywords="'+data[i].keywords+'" authors="'+data[i].realAuth+''+authors+'" datetimeSub="'+data[i].datetimeSub+'" filePath="'+data[i].fileDatax[0].path+'" fileN="'+data[i].fileDatax[0].filename+'" class="btn btn-default" style="padding:0px;width:45%;background:#cde5a0;color:black" data-toggle="modal" data-target=".bs-assignReView-modal-lg"><b>Decision</b></font></center>';
										}
									html+='</center></div>'+
								'</div>'+
							'</span>'+
							'<b>Title:</b><i><div style="padding-left:10px;">'+data[i].title+'</div><b>Abstract:</b><div style="padding-left:10px;">'+data[i].abstract+'</div><b>Keywords:</b><div style="padding-left:10px;">'+data[i].keywords+'</div></i>'+
							'<div style="height:50px;"><i style="float:right">'+data[i].realAuth+''+authors+'</i></div>'+
						'</div>';
					}
					if(downDataOp == 1){
						if(i == 0){
							$('#displayMyJournalx').html("<div style='padding:20px;'>No result...</div>");
						}else{
							$('#displayMyJournalx').html(html);
						}
					}else if(downDataOp == 2){
						if(i == 0){
							$('#displayMyJournalx').html("<div style='padding:20px;'>No result...</div>");
						}else{
							$('#displayMyJournalx2').html(html);
						}
					}else if(downDataOp == 3){
						if(i == 0){
							$('#displayMyJournalx').html("<div style='padding:20px;'>No result...</div>");
						}else{
							$('#displayMyJournalx3').html(html);
						}
					}
					$('#artclxNfo').html(i);
					$('#newARtPPxx001').html(i);
				},error:function(data){console.log(data);}
			});
		}
	});
	var titlBBnnx="", emailofaut4444 = "", idofAut4444 = ""; var cpcp1, cpcp2;
	$('#displayMyJournalx').on('click','#aSsRev',function(){
		var j_id = $(this).attr('j_id');
		var authrIDpls = $(this).attr('authrIDpls');
		cpcp1 = j_id;
		cpcp2 = authrIDpls;
		emailofaut4444 = $(this).attr('email');
		idofAut4444 = authrIDpls;
		$('input[name=realAuthIDxx]').val(authrIDpls);
		$('input[name=journalID4task]').val(j_id);
		$('input[name=idofAuthorPPOx]').val(authrIDpls);
		$('input[name=authorDIbasdallxx]').val(authrIDpls);
		$('input[name=j_idCopied]').val(j_id);
		var title = $(this).attr('title');
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
				jsjsdalww+='<b>File Attached: <a href="../'+filePath+'" target="__blank">'+fileN+'</a></b>';
			}
			jsjsdalww+='<div style="height:20px;"><font style="float:right">'+authors+'</font></div>';
		titlBBnnx = title;
		showLisTRevvwxx(j_id, authrIDpls);
		showLisTRevvwxx2xx2hj(j_id);
		showDetailTAskAct(j_id);
		$('#jsjsdalww').html(jsjsdalww);
	});
	var LXXpid = 0;
	function showDetailTAskAct(j_id){
		LXXpid = j_id;
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
                                       			html+='<font style="float:right">'+data[i].date+' '+data[i].time+'</font><b>'+data[i].fullNameRev+'</b>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br><font style="font-size:19px;">'+data[i].mess_task+'</font><br><font style="font-size:14px;">File Attached: <a href="../'+data[i].fileDatax[0].path+'" style="color:darkblue;text-decoration:none"><u>'+data[i].fileDatax[0].filename+'</u></a> &nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp<font color="green">Approved and validated</font></font>';
                                       		}
                                       	}else{ html+='<font style="float:right">'+data[i].date+' '+data[i].time+'</font><b>'+data[i].fullNameRev+'</b>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br><font style="font-size:19px;">'+data[i].mess_task+'</font><br><font style="font-size:14px;">File Attached: <a href="../'+data[i].fileDatax[0].path+'" style="color:darkblue;text-decoration:none"><u>'+data[i].fileDatax[0].filename+'</u></a> &nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp<button id="btn-Speationasd" tastIDxx="'+data[i].taskid+'" mess_task="'+data[i].mess_task+'" data-toggle="modal" data-target=".bs-azscasasdklisd-modal-lg">Click to Accept</button></font>'; }
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
		                                    		'<font style="float:right">'+data[i].replies[x].date+' '+data[i].replies[x].time+'</font><b>'+data[i].replies[x].u_fname+' '+data[i].replies[x].u_mname+' '+data[i].replies[x].u_lname+'</b>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br><font style="font-size:19px;margin-top:-16px;">'+data[i].replies[x].message+'</font><br><font style="font-size:14px;">File Attached: None &nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp';
		                                    		if(data[i].replies[x].approvedbyeditor == 1){
		                                    			html+='<font style="color:green">Approved and validated</font>';
		                                    		}else{ html+='<button id="btn-Speationasd2" tastIDxx="'+data[i].replies[x].id+'" mess_task="'+data[i].replies[x].message+'" data-toggle="modal" data-target=".bs-azscasasdklisd2-modal-lg">Click to Accept</button></font>'; }
		                                    	}else{
		                                    		html+='<div id="bet2" style="background:#efdba5;padding-left:6px;">'+
		                                    		'<font style="float:right">'+data[i].replies[x].date+' '+data[i].replies[x].time+'</font><b>'+data[i].replies[x].u_fname+' '+data[i].replies[x].u_mname+' '+data[i].replies[x].u_lname+'</b>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br><font style="font-size:19px;margin-top:-16px;">'+data[i].replies[x].message+'</font><br><font style="font-size:14px;">File Attached: None &nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp</font>';
		                                    		if(data[i].replies[x].approvedbyeditor == 1){
		                                    			html+='<font style="color:green">Approved and validated</font>';
		                                    		}else{ html+='<button id="btn-Speationasd2" tastIDxx="'+data[i].replies[x].id+'" mess_task="'+data[i].replies[x].message+'" data-toggle="modal" data-target=".bs-azscasasdklisd2-modal-lg">Click to Accept</button></font>'; }
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

	$("#listofGeneralTaskHere").on('click','#btn-Speationasd',function(){
		var tastIDxx = $(this).attr('tastIDxx');
		var mess_task = $(this).attr('mess_task');
		var html='';
		$('input[name=idOFWORtaslxx]').val(tastIDxx);
		$('input[name=ttxxxxBoard]').val(mess_task);
		$('input[name=titleOfflf]').val(titlBBnnx);
		$('input[name=emailofaut4444]').val(emailofaut4444);
		$('input[name=idofAut4444]').val(idofAut4444);
		html+='Reviewer Message: <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>'+mess_task+'</b><br><br>'+
			'<center>This message task will be viewed by the Researcher<br>via email and jeseg journal system<br>Would you like to Proceed?</center>';
		$('#Speationasd').html(html);
	});
	$("#listofGeneralTaskHere").on('click','#btn-Speationasd2',function(){
		var tastIDxx = $(this).attr('tastIDxx');
		var mess_task = $(this).attr('mess_task');
		var html='';
		$('input[name=idOFWORtaslxx2]').val(tastIDxx);
		$('input[name=ttxxxxBoard]').val(mess_task);
		$('input[name=titleOfflf]').val(titlBBnnx);
		$('input[name=emailofaut4444]').val(emailofaut4444);
		$('input[name=idofAut4444]').val(idofAut4444);
		html+='Reviewer Message: <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>'+mess_task+'</b><br><br>'+
			'<center>This message task will be viewed by the Researcher<br>via email and jeseg journal system<br>Would you like to Proceed?</center>';
		$('#Speationasd2').html(html);
	});
	$('#yesConfirmProccssx212').click(function(){
		$('#yesConfirmProccssx212').html('Please wait...');
		document.getElementById("yesConfirmProccssx212").disabled = true;
		var idOFWORtaslxx = $('input[name=idOFWORtaslxx]');
		var ttxxxxBoard = $('input[name=ttxxxxBoard]');
		var titleOfflf = $('input[name=titleOfflf]');
		var emailofaut4444 = $('input[name=emailofaut4444]');
		var idofAut4444 = $('input[name=idofAut4444]');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtEdtrRr/sbPrxkllllooced',
			data:{dataidRWtast:idOFWORtaslxx.val(), LXXpid:LXXpid, ttxxxxBoard:ttxxxxBoard.val(), titleOfflf:titleOfflf.val(), emailofaut4444:emailofaut4444.val(), idofAut4444:idofAut4444.val()},
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					$(".bs-azscasasdklisd-modal-lg").hide();
					alert("SUCCESS: Task successfully accepted and was emailed to the author of this article");
					showDetailTAskAct(LXXpid);
				}else{
					alert("ERROR: Slow internet connection. Try again later");
				}
				$('#yesConfirmProccssx212').html('Proceed');
				document.getElementById("yesConfirmProccssx212").disabled = false;
			},error:function(data){alert("ERROR: Try again later");}
		});
	});
	$('#yesConfirmProccssx2122').click(function(){
		var idOFWORtaslxx2 = $('input[name=idOFWORtaslxx2]');
		$('#yesConfirmProccssx2122').html('Please wait...');
		document.getElementById("yesConfirmProccssx2122").disabled = true;
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtEdtrRr/sbPrxkllllooced2',
			data:{idOFWORtaslxx2:idOFWORtaslxx2.val()},
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					$(".bs-azscasasdklisd2-modal-lg").hide();
					alert("SUCCESS: Task successfully accepted!");
					showDetailTAskAct(LXXpid);
				}else{
					alert("ERROR: Slow internet connection. Try again later");
				}
				$('#yesConfirmProccssx2122').html('Proceed');
				document.getElementById("yesConfirmProccssx212").disabled = false;
			},error:function(data){alert("ERROR: Try again later");}
		});
	});
	$('#closeThisModal1').click(function(){
		$('.bs-viewAllTRKSxxrev-modal-lg').hide();
	});
	$('#closeThisModal2').click(function(){
		$('.bs-advanceModeXxx1-modal-lg').hide();
	});
	function showLisTRevvwxx(dataIDjournal, authrIDpls){
		$('input[name=idofJournx]').val(dataIDjournal);
		$('input[name=idofAuth]').val(authrIDpls);
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtEdtrRr/listofResearchersXx2x2',
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
										'<div class="col-md-2" style="padding:0px;"><img src="../nwng/user.png" style="width:40px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
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
	$('#cancelSrchPlexx1').click(function(){
		$('input[name=searchRevAll]').val("");
		showLisTRevvwxx(cpcp1, cpcp2);
	});
	$('#searchNowBrxxAllRVxx').click(function(){
		var data = $('#formView_arc').serialize();
		$.ajax({
			type:'ajax',
			method:'POST',
			url:'gtEdtrRr/getAllRevFrmSrchXX1',
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
										'<div class="col-md-2" style="padding:0px;"><img src="../nwng/user.png" style="width:40px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
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
	$('#confirmRevAssgnmnt').click(function(){
		$('#confirmRevAssgnmnt').html("Sending invitation, please wait...");
		document.getElementById("confirmRevAssgnmnt").disabled = true;
		var data = $('#submitAccptRevwr_frm').serialize();
		var j_idCopied = $('input[name=j_idCopied]');
		var authCCp = $('input[name=realAuthIDxx]');
		$.ajax({
			type:'ajax',
			method:'POST',
			url:'gtEdtrRr/sbMitRevAssignment',
			data:data,
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					$('.bs-xxssaasd-modal-lg').hide();
					document.getElementById("confirmRevAssgnmnt").disabled = false;
					$('#confirmRevAssgnmnt').html("Confirm");
					showLisTRevvwxx(j_idCopied.val(), authCCp.val());
					showLisTRevvwxx2xx2hj(j_idCopied.val());
				}
			},error:function(data){console.log(data);}
		});
	});
	function showLisTRevvwxx2xx2hj(dataIDjournal){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtEdtrRr/getListofAssnedRE',
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
										'<div class="col-md-2" style="padding:0px;"><img src="../nwng/user.png" style="width:40px;height:40px;border-radius:45%;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)"></div>'+
										'<div class="col-md-6" style="padding:0px;">'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>';
										if(data[i].deaddateass == "" || data[i].deadtimeass == ""){
											html+='<div class="col-md-3" style="padding:0px;">Date acc - not set</div>';
										}else{
											html+='<div class="col-md-3" style="padding:0px;"><small>MM-DD-YYYY</small><br>'+data[i].deaddateass+'&nbsp&nbsp|&nbsp&nbsp'+data[i].deadtimeass+'</div>';
										}
									html+='</div>'+
								'</div>'+
							'</td>'+
							'<td style="width:10%;padding:7px;">'+
								'<font style="color:#c62513">'+data[i].stat+'</font>'+
							'</td>'+
							'<td style="width:15%;padding:7px;">';
							if(data[i].finalapproval == 1){
								html+='<font style="color:green;">Approved</font>';
							}else{
								html+='<font style="color:#c62513">Checking...</font>';
							}
							html+='</td>'+
							'<td style="width:10%;padding:7px;">'+
								//'<font class="btn btn-warning" id="editAssgndRev" dataIDjournal="'+dataIDjournal+'" userid="'+data[i].userid+'" fName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" data-toggle="modal" data-target=".bs-xxssaas2d-modal-lg" style="padding:3px;padding-left:7px;padding-right:7px;float:right"><i class="fa fa-edit"></i></font>'+
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
	$('#cntntBsdRvwrxx212').on('click','#editAssgndRev',function(){
		var dataIDjournal = $(this).attr('dataIDjournal');
		var userid = $(this).attr('userid');
		$('input[name=userIDRevLsixx]').val(userid);
		$('input[name=journalID2xxggt]').val(dataIDjournal);
	});
	$('#confirmRevAssgnmnt2').click(function(){
		var data = $('#sModRev_frm2xx2xnb4').serialize();
		var authorDIbasdallxx = $('input[name=authorDIbasdallxx]');
		var journalID2xxggt = $('input[name=journalID2xxggt]');
		$.ajax({
			type:'ajax',
			method:'POST',
			url:'gtEdtrRr/modDelRowofASsRv',
			data:data,
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					$('.bs-xxssaas2d-modal-lg').hide();
					alert("SUCCESS: Updated successfully");
					$('input[name=dueDatexx2]').val("");
					$('input[name=dueTimexx2]').val("");
					showLisTRevvwxx2xx2hj(journalID2xxggt.val());
					showLisTRevvwxx(journalID2xxggt.val(), authorDIbasdallxx.val());
					}else{ alert("ERROR: Try again later"); }
			},error:function(data){console.log(data);}
		});
	});
	$('#dueDatexx2').keyup(function(){
		var dueDatexx2 = $('input[name=dueDatexx2]');
		//var dueTimexx2 = $('input[name=dueTimexx2]');
		if(dueDatexx2.val() !== ""){
			$('#xf1').show();
		}else{
			$('#xf1').hide();
		}
	});
	$('#dueTimexx2').keyup(function(){
		var dueTimexx2 = $('input[name=dueTimexx2]');
		//var dueTimexx2 = $('input[name=dueTimexx2]');
		if(dueTimexx2.val() !== ""){
			$('#xf2').show();
		}else{
			$('#xf2').hide();
		}
	});

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
			url:'gtEdtrRr/thisNoteGet',
			async:true,
			dataType:'json',
			success:function(data){
				console.log(data);
				var spanHT = '', html = '';
				var i, a = 0, num = 0;
				num = Number(data.content1);
				for(i = 0; i < data.content2.length; i++){
					html+='<div style="font-size:12px;padding:2px;margin-top:4px;background:#dce5df;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42)">'+
                        '<font style="float:right;color:#aeaeae;font-size:10px;">Posted: '+data.content2[i].datelog+' | '+data.content2[i].timelog+'</font>'+
                        '<div style="padding:2px;margin-top:9">'+
                          '<i class="fa fa-user"></i> &nbsp&nbsp '+data.content2[i].log+''+
                        '</div>'+
                    '</div>';
				}
				if(num > 0){
					spanHT='<span style="position:absolute;margin-left:30px;background:red;color:white;padding-left:10px;padding-right:10px;border-radius:50%;">'+num+'</span>';
				}else{
					spanHT = "";
				}
				$('#noteixx').html(spanHT);
				$('#displatNotexAA').html(html);
			},error:function(data){console.log(data);}
		});
	}
	$('.Pasdakwjna12').click(function(){
		$('#noteixx').html("");
		$.ajax({
			type:'ajax',
			url:'gtEdtrRr/upd_thisNoteGet',
			async:true,
			dataType:'json',
			success:function(data){
				showLixxp2XXnote();
			},error:function(data){console.log(data);}
		});
	});
	$('#clickToDipsNote').click(function(){
		$('#placeNoteHHre').html("");
		$.ajax({
			type:'ajax',
			url:'gtEdtrRr/UpthisNoteTook',
			async:true,
			dataType:'json'
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
				console.log(data);
				var num = 0, flag = 0;
				var html = '';
				var i, a = 0, x = 0;
				num = Number(data.length);
				for(i = 0;i<num;i++){
					html+='<table width="100%" style="margin-top:8px;">'+
                        '<tbody style="font-family:calibri">'+
                            '<tr style="padding:5px;">'+
                                '<td>'+
                                    '<div id="bet1" style="cursor:pointer;padding-left:6px;"><font style="font-size:10px;float:right;">'+data[i].date+' '+data[i].time+'</font>';
                                        if(data[i].approvedbyeditor == 1){ html+='Status: <font color="green">Accepted...</font>';
                                        }else{ html+='Status: <font color="#bf2618">Pending...</font>'; }
                                        html+='<br><font style="font-size:15px">'+data[i].mess_task+'</font>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br>Attached File: <u><a href="'+data[i].fileDatax[0].path+'" style="text-decoration:none;color:darkblue;"><button>'+data[i].fileDatax[0].filename+'</button></a></u>'+
                                    '</div>'+
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
	                                    '<td style="width:90%;padding:2px;">';
		                                    	if(data[i].replies[x].usertype == 2){
		                                    		html+='<div id="bet2" style="background:#d4e0f4;padding-left:6px;">'+
		                                    		''+data[i].replies[x].message+'<br><font style="font-size:10px;">'+data[i].replies[x].date+' '+data[i].replies[x].time+'</font>';
		                                    	}else{
		                                    		html+='<div id="bet2" style="background:#efdba5;padding-left:6px;">'+
		                                    		''+data[i].replies[x].message+'<br><font style="font-size:10px;">'+data[i].replies[x].date+' '+data[i].replies[x].time+'</font>';
		                                    	}
	                                        html+='</div>'+
	                                    '</td>'+
	                                '</tr>';
	                        	}
	                        html+='</table>'+
	                    '</div>';
                    }
				}
				if(i < 1){
					$('#listofGeneralTaskHere').html("No result...");
				}else{
					$('#listofGeneralTaskHere').html(html);
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
	$(document).on('change','#file',function(){
		var err = 0;
		var fileSize = 0;
		var property = document.getElementById("filePjh").files[0];
		var image_name = property.name;
		var file_extension = image_name.split('.').pop().toLowerCase();
		if(jQuery.inArray(file_extension,['doc']) == -1){
			if(jQuery.inArray(file_extension,['docs']) == -1){
				if(jQuery.inArray(file_extension,['doxs']) == -1){
					if(jQuery.inArray(file_extension,['docx']) == -1){
						$('#uploadfile')[0].reset();
						alert("ERROR: We accept Microsoft Word document format only...");
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