$(document).ready(function(){
	//document.body.style.overflow = 'hidden';
	$('#dataimg').hover(function(){
		$('#recog').slideDown();
	});
	$('#dataimg').mouseleave(function(){
		$('#recog').slideUp();
	});
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
			url:'gtReviewrRr/getAllAnnce',
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


	/// Reviewer ARea
	$('#btn-dashReviewer').click(function(){
		$('#ResearchrsArea').slideUp();
		$('#editorsArea').slideUp();
		$('#articlesArea').slideUp();
		$('#homeAreaAdmn').slideDown();
		$('#AmessageArea').slideUp();
		$('#accompArea').slideUp();

		$('#btn-AccompX').css('border-left','none');
		$('#btn-Messagex').css('border-left','none');
		$('#btn-dashReviewer').css('border-left','3px solid #7aad40');
		$('#btn-ArticlesX').css('border-left','none');
		$('#btn-ViewReserachrs').css('border-left','none');
		$('#paginationCnt').html("Admin Dashboard");
		$('#OriginSearch').hide();
	});
	$('#btn-AccompX').click(function(){
		$('#ResearchrsArea').slideUp();
		$('#editorsArea').slideUp();
		$('#articlesArea').slideUp();
		$('#homeAreaAdmn').slideUp();
		$('#AmessageArea').slideUp();
		$('#accompArea').slideDown();

		$('#btn-Messagex').css('border-left','none');
		$('#btn-dashReviewer').css('border-left','none');
		$('#btn-AccompX').css('border-left','3px solid #7aad40');
		$('#btn-ArticlesX').css('border-left','none');
		$('#btn-ViewReserachrs').css('border-left','none');
		$('#paginationCnt').html("Accomplishments");
		$('#OriginSearch').show();
	});
	$('#btn-ViewReserachrs').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#editorsArea').slideUp();
		$('#articlesArea').slideUp();
		$('#ResearchrsArea').slideDown();
		$('#AmessageArea').slideUp();
		$('#accompArea').slideUp();

		$('#btn-AccompX').css('border-left','none');
		$('#btn-Messagex').css('border-left','none');
		$('#btn-ViewReserachrs').css('border-left','3px solid #7aad40');
		$('#btn-ArticlesX').css('border-left','none');
		$('#btn-dashReviewer').css('border-left','none');
		$('#paginationCnt').html("Researchers");
		$('#OriginSearch').show();
	});
	$('#btn-ArticlesX').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#ResearchrsArea').slideUp();
		$('#editorsArea').slideUp();
		$('#articlesArea').slideDown();
		$('#AmessageArea').slideUp();
		$('#accompArea').slideUp();

		$('#btn-AccompX').css('border-left','none');
		$('#btn-Messagex').css('border-left','none');
		$('#btn-ArticlesX').css('border-left','3px solid #7aad40');
		$('#btn-ViewReserachrs').css('border-left','none');
		$('#btn-dashReviewer').css('border-left','none');
		$('#paginationCnt').html("Task for Articles");
		$('#OriginSearch').hide();
	});
	$('#btn-Messagex').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#ResearchrsArea').slideUp();
		$('#editorsArea').slideUp();
		$('#articlesArea').slideUp();
		$('#AmessageArea').slideDown();
		$('#accompArea').slideUp();

		$('#btn-AccompX').css('border-left','none');
		$('#btn-Messagex').css('border-left','3px solid #7aad40');
		$('#btn-ArticlesX').css('border-left','none');
		$('#btn-ViewReserachrs').css('border-left','none');
		$('#btn-dashReviewer').css('border-left','none');
		$('#paginationCnt').html("Articles");
		$('#OriginSearch').show();
	});
	/// End Reviewer ARea
	var urlSearch = '';
	var opPPlxx = 0;
	$('#newAssignedARtx').click(function(){
		$('#newAssignedARtx').css('border-bottom','2px solid #f77b67');
		$('#AcceptdArtx').css('border-bottom','none');
		$('#IgnredArt4Rev').css('border-bottom','none');
		$('#publishableXXart').css('border-bottom','none');

		$('#cntArtAreax4-cnt').slideUp();
		$('#cntArtAreax1-cnt').slideDown();
		$('#cntArtAreax2-cnt').slideUp();
		$('#cntArtAreax3-cnt').slideUp();
		urlSearch = 'gtReviewrRr/searchNewASsNw';
		opPPlxx = 1;
	});
	$('#AcceptdArtx').click(function(){
		$('#newAssignedARtx').css('border-bottom','none');
		$('#AcceptdArtx').css('border-bottom','2px solid #f77b67');
		$('#IgnredArt4Rev').css('border-bottom','none');
		$('#publishableXXart').css('border-bottom','none');

		$('#cntArtAreax4-cnt').slideUp();
		$('#cntArtAreax1-cnt').slideUp();
		$('#cntArtAreax2-cnt').slideDown();
		$('#cntArtAreax3-cnt').slideUp();
		urlSearch = 'gtReviewrRr/acceptedForRev';
		opPPlxx = 2;
	});
	$('#publishableXXart').click(function(){
		$('#newAssignedARtx').css('border-bottom','none');
		$('#AcceptdArtx').css('border-bottom','none');
		$('#IgnredArt4Rev').css('border-bottom','none');
		$('#publishableXXart').css('border-bottom','2px solid #f77b67');

		$('#cntArtAreax1-cnt').slideUp();
		$('#cntArtAreax2-cnt').slideUp();
		$('#cntArtAreax3-cnt').slideUp();
		$('#cntArtAreax4-cnt').slideDown();
		urlSearch = 'gtReviewrRr/pbulArtccle';
		opPPlxx = 3;
	});
	$('#IgnredArt4Rev').click(function(){
		$('#newAssignedARtx').css('border-bottom','none');
		$('#AcceptdArtx').css('border-bottom','none');
		$('#IgnredArt4Rev').css('border-bottom','2px solid #f77b67');
		$('#publishableXXart').css('border-bottom','none');

		$('#cntArtAreax4-cnt').slideUp();
		$('#cntArtAreax1-cnt').slideUp();
		$('#cntArtAreax2-cnt').slideUp();
		$('#cntArtAreax3-cnt').slideDown();
		urlSearch = 'gtReviewrRr/ardisAppr';
		opPPlxx = 4;
	});
	$('#SEarArrelationsxxReset').click(function(){
		newTaskedArticles();
		newTaskedArticles2();
		newTaskedArticles3();
		newTaskedArticles4();
		$('input[name=SearchINFnwGETart]').val("");
	});
	$('#SEarArrelationsxx').click(function(){
		var SearchINFnwGETart = $('input[name=SearchINFnwGETart]');
		if(SearchINFnwGETart.val() !== ""){
			$.ajax({
				type:'ajax',
				method:'get',
				url:urlSearch,
				data:{OPdataS:SearchINFnwGETart.val()},
				async:true,
				dataType:'json',
				success:function(data){
					var num = 0, flag = 0;
					var html = '', sta = '', authors = '';
					var i, a = 0, nwCntT = 0;
					var Co = 0, lleng = 0, pl = 1, fine = 0, xxasdw = 0;
					num = Number(data.length);
					if(opPPlxx == 1){
						for(i = 0;i<num;i++){
							a++;
							sta = '';
							nwCntT++;
							html+='<tr id="tabData">'+
								'<td style="width:1%;padding:7px;"><div style="height:100px;">'+a+'.</div></td>'+
								'<td style="width:5%;padding:7px;" align="center">'+
									'<div style="height:100px;"><i class="fa fa-book" style="font-size:14px;"></i><br><font style="color:#d82d13">'+data[i].dateASs+'<br>'+data[i].timeASs+'</font></div>'+
								'</td>'+
								'<td style="width:75%;padding:7px;">'+
									'<div title="Affiliation">&nbsp&nbsp<b>Title:</b> '+data[i].titleJournal+'</div>'+
									'<div id="fox2" style="height:60px;overflow:auto;background-image: linear-gradient(to bottom, transparent, black);padding:5px;" title="Affiliation"><b>Abstract:</b> '+data[i].abstractJournal+'</div>'+
								'</td>'+
								'<td style="width:10%;padding:7px;">'+
									'<div style="height:100px;">';
										authors = '';
										xxasdw = Number(data[i].autXxx.length);
										for(fine = 0;fine<xxasdw;fine++){
											authors+=', &nbsp&nbsp'+data[i].autXxx[fine].completename+'';
										}
										if(data[i].finalapproval == 1){
											html+='<font style="color:#2f9112"><b>Approved<br>Date: '+data[i].dateapp+'<br>Time: '+data[i].timeapp+'</b></font>';
										}else{ html+='<center><font class="btn btn-primary" id="click-valdateArtX" j_id="'+data[i].j_id+'" titleJournal="'+data[i].titleJournal+'" style="padding:3px;width:100%" data-toggle="modal" data-target=".bs-controlsValidPaper-modal-lg">Decision</font></center>'; }
									html+='</div>'+
								'</td>'+
							'</tr>';
						}
						flag = 5 - i;
						if(flag > 0){
							for(i = 0;i < flag;i++){
								html+='<tr id="tabData" style="background:white;height:100px;">'+
									'<td style="width:1%;padding:7px;"></td>'+
									'<td style="width:10%;padding:7px;"></td>'+
									'<td style="width:70%;padding:7px;"></td>'+
									'<td style="width:10%;padding:7px;"></td>'+
									'</td>'+
								'</tr>';
							}
						}
						
						$('#cntArtAreax1').html(html);
						i = nwCntT;
						$('#nkllaax1').html(i);
					}else if(opPPlxx == 2){
						for(i = 0;i<num;i++){
							a++;
							sta = '';
							nwCntT++;
							html+='<tr id="tabData">'+
								'<td style="width:1%;padding:7px;"><div style="height:100px;">'+a+'.</div></td>'+
								'<td style="width:5%;padding:7px;" align="center">'+
									'<div style="height:100px;"><i class="fa fa-book" style="font-size:14px;"></i><br><font style="color:#d82d13">'+data[i].dateASs+'<br>'+data[i].timeASs+'</font></div>'+
								'</td>'+
								'<td style="width:75%;padding:7px;">'+
									'<div title="Affiliation">&nbsp&nbsp<b>Title:</b> '+data[i].titleJournal+'</div>'+
									'<div id="fox2" style="height:60px;overflow:auto;background-image: linear-gradient(to bottom, transparent, black);padding:5px;" title="Affiliation"><b>Abstract:</b> '+data[i].abstractJournal+'</div>'+
									'<div style="padding:2px;"><b>File Attached:</b> <a href="'+data[i].fileData[0].path+'" target="__blank">'+data[i].fileData[0].filename+'</a></div>'+
								'</td>'+
								'<td style="width:10%;padding:7px;">'+
									'<div style="height:100px;">';
										authors = '';
										xxasdw = Number(data[i].autXxx.length);
										for(fine = 0;fine<xxasdw;fine++){
											authors+=', &nbsp&nbsp'+data[i].autXxx[fine].completename+'';
										}
										if(data[i].finalapproval == 1){
											html+='<font style="color:#2f9112"><b>Approved<br>Date: '+data[i].dateapp+'<br>Time: '+data[i].timeapp+'</b></font>';
										}else{ html+='<center><font class="btn btn-primary" id="click-responseArxxy" j_id="'+data[i].j_id+'" title="'+data[i].titleJournal+'" abstract="'+data[i].abstractJournal+'" keywords="'+data[i].keywords+'" authors="'+data[i].realAuth+''+authors+'" datetimeSub="'+data[i].datetimeSub+'" filePath="'+data[i].fileData[0].path+'" fileN="'+data[i].fileData[0].filename+'" style="padding:3px;width:100%" data-toggle="modal" data-target=".bs-tasksListsArt-modal-lg">Manage</font></center>'; }
									html+='</div>'+
								'</td>'+
							'</tr>';
						}
						flag = 5 - i;
						if(flag > 0){
							for(i = 0;i < flag;i++){
								html+='<tr id="tabData" style="background:white;height:100px;">'+
									'<td style="width:1%;padding:7px;"></td>'+
									'<td style="width:10%;padding:7px;"></td>'+
									'<td style="width:70%;padding:7px;"></td>'+
									'<td style="width:10%;padding:7px;"></td>'+
									'</td>'+
								'</tr>';
							}
						}

						$('#cntArtAreax2').html(html);
						i = nwCntT;
						$('#nkllaax2').html(i);
					}else if(opPPlxx == 3){
						if(data == false){

							for(i = 0;i < 5;i++){
								html+='<tr id="tabData" style="background:white;height:100px;">'+
									'<td style="width:1%;padding:7px;"></td>'+
									'<td style="width:10%;padding:7px;"></td>'+
									'<td style="width:80%;padding:7px;"></td>'+
									'</td>'+
								'</tr>';
							}
						}else{
							for(i = 0;i<num;i++){
								a++;
								sta = '';
								nwCntT++;
								html+='<tr id="tabData">'+
									'<td style="width:1%;padding:7px;"><div style="height:100px;">'+a+'.</div></td>'+
									'<td style="width:10%;padding:7px;" align="center">'+
										'<div style="height:100px;"><i class="fa fa-book" style="font-size:25px;"></i><br><font style="color:#d82d13">'+data[i].dateASs+'<br>'+data[i].timeASs+'</font></div>'+
									'</td>'+
									'<td style="width:80%;padding:7px;">'+
										'<div style="height:20px;" title="Affiliation">&nbsp&nbsp<b>Title:</b> '+data[i].titleJournal+'</div>'+
										'<div id="fox2" style="height:60px;overflow:auto;background-image: linear-gradient(to bottom, transparent, black);padding:5px;" title="Affiliation"><b>Abstract:</b> '+data[i].abstractJournal+'</div>'+
										'<div style="padding:2px;"><b>File Attached:</b> <a href="'+data[i].fileData[0].path+'" target="__blank">'+data[i].fileData[0].filename+'</a></div>'+
									'</td>'+
								'</tr>';
							}
						}

						$('#cntArtAreax4').html(html);
						i = nwCntT;
						$('#nkllaax3').html(i);
					}else if(opPPlxx == 4){
						for(i = 0;i<num;i++){
							a++;
							sta = '';
							nwCntT++;
							html+='<tr id="tabData">'+
								'<td style="width:1%;padding:7px;"><div style="height:100px;">'+a+'.</div></td>'+
								'<td style="width:5%;padding:7px;" align="center">'+
									'<div style="height:100px;"><i class="fa fa-book" style="font-size:14px;"></i><br><font style="color:#d82d13">'+data[i].dateASs+'<br>'+data[i].timeASs+'</font></div>'+
								'</td>'+
								'<td style="width:85%;padding:7px;">'+
									'<div title="Affiliation">&nbsp&nbsp<b>Title:</b> '+data[i].titleJournal+'</div>'+
									'<div id="fox2" style="height:60px;overflow:auto;background-image: linear-gradient(to bottom, transparent, black);padding:5px;" title="Affiliation"><b>Abstract:</b> '+data[i].abstractJournal+'</div>'+
									'<div style="padding:2px;"><b>File Attached:</b> <a href="'+data[i].fileData[0].path+'" target="__blank">'+data[i].fileData[0].filename+'</a></div>'+
								'</td>'+
							'</tr>';
						}
						flag = 5 - i;
						if(flag > 0){
							for(i = 0;i < flag;i++){
								html+='<tr id="tabData" style="background:white;height:100px;">'+
									'<td style="width:1%;padding:7px;"></td>'+
									'<td style="width:10%;padding:7px;"></td>'+
									'<td style="width:80%;padding:7px;"></td>'+
									'</td>'+
								'</tr>';
							}
						}

						$('#cntArtAreax3').html(html);
						i = nwCntT;
						$('#nkllaax4').html(i);
					}
				},error:function(data){console.log(data);}
			});
		}
	});

	$('#Utype').change(function(){
		var e = document.getElementById("Utype");
		var strOpUser = e.options[e.selectedIndex].value;
		if(strOpUser !== 2){
			$.ajax({
				type:'ajax',
				method:'get',
				url:'gtReviewrRr/lckRedrct',
				data:{OP:strOpUser},
				async:true,
				dataType:'json',
				success:function(data){
					console.log(data);
					if(data.success){
						window.location.href = "gtReviewrRr";
					}
				},error:function(data){console.log(data);}
			});
		}
	});
	newTaskedArticles();
	function newTaskedArticles(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReviewrRr/newTaskedArticles',
			async:true,
			dataType:'json',
			success:function(data){
				var num = 0, flag = 0;
				var html = '', sta = '', authors = '';
				var i, a = 0, nwCntT = 0;
				var Co = 0, lleng = 0, pl = 1, fine = 0, xxasdw = 0;
				num = Number(data.length);
				for(i = 0;i<num;i++){
					a++;
					sta = '';
					nwCntT++;
					html+='<tr id="tabData">'+
						'<td style="width:1%;padding:7px;"><div style="height:100px;">'+a+'.</div></td>'+
						'<td style="width:5%;padding:7px;" align="center">'+
							'<div style="height:100px;"><i class="fa fa-book" style="font-size:14px;"></i><br><font style="color:#d82d13">'+data[i].dateASs+'<br>'+data[i].timeASs+'</font></div>'+
						'</td>'+
						'<td style="width:75%;padding:7px;">'+
							'<div title="Affiliation">&nbsp&nbsp<b>Title:</b> '+data[i].titleJournal+'</div>'+
							'<div id="fox2" style="height:60px;overflow:auto;background-image: linear-gradient(to bottom, transparent, black);padding:5px;" title="Affiliation"><b>Abstract:</b> '+data[i].abstractJournal+'</div>'+
						'</td>'+
						'<td style="width:10%;padding:7px;">'+
							'<div style="height:100px;">';
								authors = '';
								xxasdw = Number(data[i].autXxx.length);
								for(fine = 0;fine<xxasdw;fine++){
									authors+=', &nbsp&nbsp'+data[i].autXxx[fine].completename+'';
								}
								if(data[i].finalapproval == 1){
									html+='<font style="color:#2f9112"><b>Approved<br>Date: '+data[i].dateapp+'<br>Time: '+data[i].timeapp+'</b></font>';
								}else{ html+='<center><font class="btn btn-primary" id="click-valdateArtX" j_id="'+data[i].j_id+'" titleJournal="'+data[i].titleJournal+'" style="padding:3px;width:100%" data-toggle="modal" data-target=".bs-controlsValidPaper-modal-lg">Decision</font></center>'; }
							html+='</div>'+
						'</td>'+
					'</tr>';
				}
				flag = 5 - i;
				if(flag > 0){
					for(i = 0;i < flag;i++){
						html+='<tr id="tabData" style="background:white;height:100px;">'+
							'<td style="width:1%;padding:7px;"></td>'+
							'<td style="width:10%;padding:7px;"></td>'+
							'<td style="width:70%;padding:7px;"></td>'+
							'<td style="width:10%;padding:7px;"></td>'+
							'</td>'+
						'</tr>';
					}
				}
				
				$('#cntArtAreax1').html(html);
				i = nwCntT;
				$('#nkllaax1').html(i);
				$('#partAreaVG1').html("<b>"+i+"</b>");
				$('#dataforPend').html(i);
			},error:function(data){console.log(data);}
		});
	}
	$('#cntArtAreax1').on('click','#click-valdateArtX',function(){
		var titleJournal = $(this).attr('titleJournal');
		var j_id = $(this).attr('j_id');
		$('input[name=idofArticleXx]').val(j_id);
		$('input[name=titleOfthisJourn]').val(titleJournal);
		var html = '';
		html+='This is a response for an Article entitle: <b>'+titleJournal+'</b>';
		$('#ACmes').html(html);
	});
	$('#sbmitrespnseArti').click(function(){
		$('#sbmitrespnseArti').hide('fast');
		$('#changeBtnRepsnseARt').show('fast');
		var data = $('#form_reponse').serialize();
		var e = document.getElementById("controlRepnseArt");
		var strOpUser = e.options[e.selectedIndex].value;
		$.ajax({
			type:'ajax',
			method:'POST',
			url:'gtReviewrRr/sbmitrespnseArti',
			data:data,
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					$('#changeBtnRepsnseARt').hide('fast');
					$('#sbmitrespnseArti').show('fast');
					$('.bs-controlsValidPaper-modal-lg').hide();
					alert("SUCCESS: Article successfully "+strOpUser+"!");
					newTaskedArticles();
					newTaskedArticles2();
					newTaskedArticles3();
					newTaskedArticles4();
				}
			},error:function(data){console.log(data);}
		});
	});

	newTaskedArticles2();
	function newTaskedArticles2(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReviewrRr/newTaskedArticles2',
			async:true,
			dataType:'json',
			success:function(data){
				var num = 0, flag = 0;
				var html = '', sta = '', authors = '';
				var i, a = 0, nwCntT = 0;
				var Co = 0, lleng = 0, pl = 1, fine = 0, xxasdw = 0;
				num = Number(data.length);
				for(i = 0;i<num;i++){
					a++;
					sta = '';
					nwCntT++;
					html+='<tr id="tabData">'+
						'<td style="width:1%;padding:7px;"><div style="height:100px;">'+a+'.</div></td>'+
						'<td style="width:5%;padding:7px;" align="center">'+
							'<div style="height:100px;"><i class="fa fa-book" style="font-size:14px;"></i><br><font style="color:#d82d13">'+data[i].dateASs+'<br>'+data[i].timeASs+'</font></div>'+
						'</td>'+
						'<td style="width:75%;padding:7px;">'+
							'<div title="Affiliation">&nbsp&nbsp<b>Title:</b> '+data[i].titleJournal+'</div>'+
							'<div id="fox2" style="height:60px;overflow:auto;background-image: linear-gradient(to bottom, transparent, black);padding:5px;" title="Affiliation"><b>Abstract:</b> '+data[i].abstractJournal+'</div>'+
							'<div style="padding:2px;"><b>File Attached:</b> <a href="../'+data[i].fileData[0].path+'" target="__blank">'+data[i].fileData[0].filename+'</a></div>'+
						'</td>'+
						'<td style="width:10%;padding:7px;">'+
							'<div style="height:100px;">';
								authors = '';
								xxasdw = Number(data[i].autXxx.length);
								for(fine = 0;fine<xxasdw;fine++){
									authors+=', &nbsp&nbsp'+data[i].autXxx[fine].completename+'';
								}
								if(data[i].finalapproval == 1){
									html+='<font style="color:#2f9112"><b>Approved<br>Date: '+data[i].dateapp+'<br>Time: '+data[i].timeapp+'</b></font>';
								}else{ html+='<center><font class="btn btn-primary" id="click-responseArxxy" j_id="'+data[i].j_id+'" title="'+data[i].titleJournal+'" abstract="'+data[i].abstractJournal+'" keywords="'+data[i].keywords+'" authors="'+data[i].realAuth+''+authors+'" datetimeSub="'+data[i].datetimeSub+'" filePath="../'+data[i].fileData[0].path+'" fileN="'+data[i].fileData[0].filename+'" style="padding:3px;width:100%" data-toggle="modal" data-target=".bs-tasksListsArt-modal-lg">Manage</font></center>'; }
							html+='</div>'+
						'</td>'+
					'</tr>';
				}
				flag = 5 - i;
				if(flag > 0){
					for(i = 0;i < flag;i++){
						html+='<tr id="tabData" style="background:white;height:100px;">'+
							'<td style="width:1%;padding:7px;"></td>'+
							'<td style="width:10%;padding:7px;"></td>'+
							'<td style="width:70%;padding:7px;"></td>'+
							'<td style="width:10%;padding:7px;"></td>'+
							'</td>'+
						'</tr>';
					}
				}

				$('#cntArtAreax2').html(html);
				i = nwCntT;
				$('#nkllaax2').html(i);
				$('#partAreaVG2').html("<b>"+i+"</b>");
				$('#approvedArctx2').html(i);
			},error:function(data){console.log(data);}
		});
	}
	$('#showApprvListAll9011x').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#ResearchrsArea').slideUp();
		$('#editorsArea').slideUp();
		$('#articlesArea').slideDown();
		$('#AmessageArea').slideUp();
		$('#accompArea').slideUp();

		$('#btn-AccompX').css('border-left','none');
		$('#btn-Messagex').css('border-left','none');
		$('#btn-ArticlesX').css('border-left','3px solid #7aad40');
		$('#btn-ViewReserachrs').css('border-left','none');
		$('#btn-dashReviewer').css('border-left','none');
		$('#paginationCnt').html("Task for Articles");
		$('#OriginSearch').hide();

		$('#newAssignedARtx').css('border-bottom','none');
		$('#AcceptdArtx').css('border-bottom','2px solid #f77b67');
		$('#IgnredArt4Rev').css('border-bottom','none');

		$('#cntArtAreax1-cnt').slideUp();
		$('#cntArtAreax2-cnt').slideDown();
		$('#cntArtAreax3-cnt').slideUp();
	});
	$('#clickPEndingShowxx1').click(function(){
		$('#homeAreaAdmn').slideUp();
		$('#ResearchrsArea').slideUp();
		$('#editorsArea').slideUp();
		$('#articlesArea').slideDown();
		$('#AmessageArea').slideUp();
		$('#accompArea').slideUp();

		$('#btn-AccompX').css('border-left','none');
		$('#btn-Messagex').css('border-left','none');
		$('#btn-ArticlesX').css('border-left','3px solid #7aad40');
		$('#btn-ViewReserachrs').css('border-left','none');
		$('#btn-dashReviewer').css('border-left','none');
		$('#paginationCnt').html("Task for Articles");
		$('#OriginSearch').hide();

		$('#newAssignedARtx').css('border-bottom','2px solid #f77b67');
		$('#AcceptdArtx').css('border-bottom','none');
		$('#IgnredArt4Rev').css('border-bottom','none');

		$('#cntArtAreax1-cnt').slideDown();
		$('#cntArtAreax2-cnt').slideUp();
		$('#cntArtAreax3-cnt').slideUp();
	});
	// End of Attaching/Uploading a File
	$(document).on('change','#file',function(){
		var err = 0;
		var fileSize = 0;
		var property = document.getElementById("file").files[0];
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
				/*if(percentageComplete == 100){
					document.getElementById("submitNWjourmn").disabled = false;
				}*/
			},success:function(data){
				$('#psw1x1').html("<font color='green'>File uploaded successfully...</font>");
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
			url:'gtReviewrRr/getListIDdd',
			async:true,
			dataType:'json',
			success:function(data){
				$('#firstContextBes21').hide();
				$('#firstContextBes22').show();
				var html = '';
				html += '<tr>'+
                    '<td style="width:30%" align="center"><img src="../nwng/msword.png" style="width:70%;height:35%;"></td>'+
                    '<td style="width:70%;padding:3px;"><div style="height:54%;">File Name: '+data[0].filename+'</div></td>'+
                '</tr>';
				$('input[name=cpyRowIDofNEWFLLE]').val(data[0].fileid);
				$('#basedspFileNNd').html(html);
			},error:function(data){console.log(data);}
		});
	}

	// End of Attaching/Uploading a File
	newTaskedArticles3();
	function newTaskedArticles3(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReviewrRr/newTaskedArticles3',
			async:true,
			dataType:'json',
			success:function(data){
				var num = 0, flag = 0;
				var html = '', sta = '', authors = '';
				var i, a = 0, nwCntT = 0;
				var Co = 0, lleng = 0, pl = 1, fine = 0, xxasdw = 0;
				num = Number(data.length);
				for(i = 0;i<num;i++){
					a++;
					sta = '';
					nwCntT++;
					html+='<tr id="tabData">'+
						'<td style="width:1%;padding:7px;"><div style="height:100px;">'+a+'.</div></td>'+
						'<td style="width:5%;padding:7px;" align="center">'+
							'<div style="height:100px;"><i class="fa fa-book" style="font-size:14px;"></i><br><font style="color:#d82d13">'+data[i].dateASs+'<br>'+data[i].timeASs+'</font></div>'+
						'</td>'+
						'<td style="width:85%;padding:7px;">'+
							'<div title="Affiliation">&nbsp&nbsp<b>Title:</b> '+data[i].titleJournal+'</div>'+
							'<div id="fox2" style="height:60px;overflow:auto;background-image: linear-gradient(to bottom, transparent, black);padding:5px;" title="Affiliation"><b>Abstract:</b> '+data[i].abstractJournal+'</div>'+
							'<div style="padding:2px;"><b>File Attached:</b> <a href="../'+data[i].fileData[0].path+'" target="__blank">'+data[i].fileData[0].filename+'</a></div>'+
						'</td>'+
					'</tr>';
				}
				flag = 5 - i;
				if(flag > 0){
					for(i = 0;i < flag;i++){
						html+='<tr id="tabData" style="background:white;height:100px;">'+
							'<td style="width:1%;padding:7px;"></td>'+
							'<td style="width:10%;padding:7px;"></td>'+
							'<td style="width:80%;padding:7px;"></td>'+
							'</td>'+
						'</tr>';
					}
				}

				$('#cntArtAreax3').html(html);
				i = nwCntT;
				$('#nkllaax3').html(i);
				$('#partAreaVG4').html("<b>"+i+"</b>");
			},error:function(data){console.log(data);}
		});
	}
	newTaskedArticles4();
	function newTaskedArticles4(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReviewrRr/newTaskedArticles4',
			async:true,
			dataType:'json',
			success:function(data){
				var num = 0, flag = 0;
				var html = '', sta = '', authors = '';
				var i, a = 0, nwCntT = 0;
				var Co = 0, lleng = 0, pl = 1, fine = 0, xxasdw = 0;
				num = Number(data.length);
				for(i = 0;i<num;i++){
					a++;
					sta = '';
					nwCntT++;
					html+='<tr id="tabData">'+
						'<td style="width:1%;padding:7px;"><div style="height:100px;">'+a+'.</div></td>'+
						'<td style="width:5%;padding:7px;" align="center">'+
							'<div style="height:100px;"><i class="fa fa-book" style="font-size:14px;"></i><br><font style="color:#d82d13">'+data[i].dateASs+'<br>'+data[i].timeASs+'</font></div>'+
						'</td>'+
						'<td style="width:85%;padding:7px;">'+
							'<div title="Affiliation">&nbsp&nbsp<b>Title:</b> '+data[i].titleJournal+'</div>'+
							'<div id="fox2" style="height:60px;overflow:auto;background-image: linear-gradient(to bottom, transparent, black);padding:5px;" title="Affiliation"><b>Abstract:</b> '+data[i].abstractJournal+'</div>'+
							'<div style="padding:2px;"><b>File Attached:</b> <a href="../'+data[i].fileData[0].path+'" target="__blank">'+data[i].fileData[0].filename+'</a></div>';
							if(data[i].finalapproval == 1){
								html+='<div style="padding:2px;">Your vindication: <b>As it is</b></div>';
							}else if(data[i].finalapproval == 2){
								html+='<div style="padding:2px;">Your vindication: <b>Minor Revision</b></div>';
							}else if(data[i].finalapproval == 3){
								html+='<div style="padding:2px;">Your vindication: <font style="color:#CF472A;font-size:17px;">Major Revision</font></div>';
							}
						html+='</td>'+
					'</tr>';
				}
				flag = 5 - i;
				if(flag > 0){
					for(i = 0;i < flag;i++){
						html+='<tr id="tabData" style="background:white;height:100px;">'+
							'<td style="width:1%;padding:7px;"></td>'+
							'<td style="width:10%;padding:7px;"></td>'+
							'<td style="width:80%;padding:7px;"></td>'+
							'</td>'+
						'</tr>';
					}
				}

				$('#cntArtAreax4').html(html);
				i = nwCntT;
				$('#nkllaax4').html(i);
				$('#partAreaVG3').html("<b>"+i+"</b>");
			},error:function(data){console.log(data);}
		});
	}

	showLixxp();
	function showLixxp(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReviewrRr/logsGet',
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
			},error:function(data){console.log(data);}
		});
	}

	var j_idClllcc = 0;
	var titleCklasP = '';
	$('#cntArtAreax2').on('click','#click-responseArxxy',function(){
		$('#resListofTaskConv').html("Please wait...");
		var j_id = $(this).attr('j_id');
		j_idClllcc = j_id;
		$('input[name=j_idCopied]').val(j_id);
		$('input[name=journalID4task]').val(j_id);
		$('input[name=JournalIDlgt2]').val(j_id);
		var title = $(this).attr('title');
		var abstract = $(this).attr('abstract');
		var keywords = $(this).attr('keywords');
		var authors = $(this).attr('authors');
		var datetimeSub = $(this).attr('datetimeSub');
		var filePath = $(this).attr('filePath');
		var fileN = $(this).attr('fileN');
		var jsjsdalww = '';
		jsjsdalww += '<font style="float:right;font-size:11px;">Date & Time Submitted: '+datetimeSub+'</font>'+
			'<b>Title:</b> <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font style="font-size:21px;">'+title+'</font><br><br>'+
			'<b>Abstract:</b> <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'+abstract+'<br><br>'+
			'<b>Keywords:</b> <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'+keywords+'<br><br>'+
			'<b>File Attached: <a href="'+filePath+'" target="__blank">'+fileN+'</a></b>';
		titlBBnnx = title;
		titleCklasP = title;
		$('input[name=JournalUIDXKLxx]').val(j_id);
		$('#jsjsdalww').html(jsjsdalww);
		getListofTaskMy(j_id);
	});
	$('#finalApprovRevJNjr').click(function(){
		var html='';
		html+='Accept as it is for an article entitle: <font style="font-size:30px;"><b>'+titleCklasP+'</b> ?</font>';
		$('#contentLogsPste2xxtwe').html(html);
	});
	$('#finalApprovRevJNjr2').click(function(){
		var html='';
		html+='Accept with Minor revision for an article entitled: <font style="font-size:30px;"><b>'+titleCklasP+'</b> ?</font>';
		$('#contentLogsPste2xxtwe2').html(html);
	});
	$('#finalApprovRevJNjr3').click(function(){
		var html='';
		html+='Accept with Major revision for an article entitled: <font style="font-size:30px;"><b>'+titleCklasP+'</b> ?</font>';
		$('#contentLogsPste2xxtwe3').html(html);
	});
	$('#finalApprovRevJNjr4').click(function(){
		var html='';
		html+='Rejection for an article entitled: <font style="font-size:30px;"><b>'+titleCklasP+'</b> ?</font>';
		$('#contentLogsPste2xxtwe4').html(html);
	});
	$('#viewARtkllUpddte').click(function(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReviewrRr/getAllUpdateFxrLssls',
			data:{dataIDxxD:j_idClllcc},
			async:true,
			dataType:'json',
			success:function(data){
				var html = '';
				var i, a = 0;
				for(i = 0; i < data.length; i++){
					html+='<div style="font-size:11px;padding:2px;margin-top:4px;background:#dce5df;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42)">'+
                        '<font style="float:right;color:#aeaeae;font-size:8px;">Posted: '+data[i].dateupdate+' | '+data[i].timeupdate+'</font>'+
                        '<div style="padding:2px;margin-top:9">'+
                          '<font style="font-size:14px;"><b><i>'+data[i].u_fname+' '+data[i].u_mname+' '+data[i].u_lname+'</i></b></font> '+data[i].updatemes+''+
                        '</div>'+
                    '</div>';
				}
				$('#contentLogsPste2').html(html);
			},error:function(data){console.log(data);}
		});
	});
	$('.jasdjldx').click(function(){
		$('.bs-reviewAppJrnxNNx-modal-lg').hide();
	});
	$('.jasdjldx2').click(function(){
		$('.bs-reviewAppJrnxNNx2-modal-lg').hide();
	});
	$('.jasdjldx3').click(function(){
		$('.bs-reviewAppJrnxNNx3-modal-lg').hide();
	});
	$('.jasdjldx4').click(function(){
		$('.bs-reviewAppJrnxNNx4-modal-lg').hide();
	});
	$('.clickFxx').click(function(){
		$('.bs-articleUpdatesX01-modal-lg').hide();
	});
	$('#prosPropSbmtArccx').click(function(){
		document.getElementById("prosPropSbmtArccx").disabled = true;
		$('#prosPropSbmtArccx').html("Please wait...");
		var JournalUIDXKLxx = $('input[name=JournalUIDXKLxx]');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReviewrRr/sbmtFireApprvalxklh',
			data:{dataIDxxD:JournalUIDXKLxx.val(),titleCklasP:titleCklasP},
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					alert("SUCCESS: Article approved successfully");
					$('.bs-tasksListsArt-modal-lg').hide();
					$('.bs-reviewAppJrnxNNx-modal-lg').hide();
					document.getElementById("prosPropSbmtArccx").disabled = false;
					$('#prosPropSbmtArccx').html("Proceed");
					newTaskedArticles2();
					newTaskedArticles3();
					newTaskedArticles4();
					logsGet();
				}else{ alert("ERROR: Try again later"); }
			},error:function(data){console.log(data);}
		});
	});
	$('#prosPropSbmtArccx2').click(function(){
		document.getElementById("prosPropSbmtArccx2").disabled = true;
		$('#prosPropSbmtArccx2').html("Please wait...");
		var JournalUIDXKLxx = $('input[name=JournalUIDXKLxx]');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReviewrRr/sbmtFireApprvalxklh2',
			data:{dataIDxxD:JournalUIDXKLxx.val(),titleCklasP:titleCklasP},
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					alert("SUCCESS: Article disapproved successfully");
					$('.bs-tasksListsArt-modal-lg').hide();
					$('.bs-reviewAppJrnxNNx2-modal-lg').hide();
					document.getElementById("prosPropSbmtArccx2").disabled = false;
					$('#prosPropSbmtArccx2').html("Proceed");
					newTaskedArticles2();
					newTaskedArticles3();
					newTaskedArticles4();
					logsGet();
				}else{ alert("ERROR: Try again later"); }
			},error:function(data){console.log(data);}
		});
	});
	$('#prosPropSbmtArccx3').click(function(){
		document.getElementById("prosPropSbmtArccx3").disabled = true;
		$('#prosPropSbmtArccx3').html("Please wait...");
		var JournalUIDXKLxx = $('input[name=JournalUIDXKLxx]');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReviewrRr/sbmtFireApprvalxklh3',
			data:{dataIDxxD:JournalUIDXKLxx.val(),titleCklasP:titleCklasP},
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					alert("SUCCESS: Article disapproved successfully");
					$('.bs-tasksListsArt-modal-lg').hide();
					$('.bs-reviewAppJrnxNNx3-modal-lg').hide();
					document.getElementById("prosPropSbmtArccx3").disabled = false;
					$('#prosPropSbmtArccx3').html("Proceed");
					newTaskedArticles2();
					newTaskedArticles3();
					newTaskedArticles4();
					logsGet();
				}else{ alert("ERROR: Try again later"); }
			},error:function(data){console.log(data);}
		});
	});
	$('#prosPropSbmtArccx4').click(function(){
		document.getElementById("prosPropSbmtArccx4").disabled = true;
		$('#prosPropSbmtArccx4').html("Please wait...");
		var JournalUIDXKLxx = $('input[name=JournalUIDXKLxx]');
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReviewrRr/sbmtFireApprvalxklh4',
			data:{dataIDxxD:JournalUIDXKLxx.val(),titleCklasP:titleCklasP},
			async:true,
			dataType:'json',
			success:function(data){
				if(data.success){
					alert("SUCCESS: Article disapproved successfully");
					$('.bs-tasksListsArt-modal-lg').hide();
					$('.bs-reviewAppJrnxNNx4-modal-lg').hide();
					document.getElementById("prosPropSbmtArccx4").disabled = false;
					$('#prosPropSbmtArccx4').html("Proceed");
					newTaskedArticles2();
					newTaskedArticles3();
					newTaskedArticles4();
					logsGet();
				}else{ alert("ERROR: Try again later"); }
			},error:function(data){console.log(data);}
		});
	});
	$('#sbmtNewTskN').click(function(){
		document.getElementById("sbmtNewTskN").disabled = true;
		$('#sbmtNewTskN').html('Please wait...');
		var journalID4task = $('input[name=journalID4task]');
		var cpyRowIDofNEWFLLE = $('input[name=cpyRowIDofNEWFLLE]');
		var messageforTaskofAut = $('textarea[name=messageforTaskofAut]');
		if(messageforTaskofAut.val() !== ""){
			$('#messageforTaskofAut').css('border','1px solid #aeaeae');
			$.ajax({
				type:'ajax',
				method:'get',
				url:'gtReviewrRr/sbmtMessageAsTasksx',
				data:{journalID4task:journalID4task.val(), cpyRowIDofNEWFLLE:cpyRowIDofNEWFLLE.val(), messageforTaskofAut:messageforTaskofAut.val()},
				async:true,
				dataType:'json',
				success:function(data){
					if(data.success){
						$('.modalTemp').hide('fast');
						alert("SUCCESS: Tasks successfully assigned!");
						$('#firstContextBes22').hide();
						$("#firstContextBes21").show();
						$('textarea[name=messageforTaskofAut]').val("");
						$('#uploadfile')[0].reset();
						$("#percentageCMP").html("0%");
						$('#prog').attr('value','0');
						$('#psw1x1').html("");
						document.getElementById("sbmtNewTskN").disabled = false;
						$('#sbmtNewTskN').html('Submit Task');
						getListofTaskMy(journalID4task.val());
					}
				},error:function(data){console.log(data);}
			});
		}else{
			alert("ERROR: Please fill field(s) marked in red!");
			$('#messageforTaskofAut').css('border','1px solid red');
		}
	});

	function showAllTaskFRomRev(j_id){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReviewrRr/getAllGEnTaskPlHre',
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
			url:'gtReviewrRr/getAllTaskNNw',
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
                                        	html+='<br><font style="font-size:15px">'+data[i].mess_task+'</font>&nbsp&nbsp<i class="fa fa-chevron-down"></i><br>Attached File: <u><a href="../'+data[i].fileDatax[0].path+'" style="text-decoration:none;color:darkblue;"><button>'+data[i].fileDatax[0].filename+'</button></a></u>';
                                        }
                                    html+='</div>'+
                                '</td>'+
                                '<td style="width:10%;padding:2px;" align="center">'+
                                	'<font id="fireBaseMesTask" j_id="'+j_id+'" taskID="'+data[i].taskid+'" mesTas="'+data[i].mess_task+'" class="btn btn-default" style="padding:8px;width:70%;" data-toggle="modal" data-target=".bs-baseReplyXXp2-modal-lg"><i class="fa fa-mail-reply-all"></i></font>'+
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
	$('#resListofTaskConv').on('click','#fireBaseMesTask',function(){
		var taskID = $(this).attr('taskID');
		var mesTas = $(this).attr('mesTas');
		var j_id = $(this).attr('j_id');
		$('input[name=journalID4task2]').val(taskID);
		$('input[name=JournalIDlgt2]').val(j_id);
		$('#messageResTake').html("<b>Task Message:</b><br>"+mesTas);
	});
	$('#messageforTaskofAut').keyup(function(){
		var messageforTaskofAut = $('textarea[name=messageforTaskofAut]');
		if(messageforTaskofAut.val() !== ""){ document.getElementById("sbmtNewTskN").disabled = false;
		}else{ document.getElementById("sbmtNewTskN").disabled = true; }
	});
	$('#cancelsbmtNewTskN2').click(function(){
		$(".modalTemp2").slideUp();
		$('input[name=messageforTaskofAut2]').val("");
	});
	$('#newT').click(function(){
		$(".modalTemp").slideDown();
		document.getElementById("sbmtNewTskN").disabled = true;
	});
	$('#cancelsbmtNewTskN').click(function(){
		$(".modalTemp").slideUp();
		$('input[name=messageforTaskofAut]').val("");
	});
	$('#sbmtNewTskN2').click(function(){
		document.getElementById("sbmtNewTskN2").disabled = true;
		$('#sbmtNewTskN2').html("Please wait...");
		var data = $('#task_formN2').serialize();
		var JournalIDlgt = $('input[name=JournalIDlgt2]');
		var messageforTaskofAut = $('textarea[name=messageforTaskofAut2]');
		if(messageforTaskofAut.val() !== ""){
			$('#messageforTaskofAut2').css('border','1px solid #aeaeae');
			$.ajax({
				type:'ajax',
				method:'POST',
				url:'gtReviewrRr/sbmtMessageAsTasksxx2',
				data:data,
				async:true,
				dataType:'json',
				success:function(data){
					if(data.success){
						$('.modalTemp2').hide('fast');
						alert("SUCCESS: Reply has sent successfully!");
						$('textarea[name=messageforTaskofAut2]').val("");
						getListofTaskMy(JournalIDlgt.val());
						document.getElementById("sbmtNewTskN2").disabled = false;
						$('#sbmtNewTskN2').html("Submit Message");
					}else{
						alert("ERROR: Slow internet connection, or try again later.");
					}
				},error:function(data){alert("ERROR: Try again later.");}
			});
		}else{
			alert("ERROR: Please fill field(s) marked in red!");
			$('#messageforTaskofAut2').css('border','1px solid red');
		}
	});
	// Drag Div
	var draggable2 = $('.modalTemp2'); //element
	draggable2.on('mousedown', function(e){
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
	$('#closeThisModal1').click(function(){
		$('.bs-baseforGeneralTasklst-modal-lg').hide();
	});
    // End Drag Div
	showAllResearchersXx();
	function showAllResearchersXx(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReviewrRr/listofResearchersXx',
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
										'<div class="col-md-8" style="padding:0px;">'+data[i].salutation+' '+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>'+
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
									'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View"><i class="fa fa-eye"></i></span>'+
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
	
	$('#searchREkklshwAAAl').click(function(){
		showAllResearchersXx();
	});
	$('#searchREkkl').click(function(){
		var searchForREsmmmx = $('input[name=searchForREsmmmx]');
		if(searchForREsmmmx.val() !== ""){
			$.ajax({
				type:'ajax',
				method:'get',
				url:'gtReviewrRr/listofResearchersXxDRSTVH',
				data:{dataSearchRevP:searchForREsmmmx.val()},
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
											'<div class="col-md-8" style="padding:0px;">'+data[i].salutation+' '+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'</div>'+
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
										'&nbsp&nbsp&nbsp<span id="xpBtnAccpt" class="confrmActA2" initials="'+data[i].u_initials+'" dateSigned="'+data[i].dateSigned+'" remarks="'+data[i].remarks+'" bio_state="'+data[i].bio_state+'" mailingaddress="'+data[i].mailingaddrss+'" fax="'+data[i].fax+'" phone="'+data[i].phone+'" url="'+data[i].url+'" orcidid="'+data[i].orcid_id+'" affiliation="'+data[i].affiliation+'" gend="'+data[i].u_gender+'" countryName="'+data[i].country_name+'" email="'+data[i].email+'" sta="'+sta+'" cntryCode="'+data[i].country_code+'" cntryName="'+data[i].country_name+'" userid="'+data[i].userid+'" fullName="'+data[i].u_lname+', '+data[i].u_fname+' '+data[i].u_mname+'" title="View Information" data-toggle="modal" data-target=".bs-viewPersonalRec-modal-lg" title="View"><i class="fa fa-eye"></i></span>'+
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
	});
	logsGet();
	function logsGet(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReviewrRr/logsGet',
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
		html += 'Name (Lastname, Firstname Middlename): '+fullName+'<br>Initials: '+initials+'<br>Gender: '+gend+'<br>Affilitation: '+affiliation+'<br>Email: '+email+'<br>Orcid ID: '+orcidid+'<br>Url: '+url+'<br>Phone: '+phone+'<br>Fax: '+fax+'<br>Mailing Address: '+mailingaddress+'<br>Country: '+cntryName+'<br>Bio-state: '+bio_state+'<br>Remarks: '+remarks+'<br>Date Signed: '+dateSigned+' ';
		$('#infoP2xhrhr').html(html);
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
			method:'get',
			url:'gtReviewrRr/thisNoteGet',
			async:true,
			dataType:'json',
			success:function(data){
				var spanHT = '', html = '';
				var i, a = 0;
				for(i = 0; i < data.content2.length; i++){
					html+='<div style="font-size:12px;padding:2px;margin-top:4px;background:#dce5df;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42)">'+
                        '<font style="float:right;color:#aeaeae;font-size:10px;">Posted: '+data.content2[i].date+' | '+data.content2[i].time+'</font>'+
                        '<div style="padding:2px;margin-top:9">'+
                          ''+data.content2[i].messagenote+''+
                        '</div>'+
                    '</div>';
				}
				if(data.content1 > 0){
					spanHT='<span style="position:absolute;margin-left:30px;background:red;color:white;padding-left:10px;padding-right:10px;border-radius:50%;">'+data.content1+'</span>';
				}else{
					spanHT = "";
				}
				$('#opttx01').html(spanHT);
				$('#displatNotexAA').html(html);
			},error:function(data){console.log(data);}
		});
	}
	$('.clickToDipsNote').click(function(){
		$('#opttx01').html("");
		$.ajax({
			type:'ajax',
			url:'gtReviewrRr/UpthisNoteTook',
			async:true,
			dataType:'json'
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