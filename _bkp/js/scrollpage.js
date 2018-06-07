var theWidth;
var theHeight;
var currentContent = 0;

$(window).resize(function () {
    sizeContent();
});

$(window).ready(function () {
    sizeContent();
});

function sizeContent() {
    theWidth = $(window).width();
    theHeight = $(window).height();
    sizeContentItems();
    setLeftOnContentItems();
    sizeContentWrapper(theWidth, theHeight);
    moveContent(currentContent, theHeight);
    changeSelected(currentContent);
}

function sizeContentItems() {
    $(".contentItem").css('width', theWidth);
    $(".contentItem").css('height', theHeight);
}

function setLeftOnContentItems() {
    var contentCount = 0;
    $(".contentItem").each(function (i) {
        contentCount += i;
        $(this).css('top', i * theHeight);
    });
}

function sizeContentWrapper(width, height) {
    $("#contentWrapper").css('width', width);
    $("#contentWrapper").css('height', height);
}

function moveContent(i, height) {
    $("#contentWrapper").scrollTop(i * height);
}

function changeSelected(i) {
    $(".selected").removeClass("selected");
    $("li.navig:eq(" + i + ") a").addClass("selected");
}

function scrollContentNext() {
    scrollContent(currentContent + 1);
}

function scrollContent(i) {
    i = checkMax(i);
    changeSelected(i)
    currentContent = i;
	
	setTimeout(function() {					
				$("#contentWrapper").animate({ scrollTop: i * theHeight }, 500);
			  }, 500);
	
	//$("#contentWrapper").animate({ scrollTop: i * theHeight }, 500);
	
	//$("#contentWrapper").animate({opacity: '0'}, 1000);
//	
//	setTimeout(function() {					
//				$("#contentWrapper").animate({ scrollTop: i * theHeight }, 500);
//			  }, 500);
//			  
//	setTimeout(function() {					
//				$("#contentWrapper").animate({opacity: '1'}, 500);
//			  }, 5000);
}
function checkMax(i) {
    var maxItems = $("#menu ul li a").length;
    if (i >= maxItems) {
        return 0;
    }
    return i;
}