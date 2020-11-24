$(document).ready(function() {
    function customPager() {
        $.each(this.owl.userItems, function (i) {
            var titleData = $(this).find('.uxgbanner__centerinfo');
            var paginationHtml = `<li class="uxgbanner__gotolist">
                                    <a class="uxgbanner__gotolink" href="javascript:void(0);" title="goto"></a>
                                </li>`;
            var paginationLinks = $('.owl-controls .owl-pagination .owl-page');
            $(paginationLinks[i]).append(titleData);
            $(paginationLinks[i]).append(paginationHtml);
        });
    }

    var carouselOptionObject = {
        items: 3,
        singleItem: false,
        slideSpeed : 200,
        paginationSpeed : 800,
        rewindSpeed : 1000,
        loop: true,
    
        //Autoplay
        autoPlay : false,
        stopOnHover : false,
    
        // Navigation
        navigation : true,
        
        //Pagination
        pagination : false,
        paginationNumbers: false,
        navigationText : false,
    
        // Responsive 
        responsive: true,
        responsiveRefreshRate : 200,
        responsiveBaseWidth: window,
        autoHeight: false
    };

    carouselOptionObject.items = 1;
    carouselOptionObject.singleItem = true;
    carouselOptionObject.autoPlay = true;
    carouselOptionObject.navigation = false;
    carouselOptionObject.pagination = true;
    carouselOptionObject.afterInit = customPager;
    carouselOptionObject.afterUpdate = customPager;
    carouselOptionObject.autoHeight = true;

    $("#uxgbanner-carousel").owlCarousel(carouselOptionObject);

    delete carouselOptionObject.items;
    delete carouselOptionObject.afterInit;
    delete carouselOptionObject.afterUpdate;
    carouselOptionObject.singleItem = false;
    carouselOptionObject.pagination = false;
    carouselOptionObject.autoHeight = false;
    $("#uxgbusiness-carousel").owlCarousel(carouselOptionObject);

    carouselOptionObject.items = 3;
    carouselOptionObject.singleItem = false;
    carouselOptionObject.autoPlay = false;
    carouselOptionObject.navigation = true;
    carouselOptionObject.pagination = false;
    carouselOptionObject.autoHeight = true;
    if($(window).width() <= 768) {
        carouselOptionObject.autoPlay = true;
    }
    var blogowl = $("#uxgblogs-carousel").owlCarousel(carouselOptionObject);

    carouselOptionObject.items = 1;
    carouselOptionObject.singleItem = false;
    carouselOptionObject.autoPlay = false;
    carouselOptionObject.navigation = false;
    carouselOptionObject.pagination = false;
    carouselOptionObject.autoHeight = false;
    var imagegalleryowl = $("#uxgmodal-carousel").owlCarousel(carouselOptionObject);

    carouselOptionObject.items = 1;
    carouselOptionObject.singleItem = false;
    carouselOptionObject.autoPlay = false;
    carouselOptionObject.navigation = false;
    carouselOptionObject.pagination = false;
    carouselOptionObject.autoHeight = false;
    var uxgoperationsowl1 = $("#uxgoperations-carousel1").owlCarousel(carouselOptionObject);
    var uxgoperationsowl2 = $("#uxgoperations-carousel2").owlCarousel(carouselOptionObject);
    
    $(".uxgoperations--prevarrow").click(function(){
        uxgoperationsowl1.trigger('owl.prev');
        uxgoperationsowl2.trigger('owl.prev');
    });

    $(".uxgoperations--nextarrow").click(function(){
        uxgoperationsowl1.trigger('owl.next');
        uxgoperationsowl2.trigger('owl.next');
    });
    
    $(".uxgquests__expandicon").click(function(){
        $(this).toggleClass("uxgquests--collapseicon")
        $(this).parents(".uxgquests__list").find(".uxgquests__answ").toggleClass("dis--none");
    });

    $(".uxgheader__menuicon").click(function(){
        $(".uxgheader__nav").slideToggle("fast");
        $(".uxgheader").toggleClass("uxgheader--mobilemenuactive");
    });

    if($(window).width() <= 768) {
        $(".uxgplan__blocklist:first-child").addClass("uxgplan--blocklistactive");
    }

    $(window).resize(function(){
        if($(window).width() <= 768) {
            $(".uxgplan__blocklist:first-child").addClass("uxgplan--blocklistactive");
        }
    });

    $(".uxgplan__blocklist").click(function(){
        if($(window).width() <= 768) {
            $(".uxgplan__blocklist").removeClass("uxgplan--blocklistactive");
            $(this).addClass("uxgplan--blocklistactive");
        }
    });

    $(".uxgmulexpns__tech").hide();
    $(this).addClass("uxgmulexpns--linkactive");
    $("#tech0").show();

    $(".uxgmulexpns__link").click(function(){
        var elementId = $(this).attr("dataparam");
        $(".uxgmulexpns__link").removeClass("uxgmulexpns--linkactive");
        $(this).addClass("uxgmulexpns--linkactive");
        $(".uxgmulexpns__tech").hide();
        $("#" + elementId).show();
    });

    $(".uxgplanbanner__categorylink").click(function(){
        var elementId = $(this).attr("dataparam");
        $(".uxgplanbanner__categorylink").removeClass("uxgplanbanner--catlinkactive");
        $(this).addClass("uxgplanbanner--catlinkactive");
        $(".uxgblogscat").hide();
        $("#" + elementId).show();
    });

    $(".uxgmulexpns__techheading").click(function(){
        var elementId = $(this).attr("dataparam");
        $(".uxgmulexpns__link").removeClass("uxgmulexpns--techexapnd");
        $(this).addClass("uxgmulexpns--techexapnd");
        $(".uxgmulexpns__tech").hide();
        $("#" + elementId).show();
    });

    $("button").click(function(){
        var datahref = $(this).attr("datahref");
        if (datahref) {
            window.location.href = datahref;
        }
    });

    $(".uxgblogs__prev").click(function(){
        blogowl.trigger('owl.prev');
    });

    $(".uxgblogs__next").click(function(){
        blogowl.trigger('owl.next');
    });

    $(".uxgmodal--prev").click(function(){
        imagegalleryowl.trigger('owl.prev');
    });

    $(".uxgmodal--next").click(function(){
        imagegalleryowl.trigger('owl.next');
    });

    $(".uxgcontactform__right input, .uxgcontactform__right textarea").each(function() {
        var placeholder = $(this).attr("placeholder");
        var labelHTML = '<span class="placeholderlabel">'+ placeholder +'</span>';
        $(this).parent('span').append(labelHTML);
    });

    $(".uxgcontactform__right input, .uxgcontactform__right textarea").each(function() {
        if ($(this).val()) {
            $(this).parent("span").addClass("focus--input");
        }
    });

    $(".uxgcontactform__right input, .uxgcontactform__right textarea").focus(function(){
        $(this).parent("span").addClass("focus--input");
        autoFill();
    });

    $(".uxgcontactform__right input, .uxgcontactform__right textarea").change(function(){
        autoFill();
    });
    
    $(".uxgcontactform__right input, .uxgcontactform__right textarea").blur(function(){
        if (!$(this).val()) {
            $(this).parent("span").removeClass("focus--input");
        }
        autoFill()
    });

    function autoFill () {
        var isIE = /*@cc_on!@*/false || !!document.documentMode;
        if (!isIE){
            var autofillElements = $('.uxgcontactform__right:-webkit-autofill').length;
            if (autofillElements) {
                $('.uxgcontactform__right:-webkit-autofill, .uxgcontactform__right textarea').each(function(){
                    $(this).parent("span").addClass("focus--input");
                });
            }            
        }
    }

    $(".placeholderlabel").click(function(){
        $(this).parent('span').find("input, textarea").focus();
    });

    $(".uxgculture__img, .uxgculture .btn").click(function(){
        $(".uxgmodal").show();
    });

    $(".uxgmodal__imageclose").click(function(){
        $(".uxgmodal").hide();
    });

    $(".uxgcost__left .btn.btn--white").click(function(){
        calculateCost();
    });

    calculateCost();

    function calculateCost(){
        if ($("#uxgcost-people").val() && $("#uxgcost-money").val()){
            var numberOfPeople = $("#uxgcost-people").val().toLowerCase().replace("people", "").trim();
            var cost = $("#uxgcost-money").val().replace("$", "").trim();
            numberOfPeople = parseInt(numberOfPeople);
            cost = parseInt(cost);
            var yearWorkingHours = 2080;
            var yearlyInsourceCost = yearWorkingHours * numberOfPeople * cost;
            var estimatedAnnualSaving = yearlyInsourceCost * 0.6;
            var yearlyOutsourceCost = yearlyInsourceCost * 0.4;
            $(".uxgcost--incostvalue").text("$" + formatNumber(yearlyInsourceCost));
            $(".uxgcost__estimationvalue").text(formatNumber(estimatedAnnualSaving));
            $(".uxgcost--outcostvalue").text("$" + formatNumber(yearlyOutsourceCost));
        }
    }

    function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    }

    $(".uxgheader__navbtn, .uxgcontactform__closeicon").click(function(){
        $(".uxgcontactform--pop").toggle();
    });

    var urlhashvalue = window.location.hash.split("#")[1];
    var formpopactionvalue = $(".uxgcontactform--pop form").attr("action").split("#")[1];
    var formpageactionvalue = $(".uxgcontactform--page form").attr("action").split("#")[1];
    if (urlhashvalue === formpopactionvalue) {
        $(".uxgcontactform--pop").show();
    }

    var successmsg = "Thank you for your message. It has been sent.";
    if ($(".screen-reader-response").is(":visible") && $(".screen-reader-response").text().trim() === successmsg) {
        if (urlhashvalue === formpopactionvalue) {
            $(".uxgcontactform--pop .uxgcontactform__inner").hide();
            $(".uxgcontactform--pop .uxgcontactform__successinner").show();
        } else if (urlhashvalue === formpageactionvalue) {
            $(".uxgcontactform--page .uxgcontactform__inner").hide();
            $(".uxgcontactform--pop .uxgcontactform__successinner").show();
        }
    }

    var heightList = [];
    $("#uxgblogs-carousel .uxgblogs__section").each(function(){
        heightList.push($(this).height());
        console.log(heightList);
    });
    var maxHeight = Math.max(...heightList);
    $("#uxgblogs-carousel .uxgblogs__section").css({height: maxHeight + 'px'});

    if($(window).width() <= 768) {
        $("#uxgmodal-carousel .owl-item").css({width: $(window).width()});
        $("#uxgmodal-carousel .owl-wrapper").css({width: ($(window).width() * 2 * $("#uxgmodal-carousel .owl-item").length)});
    }
});