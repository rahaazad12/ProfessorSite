/**
 *
 * Created by amirazad on 7/27/2016.
 */

!function (a, b) {
    "use strict";
    a.fn.chained = function (c) {
        return this.each(function () {
            function d() {
                var d = !0, g = a("option:selected", e).val();
                a(e).html(f.html());
                var h = "";
                a(c).each(function () {
                    var c = a("option:selected", this).val();
                    c && (h.length > 0 && (h += b.Zepto ? "\\\\" : "\\"), h += c)
                });
                var i;
                i = a.isArray(c) ? a(c[0]).first() : a(c).first();
                var j = a("option:selected", i).val();
                a("option", e).each(function () {
                    a(this).hasClass(h) && a(this).val() === g ? (a(this).prop("selected", !0), d = !1) : a(this).hasClass(h) || a(this).hasClass(j) || "" === a(this).val() || a(this).remove()
                }), 1 === a("option", e).size() && "" === a(e).val() ? a(e).prop("disabled", !0) : a(e).prop("disabled", !1), d && a(e).trigger("change")
            }

            var e = this, f = a(e).clone();
            a(c).each(function () {
                a(this).bind("change", function () {
                    d()
                }), a("option:selected", this).length || a("option", this).first().attr("selected", "selected"), d()
            })
        })
    }, a.fn.chainedTo = a.fn.chained, a.fn.chained.defaults = {}
}(window.jQuery || window.Zepto, window, document);
