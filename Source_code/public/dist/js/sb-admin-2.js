/*!
 * Start Bootstrap - SB Admin 2 v3.3.7+1 (http://startbootstrap.com/template-overviews/sb-admin-2)
 * Copyright 2013-2016 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
 */
$(function() {
    $('#side-menu').metisMenu();
});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        var topOffset = 50;
        var width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        var height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    // var element = $('ul.nav a').filter(function() {
    //     return this.href == url;
    // }).addClass('active').parent().parent().addClass('in').parent();
    var element = $('ul.nav a').filter(function() {
        return this.href == url;
    }).addClass('active').parent();

    while (true) {
        if (element.is('li')) {
            element = element.parent().addClass('in').parent();
        } else {
            break;
        }
    }
});

////////////////////////////////////////////////////////////////////////////

//Delete product confirm
$(function () {
    $('.deleteProduct').confirm({
        title: 'Xác nhận!',
        content: 'Bạn có muốn xóa?',
        type: 'red',
        typeAnimated: true,
        buttons: {
            yes: {
                text: 'Có',
                btnClass: 'btn-red',
                action: function(){
                    location.href = this.$target.attr('href');
                }
            },
            no: {
                text: 'Không',
                action: function(){
                }
            }
        }
    });
});

//Admin : Order
$(function () {
    $("#edit_order_state").click(function (e) {
        e.preventDefault();
        $("#toggle_edit_order_state").slideToggle("slow");
    });
});

//CKEditor
$(function () {
    CKEDITOR.replace('short_description');
});
$(function () {
    var full_description_editor=CKEDITOR.replace('full_description');
    CKFinder.setupCKEditor( full_description_editor );
});
$(function () {
    var content_editor = CKEDITOR.replace('content');
    CKFinder.setupCKEditor(content_editor);
});
