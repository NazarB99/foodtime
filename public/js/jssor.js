!function (g, j, c, f, d, k, h) {
    new (function () {
    });
    var e = {
        af: function (a) {
            return -c.cos(a * c.PI) / 2 + .5
        }, Kb: function (a) {
            return a
        }, bf: function (a) {
            return a * a
        }, Vc: function (a) {
            return -a * (a - 2)
        }, cf: function (a) {
            return (a *= 2) < 1 ? 1 / 2 * a * a : -1 / 2 * (--a * (a - 2) - 1)
        }, df: function (a) {
            return a * a * a
        }, ef: function (a) {
            return (a -= 1) * a * a + 1
        }, ff: function (a) {
            return (a *= 2) < 1 ? 1 / 2 * a * a * a : 1 / 2 * ((a -= 2) * a * a + 2)
        }, gf: function (a) {
            return a * a * a * a
        }, hf: function (a) {
            return -((a -= 1) * a * a * a - 1)
        }, jf: function (a) {
            return (a *= 2) < 1 ? 1 / 2 * a * a * a * a : -1 / 2 * ((a -= 2) * a * a * a - 2)
        }, kf: function (a) {
            return a * a * a * a * a
        }, yd: function (a) {
            return (a -= 1) * a * a * a * a + 1
        }, lf: function (a) {
            return (a *= 2) < 1 ? 1 / 2 * a * a * a * a * a : 1 / 2 * ((a -= 2) * a * a * a * a + 2)
        }, mf: function (a) {
            return 1 - c.cos(c.PI / 2 * a)
        }, nf: function (a) {
            return c.sin(c.PI / 2 * a)
        }, of: function (a) {
            return -1 / 2 * (c.cos(c.PI * a) - 1)
        }, Qe: function (a) {
            return a == 0 ? 0 : c.pow(2, 10 * (a - 1))
        }, Pe: function (a) {
            return a == 1 ? 1 : -c.pow(2, -10 * a) + 1
        }, Oe: function (a) {
            return a == 0 || a == 1 ? a : (a *= 2) < 1 ? 1 / 2 * c.pow(2, 10 * (a - 1)) : 1 / 2 * (-c.pow(2, -10 * --a) + 2)
        }, Be: function (a) {
            return -(c.sqrt(1 - a * a) - 1)
        }, re: function (a) {
            return c.sqrt(1 - (a -= 1) * a)
        }, se: function (a) {
            return (a *= 2) < 1 ? -1 / 2 * (c.sqrt(1 - a * a) - 1) : 1 / 2 * (c.sqrt(1 - (a -= 2) * a) + 1)
        }, te: function (a) {
            if (!a || a == 1) return a;
            var b = .3, d = .075;
            return -(c.pow(2, 10 * (a -= 1)) * c.sin((a - d) * 2 * c.PI / b))
        }, ue: function (a) {
            if (!a || a == 1) return a;
            var b = .3, d = .075;
            return c.pow(2, -10 * a) * c.sin((a - d) * 2 * c.PI / b) + 1
        }, ve: function (a) {
            if (!a || a == 1) return a;
            var b = .45, d = .1125;
            return (a *= 2) < 1 ? -.5 * c.pow(2, 10 * (a -= 1)) * c.sin((a - d) * 2 * c.PI / b) : c.pow(2, -10 * (a -= 1)) * c.sin((a - d) * 2 * c.PI / b) * .5 + 1
        }, we: function (a) {
            var b = 1.70158;
            return a * a * ((b + 1) * a - b)
        }, xe: function (a) {
            var b = 1.70158;
            return (a -= 1) * a * ((b + 1) * a + b) + 1
        }, ye: function (a) {
            var b = 1.70158;
            return (a *= 2) < 1 ? 1 / 2 * a * a * (((b *= 1.525) + 1) * a - b) : 1 / 2 * ((a -= 2) * a * (((b *= 1.525) + 1) * a + b) + 2)
        }, zd: function (a) {
            return 1 - e.cc(1 - a)
        }, cc: function (a) {
            return a < 1 / 2.75 ? 7.5625 * a * a : a < 2 / 2.75 ? 7.5625 * (a -= 1.5 / 2.75) * a + .75 : a < 2.5 / 2.75 ? 7.5625 * (a -= 2.25 / 2.75) * a + .9375 : 7.5625 * (a -= 2.625 / 2.75) * a + .984375
        }, ze: function (a) {
            return a < 1 / 2 ? e.zd(a * 2) * .5 : e.cc(a * 2 - 1) * .5 + .5
        }, Ae: c.ceil, Ce: c.floor
    };
    var b = new function () {
        var i = this, Ab = /\S+/g, I = 1, bb = 2, eb = 3, db = 4, hb = 5, J, s = 0, l = 0, t = 0, X = 0, A = 0,
            L = navigator, mb = L.appName, o = L.userAgent, p = parseFloat;

        function Ib() {
            if (!J) {
                J = {Yf: "ontouchstart" in g || "createTouch" in j};
                var a;
                if (L.pointerEnabled || (a = L.msPointerEnabled)) J.md = a ? "msTouchAction" : "touchAction"
            }
            return J
        }

        function w(h) {
            if (!s) {
                s = -1;
                if (mb == "Microsoft Internet Explorer" && !!g.attachEvent && !!g.ActiveXObject) {
                    var e = o.indexOf("MSIE");
                    s = I;
                    t = p(o.substring(e + 5, o.indexOf(";", e)));
                    /*@cc_on X=@_jscript_version@*/
                    ;
                    l = j.documentMode || t
                } else if (mb == "Netscape" && !!g.addEventListener) {
                    var d = o.indexOf("Firefox"), b = o.indexOf("Safari"), f = o.indexOf("Chrome"),
                        c = o.indexOf("AppleWebKit");
                    if (d >= 0) {
                        s = bb;
                        l = p(o.substring(d + 8))
                    } else if (b >= 0) {
                        var i = o.substring(0, b).lastIndexOf("/");
                        s = f >= 0 ? db : eb;
                        l = p(o.substring(i + 1, b))
                    } else {
                        var a = /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);
                        if (a) {
                            s = I;
                            l = t = p(a[1])
                        }
                    }
                    if (c >= 0) A = p(o.substring(c + 12))
                } else {
                    var a = /(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);
                    if (a) {
                        s = hb;
                        l = p(a[2])
                    }
                }
            }
            return h == s
        }

        function q() {
            return w(I)
        }

        function yb() {
            return q() && (l < 6 || j.compatMode == "BackCompat")
        }

        function Bb() {
            return w(bb)
        }

        function cb() {
            return w(eb)
        }

        function gb() {
            return w(hb)
        }

        function ub() {
            return cb() && A > 534 && A < 535
        }

        function M() {
            w();
            return A > 537 || l > 42 || s == I && l >= 11
        }

        function wb() {
            return q() && l < 9
        }

        function vb(a) {
            var b, c;
            return function (f) {
                if (!b) {
                    b = d;
                    var e = a.substr(0, 1).toUpperCase() + a.substr(1);
                    n([a].concat(["WebKit", "ms", "Moz", "O", "webkit"]), function (g, d) {
                        var b = a;
                        if (d) b = g + e;
                        if (f.style[b] != h) return c = b
                    })
                }
                return c
            }
        }

        function tb(b) {
            var a;
            return function (c) {
                a = a || vb(b)(c) || b;
                return a
            }
        }

        var N = tb("transform");

        function lb(a) {
            return {}.toString.call(a)
        }

        var ib = {};
        n(["Boolean", "Number", "String", "Function", "Array", "Date", "RegExp", "Object"], function (a) {
            ib["[object " + a + "]"] = a.toLowerCase()
        });

        function n(b, d) {
            var a, c;
            if (lb(b) == "[object Array]") {
                for (a = 0; a < b.length; a++) if (c = d(b[a], a, b)) return c
            } else for (a in b) if (c = d(b[a], a, b)) return c
        }

        function E(a) {
            return a == f ? String(a) : ib[lb(a)] || "object"
        }

        function jb(a) {
            for (var b in a) return d
        }

        function B(a) {
            try {
                return E(a) == "object" && !a.nodeType && a != a.window && (!a.constructor || {}.hasOwnProperty.call(a.constructor.prototype, "isPrototypeOf"))
            } catch (b) {
            }
        }

        function v(a, b) {
            return {x: a, y: b}
        }

        function qb(b, a) {
            setTimeout(b, a || 0)
        }

        function K(b, d, c) {
            var a = !b || b == "inherit" ? "" : b;
            n(d, function (c) {
                var b = c.exec(a);
                if (b) {
                    var d = a.substr(0, b.index), e = a.substr(b.index + b[0].length + 1, a.length - 1);
                    a = d + e
                }
            });
            a && (c += (!a.indexOf(" ") ? "" : " ") + a);
            return c
        }

        function sb(b, a) {
            if (l < 9) b.style.filter = a
        }

        function nb(a, b) {
            if (a === h) a = b;
            return a
        }

        i.Zf = Ib;
        i.wd = q;
        i.ag = yb;
        i.bg = Bb;
        i.cg = cb;
        i.Xf = M;
        vb("transform");
        i.hd = function () {
            return l
        };
        i.nd = function () {
            return t || l
        };
        i.pd = qb;
        i.H = nb;
        i.tf = function (a, b) {
            b.call(a);
            return D({}, a)
        };

        function W(a) {
            a.constructor === W.caller && a.Nb && a.Nb.apply(a, W.caller.arguments)
        }

        i.Nb = W;
        i.ob = function (a) {
            if (i.uf(a)) a = j.getElementById(a);
            return a
        };

        function u(a) {
            return a || g.event
        }

        i.tc = function (b) {
            b = u(b);
            var a = b.target || b.srcElement || j;
            if (a.nodeType == 3) a = i.ic(a);
            return a
        };
        i.sd = function (a) {
            a = u(a);
            return {x: a.pageX || a.clientX || 0, y: a.pageY || a.clientY || 0}
        };

        function x(c, d, a) {
            if (a !== h) c.style[d] = a == h ? "" : a; else {
                var b = c.currentStyle || c.style;
                a = b[d];
                if (a == "" && g.getComputedStyle) {
                    b = c.ownerDocument.defaultView.getComputedStyle(c, f);
                    b && (a = b.getPropertyValue(d) || b[d])
                }
                return a
            }
        }

        function Z(b, c, a, d) {
            if (a === h) {
                a = p(x(b, c));
                isNaN(a) && (a = f);
                return a
            }
            if (a == f) a = ""; else d && (a += "px");
            x(b, c, a)
        }

        function m(c, a) {
            var d = a ? Z : x, b;
            if (a & 4) b = tb(c);
            return function (e, f) {
                return d(e, b ? b(e) : c, f, a & 2)
            }
        }

        function Db(b) {
            if (q() && t < 9) {
                var a = /opacity=([^)]*)/.exec(b.style.filter || "");
                return a ? p(a[1]) / 100 : 1
            } else return p(b.style.opacity || "1")
        }

        function Fb(b, a, f) {
            if (q() && t < 9) {
                var h = b.style.filter || "", i = new RegExp(/[\s]*alpha\([^\)]*\)/g), e = c.round(100 * a), d = "";
                if (e < 100 || f) d = "alpha(opacity=" + e + ") ";
                var g = K(h, [i], d);
                sb(b, g)
            } else b.style.opacity = a == 1 ? "" : c.round(a * 100) / 100
        }

        var O = {J: ["rotate"], bb: ["rotateX"], W: ["rotateY"], Jb: ["skewX"], Ib: ["skewY"]};
        if (!M()) O = D(O, {A: ["scaleX", 2], z: ["scaleY", 2], Y: ["translateZ", 1]});

        function P(d, a) {
            var c = "";
            if (a) {
                if (q() && l && l < 10) {
                    delete a.bb;
                    delete a.W;
                    delete a.Y
                }
                b.c(a, function (d, b) {
                    var a = O[b];
                    if (a) {
                        var e = a[1] || 0;
                        if (Q[b] != d) c += " " + a[0] + "(" + d + (["deg", "px", ""])[e] + ")"
                    }
                });
                if (M()) {
                    if (a.gb || a.hb || a.Y != h) c += " translate3d(" + (a.gb || 0) + "px," + (a.hb || 0) + "px," + (a.Y || 0) + "px)";
                    if (a.A == h) a.A = 1;
                    if (a.z == h) a.z = 1;
                    if (a.A != 1 || a.z != 1) c += " scale3d(" + a.A + ", " + a.z + ", 1)"
                }
            }
            d.style[N(d)] = c
        }

        i.Tf = m("transformOrigin", 4);
        i.xf = m("backfaceVisibility", 4);
        i.yf = m("transformStyle", 4);
        i.zf = m("perspective", 6);
        i.Af = m("perspectiveOrigin", 4);
        i.Bf = function (b, a) {
            if (q() && t < 9 || t < 10 && yb()) b.style.zoom = a == 1 ? "" : a; else {
                var c = N(b), f = a == 1 ? "" : "scale(" + a + ")", e = b.style[c],
                    g = new RegExp(/[\s]*scale\(.*?\)/g), d = K(e, [g], f);
                b.style[c] = d
            }
        };
        i.a = function (a, d, b, c) {
            a = i.ob(a);
            if (a.addEventListener) {
                d == "mousewheel" && a.addEventListener("DOMMouseScroll", b, c);
                a.addEventListener(d, b, c)
            } else if (a.attachEvent) {
                a.attachEvent("on" + d, b);
                c && a.setCapture && a.setCapture()
            }
        };
        i.P = function (a, c, d, b) {
            a = i.ob(a);
            if (a.removeEventListener) {
                c == "mousewheel" && a.removeEventListener("DOMMouseScroll", d, b);
                a.removeEventListener(c, d, b)
            } else if (a.detachEvent) {
                a.detachEvent("on" + c, d);
                b && a.releaseCapture && a.releaseCapture()
            }
        };
        i.Tb = function (a) {
            a = u(a);
            a.preventDefault && a.preventDefault();
            a.cancel = d;
            a.returnValue = k
        };
        i.Df = function (a) {
            a = u(a);
            a.stopPropagation && a.stopPropagation();
            a.cancelBubble = d
        };
        i.L = function (d, c) {
            var a = [].slice.call(arguments, 2), b = function () {
                var b = a.concat([].slice.call(arguments, 0));
                return c.apply(d, b)
            };
            return b
        };
        i.Ef = function (a, b) {
            if (b == h) return a.textContent || a.innerText;
            var c = j.createTextNode(b);
            i.qc(a);
            a.appendChild(c)
        };
        i.tb = function (d, c) {
            for (var b = [], a = d.firstChild; a; a = a.nextSibling) (c || a.nodeType == 1) && b.push(a);
            return b
        };

        function kb(a, c, e, b) {
            b = b || "u";
            for (a = a ? a.firstChild : f; a; a = a.nextSibling) if (a.nodeType == 1) {
                if (H(a, b) == c) return a;
                if (!e) {
                    var d = kb(a, c, e, b);
                    if (d) return d
                }
            }
        }

        i.rc = kb;

        function U(a, d, g, b) {
            b = b || "u";
            var c = [];
            for (a = a ? a.firstChild : f; a; a = a.nextSibling) if (a.nodeType == 1) {
                H(a, b) == d && c.push(a);
                if (!g) {
                    var e = U(a, d, g, b);
                    if (e.length) c = c.concat(e)
                }
            }
            return c
        }

        function fb(a, c, d) {
            for (a = a ? a.firstChild : f; a; a = a.nextSibling) if (a.nodeType == 1) {
                if (a.tagName == c) return a;
                if (!d) {
                    var b = fb(a, c, d);
                    if (b) return b
                }
            }
        }

        i.Lf = fb;
        i.Mf = function (b, a) {
            return b.getElementsByTagName(a)
        };
        i.Bb = function (a, f, d) {
            d = d || "u";
            var e;
            do {
                if (a.nodeType == 1) {
                    var c = b.m(a, d);
                    if (c && c == nb(f, c)) {
                        e = a;
                        break
                    }
                }
                a = b.ic(a)
            } while (a && a != j.body);
            return e
        };

        function D() {
            var e = arguments, d, c, b, a, g = 1 & e[0], f = 1 + g;
            d = e[f - 1] || {};
            for (; f < e.length; f++) if (c = e[f]) for (b in c) {
                a = c[b];
                if (a !== h) {
                    a = c[b];
                    var i = d[b];
                    d[b] = g && (B(i) || B(a)) ? D(g, {}, i, a) : a
                }
            }
            return d
        }

        i.M = D;

        function Y(f, g) {
            var d = {}, c, a, b;
            for (c in f) {
                a = f[c];
                b = g[c];
                if (a !== b) {
                    var e;
                    if (B(a) && B(b)) {
                        a = Y(a, b);
                        e = !jb(a)
                    }
                    !e && (d[c] = a)
                }
            }
            return d
        }

        i.Pc = function (a) {
            return E(a) == "function"
        };
        i.uf = function (a) {
            return E(a) == "string"
        };
        i.sc = function (a) {
            return !isNaN(p(a)) && isFinite(a)
        };
        i.c = n;
        i.Xe = B;

        function S(a) {
            return j.createElement(a)
        }

        i.uc = function () {
            return S("DIV")
        };
        i.Of = function () {
            return S("SPAN")
        };
        i.Wc = function () {
        };

        function C(b, c, a) {
            if (a == h) return b.getAttribute(c);
            b.setAttribute(c, a)
        }

        function H(a, b) {
            return C(a, b) || C(a, "data-" + b)
        }

        i.B = C;
        i.m = H;
        i.N = function (d, b, c) {
            var a = i.pe(H(d, b));
            if (isNaN(a)) a = c;
            return a
        };

        function y(b, a) {
            return C(b, "class", a) || ""
        }

        function pb(b) {
            var a = {};
            n(b, function (b) {
                if (b != h) a[b] = b
            });
            return a
        }

        function rb(b, a) {
            return b.match(a || Ab)
        }

        function R(b, a) {
            return pb(rb(b || "", a))
        }

        i.Gc = pb;
        i.Pf = rb;

        function ab(b, c) {
            var a = "";
            n(c, function (c) {
                a && (a += b);
                a += c
            });
            return a
        }

        function F(a, c, b) {
            y(a, ab(" ", D(Y(R(y(a)), R(c)), R(b))))
        }

        i.ic = function (a) {
            return a.parentNode
        };
        i.S = function (a) {
            i.yb(a, "none")
        };
        i.Q = function (a, b) {
            i.yb(a, b ? "none" : "")
        };
        i.Qf = function (b, a) {
            b.removeAttribute(a)
        };
        i.qe = function (d, a) {
            if (a) d.style.clip = "rect(" + c.round(a.i || a.u || 0) + "px " + c.round(a.l) + "px " + c.round(a.k) + "px " + c.round(a.g || a.q || 0) + "px)"; else if (a !== h) {
                var g = d.style.cssText,
                    f = [new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i), new RegExp(/[\s]*cliptop: .*?[;]?/i), new RegExp(/[\s]*clipright: .*?[;]?/i), new RegExp(/[\s]*clipbottom: .*?[;]?/i), new RegExp(/[\s]*clipleft: .*?[;]?/i)],
                    e = K(g, f, "");
                b.bd(d, e)
            }
        };
        i.U = function () {
            return +new Date
        };
        i.cb = function (b, a) {
            b.appendChild(a)
        };
        i.Ab = function (b, a, c) {
            (c || a.parentNode).insertBefore(b, a)
        };
        i.Wb = function (b, a) {
            a = a || b.parentNode;
            a && a.removeChild(b)
        };
        i.Ge = function (a, b) {
            n(a, function (a) {
                i.Wb(a, b)
            })
        };
        i.qc = function (a) {
            i.Ge(i.tb(a, d), a)
        };
        i.Nc = function (a, b) {
            var c = i.ic(a);
            b & 1 && i.E(a, (i.n(c) - i.n(a)) / 2);
            b & 2 && i.C(a, (i.p(c) - i.p(a)) / 2)
        };
        var T = {i: f, l: f, k: f, g: f, G: f, D: f};
        i.Kd = function (a) {
            var b = i.uc();
            r(b, {Pb: "block", R: i.zb(a), i: 0, g: 0, G: 0, D: 0});
            var d = i.Zc(a, T);
            i.Ab(b, a);
            i.cb(b, a);
            var e = i.Zc(a, T), c = {};
            n(d, function (b, a) {
                if (b == e[a]) c[a] = b
            });
            r(b, T);
            r(b, c);
            r(a, {i: 0, g: 0});
            return c
        };
        i.pe = p;

        function V(d, c, b) {
            var a = d.cloneNode(!c);
            !b && i.Qf(a, "id");
            return a
        }

        i.xb = V;
        i.wb = function (e, f) {
            var a = new Image;

            function b(e, d) {
                i.P(a, "load", b);
                i.P(a, "abort", c);
                i.P(a, "error", c);
                f && f(a, d)
            }

            function c(a) {
                b(a, d)
            }

            if (gb() && l < 11.6 || !e) b(!e); else {
                i.a(a, "load", b);
                i.a(a, "abort", c);
                i.a(a, "error", c);
                a.src = e
            }
        };
        i.je = function (d, a, e) {
            var c = d.length + 1;

            function b(b) {
                c--;
                if (a && b && b.src == a.src) a = b;
                !c && e && e(a)
            }

            n(d, function (a) {
                i.wb(a.src, b)
            });
            b()
        };
        i.fe = function (a, g, i, h) {
            if (h) a = V(a);
            var c = U(a, g);
            if (!c.length) c = b.Mf(a, g);
            for (var f = c.length - 1; f > -1; f--) {
                var d = c[f], e = V(i);
                y(e, y(d));
                b.bd(e, d.style.cssText);
                b.Ab(e, d);
                b.Wb(d)
            }
            return a
        };

        function Gb(a) {
            var l = this, p = "", r = ["av", "pv", "ds", "dn"], d = [], q, k = 0, f = 0, e = 0;

            function g() {
                F(a, q, (d[e || f & 2 || f] || "") + " " + (d[k] || ""));
                b.ib(a, "pointer-events", e ? "none" : "")
            }

            function c() {
                k = 0;
                g();
                i.P(j, "mouseup", c);
                i.P(j, "touchend", c);
                i.P(j, "touchcancel", c)
            }

            function o(a) {
                if (e) i.Tb(a); else {
                    k = 4;
                    g();
                    i.a(j, "mouseup", c);
                    i.a(j, "touchend", c);
                    i.a(j, "touchcancel", c)
                }
            }

            l.be = function (a) {
                if (a === h) return f;
                f = a & 2 || a & 1;
                g()
            };
            l.Hb = function (a) {
                if (a === h) return !e;
                e = a ? 0 : 3;
                g()
            };
            l.O = a = i.ob(a);
            C(a, "data-jssor-button", "1");
            var m = b.Pf(y(a));
            if (m) p = m.shift();
            n(r, function (a) {
                d.push(p + a)
            });
            q = ab(" ", d);
            d.unshift("");
            i.a(a, "mousedown", o);
            i.a(a, "touchstart", o)
        }

        i.oc = function (a) {
            return new Gb(a)
        };
        i.ib = x;
        i.vc = m("overflow");
        i.C = m("top", 2);
        i.me = m("right", 2);
        i.Ud = m("bottom", 2);
        i.E = m("left", 2);
        i.n = m("width", 2);
        i.p = m("height", 2);
        i.Vd = m("marginLeft", 2);
        i.Wd = m("marginTop", 2);
        i.zb = m("position");
        i.yb = m("display");
        i.s = m("zIndex", 1);
        i.hc = function (b, a, c) {
            if (a != h) Fb(b, a, c); else return Db(b)
        };
        i.bd = function (a, b) {
            if (b != h) a.style.cssText = b; else return a.style.cssText
        };
        i.Zd = function (b, a) {
            if (a === h) {
                a = x(b, "backgroundImage") || "";
                var c = /\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(a) || [];
                return c[1]
            }
            x(b, "backgroundImage", a ? "url('" + a + "')" : "")
        };
        var G;
        i.ae = G = {sb: i.hc, i: i.C, l: i.me, k: i.Ud, g: i.E, G: i.n, D: i.p, R: i.zb, Pb: i.yb, nb: i.s};
        i.Zc = function (c, b) {
            var a = {};
            n(b, function (d, b) {
                if (G[b]) a[b] = G[b](c)
            });
            return a
        };

        function r(g, l) {
            var e = wb(), b = M(), d = ub(), j = N(g);

            function k(b, d, a) {
                var e = b.fb(v(-d / 2, -a / 2)), f = b.fb(v(d / 2, -a / 2)), g = b.fb(v(d / 2, a / 2)),
                    h = b.fb(v(-d / 2, a / 2));
                b.fb(v(300, 300));
                return v(c.min(e.x, f.x, g.x, h.x) + d / 2, c.min(e.y, f.y, g.y, h.y) + a / 2)
            }

            function a(d, a) {
                a = a || {};
                var n = a.Y || 0, p = (a.bb || 0) % 360, q = (a.W || 0) % 360, u = (a.J || 0) % 360, l = a.A,
                    m = a.z, f = a.mg;
                if (l == h) l = 1;
                if (m == h) m = 1;
                if (f == h) f = 1;
                if (e) {
                    n = 0;
                    p = 0;
                    q = 0;
                    f = 0
                }
                var c = new Cb(a.gb, a.hb, n);
                c.bb(p);
                c.W(q);
                c.he(u);
                c.ie(a.Jb, a.Ib);
                c.Db(l, m, f);
                if (b) {
                    c.qb(a.q, a.u);
                    d.style[j] = c.ke()
                } else if (!X || X < 9) {
                    var o = "", g = {x: 0, y: 0};
                    if (a.V) g = k(c, a.V, a.kb);
                    i.Wd(d, g.y);
                    i.Vd(d, g.x);
                    o = c.Td();
                    var s = d.style.filter,
                        t = new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),
                        r = K(s, [t], o);
                    sb(d, r)
                }
            }

            r = function (e, c) {
                c = c || {};
                var j = c.q, k = c.u, g;
                n(G, function (a, b) {
                    g = c[b];
                    g !== h && a(e, g)
                });
                i.qe(e, c.f);
                if (!b) {
                    j != h && i.E(e, (c.jd || 0) + j);
                    k != h && i.C(e, (c.id || 0) + k)
                }
                if (c.ne) if (d) qb(i.L(f, P, e, c)); else a(e, c)
            };
            i.Qb = P;
            if (d) i.Qb = r;
            if (e) i.Qb = a; else if (!b) a = P;
            i.K = r;
            r(g, l)
        }

        i.Qb = r;
        i.K = r;

        function Cb(j, k, o) {
            var d = this, b = [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, j || 0, k || 0, o || 0, 1], i = c.sin, h = c.cos,
                l = c.tan;

            function g(a) {
                return a * c.PI / 180
            }

            function n(a, b) {
                return {x: a, y: b}
            }

            function m(c, e, l, m, o, r, t, u, w, z, A, C, E, b, f, k, a, g, i, n, p, q, s, v, x, y, B, D, F, d, h, j) {
                return [c * a + e * p + l * x + m * F, c * g + e * q + l * y + m * d, c * i + e * s + l * B + m * h, c * n + e * v + l * D + m * j, o * a + r * p + t * x + u * F, o * g + r * q + t * y + u * d, o * i + r * s + t * B + u * h, o * n + r * v + t * D + u * j, w * a + z * p + A * x + C * F, w * g + z * q + A * y + C * d, w * i + z * s + A * B + C * h, w * n + z * v + A * D + C * j, E * a + b * p + f * x + k * F, E * g + b * q + f * y + k * d, E * i + b * s + f * B + k * h, E * n + b * v + f * D + k * j]
            }

            function e(c, a) {
                return m.apply(f, (a || b).concat(c))
            }

            d.Db = function (a, c, d) {
                if (a != 1 || c != 1 || d != 1) b = e([a, 0, 0, 0, 0, c, 0, 0, 0, 0, d, 0, 0, 0, 0, 1])
            };
            d.qb = function (a, c, d) {
                b[12] += a || 0;
                b[13] += c || 0;
                b[14] += d || 0
            };
            d.bb = function (c) {
                if (c) {
                    a = g(c);
                    var d = h(a), f = i(a);
                    b = e([1, 0, 0, 0, 0, d, f, 0, 0, -f, d, 0, 0, 0, 0, 1])
                }
            };
            d.W = function (c) {
                if (c) {
                    a = g(c);
                    var d = h(a), f = i(a);
                    b = e([d, 0, -f, 0, 0, 1, 0, 0, f, 0, d, 0, 0, 0, 0, 1])
                }
            };
            d.he = function (c) {
                if (c) {
                    a = g(c);
                    var d = h(a), f = i(a);
                    b = e([d, f, 0, 0, -f, d, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
                }
            };
            d.ie = function (a, c) {
                if (a || c) {
                    j = g(a);
                    k = g(c);
                    b = e([1, l(k), 0, 0, l(j), 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
                }
            };
            d.fb = function (c) {
                var a = e(b, [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, c.x, c.y, 0, 1]);
                return n(a[12], a[13])
            };
            d.ke = function () {
                return "matrix3d(" + b.join(",") + ")"
            };
            d.Td = function () {
                return "progid:DXImageTransform.Microsoft.Matrix(M11=" + b[0] + ", M12=" + b[4] + ", M21=" + b[1] + ", M22=" + b[5] + ", SizingMethod='auto expand')"
            }
        }

        new function () {
            var a = this;

            function b(d, g) {
                for (var j = d[0].length, i = d.length, h = g[0].length, f = [],
                         c = 0; c < i; c++) for (var k = f[c] = [], b = 0; b < h; b++) {
                    for (var e = 0, a = 0; a < j; a++) e += d[c][a] * g[a][b];
                    k[b] = e
                }
                return f
            }

            a.A = function (b, c) {
                return a.od(b, c, 0)
            };
            a.z = function (b, c) {
                return a.od(b, 0, c)
            };
            a.od = function (a, c, d) {
                return b(a, [[c, 0], [0, d]])
            };
            a.fb = function (d, c) {
                var a = b(d, [[c.x], [c.y]]);
                return v(a[0][0], a[1][0])
            }
        };
        var Q = {jd: 0, id: 0, q: 0, u: 0, vb: 1, A: 1, z: 1, J: 0, bb: 0, W: 0, gb: 0, hb: 0, Y: 0, Jb: 0, Ib: 0};
        i.td = function (c, d) {
            var a = c || {};
            if (c) if (b.Pc(c)) a = {H: a}; else if (b.Pc(c.f)) a.f = {H: c.f};
            a.H = a.H || d;
            if (a.f) a.f.H = a.f.H || d;
            return a
        };

        function ob(c, a) {
            var b = {};
            n(c, function (c, d) {
                var e = c;
                if (a[d] != h) if (i.sc(c)) e = c + a[d]; else e = ob(c, a[d]);
                b[d] = e
            });
            return b
        }

        i.Pd = ob;
        i.Hd = function (n, j, s, t, B, C, o) {
            var a = j;
            if (n) {
                a = {};
                for (var i in j) {
                    var D = C[i] || 1, z = B[i] || [0, 1], g = (s - z[0]) / z[1];
                    g = c.min(c.max(g, 0), 1);
                    g = g * D;
                    var x = c.floor(g);
                    if (g != x) g -= x;
                    var k = t.H || e.Kb, m, E = n[i], p = j[i];
                    if (b.sc(p)) {
                        k = t[i] || k;
                        var A = k(g);
                        m = E + p * A
                    } else {
                        m = b.M({Vb: {}}, n[i]);
                        var y = t[i] || {};
                        b.c(p.Vb || p, function (d, a) {
                            k = y[a] || y.H || k;
                            var c = k(g), b = d * c;
                            m.Vb[a] = b;
                            m[a] += b
                        })
                    }
                    a[i] = m
                }
                var w = b.c(j, function (b, a) {
                    return Q[a] != h
                });
                w && b.c(Q, function (c, b) {
                    if (a[b] == h && n[b] !== h) a[b] = n[b]
                });
                if (w) {
                    if (a.vb) a.A = a.z = a.vb;
                    a.V = o.V;
                    a.kb = o.kb;
                    if (q() && l >= 11 && (j.q || j.u) && s != 0 && s != 1) a.J = a.J || 1e-8;
                    a.ne = d
                }
            }
            if (j.f && o.qb) {
                var r = a.f.Vb, v = (r.i || 0) + (r.k || 0), u = (r.g || 0) + (r.l || 0);
                a.g = (a.g || 0) + u;
                a.i = (a.i || 0) + v;
                a.f.g -= u;
                a.f.l -= u;
                a.f.i -= v;
                a.f.k -= v
            }
            if (a.f && !a.f.i && !a.f.g && !a.f.u && !a.f.q && a.f.l == o.V && a.f.k == o.kb) a.f = f;
            return a
        }
    };

    function o() {
        var a = this, d = [];

        function i(a, b) {
            d.push({yc: a, Cc: b})
        }

        function h(a, c) {
            b.c(d, function (b, e) {
                b.yc == a && b.Cc === c && d.splice(e, 1)
            })
        }

        a.Cb = a.addEventListener = i;
        a.removeEventListener = h;
        a.j = function (a) {
            var c = [].slice.call(arguments, 1);
            b.c(d, function (b) {
                b.yc == a && b.Cc.apply(g, c)
            })
        }
    }

    var l = function (A, E, h, J, M, L) {
        A = A || 0;
        var a = this, p, m, n, s, C = 0, G, H, F, D, z = 0, i = 0, l = 0, y, j, e, f, o, x, u = [], w;

        function O(a) {
            e += a;
            f += a;
            j += a;
            i += a;
            l += a;
            z += a
        }

        function r(p) {
            var g = p;
            if (o) if (!x && (g >= f || g < e) || x && g >= e) g = ((g - e) % o + o) % o + e;
            if (!y || s || i != g) {
                var k = c.min(g, f);
                k = c.max(k, e);
                if (!y || s || k != l) {
                    if (L) {
                        var m = (k - j) / (E || 1);
                        if (h.oe) m = 1 - m;
                        var n = b.Hd(M, L, m, G, F, H, h);
                        if (w) b.c(n, function (b, a) {
                            w[a] && w[a](J, b)
                        }); else b.K(J, n)
                    }
                    a.mc(l - j, k - j);
                    var r = l, q = l = k;
                    b.c(u, function (b, c) {
                        var a = !y && x || g <= i ? u[u.length - c - 1] : b;
                        a.v(l - z)
                    });
                    i = g;
                    y = d;
                    a.Rb(r, q)
                }
            }
        }

        function B(a, b, d) {
            b && a.Mb(f);
            if (!d) {
                e = c.min(e, a.Lb() + z);
                f = c.max(f, a.db() + z)
            }
            u.push(a)
        }

        var v = g.requestAnimationFrame || g.webkitRequestAnimationFrame || g.mozRequestAnimationFrame || g.msRequestAnimationFrame;
        if (b.cg() && b.hd() < 7 || !v) v = function (a) {
            b.pd(a, h.Cd)
        };

        function I() {
            if (p) {
                var d = b.U(), e = c.min(d - C, h.Lc), a = i + e * n;
                C = d;
                if (a * n >= m * n) a = m;
                r(a);
                if (!s && a * n >= m * n) K(D); else v(I)
            }
        }

        function q(g, h, j) {
            if (!p) {
                p = d;
                s = j;
                D = h;
                g = c.max(g, e);
                g = c.min(g, f);
                m = g;
                n = m < i ? -1 : 1;
                a.Oc();
                C = b.U();
                v(I)
            }
        }

        function K(b) {
            if (p) {
                s = p = D = k;
                a.ed();
                b && b()
            }
        }

        a.Qc = function (a, b, c) {
            q(a ? i + a : f, b, c)
        };
        a.cd = q;
        a.eb = K;
        a.Rd = function (a) {
            q(a)
        };
        a.X = function () {
            return i
        };
        a.gd = function () {
            return m
        };
        a.jb = function () {
            return l
        };
        a.v = r;
        a.Qd = function () {
            r(f, d)
        };
        a.qb = function (a) {
            r(i + a)
        };
        a.vd = function () {
            return p
        };
        a.le = function (a) {
            o = a
        };
        a.Mb = O;
        a.F = function (a, b) {
            B(a, 0, b)
        };
        a.Ac = function (a) {
            B(a, 1)
        };
        a.qd = function (a) {
            f += a
        };
        a.Lb = function () {
            return e
        };
        a.db = function () {
            return f
        };
        a.Rb = a.Oc = a.ed = a.mc = b.Wc;
        a.ac = b.U();
        h = b.M({Cd: 16, Lc: 50}, h);
        o = h.bc;
        x = h.ge;
        w = h.ee;
        e = j = A;
        f = A + E;
        H = h.de || {};
        F = h.ce || {};
        G = b.td(h.ab)
    };
    var m = {Gb: "data-scale", nc: "data-scale-ratio", ub: "data-autocenter"}, n = new function () {
        var a = this;
        a.mb = function (c, a, e, d) {
            (d || !b.B(c, a)) && b.B(c, a, e)
        };
        a.ec = function (a) {
            var c = b.N(a, m.ub);
            b.Nc(a, c)
        }
    };
    new (function () {
    });
    var p = {Bc: 1}, s = function (a, E) {
        var g = this;
        o.call(g);
        a = b.ob(a);
        var u, C, B, t, l = 0, e, q, j, y, z, i, h, s, r, D = [], A = [];

        function x(a) {
            a != -1 && A[a].be(a == l)
        }

        function v(a) {
            g.j(p.Bc, a * q)
        }

        g.O = a;
        g.kc = function (a) {
            if (a != t) {
                var d = l, b = c.floor(a / q);
                l = b;
                t = a;
                x(d);
                x(b)
            }
        };
        g.gc = function (c) {
            b.Q(a, c)
        };
        var w;
        g.Zb = function (x) {
            if (!w) {
                u = c.ceil(x / q);
                l = 0;
                var n = s + y, o = r + z, m = c.ceil(u / j) - 1;
                C = s + n * (!i ? m : j - 1);
                B = r + o * (i ? m : j - 1);
                b.n(a, C);
                b.p(a, B);
                for (var g = 0; g < u; g++) {
                    var t = b.Of();
                    b.Ef(t, g + 1);
                    var k = b.fe(h, "numbertemplate", t, d);
                    b.zb(k, "absolute");
                    var p = g % (m + 1);
                    b.E(k, !i ? n * p : g % j * n);
                    b.C(k, i ? o * p : c.floor(g / (m + 1)) * o);
                    b.cb(a, k);
                    D[g] = k;
                    e.Xb & 1 && b.a(k, "click", b.L(f, v, g));
                    e.Xb & 2 && b.a(k, "mouseenter", b.L(f, v, g));
                    A[g] = b.oc(k)
                }
                w = d
            }
        };
        g.Ob = e = b.M({xd: 10, Hc: 10, Ad: 1, Xb: 1}, E);
        h = b.rc(a, "prototype");
        s = b.n(h);
        r = b.p(h);
        b.Wb(h, a);
        q = e.Sc || 1;
        j = e.Tc || 1;
        y = e.xd;
        z = e.Hc;
        i = e.Ad - 1;
        e.Db == k && n.mb(a, m.Gb, 1);
        e.Z && n.mb(a, m.ub, e.Z);
        n.ec(a)
    }, t = function (a, e, i, y, x, w) {
        var c = this;
        o.call(c);
        var j, h, g, l;
        b.n(a);
        b.p(a);
        var s, r;

        function q(a) {
            c.j(p.Bc, a, d)
        }

        function v(c) {
            b.Q(a, c);
            b.Q(e, c)
        }

        function u() {
            s.Hb(i.Ub || !j.Jd(h));
            r.Hb(i.Ub || !j.Ld(h))
        }

        c.kc = function (c, a, b) {
            h = a;
            !b && u()
        };
        c.gc = v;
        var t;
        c.Zb = function () {
            h = 0;
            if (!t) {
                b.a(a, "click", b.L(f, q, -l));
                b.a(e, "click", b.L(f, q, l));
                s = b.oc(a);
                r = b.oc(e);
                t = d
            }
        };
        c.Ob = g = b.M({Sc: 1}, i);
        l = g.Sc;
        j = w;
        if (g.Db == k) {
            n.mb(a, m.Gb, 1);
            n.mb(e, m.Gb, 1)
        }
        if (g.Z) {
            n.mb(a, m.ub, g.Z);
            n.mb(e, m.ub, g.Z)
        }
        n.ec(a);
        n.ec(e)
    };

    function r(e, d, c) {
        var a = this;
        l.call(a, 0, c);
        a.Uc = b.Wc;
        a.Xc = 0;
        a.Yc = c
    }

    var u = function (t, j, B, E) {
        var a = this, u, o = {}, v = j.dc, r = j.eg, k = new l(0, 0), p = [], h = [], D = E, g = D ? 1e8 : 0;
        l.call(a, 0, 0);

        function q(d, c) {
            var a = {};
            b.c(d, function (d, f) {
                var e = o[f];
                if (e) {
                    if (b.Xe(d)) d = q(d, c || f == "e"); else if (c) if (b.sc(d)) d = u[d];
                    a[e] = d
                }
            });
            return a
        }

        function s(d, e) {
            var a = [], c = b.tb(d);
            b.c(c, function (c) {
                var d = v[b.N(c, "t")];
                d && a.push({O: c, pc: d});
                a = a.concat(s(c, e + 1))
            });
            return a
        }

        function n(c, e) {
            var a = p[c];
            if (a == f) {
                a = p[c] = {T: c, fc: [], Rc: []};
                var d = 0;
                !b.c(h, function (a, b) {
                    d = b;
                    return a.T > c
                }) && d++;
                h.splice(d, 0, a)
            }
            return a
        }

        function y(s, t, h) {
            var a, e;
            if (r) {
                var m = r[b.N(s, "c")];
                if (m) {
                    a = n(m.r, 0);
                    a.Nf = m.e || 0
                }
            }
            b.c(t, function (i) {
                var f = b.M(d, {}, q(i)), j = b.td(f.ab);
                delete f.ab;
                if (f.g) {
                    f.q = f.g;
                    j.q = j.g;
                    delete f.g
                }
                if (f.i) {
                    f.u = f.i;
                    j.u = j.i;
                    delete f.i
                }
                var o = {ab: j, V: h.G, kb: h.D}, k = new l(i.b, i.d, o, s, h, f);
                g = c.max(g, i.b + i.d);
                if (a) {
                    if (!e) e = new l(i.b, 0);
                    e.F(k)
                } else {
                    var m = n(i.b, i.b + i.d);
                    m.fc.push(k)
                }
                h = b.Pd(h, f)
            });
            if (a && e) {
                e.Qd();
                var i = e, j, k = e.Lb(), o = e.db(), p = c.max(o, a.Nf);
                if (a.T < o) {
                    if (a.T > k) {
                        i = new l(k, a.T - k);
                        i.F(e, d)
                    } else i = f;
                    j = new l(a.T, p - k, {bc: p - a.T, ge: d});
                    j.F(e, d)
                }
                i && a.fc.push(i);
                j && a.Rc.push(j)
            }
            return h
        }

        function x(a) {
            b.c(a, function (d) {
                var a = d.O, f = b.n(a), e = b.p(a), c = {
                    g: b.E(a),
                    i: b.C(a),
                    q: 0,
                    u: 0,
                    sb: 1,
                    nb: b.s(a) || 0,
                    J: 0,
                    bb: 0,
                    W: 0,
                    A: 1,
                    z: 1,
                    gb: 0,
                    hb: 0,
                    Y: 0,
                    Jb: 0,
                    Ib: 0,
                    G: f,
                    D: e,
                    f: {i: 0, l: f, k: e, g: 0}
                };
                c.jd = c.g;
                c.id = c.i;
                y(a, d.pc, c)
            })
        }

        function A(f, e, g) {
            var c = f.b - e;
            if (c) {
                var b = new l(e, c);
                b.F(k, d);
                b.Mb(g);
                a.F(b)
            }
            a.qd(f.d);
            return c
        }

        function z(e) {
            var c = k.Lb(), d = 0;
            b.c(e, function (e, f) {
                e = b.M({d: 3e3}, e);
                A(e, c, d);
                c = e.b;
                d += e.d;
                if (!f || e.t == 2) {
                    a.Xc = c;
                    a.Yc = c + e.d
                }
            })
        }

        function m(h, e, d) {
            var f = e.length;
            if (f > 4) for (var k = c.ceil(f / 4), a = 0; a < k; a++) {
                var i = e.slice(a * 4, c.min(a * 4 + 4, f)), j = new l(i[0].T, 0);
                m(j, i, d);
                h.F(j)
            } else b.c(e, function (a) {
                b.c(d ? a.Rc : a.fc, function (a) {
                    d && a.qd(g - a.db());
                    h.F(a)
                })
            })
        }

        a.Uc = function () {
            a.v(-1, d)
        };
        u = [e.Kb, e.af, e.bf, e.Vc, e.cf, e.df, e.ef, e.ff, e.gf, e.hf, e.jf, e.kf, e.yd, e.lf, e.mf, e.nf, e.of, e.Qe, e.Pe, e.Oe, e.Be, e.re, e.se, e.te, e.ue, e.ve, e.we, e.xe, e.ye, e.zd, e.cc, e.ze, e.Ae, e.Ce];
        var C = {
            i: "y",
            g: "x",
            k: "m",
            l: "t",
            J: "r",
            bb: "rX",
            W: "rY",
            A: "sX",
            z: "sY",
            gb: "tX",
            hb: "tY",
            Y: "tZ",
            Jb: "kX",
            Ib: "kY",
            sb: "o",
            ab: "e",
            nb: "i",
            f: "c"
        };
        b.c(C, function (b, a) {
            o[b] = a
        });
        x(s(t, 1));
        m(k, h);
        var w = j.ig || [], i = w[b.N(t, "b")] || [];
        i = i.concat({b: g, d: i.length ? 0 : B});
        z(i);
        g = c.max(g, a.db());
        m(a, h, d);
        a.v(-1)
    }, i = (g.module || {}).exports = function () {
        var a = this;
        b.tf(a, o);
        var Ob = "data-jssor-slider", bc = "data-jssor-thumb", v, n, U, ob, db, yb, cb, W, K, P, Db, Vb = 1, nc = 1,
            dc = 1, ec = {}, x, X, Gb, Jb, Ib, pb, Ab, zb, kb, s = -1, Rb, q, J, I, fb, vb, wb, S, Q, L, ab, y, Y,
            ub, gb = [], jc, lc, fc, Wb, Hc, u, lb, H, hc, tb, Pb, ic, O, Lb = 0, D = 0, N = Number.MAX_VALUE,
            F = Number.MIN_VALUE, kc, C, mb, T, M = 1, bb, A, eb, Sb = 0, Tb = 0, R, qb, rb, nb, w, ib, z, Hb,
            hb = [], Fb = b.Zf(), sb = Fb.Yf, B = [], E, V, G, Nb, ac, Z;

        function wc(e, k, o) {
            var l = this, h = {i: 2, l: 1, k: 2, g: 1}, n = {i: "top", l: "right", k: "bottom", g: "left"}, g, a, f,
                i, j = {};
            l.O = e;
            l.Fb = function (q, p, t) {
                var l, s = q, r = p;
                if (!f) {
                    f = b.Kd(e);
                    g = e.parentNode;
                    i = {Db: b.N(e, m.Gb, 1), Z: b.N(e, m.ub)};
                    b.c(n, function (c, a) {
                        j[a] = b.N(e, "data-scale-" + c, 1)
                    });
                    a = e;
                    if (k) {
                        a = b.xb(g, d);
                        b.K(a, {i: 0, g: 0});
                        b.cb(a, e);
                        b.cb(g, a)
                    }
                }
                if (o) {
                    l = c.max(q, p);
                    if (k) if (t > 0 && t < 1) {
                        var v = c.min(q, p);
                        l = c.min(l / v, 1 / (1 - t)) * v
                    }
                } else s = r = l = c.pow(K < P ? p : q, i.Db);
                b.Bf(a, l);
                b.B(a, m.nc, l);
                b.n(g, f.G * s);
                b.p(g, f.D * r);
                var u = b.wd() && b.nd() < 9 || b.nd() < 10 && b.ag() ? l : 1, w = (s - u) * f.G / 2,
                    x = (r - u) * f.D / 2;
                b.E(a, w);
                b.C(a, x);
                b.c(f, function (d, a) {
                    if (h[a] && d) {
                        var e = (h[a] & 1) * c.pow(q, j[a]) * d + (h[a] & 2) * c.pow(p, j[a]) * d / 2;
                        b.ae[a](g, e)
                    }
                });
                b.Nc(g, i.Z)
            }
        }

        function Gc() {
            var b = this;
            l.call(b, -1e8, 2e8);
            b.Kf = function () {
                var a = b.jb();
                a = t(a);
                var d = c.round(a), g = d, f = a - c.floor(a), e = cc(a);
                return {lb: g, Jf: d, R: f, Pb: a, If: e}
            };
            b.Rb = function (e, b) {
                var g = t(b);
                if (c.abs(b - e) > 1e-5) {
                    var f = c.floor(b);
                    if (f != b && b > e && (C & 1 || b > D)) f++;
                    mc(f, g, d)
                }
                a.j(i.Hf, g, t(e), b, e)
            }
        }

        function Fc() {
            var a = this;
            l.call(a, 0, 0, {bc: q});
            b.c(B, function (b) {
                C & 1 && b.le(q);
                a.Ac(b);
                b.Mb(O / S)
            })
        }

        function Ec() {
            var a = this, b = Hb.O;
            l.call(a, -1, 2, {ab: e.Kb, ee: {R: Ub}, bc: q}, b, {R: 1}, {R: -2});
            a.zc = b
        }

        function xc(o, m) {
            var b = this, e, g, h, j, c;
            l.call(b, -1e8, 2e8, {Lc: 100});
            b.Oc = function () {
                bb = d;
                eb = f;
                a.j(i.Gf, t(w.X()), w.X())
            };
            b.ed = function () {
                bb = k;
                j = k;
                var b = w.Kf();
                a.j(i.Ff, t(w.X()), w.X());
                if (!A) {
                    Ic(b.Jf, s);
                    (!b.R || b.If) && mc(s, b.Pb)
                }
            };
            b.Rb = function (f, d) {
                var a;
                if (j) a = c; else {
                    a = g;
                    if (h) {
                        var b = d / h;
                        a = n.lc(b) * (g - e) + e
                    }
                }
                w.v(a)
            };
            b.jc = function (a, d, c, f) {
                e = a;
                g = d;
                h = c;
                w.v(a);
                b.v(0);
                b.cd(c, f)
            };
            b.Cf = function (a) {
                j = d;
                c = a;
                b.Qc(a, f, d)
            };
            b.vf = function (a) {
                c = a
            };
            w = new Gc;
            w.F(o);
            w.F(m)
        }

        function yc() {
            var c = this, a = pc();
            b.s(a, 0);
            b.ib(a, "pointerEvents", "none");
            c.O = a;
            c.Sb = function () {
                b.S(a);
                b.qc(a)
            }
        }

        function Dc(m, g) {
            var e = this, r, H, v, j, x = [], C, y, R, D, O, L, F, h, w, p;
            l.call(e, -Q, Q + 1, {});

            function K(a) {
                r && r.Uc();
                P(m, a, 0);
                L = d;
                r = new db.I(m, db, b.N(m, "idle", hc), !u);
                r.v(0)
            }

            function V() {
                r.ac < db.ac && K()
            }

            function M(p, r, o) {
                if (!D) {
                    D = d;
                    if (j && o) {
                        var f = o.width, c = o.height, m = f, l = c;
                        if (f && c && n.pb) {
                            if (n.pb & 3 && (!(n.pb & 4) || f > J || c > I)) {
                                var h = k, q = J / I * c / f;
                                if (n.pb & 1) h = q > 1; else if (n.pb & 2) h = q < 1;
                                m = h ? f * I / c : J;
                                l = h ? I : c * J / f
                            }
                            b.n(j, m);
                            b.p(j, l);
                            b.C(j, (I - l) / 2);
                            b.E(j, (J - m) / 2)
                        }
                        b.zb(j, "absolute");
                        a.j(i.Rf, g)
                    }
                }
                b.S(r);
                p && p(e)
            }

            function U(f, b, c, d) {
                if (d == eb && s == g && u) if (!Hc) {
                    var a = t(f);
                    E.Od(a, g, b, e, c, I / J);
                    b.Sf();
                    ib.Mb(a - ib.Lb() - 1);
                    ib.v(a);
                    z.jc(a, a, 0)
                }
            }

            function Y(b) {
                if (b == eb && s == g) {
                    if (!h) {
                        var a = f;
                        if (E) if (E.lb == g) a = E.Md(); else E.Sb();
                        V();
                        h = new Cc(m, g, a, r);
                        h.ld(p)
                    }
                    !h.vd() && h.wc()
                }
            }

            function A(a, d, k) {
                if (a == g) {
                    if (a != d) B[d] && B[d].kd(); else !k && h && h.dg();
                    p && p.Hb();
                    var l = eb = b.U();
                    e.wb(b.L(f, Y, l))
                } else {
                    var j = c.min(g, a), i = c.max(g, a), o = c.min(i - j, j + q - i), m = Q + n.Wf - 1;
                    (!O || o <= m) && e.wb()
                }
            }

            function Z() {
                if (s == g && h) {
                    h.eb();
                    p && p.Vf();
                    p && p.Uf();
                    h.ud()
                }
            }

            function ab() {
                s == g && h && h.eb()
            }

            function W(b) {
                !T && a.j(i.sf, g, b)
            }

            function N() {
                p = w.pInstance;
                h && h.ld(p)
            }

            e.wb = function (e, c) {
                c = c || v;
                if (x.length && !D) {
                    b.Q(c);
                    if (!R) {
                        R = d;
                        a.j(i.wf, g);
                        b.c(x, function (a) {
                            if (!b.B(a, "src")) {
                                a.src = b.m(a, "src2") || "";
                                b.yb(a, a["display-origin"])
                            }
                        })
                    }
                    b.je(x, j, b.L(f, M, e, c))
                } else M(e, c)
            };
            e.qf = function () {
                if (q == 1) {
                    e.kd();
                    A(g, g)
                } else {
                    var a;
                    if (E) a = E.Id(q);
                    if (a) {
                        var h = eb = b.U(), c = g + lb, d = B[t(c)];
                        return d.wb(b.L(f, U, c, d, a, h), v)
                    } else Cb(lb)
                }
            };
            e.Fc = function () {
                A(g, g, d)
            };
            e.kd = function () {
                p && p.Vf();
                p && p.Uf();
                e.Bd();
                h && h.pf();
                h = f;
                K()
            };
            e.Sf = function () {
                b.S(m)
            };
            e.Bd = function () {
                b.Q(m)
            };
            e.Me = function () {
                p && p.Hb()
            };

            function P(a, f, c, h) {
                if (b.B(a, Ob)) return;
                if (!L) {
                    if (a.tagName == "IMG") {
                        x.push(a);
                        if (!b.B(a, "src")) {
                            O = d;
                            a["display-origin"] = b.yb(a);
                            b.S(a)
                        }
                    }
                    var e = b.Zd(a);
                    if (e) {
                        var g = new Image;
                        b.m(g, "src2", e);
                        x.push(g)
                    }
                    c && b.s(a, (b.s(a) || 0) + 1)
                }
                var i = b.tb(a);
                b.c(i, function (a) {
                    var e = a.tagName, g = b.m(a, "u");
                    if (g == "player" && !w) {
                        w = a;
                        if (w.pInstance) N(); else b.a(w, "dataavailable", N)
                    }
                    if (g == "caption") {
                        if (f) {
                            b.Tf(a, b.m(a, "to"));
                            b.xf(a, b.m(a, "bf"));
                            F && b.m(a, "3d") && b.yf(a, "preserve-3d")
                        }
                    } else if (!L && !c && !j) {
                        if (e == "A") {
                            if (b.m(a, "u") == "image") j = b.Lf(a, "IMG"); else j = b.rc(a, "image", d);
                            if (j) {
                                C = a;
                                b.K(C, kb);
                                y = b.xb(C, d);
                                b.hc(y, 0);
                                b.ib(y, "backgroundColor", "#000")
                            }
                        } else if (e == "IMG" && b.m(a, "u") == "image") j = a;
                        if (j) {
                            j.border = 0;
                            b.K(j, kb)
                        }
                    }
                    P(a, f, c + 1, h)
                })
            }

            e.mc = function (c, b) {
                var a = Q - b;
                Ub(H, a)
            };
            e.lb = g;
            o.call(e);
            F = b.m(m, "p");
            b.zf(m, F);
            b.Af(m, b.m(m, "po"));
            var G = b.rc(m, "thumb", d);
            if (G) {
                b.xb(G);
                b.S(G)
            }
            b.Q(m);
            v = b.xb(X);
            b.s(v, 1e3);
            b.a(m, "click", W);
            K(d);
            e.Nd = j;
            e.Dd = y;
            e.zc = H = m;
            b.cb(H, v);
            a.Cb(203, A);
            a.Cb(28, ab);
            a.Cb(24, Z)
        }

        function Cc(z, g, p, q) {
            var c = this, n = 0, v = 0, h, j, f, e, m, t, r, o = B[g];
            l.call(c, 0, 0);

            function w() {
                b.qc(V);
                Wb && m && o.Dd && b.cb(V, o.Dd);
                b.Q(V, !m && o.Nd)
            }

            function x() {
                c.wc()
            }

            function y(a) {
                r = a;
                c.eb();
                c.wc()
            }

            c.wc = function () {
                var b = c.jb();
                if (!A && !bb && !r && s == g) {
                    if (!b) {
                        if (h && !m) {
                            m = d;
                            c.ud(d);
                            a.j(i.Le, g, n, v, h, e)
                        }
                        w()
                    }
                    var k, p = i.Ed;
                    if (b != e) if (b == f) k = e; else if (b == j) k = f; else if (!b) k = j; else k = c.gd();
                    a.j(p, g, b, n, j, f, e);
                    var l = u && (!H || M);
                    if (b == e) (f != e && !(H & 12) || l) && o.qf(); else (l || b != f) && c.cd(k, x)
                }
            };
            c.dg = function () {
                f == e && f == c.jb() && c.v(j)
            };
            c.pf = function () {
                E && E.lb == g && E.Sb();
                var b = c.jb();
                b < e && a.j(i.Ed, g, -b - 1, n, j, f, e)
            };
            c.ud = function (a) {
                p && b.vc(ab, a && p.pc.hg ? "" : "hidden")
            };
            c.mc = function (c, b) {
                if (m && b >= h) {
                    m = k;
                    w();
                    o.Bd();
                    E.Sb();
                    a.j(i.Ke, g, n, v, h, e)
                }
                a.j(i.Je, g, b, n, j, f, e)
            };
            c.ld = function (a) {
                if (a && !t) {
                    t = a;
                    a.Cb($JssorPlayer$.Yd, y)
                }
            };
            p && c.Ac(p);
            h = c.db();
            c.Ac(q);
            j = h + q.Xc;
            e = c.db();
            f = u ? h + q.Yc : e
        }

        function Qb(a, c, d) {
            b.E(a, c);
            b.C(a, d)
        }

        function Ub(c, b) {
            var a = y > 0 ? y : U, d = (vb * b + Lb) * (a & 1), e = (wb * b + Lb) * (a >> 1 & 1);
            Qb(c, d, e)
        }

        function Mb(a) {
            if (!(C & 1)) a = c.min(N, c.max(a, F));
            return a
        }

        function cc(a) {
            return !(C & 1) && (a - F < .0001 || N - a < .0001)
        }

        function gc() {
            Nb = bb;
            ac = z.gd();
            G = w.X()
        }

        function Yb() {
            gc();
            if (A || !M && H & 12) {
                z.eb();
                a.j(i.Ie)
            }
        }

        function Xb(g) {
            if (!A && (M || !(H & 12)) && !z.vd()) {
                var b = w.X(), a = G, f = 0;
                if (g && c.abs(R) >= n.dd) {
                    a = b;
                    f = rb
                }
                if (cc(b)) {
                    if (!g || T) a = c.round(a)
                } else a = c.ceil(a);
                a = Mb(a + f);
                if (!(C & 1)) {
                    if (N - a < .5) a = N;
                    if (a - F < .5) a = F
                }
                var d = c.abs(a - b);
                if (d < 1 && n.lc != e.Kb) d = 1 - c.pow(1 - d, 5);
                if (!T && Nb) z.Rd(ac); else if (b == a) {
                    Rb.Me();
                    Rb.Fc()
                } else z.jc(b, a, d * tb)
            }
        }

        function Zb(a) {
            !b.Bb(b.tc(a), "nodrag") && b.Tb(a)
        }

        function Ac(a) {
            qc(a, 1)
        }

        function qc(c, g) {
            var e = b.tc(c);
            ub = k;
            var l = b.Bb(e, "1", bc);
            if ((!l || l === v) && !Y && (!g || c.touches.length == 1)) {
                ub = b.Bb(e, "nodrag") || !mb || !Bc();
                var n = b.Bb(e, h, m.nc);
                if (n) dc = b.B(n, m.nc);
                if (g) {
                    var p = c.touches[0];
                    Sb = p.clientX;
                    Tb = p.clientY
                } else {
                    var o = b.sd(c);
                    Sb = o.x;
                    Tb = o.y
                }
                A = d;
                eb = f;
                b.a(j, g ? "touchmove" : "mousemove", Eb);
                b.U();
                T = 0;
                Yb();
                if (!Nb) y = 0;
                R = 0;
                qb = 0;
                rb = 0;
                a.j(i.He, t(G), G, c)
            }
        }

        function Eb(g) {
            if (A) {
                var a;
                if (g.type != "mousemove") if (g.touches.length == 1) {
                    var o = g.touches[0];
                    a = {x: o.clientX, y: o.clientY}
                } else jb(); else a = b.sd(g);
                if (a) {
                    var e = a.x - Sb, f = a.y - Tb;
                    if (y || c.abs(e) > 1.5 || c.abs(f) > 1.5) {
                        if (c.floor(G) != G) y = y || U & Y;
                        if ((e || f) && !y) {
                            if (Y == 3) if (c.abs(f) > c.abs(e)) y = 2; else y = 1; else y = Y;
                            if (sb && y == 1 && c.abs(f) > c.abs(e) * 2.4) ub = d
                        }
                        var n = f, i = wb;
                        if (y == 1) {
                            n = e;
                            i = vb
                        }
                        if (R - qb < -1.5) rb = 0; else if (R - qb > 1.5) rb = -1;
                        qb = R;
                        R = n;
                        Z = G - R / i / dc;
                        if (!(C & 1)) {
                            var l = 0, j = [-G + D, 0, G - q + L - D];
                            b.c(j, function (b, d) {
                                if (b > 0) {
                                    var a = c.pow(b, 1 / 1.6);
                                    a = c.tan(a * c.PI / 2);
                                    l = (a - b) * (d - 1)
                                }
                            });
                            var h = l + Z, m = k;
                            j = [-h + D, 0, h - q + L - D];
                            b.c(j, function (a, b) {
                                if (a > 0) {
                                    a = c.min(a, i);
                                    a = c.atan(a) * 2 / c.PI;
                                    a = c.pow(a, 1.6);
                                    Z = a * (b - 1) + D;
                                    if (b) Z += q - L;
                                    m = d
                                }
                            });
                            if (!m) Z = h
                        }
                        if (R && y && !ub) {
                            b.Tb(g);
                            if (!bb) z.Cf(Z); else z.vf(Z)
                        }
                    }
                }
            }
        }

        function jb() {
            zc();
            if (A) {
                T = R;
                b.U();
                b.P(j, "mousemove", Eb);
                b.P(j, "touchmove", Eb);
                T && u & 8 && (u = 0);
                z.eb();
                A = k;
                var c = w.X();
                a.j(i.rf, t(c), c, t(G), G);
                H & 12 && gc();
                Xb(d)
            }
        }

        function vc(c) {
            var a = b.tc(c), d = b.Bb(a, "1", Ob);
            if (v === d) if (T) {
                b.Df(c);
                while (a && v !== a) {
                    (a.tagName == "A" || b.B(a, "data-jssor-button")) && b.Tb(c);
                    a = a.parentNode
                }
            } else u & 4 && (u = 0)
        }

        function rc(d) {
            if (d != s) {
                var b = nb.jb(), a = Mb(d), e = c.round(t(a));
                if (b - a < .5) a = b;
                B[s];
                s = e;
                Rb = B[s];
                w.v(a)
            }
        }

        function Ic(b, c) {
            y = 0;
            rc(b);
            if (u & 2 && (lb > 0 && s == q - 1 || lb < 0 && !s)) u = 0;
            a.j(i.Fe, s, c)
        }

        function mc(a, d, e) {
            if (!(C & 1)) {
                a = c.max(0, a);
                a = c.min(a, q - L + D);
                a = c.round(a)
            }
            a = t(a);
            b.c(gb, function (b) {
                b.kc(a, d, e)
            })
        }

        function Bc() {
            var b = i.rd || 0, a = mb;
            i.rd |= a;
            return Y = a & ~b
        }

        function zc() {
            if (Y) {
                i.rd &= ~mb;
                Y = 0
            }
        }

        function pc() {
            var a = b.uc();
            b.K(a, kb);
            return a
        }

        function t(b, a) {
            a = a || q || 1;
            return (b % a + a) % a
        }

        function Kb(c, a, b) {
            u & 8 && (u = 0);
            xb(c, tb, a, b)
        }

        function Bb() {
            b.c(gb, function (a) {
                a.gc(a.Ob.kg <= M)
            })
        }

        function tc() {
            if (!M) {
                M = 1;
                Bb();
                if (!A) {
                    H & 12 && Xb();
                    H & 3 && B[s] && B[s].Fc()
                }
            }
            a.j(i.Ee)
        }

        function sc() {
            if (M) {
                M = 0;
                Bb();
                A || !(H & 12) || Yb()
            }
            a.j(i.De)
        }

        function uc() {
            b.c(hb, function (a) {
                b.K(a, kb);
                b.vc(a, "hidden");
                b.S(a)
            });
            b.K(X, kb)
        }

        function Cb(b, a) {
            xb(b, a, d)
        }

        function xb(l, f, m, o) {
            if (!A && (M || !(H & 12)) || n.Fd) {
                bb = d;
                A = k;
                z.eb();
                if (f == h) f = tb;
                var b = t(nb.jb()), e = l;
                if (m) {
                    e = b + l;
                    e = c.round(e)
                }
                var a = e;
                if (!(C & 1)) {
                    if (o) a = t(a); else if (C & 2 && (a < 0 && c.abs(b - F) < .0001 || a > q - L && c.abs(b - N) < .0001)) a = a < 0 ? N : F;
                    a = Mb(a);
                    if (N - a < .5) a = N;
                    if (a - F < .5) a = F
                }
                var j = (a - b) % q;
                a = b + j;
                var g = b == a ? 0 : f * c.abs(j), i = 1;
                if (Q > 1) i = (U & 1 ? Ab : zb) / S;
                g = c.min(g, f * i * 1.5);
                z.jc(b, a, g || 1)
            }
        }

        a.rb = function (a) {
            if (a == h) return u;
            if (a != u) {
                u = a;
                u && B[s] && B[s].Fc()
            }
        };
        a.V = function () {
            return K
        };
        a.kb = function () {
            return P
        };
        a.Ne = function (b) {
            if (b == h) return Db || K;
            a.Fb(b, b / K * P)
        };
        a.Fb = function (c, a, d) {
            b.n(v, c);
            b.p(v, a);
            Vb = c / K;
            nc = a / P;
            b.c(ec, function (a) {
                a.Fb(Vb, nc, d)
            });
            if (!Db) {
                b.Ab(ab, x);
                b.C(ab, 0);
                b.E(ab, 0)
            }
            Db = c
        };
        a.Jd = function (a) {
            return c.abs(a - F) < .0001
        };
        a.Ld = function (a) {
            return c.abs(a - N) < .0001
        };
        a.Qc = function () {
            a.rb(u || 1)
        };
        a.Nb = function (A, m) {
            a.O = v = b.ob(A);
            K = b.n(v);
            P = b.p(v);
            n = b.M({
                pb: 0,
                Wf: 1,
                Eb: 1,
                Dc: 0,
                rb: 0,
                Ub: 1,
                Ec: d,
                Fd: d,
                Ze: 1,
                Kc: 3e3,
                Mc: 1,
                xc: 500,
                lc: e.Vc,
                dd: 20,
                ad: 0,
                Ye: 1,
                Ic: 1,
                Jc: 1
            }, m);
            n.Ec = n.Ec && b.Xf();
            if (n.We != h) n.Kc = n.We;
            if (n.Ve != h) n.Yb = n.Ve;
            if (n.Ue != h) n.fd = n.Ue;
            U = n.Ic & 3;
            ob = n.jg;
            db = b.M({I: r}, n.Te);
            yb = n.Se;
            cb = n.Re;
            W = n.gg;
            !n.Ye;
            var s = b.tb(v);
            b.c(s, function (a, d) {
                var c = b.m(a, "u");
                if (c == "loading") X = a; else {
                    if (c == "slides") x = a;
                    if (c == "navigator") Gb = a;
                    if (c == "arrowleft") Jb = a;
                    if (c == "arrowright") Ib = a;
                    if (c == "thumbnavigator") pb = a;
                    if (a.tagName != "STYLE" && a.tagName != "SCRIPT") ec[c || d] = new wc(a, c == "slides", b.Gc(["slides", "thumbnavigator"])[c])
                }
            });
            X = X || b.uc(j);
            Ab = b.n(x);
            zb = b.p(x);
            J = n.Sd || Ab;
            I = n.Xd || zb;
            kb = {G: J, D: I, i: 0, g: 0, Pb: "block", R: "absolute"};
            fb = n.ad;
            vb = J + fb;
            wb = I + fb;
            S = U & 1 ? vb : wb;
            var i = U & 1 ? Ab : zb;
            lb = n.Ze;
            H = n.Mc;
            hc = n.Kc;
            tb = n.xc;
            Hb = new yc;
            if (n.Ec && (!b.bg() || sb)) Qb = function (a, c, d) {
                b.Qb(a, {gb: c, hb: d})
            };
            u = n.rb & 63;
            a.Ob = m;
            b.B(v, Ob, "1");
            b.s(x, b.s(x) || 0);
            b.zb(x, "absolute");
            ab = b.xb(x, d);
            b.Ab(ab, x);
            ib = new Ec;
            b.cb(ab, ib.zc);
            b.vc(x, "hidden");
            H &= sb ? 10 : 5;
            var y = b.tb(x), R = b.Gc(["DIV", "A", "LI"]);
            b.c(y, function (a) {
                R[a.tagName.toUpperCase()] && !b.m(a, "u") && hb.push(a);
                b.s(a, (b.s(a) || 0) + 1)
            });
            V = pc();
            b.ib(V, "backgroundColor", "#000");
            b.hc(V, 0);
            b.s(V, 0);
            b.Ab(V, x.firstChild, x);
            q = hb.length;
            var o = c.ceil((i + fb) / S);
            if (n.Yb) o = n.Yb;
            Q = c.min(q, o);
            L = (i + fb) / S;
            kc = Q < q;
            C = kc ? n.Ub : 0;
            if (q) {
                uc();
                O = n.fd;
                if (O == h) {
                    var w = U & 1 ? J : I;
                    O = (i - w) / 2
                }
                if (q < L) {
                    O = 0;
                    L = q;
                    Lb = (i - S * q + fb) / 2
                }
                if (ob) {
                    Wb = ob.lg;
                    Pb = ob.I;
                    ic = !O && Q == 1 && q > 1 && Pb && (!b.wd() || b.hd() >= 9)
                }
                if (!(C & 1)) {
                    D = O / S;
                    if (D > q - 1) {
                        D = q - 1;
                        O = D * S
                    }
                    F = D;
                    N = F + q - L
                }
                mb = (Q > 1 || O ? U : -1) & n.Jc;
                Fb.md && b.ib(x, Fb.md, ([f, "pan-y", "pan-x", "none"])[mb] || "");
                if (ic) E = new Pb(Hb, J, I, ob, sb, Qb);
                for (var k = 0; k < hb.length; k++) {
                    var G = hb[k], M = new Dc(G, k);
                    B.push(M)
                }
                b.S(X);
                nb = new Fc;
                z = new xc(nb, ib);
                b.a(v, "click", vc, d);
                b.a(v, "mouseleave", tc);
                b.a(v, "mouseenter", sc);
                b.a(v, "mousedown", qc);
                b.a(v, "touchstart", Ac);
                b.a(v, "dragstart", Zb);
                b.a(v, "selectstart", Zb);
                b.a(g, "mouseup", jb);
                b.a(j, "mouseup", jb);
                b.a(j, "touchend", jb);
                b.a(j, "touchcancel", jb);
                b.a(g, "blur", jb);
                if (Gb && yb) {
                    jc = new yb.I(Gb, yb, K, P);
                    gb.push(jc)
                }
                if (cb && Jb && Ib) {
                    cb.Ub = C;
                    lc = new cb.I(Jb, Ib, cb, K, P, a);
                    gb.push(lc)
                }
                if (pb && W) {
                    W.Dc = n.Dc;
                    W.Eb = W.Eb || 0;
                    fc = new W.I(pb, W);
                    !W.fg && b.B(pb, bc, "1");
                    gb.push(fc)
                }
                b.c(gb, function (a) {
                    a.Zb(q, B, X);
                    a.Cb(p.Bc, Kb)
                });
                b.ib(v, "visibility", "visible");
                a.Fb(K, P);
                Bb();
                n.Eb && b.a(j, "keydown", function (a) {
                    if (a.keyCode == 37) Kb(-n.Eb, d); else a.keyCode == 39 && Kb(n.Eb, d)
                });
                var l = n.Dc;
                l = t(l);
                xb(l, 0)
            }
        };
        b.Nb(a)
    };
    i.sf = 21;
    i.He = 22;
    i.rf = 23;
    i.Gf = 24;
    i.Ff = 25;
    i.wf = 26;
    i.Rf = 27;
    i.Ie = 28;
    i.De = 31;
    i.Ee = 32;
    i.Hf = 202;
    i.Fe = 203;
    i.Le = 206;
    i.Ke = 207;
    i.Je = 208;
    i.Ed = 209;
    jssor_1_slider_init = function () {
        var f = [[{b: -1, d: 1, o: -.7}], [{b: 900, d: 2e3, x: -379, e: {x: 7}}], [{
                b: 900,
                d: 2e3,
                x: -379,
                e: {x: 7}
            }], [{b: -1, d: 1, o: -1, sX: 2, sY: 2}, {
                b: 0,
                d: 900,
                x: -171,
                y: -341,
                o: 1,
                sX: -2,
                sY: -2,
                e: {x: 3, y: 3, sX: 3, sY: 3}
            }, {b: 900, d: 1600, x: -283, o: -1, e: {x: 16}}]],
            h = {rb: 1, xc: 800, lc: e.yd, fd: 0, Te: {I: u, dc: f}, Re: {I: t}, Se: {I: s}},
            d = new i("jssor_1", h), j = 3e3;

        function a() {
            var e = d.O.parentNode, b = e.clientWidth;
            if (b) {
                var f = c.min(j || b, b);
                d.Ne(f)
            } else g.setTimeout(a, 30)
        }

        a();
        b.a(g, "load", a);
        b.a(g, "resize", a);
        b.a(g, "orientationchange", a)
    }
}(window, document, Math, null, true, false)