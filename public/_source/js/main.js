/* jQuery livequery Version: 1.1.1 */
(function (e) {
    e.extend(e.fn, {
        livequery: function (t, n, r) {
            var i = this, s;
            if (e.isFunction(t))r = n, n = t, t = undefined;
            e.each(e.livequery.queries, function (e, o) {
                if (i.selector == o.selector && i.context == o.context && t == o.type && (!n || n.$lqguid == o.fn.$lqguid) && (!r || r.$lqguid == o.fn2.$lqguid))return (s = o) && false
            });
            s = s || new e.livequery(this.selector, this.context, t, n, r);
            s.stopped = false;
            s.run();
            return this
        }, expire: function (t, n, r) {
            var i = this;
            if (e.isFunction(t))r = n, n = t, t = undefined;
            e.each(e.livequery.queries, function (s, o) {
                if (i.selector == o.selector && i.context == o.context && (!t || t == o.type) && (!n || n.$lqguid == o.fn.$lqguid) && (!r || r.$lqguid == o.fn2.$lqguid) && !this.stopped)e.livequery.stop(o.id)
            });
            return this
        }
    });
    e.livequery = function (t, n, r, i, s) {
        this.selector = t;
        this.context = n;
        this.type = r;
        this.fn = i;
        this.fn2 = s;
        this.elements = [];
        this.stopped = false;
        this.id = e.livequery.queries.push(this) - 1;
        i.$lqguid = i.$lqguid || e.livequery.guid++;
        if (s)s.$lqguid = s.$lqguid || e.livequery.guid++;
        return this
    };
    e.livequery.prototype = {
        stop: function () {
            var e = this;
            if (this.type)this.elements.unbind(this.type, this.fn); else if (this.fn2)this.elements.each(function (t, n) {
                e.fn2.apply(n)
            });
            this.elements = [];
            this.stopped = true
        }, run: function () {
            if (this.stopped)return;
            var t = this;
            var n = this.elements, r = e(this.selector, this.context), i = r.not(n);
            this.elements = r;
            if (this.type) {
                i.bind(this.type, this.fn);
                if (n.length > 0)e.each(n, function (n, i) {
                    if (e.inArray(i, r) < 0)e.event.remove(i, t.type, t.fn)
                })
            } else {
                i.each(function () {
                    t.fn.apply(this)
                });
                if (this.fn2 && n.length > 0)e.each(n, function (n, i) {
                    if (e.inArray(i, r) < 0)t.fn2.apply(i)
                })
            }
        }
    };
    e.extend(e.livequery, {
        guid: 0, queries: [], queue: [], running: false, timeout: null, checkQueue: function () {
            if (e.livequery.running && e.livequery.queue.length) {
                var t = e.livequery.queue.length;
                while (t--)e.livequery.queries[e.livequery.queue.shift()].run()
            }
        }, pause: function () {
            e.livequery.running = false
        }, play: function () {
            e.livequery.running = true;
            e.livequery.run()
        }, registerPlugin: function () {
            e.each(arguments, function (t, n) {
                if (!e.fn[n])return;
                var r = e.fn[n];
                e.fn[n] = function () {
                    var t = r.apply(this, arguments);
                    e.livequery.run();
                    return t
                }
            })
        }, run: function (t) {
            if (t != undefined) {
                if (e.inArray(t, e.livequery.queue) < 0)e.livequery.queue.push(t)
            } else e.each(e.livequery.queries, function (t) {
                if (e.inArray(t, e.livequery.queue) < 0)e.livequery.queue.push(t)
            });
            if (e.livequery.timeout)clearTimeout(e.livequery.timeout);
            e.livequery.timeout = setTimeout(e.livequery.checkQueue, 20)
        }, stop: function (t) {
            if (t != undefined)e.livequery.queries[t].stop(); else e.each(e.livequery.queries, function (t) {
                e.livequery.queries[t].stop()
            })
        }
    });
    e.livequery.registerPlugin("append", "prepend", "after", "before", "wrap", "attr", "removeAttr", "addClass", "removeClass", "toggleClass", "empty", "remove", "html");
    e(function () {
        e.livequery.play()
    })
})(jQuery);


(function ($) {
    var utils = {

        init: function () {
            this.ui.init();
            this.route.init();
        },

        ui: {

            init: function () {
                utils.ui.inlinePopup();
                utils.ui.dataTable();
                utils.ui.listItem();
            },

            inlinePopup: function () {
                if(!$('.open-popup-link')[0]) return;
                $('.open-popup-link').magnificPopup({
                    type:'inline',
                    midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
                });
            },

            dataTable: function () {

                $('#table-anchor').DataTable();

            },

            listItem: function () {

                $('.list-tre > ul > li.has-dropdown > a').on('click', function (e) {
                    e.preventDefault();
                    var $this = $(this);

                    if ($this.hasClass('open')) {
                        $this.toggleClass('open');
                        $this.next().slideToggle();
                    } else {
                        $('.list-tre ul li a.open').next().slideToggle();
                        $('.list-tre ul li a').removeClass('open');
                        $this.toggleClass('open');
                        $this.next().slideToggle();
                    }
                });

            },


        },
        route: {
            init: function () {
                this.addpage();
            },
            addpage: function () {
                $('.rich_editor').trumbowyg({
                    autogrow: true,
                    autogrowOnEnter: true,
                });
            }
        }

    }

    $(document).ready(function () {
        utils.init();
    });

})(jQuery);

