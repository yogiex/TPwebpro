$('li').click(function() {
  if ($(this).css('color') === 'rgb(128, 128, 128)') {
    $(this).css({
      color: 'black',
      textDecoration: 'none'
    });
  } else {
    $(this).css({
      color: 'gray',
      textDecoration: 'line-through'
    });
  }
});
$('#semangat').append(
  "<audio controls autoplay hidden> <source src='../css/semangat.mp3' type='audio/mpeg' /></audio>"
);
// lengkapi jquery untuk menlist hasil dari todolist yang di inputkan
$('ul').on('click', 'li', function() {
  $(this).toogleClass("completed")
});

$("ul").on('click', "span", function (e) {
  e.stopPropagation();
  $(this).closest("li").fadeOut(500,function() {
   $(this).remove();
  });
});

$("input[type='text']").keypress(function(e) {
  if(e.which === 13 || e.KeyCode == 13) {
    var todoText = $(this).val();
    if( $(this).val() !== "") {
    $("ul").append("<li><span><i class='fa fa-trash'> </i></span>" + "<number></number>" + todoText + "</li>");
      }
    $(this).val("");
  }
});
