! function(a) {
    a(document).ready(function() {
        function b(b, c) {
            var d = a(this).data("id"),
                e = a(this).data("type"),
                f = a(this).parent();
            a.ajax({
                type: "POST",
                dataType: "json",
                context: f,
                data: "action=starstruck_action&nonce=" + ss_l18n.nonce + "&score=" + b + "&id=" + d + "&type=" + e,
                url: ss_l18n.url,
                error: function(a, b, c) {
                    1 == ss_l18n.enable_debug && (console.log(arguments), alert("Error: " + c + " - " + b + " - " + a.status))
                },
                success: function(b) {
                    1 == ss_l18n.enable_debug && console.log(b), a(".rating-count", this).html(b.votes).fadeIn("slow"), a(".rating-value", this).html(b.avg).fadeIn("slow"),a(".dt_rating_vgs", this).html(b.avg).fadeIn("slow"), a(".rating-yours", this).html(b.user_vote).fadeIn("slow"), a(".rating-text", this).html(b.vote_text).fadeIn("slow")
                }
            }), a(this).fadeOut(function() {
                a(this).fadeIn()
            })
        }
        var c = ss_l18n.require_login ? !0 : !1,
            d = ss_l18n.enable_half_stars ? !0 : !1;
        if (a(".starstruck-main").raty({
                starType: "i",
                score: function() {
                    return a(this).data("rating")
                },
                readOnly: c,
                click: b,
                half: d,
                halfShow: d
            }), a(".starstruck-read-only").raty({
                starType: "i",
                score: function() {
                    return a(this).data("rating")
                },
                readOnly: !0,
                half: d,
                halfShow: d
            }), "jquery" === ss_l18n.tax_output && a(".starstruck-tax").length) {
            var e = a(".starstruck-tax.wp_footer > div");
            a(ss_l18n.tax_selector).after(e), a(e).show()
        }
        a(".starstruck").length && a("body").addClass("starstrucked")
    })
}(jQuery);