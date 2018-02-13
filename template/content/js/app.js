$("body").vegas({
	    slides: [
	        { src: "/template/content/img/bg6.jpg" },
	        { src: "/template/content/img/bg2.jpg" },
	        { src: "/template/content/img/bg3.jpg" },
	        { src: "/template/content/img/bg4.jpg" }
	    ],
	    transition: [ 'fade' ],
	    delay: 5000,
	    timer: false,
	});

$('.gallery-box').each(function(){
	var srcBg = $(this).attr('bg');
	$(this).attr('style','background: url("'+srcBg+'"); background-size: cover; height: 250px; width:100%; margin: 10px auto;');
});

$(".c-hamburger--htx").click(function(){
	$(".c-hamburger").toggleClass('is-active');
});

	var restaurant = $('#restaurant').attr('href');
	var contacts = $('#contacts').attr('href');
	$('#restaurant').attr('href','#').attr('data-target', '.bs-example-modal-lg').attr('data-toggle', 'modal');
	$('#contacts').attr('href','#').attr('data-target', '.bs-example-modal-lg').attr('data-toggle', 'modal');
	$('#restaurant').click(function(){
		$.ajax({
		  url: restaurant,
		  success: function(data){
		   $(".modal-body").html(data);
		  }
		});
	});
	$('#contacts').click(function(){
		$.ajax({
		  url: contacts,
		  success: function(data){
		   $(".modal-body").html(data);
		  }
		});
	});
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("mySidenav").style.width = "260px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
$('.add-to-cart').click(function(){
	var link = $(this).attr('data-link');
	$.post(link, {}, function(data){
		$('#cart-count').html(data);
	});
	return false;
});
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};






