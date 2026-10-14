$(document).ready(function(){
  $("#next_1_btn").click(function(){

        var allRequireInput = $(".step-1 .require_input");
        // console.log(allRequireInput);
        var tmp = [];
        for(i=0;i<allRequireInput.length;i++){
          var singleInput = allRequireInput[i];
          if(singleInput.value==""){
            var nextTag = singleInput.nextSibling.nodeName;
            if(nextTag=="SPAN"){
              singleInput.nextSibling.remove();
            }
            $(`<span class="text-danger">This field is rquaired !</span>`).insertAfter(singleInput);
          } else {
                tmp.push(i);
          }
        }
        if(allRequireInput.length==tmp.length){
           nextSlide(".step-1",".step-2");
           
        };
  });

  $("#next_2_btn").click(function(){
    nextSlide(".step-2",".step-3");
  });

  $("#prev_2_btn").click(function(){
    prevSlide(".step-2",".step-1");
  });

  $("#prev_3_btn").click(function(){
    prevSlide(".step-3",".step-2");
  });


});



function nextSlide(x,y){
  $(x).addClass("d-none");
  $(y).removeClass("d-none");
  $(y).addClass("animate__animated animate__slideUpLeft");
}


function prevSlide(x,y){
  $(x).addClass("d-none");
  $(y).removeClass("d-none");
  $(y).addClass("animate__animated animate__slideUp");
}
