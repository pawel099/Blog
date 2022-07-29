require('./bootstrap');
require('admin-lte');

$(document).ready(function () {
      $('.nav-item').click(function () {
        $('.sidebar-mini').removeClass('sidebar-open');
        $('.sidebar-mini').addClass('sidebar-closed sidebar-collapse');
      });
    });
	
	
	function activeFunc(){ $("li").removeClass("active current-page"); var currentSelectedli = $("a.router-link-exact-active").parent('li'); currentSelectedli.addClass("current-page"); currentSelectedli.siblings().removeClass("active current-page"); var parentLI =currentSelectedli.parent("ul").parent("li"); if(parentLI.length!=0){ parentLI.addClass("active"); } }