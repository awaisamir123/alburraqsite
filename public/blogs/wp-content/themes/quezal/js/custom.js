function filter_me(t, e) {
    // jQuery(".bloader").show();
    jQuery.ajax({
        url: "http://al-burraq.com/wp-content/themes/quezal/potfolio_ajax.php",
        type: "POST",
        data: "action=" + t + "&page=" + e,
        success: function(t) {
            function e() {
                jQuery("#items").masonry()
            }
            t = t.split(":afterpagination:"), pagination = t[0],
                //console.log(pagination),
                jQuery(".pagination-folio-page").html(pagination),
                t = t[1],
                // jQuery("#items").masonry("destroy"),
                jQuery("#items").masonry().masonry('destroy'),
                // jQuery("#items").masonry().masonry('remove'),
                jQuery("#items").html(t), setTimeout(function() {
                e()
            }, 12e3)
            //     jQuery("#items").html(t);
            //     jQuery("#items").masonry();

        }
    })
}
jQuery(document).ready(function(t) {
    "use strict";

    function e(t) {
        n = "";
        for (var e = 0; e < t.length; e++) n += "<li>" + t[e] + "</li>"
    }
    t('[data-toggle="tooltip"]').tooltip({
        trigger: "hover"
    }), t(".woocommerce-ordering .orderby, #calc_shipping_country, #dropdown_product_cat").select2(), t(".recentpost-carousel").owlCarousel({
        transitionStyle: !1,
        navigation: !1,
        navigationText: !1,
        pagination: !0,
        slideSpeed: 300,
        paginationSpeed: 400,
        items: 1,
        singleItem: !0,
        theme: "tcsn-theme"
    }), t(".testimonial-carousel").owlCarousel({
        transitionStyle: "fade",
        navigation: !1,
        pagination: !1,
        slideSpeed: 100,
        paginationSpeed: 400,
        singleItem: !0,
        items: 1,
        autoPlay: 6e3,
        stopOnHover: !0,
        theme: "tcsn-theme",
        autoHeight: !0
    }), t("#take-me-top").click(function() {
        return t("body,html").animate({
            scrollTop: 0
        }, 500), !1
    }), t(".video-wrapper").fitVids(), t(".slide-panel-btn").click(function(e) {
        e.preventDefault(), t("#slide-top  .slide-top-inner").slideToggle(), t("#slide-top").toggleClass("active")
    }), t(".portfolio_wrapper").isotope({
        itemSelector: ".portfolio-item",
        layoutMode: "fitRows",
        resizable: !0
    }), t(function() {
        var e = t(".filter-content");
        e.imagesLoaded(function() {
            e.isotope({
                itemSelector: ".isotope-item",
                layoutMode: "fitRows"
            })
        }), t(".filter_nav li a").click(function() {
            t(".filter_nav li a").removeClass("active"), t(this).addClass("active");
            var o = t(this).attr("data-filter");
            return e.isotope({
                filter: o
            }), !1
        })
    }), t("#menu").slicknav({
        label: "",
        prependTo: "#responsive-menu"
    }), t("a[data-rel]").each(function() {
        t(this).attr("rel", t(this).data("rel"))
    }), t("a[rel^='prettyPhoto'],a[rel^='prettyPhoto[gallery]']").prettyPhoto({
        animation_speed: "fast",
        slideshow: 5e3,
        autoplay_slideshow: !1,
        opacity: .8,
        show_title: !0,
        theme: "pp_default",
        overlay_gallery: !1,
        social_tools: !1,
        changepicturecallback: function() {
            var e = t(".pp_default");
            parseInt(e.css("left")) < 0 && e.css("left", 0)
        }
    });
    var o = new Array,
        i = t("ul.list-sitemap");
    i.find("li").each(function() {
        o.push(t(this).html())
    });
    var a = o.splice(0, Math.round(o.length / 2)),
        l = o,
        n = "";
    e(a), i.html(n), e(l), i.after('<ul class="list-sitemap"></ul>').next().html(n), t("#rev_slider_1_1, .tp-bullets, .show-tool").mouseover(function() {
        t(".tp-bullets.tp-thumbs.round").addClass("show-tool")
    }), t("#rev_slider_1_1, .tp-bullets").mouseout(function() {
        t(".tp-bullets.tp-thumbs.round").removeClass("show-tool")
    })
});