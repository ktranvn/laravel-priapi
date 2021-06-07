<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.png" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Web site created using create-react-app" />
    <link rel="apple-touch-icon" href="/favicon.png" />
    <link rel="manifest" href="/manifest.json" />
    <title>Private API Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/vendor/ktran/priapi/assets/styles/styles.css" />
    <style>
        input:focus,
        select:focus,
        textarea:focus {
            outline-color: initial;
            outline-style: initial;
            outline-width: 0
        }

    </style>
    <script>
        var _baseUrl = "{{url('')}}",
            _a = "{{$_token}}",
            _b = "{{$_secretKey}}"

    </script>
    <link href="/vendor/ktran/priapi/static/css/main.6dea0f05.chunk.css" rel="stylesheet">
</head>

<body><noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root"></div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous ">
    </script>
    <script>
        ! function (e) {
            function r(r) {
                for (var n, a, i = r[0], c = r[1], l = r[2], s = 0, p = []; s < i.length; s++) a = i[s], Object
                    .prototype.hasOwnProperty.call(o, a) && o[a] && p.push(o[a][0]), o[a] = 0;
                for (n in c) Object.prototype.hasOwnProperty.call(c, n) && (e[n] = c[n]);
                for (f && f(r); p.length;) p.shift()();
                return u.push.apply(u, l || []), t()
            }

            function t() {
                for (var e, r = 0; r < u.length; r++) {
                    for (var t = u[r], n = !0, i = 1; i < t.length; i++) {
                        var c = t[i];
                        0 !== o[c] && (n = !1)
                    }
                    n && (u.splice(r--, 1), e = a(a.s = t[0]))
                }
                return e
            }
            var n = {},
                o = {
                    1: 0
                },
                u = [];

            function a(r) {
                if (n[r]) return n[r].exports;
                var t = n[r] = {
                    i: r,
                    l: !1,
                    exports: {}
                };
                return e[r].call(t.exports, t, t.exports, a), t.l = !0, t.exports
            }
            a.e = function (e) {
                var r = [],
                    t = o[e];
                if (0 !== t)
                    if (t) r.push(t[2]);
                    else {
                        var n = new Promise((function (r, n) {
                            t = o[e] = [r, n]
                        }));
                        r.push(t[2] = n);
                        var u, i = document.createElement("script");
                        i.charset = "utf-8", i.timeout = 120, a.nc && i.setAttribute("nonce", a.nc), i.src =
                            function (e) {
                                return a.p + "static/js/" + ({} [e] || e) + "." + {
                                    3: "2969a6ab"
                                } [e] + ".chunk.js"
                            }(e);
                        var c = new Error;
                        u = function (r) {
                            i.onerror = i.onload = null, clearTimeout(l);
                            var t = o[e];
                            if (0 !== t) {
                                if (t) {
                                    var n = r && ("load" === r.type ? "missing" : r.type),
                                        u = r && r.target && r.target.src;
                                    c.message = "Loading chunk " + e + " failed.\n(" + n + ": " + u + ")", c
                                        .name = "ChunkLoadError", c.type = n, c.request = u, t[1](c)
                                }
                                o[e] = void 0
                            }
                        };
                        var l = setTimeout((function () {
                            u({
                                type: "timeout",
                                target: i
                            })
                        }), 12e4);
                        i.onerror = i.onload = u, document.head.appendChild(i)
                    } return Promise.all(r)
            }, a.m = e, a.c = n, a.d = function (e, r, t) {
                a.o(e, r) || Object.defineProperty(e, r, {
                    enumerable: !0,
                    get: t
                })
            }, a.r = function (e) {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module"
                }), Object.defineProperty(e, "__esModule", {
                    value: !0
                })
            }, a.t = function (e, r) {
                if (1 & r && (e = a(e)), 8 & r) return e;
                if (4 & r && "object" == typeof e && e && e.__esModule) return e;
                var t = Object.create(null);
                if (a.r(t), Object.defineProperty(t, "default", {
                        enumerable: !0,
                        value: e
                    }), 2 & r && "string" != typeof e)
                    for (var n in e) a.d(t, n, function (r) {
                        return e[r]
                    }.bind(null, n));
                return t
            }, a.n = function (e) {
                var r = e && e.__esModule ? function () {
                    return e.default
                } : function () {
                    return e
                };
                return a.d(r, "a", r), r
            }, a.o = function (e, r) {
                return Object.prototype.hasOwnProperty.call(e, r)
            }, a.p = "/", a.oe = function (e) {
                throw console.error(e), e
            };
            var i = this.webpackJsonpSeoulEnergy = this.webpackJsonpSeoulEnergy || [],
                c = i.push.bind(i);
            i.push = r, i = i.slice();
            for (var l = 0; l < i.length; l++) r(i[l]);
            var f = c;
            t()
        }([])

    </script>
    <script src="/vendor/ktran/priapi/static/js/2.32c381a8.chunk.js"></script>
    <script src="/vendor/ktran/priapi/static/js/main.c1aef628.chunk.js"></script>
</body>

</html>
