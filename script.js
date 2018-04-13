$('#txt').on('input',function(){
    $("#txtimg").html($(this).val());
});

$('#size').on('input',function(){
    var $set = $(this).val();
$("#txtimg").css('font-size',$set+"px");
});

$('#col').on('input',function(){
    var $col = $(this).val();
$("#txtimg").css('color',"#"+$col);
});

$('#top').on('input',function(){
    var $top = $(this).val();
$("#txtimg").css('top',$top+"px");
});

$('#axey').on('input',function(){
    var $left = $(this).val();
$("#txtimg").css('left',$left+"px");
});

// function RedirectionJavascript(){
//     document.location.href="home.php"; 
//   }