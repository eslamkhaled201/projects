$(".Edit-user-acc").find("input").focus(function(){
    $(this).animate({padding:0} ,100)
    .removeAttr("placeholder")
    ;})
    .blur(function(){$(this).animate({padding:'10px'} ,100)
    .prop("placeholder",this.id)
    ;})
console.log("lhkchn")