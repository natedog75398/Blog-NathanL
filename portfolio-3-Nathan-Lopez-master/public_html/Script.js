$("document").ready(function(){
    $('.yeah').css('background-color', 'blue');
    //doing well here
    $('div:last p:nth-child(3)').css('background-color','pink');

    $('div:last p:nth-child(4)').css('background-color','red');
    
    $('div:last p:nth-child(5)').css('background-color','white');
    
    $('div:last p:nth-child(3)').css('border-style','solid');
    $('div:last p:nth-child(4)').css('border-style','solid');
    $('div:last p:nth-child(5)').css('border-style','solid');
    
    $('#superHumans').accordion({header: "h3"});
    
    //all for my work
   $('h1').bind('mouseover', mouseOverMe).bind('mouseout', mouseOutMe);
    
    $("h1").bind('click', mouseClick);
    
    $('#replcaementWText').bind('click', replaceWText);
    //for everything
    $('#randPara').bind('click', addAPara);
    
    $('#removepara').bind('click', removeAPara);
});     
    //most of the work
function removeAPara(){
    $ ('#randPara p:last').remove();
}

function addAPara(){
    $('randPara').append('<p>ADDED</p>');
}
// for paragrapsh
function replaceWText(){
    $('#replaceWtext').text('replaced');
}


function mouseOverMe(){
    $("h1").html("do not click on these words");
}

function mouseOutMe(){
    $('h1').html('this is easy');
}

function mouseClick(){
    $('p').html('bruh;MTGz is lifeeeee');
}
 function hidethepage(){
    $('#show').css('visibility','visible');
    $('div').hide('slide')
 }
