

var editItem = function(id) {
	// var id = elem.attr('data-id');
	$.ajax({
		type: 'GET',
		url:'project/edit?id='+id,
		cache: false
	})
	.done(function(data){
		var da = JSON.parse(data);
		$("#myModal input[name='id']").val(da[0].id);
		$("#myModal input[name='name']").val(da[0].name);
		$("#myModal input[name='description']").val(da[0].description);
		$("#myModal input[name='width']").val(da[0].width);
		$("#myModal input[name='length']").val(da[0].length);
		$("#myModal input[name='height']").val(da[0].height);
		$("#myModal input[name='weight']").val(da[0].weight);
		$("#myModal input[name='value']").val(da[0].value);

	});
};

var deleteItem = function(elem) {
	var id = elem.attr('data-id');
	$.ajax({
		type: 'GET',
		url:'project/delete?id='+id,
		cache: false
	})
	.done(function(data){
		elem.parent().parent('tr').remove();
	});
};

var initcall = function() {
	$.ajax({
		type: 'GET',
		url: "project/returnlist",
		cache: false
	})
	.done(function(data) {
		var html = '';
		var rs = JSON.parse(data);
		console.log(rs.length);
		for(var i=0;i<rs.length;i++){
			html += "<tr>\
		<td>"+rs[i].id+"</td>\
		<td>"+rs[i].name+"</td>\
		<td>"+rs[i].description+"</td>\
		<td>"+rs[i].width+"</td>\
		<td>"+rs[i].length+"</td>\
		<td>"+rs[i].height+"</td>\
		<td>"+rs[i].weight+"</td>\
		<td>"+rs[i].value+"</td>\
		<td><a data-toggle='modal' href='#' onclick='editItem("+rs[i].id+")' data-id='"+rs[i].id+"' data-target='#myModal'>edit</a>\
		<a class='btn deleteorder' data-id='"+rs[i].id+"' onclick='deleteItem($(this))' href='javascript:void(0)'>delete</a></td>\
	</tr>";
		}
		$('tbody').html(html);
	});
}

$('#myModal .btn-submit').click(function(e){
	var prvalue = {
			'id': $("#myModal input[name='id']").val(),
			'name' : $("#myModal input[name='name']").val(),
			'description':$("#myModal input[name='description']").val(),
			'width':$("#myModal input[name='width']").val(),
			'length':$("#myModal input[name='length']").val(),
			'height':$("#myModal input[name='height']").val(),
			'weight':$("#myModal input[name='weight']").val(),
			'value': $("#myModal input[name='value']").val()
		}
		console.log(prvalue);
	$.ajax({
		type: 'POST',
		url:'project/save',
		cache: false,
		data: prvalue
	}).done(function(data){
		console.log(data);
	});
	e.preventDefault();
});

window.onload = function(){
	initcall();
}


