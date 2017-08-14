(function(){


  var menu = $(".header__menu");
  var menuOpen = $(".burger__open");
  var menuClose = $(".burger__close");


  menuOpen.click(function(){
    menu.removeClass("menu--hidden");
    menuOpen.addClass("burger--hidden");
    menuClose.removeClass("burger--hidden");
  });

  menuClose.click(function(){
    menu.addClass("menu--hidden");
    menuClose.addClass("burger--hidden");
    menuOpen.removeClass("burger--hidden");

  });

  function updateRecette(that){
    $.ajax({
      url: that.attr('data-href'),
      type: "GET",
      success: function(data){
        var data = $(data);
        var parent = that.parent().closest('li').empty();
        parent.append(data);
      }
    });
  }


    $(document).on("click",".vote__bouton", function(event){

      var that = $(this);
      if(that.hasClass("vote--login")){

      }else{
        event.preventDefault();

        $.ajax({
          type    :"POST",
          url     :that.parent().attr( 'action' ),
          data: {_token: $('input[name="_token"]').val()},
          dataType:"json",

          success :function() {
            updateRecette(that);
          },
          error: function(e) {
            console.log(response.error);
          }
        });
      }
    });






})();
