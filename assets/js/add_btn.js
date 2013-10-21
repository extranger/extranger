function greet() {
	alert('hello');
};

var counter = 1;

$("#addBtn").click(function () {
    counter++;
    var curDiv = $('#parent');
    //var i = $('#parent div').size()/4 + 1;
    var newDiv='<div id="block_'+ counter + '" class="parent_div">' +
    '<div class="child_div" style="padding-left:200px">' +
    '<input type="text" class="form-control" placeholder="ABC" autofocus name="left_input_' + counter + '">' +
    '</div>' +
    '<img class="img_container" src="http://54.251.192.210/assets/img/arrow.jpg" alt="dependency">' +
    '<div class="child_div">' +
    '<input type="text" class="form-control" placeholder="DEF" autofocus name="right_input_' + counter + '">' +
    '</div><div class="rem_div"><a class="remove_block" href="#">Remove</a></div>' +
    '</div>';
    $(newDiv).appendTo(curDiv);
    return false;
});

$('#parent').on('click', 'a.remove_block', function(events){
   $(this).parents('div').eq(1).remove();
});