google.maps.__gjsload__('stats', function(_) {
    var p_ = function() {
            this.b = new _.Yk
        },
        q_ = function(a) {
            var b = 0,
                c = 0;
            a.b.forEach(function(a) {
                b += a.Go;
                c += a.co
            });
            return c ? b / c : 0
        },
        r_ = function(a, b, c) {
            var d = [];
            _.Ib(a, function(a, c) {
                d.push(c + b + a)
            });
            return d.join(c)
        },
        s_ = function(a) {
            var b = {};
            _.Ib(a, function(a, d) {
                b[(0, window.encodeURIComponent)(d)] = (0, window.encodeURIComponent)(a).replace(/%7C/g, "|")
            });
            return r_(b, ":", ",")
        },
        t_ = function(a, b, c) {
            this.l = b;
            this.f = a + "/maps/gen_204";
            this.j = c
        },
        u_ = function(a, b, c, d) {
            var e = {};
            e.host = window.document.location && window.document.location.host ||
                window.location.host;
            e.v = a;
            e.r = Math.round(1 / b);
            c && (e.client = c);
            d && (e.key = d);
            return e
        },
        v_ = function(a, b, c, d, e) {
            this.m = a;
            this.C = b;
            this.l = c;
            this.f = d;
            this.j = e;
            this.b = new _.Yk;
            this.B = _.Na()
        },
        x_ = function(a, b, c, d, e) {
            var f = _.O(_.R, 23, 500);
            var g = _.O(_.R, 22, 2);
            this.D = a;
            this.F = b;
            this.G = f;
            this.l = g;
            this.C = c;
            this.m = d;
            this.B = e;
            this.f = new _.Yk;
            this.b = 0;
            this.j = _.Na();
            w_(this)
        },
        w_ = function(a) {
            window.setTimeout(function() {
                y_(a);
                w_(a)
            }, Math.min(a.G * Math.pow(a.l, a.b), 2147483647))
        },
        z_ = function(a, b, c) {
            a.f.set(b, c)
        },
        y_ = function(a) {
            var b =
                u_(a.F, a.C, a.m, a.B);
            b.t = a.b + "-" + (_.Na() - a.j);
            a.f.forEach(function(a, d) {
                a = a();
                0 < a && (b[d] = Number(a.toFixed(2)) + (_.ym() ? "-if" : ""))
            });
            a.D.b({
                ev: "api_snap"
            }, b);
            ++a.b
        },
        A_ = function(a, b, c, d, e) {
            this.B = a;
            this.C = b;
            this.m = c;
            this.j = d;
            this.l = e;
            this.f = {};
            this.b = []
        },
        B_ = function(a, b, c, d) {
            this.j = a;
            _.A.bind(this.j, "set_at", this, this.l);
            _.A.bind(this.j, "insert_at", this, this.l);
            this.B = b;
            this.C = c;
            this.m = d;
            this.f = 0;
            this.b = {};
            this.l()
        },
        C_ = function() {
            this.j = _.P(_.R, 6);
            this.C = _.qf();
            this.b = new t_(_.jg[35] ? _.P(_.rf(_.R), 11) :
                _.hw, _.aj, window.document);
            new B_(_.Pi, (0, _.p)(this.b.b, this.b), _.wf, !!this.j);
            var a = _.P(new _.kf(_.R.data[3]), 1);
            this.D = a.split(".")[1] || a;
            this.F = {};
            this.B = {};
            this.m = {};
            this.G = {};
            this.fa = _.O(_.R, 0, 1);
            _.$i && (this.l = new x_(this.b, this.D, this.fa, this.j, this.C))
        };
    p_.prototype.f = function(a, b, c) {
        this.b.set(_.Bb(a), {
            Go: b,
            co: c
        })
    };
    t_.prototype.b = function(a, b) {
        b = b || {};
        var c = _.Tj().toString(36);
        b.src = "apiv3";
        b.token = this.l;
        b.ts = c.substr(c.length - 6);
        a.cad = s_(b);
        a = r_(a, "=", "&");
        a = this.f + "?target=api&" + a;
        this.j.createElement("img").src = a;
        (b = _.Qb.__gm_captureCSI) && b(a)
    };
    v_.prototype.D = function(a, b) {
        b = _.m(b) ? b : 1;
        this.b.isEmpty() && window.setTimeout((0, _.p)(function() {
            var a = u_(this.C, this.l, this.f, this.j);
            a.t = _.Na() - this.B;
            var b = this.b;
            _.Zk(b);
            for (var e = {}, f = 0; f < b.b.length; f++) {
                var g = b.b[f];
                e[g] = b.H[g]
            }
            _.Az(a, e);
            this.b.clear();
            this.m.b({
                ev: "api_maprft"
            }, a)
        }, this), 500);
        b = this.b.get(a, 0) + b;
        this.b.set(a, b)
    };
    A_.prototype.D = function(a) {
        this.f[a] || (this.f[a] = !0, this.b.push(a), 2 > this.b.length && _.Kz(this, this.F, 500))
    };
    A_.prototype.F = function() {
        for (var a = u_(this.C, this.m, this.j, this.l), b = 0, c; c = this.b[b]; ++b) a[c] = "1";
        a.hybrid = +_.bm();
        this.b.length = 0;
        this.B.b({
            ev: "api_mapft"
        }, a)
    };
    B_.prototype.l = function() {
        for (var a; a = this.j.removeAt(0);) {
            var b = a.In;
            a = a.timestamp - this.C;
            ++this.f;
            this.b[b] || (this.b[b] = 0);
            ++this.b[b];
            if (20 <= this.f && !(this.f % 5)) {
                var c = {};
                c.s = b;
                c.sr = this.b[b];
                c.tr = this.f;
                c.te = a;
                c.hc = this.m ? "1" : "0";
                this.B({
                    ev: "api_services"
                }, c)
            }
        }
    };
    C_.prototype.T = function(a) {
        a = _.Bb(a);
        this.F[a] || (this.F[a] = new A_(this.b, this.D, this.fa, this.j, this.C));
        return this.F[a]
    };
    C_.prototype.S = function(a) {
        a = _.Bb(a);
        this.B[a] || (this.B[a] = new v_(this.b, this.D, _.O(_.R, 0, 1), this.j, this.C));
        return this.B[a]
    };
    C_.prototype.f = function(a) {
        if (this.l) {
            this.m[a] || (this.m[a] = new _.OA, z_(this.l, a, function() {
                return b.Ua()
            }));
            var b = this.m[a];
            return b
        }
    };
    C_.prototype.O = function(a) {
        if (this.l) {
            this.G[a] || (this.G[a] = new p_, z_(this.l, a, function() {
                return q_(b)
            }));
            var b = this.G[a];
            return b
        }
    };
    var D_ = new C_;
    _.Sc("stats", D_);
});