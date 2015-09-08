$('.dropdown-toggle').dropdown();

function testfun(id) {
  $('#changeableContainer').load('data/data.php?id=' + id);
}