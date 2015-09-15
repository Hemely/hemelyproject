//$(document).ready(function () {
//	$("html").click(function(event) {
//		$(".navbar-collapse").collapse('hide');
//	});
//});


$('#nav').click(function(){
	alert('asd');
	$('#nav').show();
});

$('.dropdown-toggle').dropdown();

function testfun(id) {
  $('#changeableContainer').load('data/data.php?id=' + id);
}

function asd() {
	alert("hi");
	$('#nav-collapse1').hide();
}