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
            $(`<span class="text-danger fa fa-warning">This field is rquaired !</span>`).insertAfter(singleInput);
          } else {
                tmp.push(i);
          }
        }
        if(allRequireInput.length==tmp.length){
           nextSlide(".step-1",".step-2");

        };
  });

  $("#next_2_btn").click(function(){

        var allRequireInput = $(".step-2 .require_input");
        // console.log(allRequireInput);
        var tmp = [];
        for(i=0;i<allRequireInput.length;i++){
          var singleInput = allRequireInput[i];
          if(singleInput.value==""){
            var nextTag = singleInput.nextSibling.nodeName;
            if(nextTag=="SPAN"){
              singleInput.nextSibling.remove();
            }
            $(`<span class="text-danger fa fa-warning">This field is rquaired !</span>`).insertAfter(singleInput);
          } else {
                tmp.push(i);
          }
        }
        if(allRequireInput.length==tmp.length){
           nextSlide(".step-2",".step-3");

        };
  });

  $("#prev_2_btn").click(function(){
    prevSlide(".step-2",".step-1");
  });

  $("#prev_3_btn").click(function(){
    prevSlide(".step-3",".step-2");
  });

$(".require_input").on("input",function(){
  var val =  $(this).val();
  if(val==""){
    var nextTag = this.nextSibling.nodeName;
    if(nextTag=="SPAN"){
        this.nextSibling.remove();
    }else {
    $(`<span class="text-danger fa fa-warning">This field is required !</span>`).insertAfter(this);
    }
  }else {
    var nextTag = this.nextSibling.nodeName;
    if(nextTag=="SPAN"){
      this.nextSibling.remove();
    }
  }
});

$("#companyForm").submit(function(e){
  e.preventDefault();
  var formdata = new FormData(e.target);
  $.ajax({
    type:"POST",
    url:"/api/create-company",
    data:formdata,
    processData:false,
    contentType:false,
    success:function(res){
      console.log(res);
    }
  })
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
