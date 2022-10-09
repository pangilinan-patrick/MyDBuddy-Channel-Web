var ctr_dashboard,ctr_d=0 ,ctr_newsevents,ctr_n=0;


(function($) {

  var app = $.sammy('#stage', function() {
    this.use('Template');



    /*
    this.around(function(callback) {
      var context = this;
      this.load('data/articles.json')
          .then(function(items) {
            context.items = items;
          })
          .then(callback);
    });
    */

    this.get('#/', function(context) {
      context.app.swap('');
      $.each(this.items, function(i, item) {
        context.render('modules/dashboard/dashboard.php', {id: i, item: item})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_dashboard").addClass("navigation__active");
               ctr_dashboard=ctr_d++;
                $('.flatpickr-calendar').hide();
      });
    });

    this.get('#/dashboard', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/dashboard/dashboard.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_dashboard").addClass("navigation__active");
               ctr_dashboard=ctr_d++;
                $('.flatpickr-calendar').hide();
    });

    this.get('#/newsandevents', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/newsandevents/newsandevents.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_newsandevents").addClass("navigation__active");
               ctr_newsevents=ctr_n++;
               $('.flatpickr-calendar').hide();
    });

    this.get('#/announcements', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/announcements/announcements.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_announcements").addClass("navigation__active");
    });



    this.get('#/calendar', function(context) {
       $('.flatpickr-calendar').show();
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/calendar/index.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_calendar").addClass("navigation__active");
    });

    this.get('#/announcementsbeta', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/announcements_beta/index.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_announcements").addClass("navigation__active");
    });

    this.get('#/search', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/search/search.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_announcements").addClass("navigation__active");
                $('.flatpickr-calendar').hide();
    });

    this.get('#/notifications', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/notifications/notifications.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_notifications").addClass("navigation__active");
    });

    this.get('#/messages', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/messages/messages.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_messages").addClass("navigation__active");
    });

    this.get('#/digitalservices', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/digitalservices/digitalservices.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_digitalservices").addClass("navigation__active");
                $('.flatpickr-calendar').hide();
    });

    this.get('#/appraisals', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/appraisals/index.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_digitalservices").addClass("navigation__active");
    });

    this.get('#/myprofile', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/myprofile/index.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_digitalservices").addClass("navigation__active");
    });

    this.get('#/personalinfo', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/personalinfo/index.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_digitalservices").addClass("navigation__active");
                $('.flatpickr-calendar').hide();
    });

    this.get('#/settings', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/settings/index.php', {})
               .appendTo(context.$element());
               //$(".navigation").find("li#nav_digitalservices").addClass("navigation__active");
               $(".navigation").find("li#nav_addstudent").addClass("navigation__active");
    });

    this.get('#/portal_and_canvas_password', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/portal_and_canvas_password/index.php', {})
               .appendTo(context.$element());
               //$(".navigation").find("li#nav_digitalservices").addClass("navigation__active");
               $(".navigation").find("li#nav_portal_and_canvas_password").addClass("navigation__active");
    });

    this.get('#/studentbadges', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/studentbadges/index.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_digitalservices").addClass("navigation__active");
                $('.flatpickr-calendar').hide();
    });


    this.get('#/badges', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/badges/index.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_digitalservices").addClass("navigation__active");
                $('.flatpickr-calendar').hide();
    });


    this.get('#/digitalservices/:id', function(context) {
      context.app.swap('');
      context.render('modules/'+this.params['id'].replace(":", "")+'/index.php', {})
             .appendTo(context.$element());
             $(".navigation").find("li#nav_digitalservices").addClass("navigation__active");
              $('.flatpickr-calendar').hide();
    });

    this.get('#/people/:id', function(context) {
      context.app.swap('');
      context.render('modules/people/index.php?email='+this.params['id'].replace(":", ""), {})
             .appendTo(context.$element());
             $(".navigation").find("li#nav_digitalservices").addClass("navigation__active");
              $('.flatpickr-calendar').hide();
    });

    this.get('#/digitalservices/:id/:pageid', function(context) {
      context.app.swap('');
      context.render('modules/'+this.params['id'].replace(":", "")+'/'+this.params['pageid'].replace(":", "")+'.php', {})
             .appendTo(context.$element());
             $(".navigation").find("li#nav_digitalservices").addClass("navigation__active");
              $('.flatpickr-calendar').hide();
    });

    this.get('#/digitalservices/:id/:pageid/:param', function(context) {
      context.app.swap('');
      context.render('modules/'+this.params['id'].replace(":", "")+'/'+this.params['pageid'].replace(":", "")+'.php?param='+this.params['param'].replace(":", ""), {})
             .appendTo(context.$element());
             $(".navigation").find("li#nav_digitalservices").addClass("navigation__active");
              $('.flatpickr-calendar').hide();
    });

    this.get('#/newsandevents/:id', function(context) {
      context.app.swap('');
      context.render('modules/newsandevents/request_handler.php?id='+this.params['id'].replace(":", ""), {})
             .appendTo(context.$element());
             $(".navigation").find("li#nav_newsandevents").addClass("navigation__active");
              $('.flatpickr-calendar').hide();
    });


    this.get('/#/directory', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/directory/index.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_directory").addClass("navigation__active");
    });

    this.get('/#/datatable', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/datatable/index.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_directory").addClass("navigation__active");
    });

    this.get('/#/calendar/', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/calendar/index.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_directory").addClass("navigation__active");
    });

    this.get('/#/drive', function(context) {
        var str=location.href.toLowerCase();
        context.app.swap('');
        context.render('modules/drive/index.php', {})
               .appendTo(context.$element());
               $(".navigation").find("li#nav_directory").addClass("navigation__active");
                $('.flatpickr-calendar').hide();
    });

    this.before('.*', function() {
        var hash = document.location.hash;
        var navid = hash.replace("#", "").replace("/", "").replace("/", "");
        $(".navigation").find("li").removeClass("navigation__active");
        $('body').css({"overflow":""});
   });




  });



  $(function() {
    //alert(ctr_dashboard);
    // app.run('#/dashboard');
    app.run('/#/digitalservices');
  //  ctr_dashboard=ctr_d++;
  });

})(jQuery);
