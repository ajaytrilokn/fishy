$(document).ready(function() {


    
    // top nav header scroll active class add start

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $(".header-main").addClass("active");
        } else {
            $(".header-main").removeClass("active");
        }
    });
    // top nav header scroll active class add end

    $('#joinsageteam').validate({
        rules: {
            first_name: {
              required: true,
              minlength: 3
            },
            last_name: {
              required: true,
              minlength: 3
            },
            email: {
              required: true,
              email: true
            },
            phone: {
                required: true,
                minlength: 14,
            },
            role: {
                required:false,
            },
            description: {
              required: false,
            }
        },
        messages: {
            first_name: {
                required: 'Please enter first name.',
                minlength: "Name should be at least 3 characters"
            },
            last_name: {
                required: 'Please enter last name.',
               
            },
            email: {
              required: 'Please enter email address.',
              email: 'Please enter a valid email address.',
            },
            phone: {
                required: "Please enter your phone number",
                minlength: "Phone number must be at least 10 digits long",
            },
            role : {
                required:"Please select role",
            },
            description: {
              required: 'Please enter description.'
            }
        },
        submitHandler: function (form,e) {
            e.preventDefault(); 
            var formData = $(form).serialize();

            $.ajax({
                type: 'POST',
                url: ajaxurl, // Use the AJAX URL provided by WordPress
                dataType: 'json',
                data: {
                    action: 'add_joinsageteam', // Replace with your AJAX action name
                    data: formData
                },
                success: function(response) {
                    // Handle the response from the server
                    console.log(response);
                    $("#joinsageteam")[0].reset();
                    // console.log(response.message);
                $('.successmessage').text('Join the fishy team successfully!').fadeIn().delay(3000).fadeOut();
                   
                }
            });

            // $.ajax({
            //     url: ajax_object.ajax_url,
            //     method: 'POST',
            //     data: {
            //         action: 'add_joinsageteam',
            //         data:formData
            //     },
            //     success: function(response) {
            //         console.log(response.status);
                    
            //     }
            // });
        }
    });

    $('#partnerForm').validate({
        rules: {
            name: {
              required: true,
              minlength: 3
            },
            phone: {
              required: true,
              minlength: 14,
            },
            email: {
              required: true,
              email: true,
            },
            website: {
              required: false,
            },
            business: {
              required: false,
            },
            fileurl: {
                required:false,
            }
        },
        messages: {
            name: {
                required: 'Please enter name.',
                minlength: "Name should be at least 3 characters"
            },
            phone: {
              required: 'Please enter phone number.',
              minlength:'Phone number must be at least 10 digits long',
            },
            email: {
              required: 'Please enter email address.',
              email: 'Please enter a valid email address.',
            },
            website: {
              required: 'Please enter website.'
            },
            business: {
              required: 'Please enter business.'
            },
            fileurl : {
                required : "Please upload image",
            }
        },
        submitHandler: function (form,e) {
            e.preventDefault(); 
            var formData = $(form).serialize();

            $.ajax({
                type: 'POST',
                url: ajaxurl,
                dataType: 'json',
                data: {
                    action: 'add_becomePartner',
                    data: formData
                },
                success: function(response) {
                    console.log(response);
                    $("#partnerForm")[0].reset();
                    $("#preview").removeClass("preview-main");
                    $('div#preview > img').remove();
                    $('.successmessage').text('Partner added successfully!').fadeIn().delay(3000).fadeOut();

                }
            });

            // $.ajax({
            //     url: ajax_object.ajax_url,
            //     method: 'POST',
            //     data: {
            //         action: 'add_joinsageteam',
            //         data:formData
            //     },
            //     success: function(response) {
            //         console.log(response.status);
                    
            //     }
            // });
        }
    });

    //
    $("#closeBtn").click(function(){
      $(".successmessage p").hide();
    });

    $('body').on('change', '#uploadFile', function() {
        $this = $(this);
        file_data = $(this).prop('files')[0];
        form_data = new FormData();
        form_data.append('file', file_data);
        form_data.append('action', 'file_upload');
        form_data.append('security', blog.security);
 
        $.ajax({
            url: ajaxurl,
            type: 'POST',
            contentType: false,
            processData: false,
            data: form_data,
            success: function (response) {
                $this.val('');
                //alert('File uploaded successfully.');
                $('#fileurl').val(response.cxc_image_url);
            }
        });
    });


    // scroll hide and show

    $('.navbar-nav li a').on('click', function() {
        $('.navbar-collapse').collapse('hide');
    });

    $(".navbar-toggler").click(function() {
        $("body").toggleClass("no-scroll");
    });

    $(".header-menu ul li a").click(function() {
        $("body").removeClass("no-scroll");
    });

    // scroll to add class js end

    function onScroll(event) {
        var scrollPos = $(document).scrollTop();
        $('#menu-center li.nav-item a.scrollTosection').each(function() {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            
            //console.table(refElement.position().top, scrollPos, refElement.position().top + refElement.height(), scrollPos);

            if (refElement.position().top - 50 <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('#menu-center li.nav-item a.scrollTosection').removeClass("active");
                currLink.addClass("active");
            } else {
                currLink.removeClass("active");
            }
        });
    }

    $(document).on("scroll", onScroll);

    //smoothscroll
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        $(document).off("scroll");

        $('a').each(function() {
            $(this).removeClass('active');
        })
        $(this).addClass('active');

        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 50
        }, 500, 'swing', function() {
            //window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });



});


$(window).on('load',function(){
    setTimeout(function(){ 
    $('.page-loader').fadeOut('slow');
    });
});

