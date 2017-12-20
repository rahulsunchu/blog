$(document).ready(function(){

    $(".commentbtn").click(function(){
     var dataid = $(this).attr('data-id')
     $("#commentform" + dataid).toggle();
 });

    $(".imagelogo").hide();
    $(".navbar-inverse2").css({"background-color": "transparent", "border-color": "transparent"});
    // $(".navbar-inverse").css('background-color': 'transparent');
    

    // fade in .navbar
    $(window).scroll(function () {

                 // set distance user needs to scroll before we start fadeIn
                 if ($(this).scrollTop() < 300) {
                    $('.imagelogo').fadeOut();
    $(".navbar-inverse2").css({"background-color": "transparent", "border-color": "transparent"});
                    

                } else {
                    $(".navbar-inverse2").css({"background-color": "#cecece", "border-color": "#afafaf"});

                    $('.imagelogo').fadeIn();
                }
            });



    $('#profile-image1').click(function(){
    	console.log('fasdfasdf');
        $('#profile-image-upload').click();
        $('.submitbtn').toggle();
        $('.clickonimg').toggle();

    });


    $(".commenteditbtn").click(function(){
     var dataid = $(this).attr('data-id')
     console.log(dataid)
     $("#commentedit" + dataid).toggle();
     $(".commentsetting").toggle();
     $("#commentshow"+ dataid).toggle();
 });


    $('[data-toggle=confirmation]').confirmation({
    });
    $('[data-toggle="tooltip"]').tooltip({
    }); 

    $(".likebtn").click(function(){
        console.log(this);

        var postid = $(this).attr('data-post');
        console.log('dsdfasdf');
        $(".likebtn" + postid).toggle();
        $(".unlikebtn"+ postid).toggle();


        
        $.ajax({
            type: "GET",
            url: '/post/like?postid='+postid,
            success: function( msg ) {
                console.log(msg.likes);
                $(".likesbutton"+postid).html(msg.likes);
            }
        });

        $.ajax({
            type: "GET",
            url: '/post/likestore?postid='+postid,
            // data: {postid: postid, userid: userid},
            success: function( msg ) {
                $("#ajaxResponse").append("<div>"+msg.likes+"</div>");

            }
        });

    });


    $(".unlikebtn").click(function(){

        var postid = $(this).attr('data-post');
        $(".likebtn" + postid).toggle();
        $(".unlikebtn"+ postid).toggle();


        
        $.ajax({
            type: "GET",
            url: '/post/unlike?postid='+postid,
            // data: {postid: postid, userid: userid},
            success: function( msg ) {
                $(".likesbutton"+postid).html(msg.likes);
            }
        });
        $.ajax({
            type: "GET",
            url: '/post/unlikestore?postid='+postid,
            // data: {postid: postid, userid: userid},
            success: function( msgg ) {
                $("#ajaxResponse").append("<div>"+msgg+"</div>");
            }
        });
        
        

        

    });
    
});
