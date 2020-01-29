$(document).ready(function(){
	showMyJournalxNNx();
	function showMyJournalxNNx(){
		$.ajax({
			type:'ajax',
			method:'get',
			url:'gtReglr/getJournalxPPT',
			async:true,
			dataType:'json',
			success:function(data){
				console.log(data);
				var html = '', authors = '';
				var i, a;
				var xx = 0;
				xx = Number(data.length);
				if(xx > 0){
					for(i = 0;i<data.length;i++){
						authors = '';
						for(a = 0;a<data[i].aut.length;a++){
							authors+=''+data[i].aut[a].completename+', &nbsp&nbsp';
						}
						html+='<div style="font-size:12px;margin-top:4px;padding:5px;background:white;box-shadow:1px 1px 1px rgba(0, 0, 0, .22);background:#fff3e2">'+
							'<span style="float:right"><font class="close"><span aria-hidden="true">×</span></font>'+
							'<font style="font-size:9px;margin-top:5px;" class="close">09/09/2018&nbsp&nbsp&nbsp&nbsp</font></span>'+
							'<b>Title:</b><i><div style="padding-left:10px;">'+data[i].title+'</div><b>Abstract:</b><div style="padding-left:10px;">'+data[i].abstract+'</div><b>Keywords:</b><div style="padding-left:10px;">'+data[i].keywords+'</div></i>'+
							'<div style="height:20px;"><i style="float:right">'+authors+'</i></div>'+
						'</div>';
					}
				}
				$('#displayMyJournalx').html(html);
			},error:function(data){console.log(data);}
		});
	}
});