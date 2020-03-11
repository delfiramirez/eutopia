
//* javascript_assets */

<script type="text/javascript" src="js/fade.min.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>

<script type="text/javascript">

    function toggle_visibility(id) {
    var e = document.getElementById(id);
    if (e.style.display == 'none')
            e.style.display = 'block';
    else
            e.style.display = 'none';
    }

//* script @ungap/event-target  (c) Andrea Giammarchi - ISC */
    var self = this || {}; try{self.EventTarget = (new EventTarget).constructor}; catch (e){!function(e, o){var t = e.create, r = e.defineProperty, n = i.prototype; function i(){"use strict"; o.set(this, t(null))}function s(e, t, n){r(e, t, {configurable:!0, writable:!0, value:n})}function a(e){var t = e.options; t && t.once && e.target.removeEventListener(this.type, e.listener), "function" == typeof e.listener?e.listener.call(e.target, this):e.listener.handleEvent(this)}s(n, "addEventListener", function(e, t, n){for (var r = o.get(this), i = r[e] || (r[e] = []), s = 0, a = i.length; s < a; s++)if (i[s].listener === t)return; i.push({target:this, listener:t, options:n})}), s(n, "dispatchEvent", function(e){var t = o.get(this)[e.type]; return t && (s(e, "target", this), s(e, "currentTarget", this), t.slice(0).forEach(a, e), delete e.currentTarget, delete e.target), !0}), s(n, "removeEventListener", function(e, t){for (var n = o.get(this), r = n[e] || (n[e] = []), i = 0, s = r.length; i < s; i++)if (r[i].listener === t)return void r.splice(i, 1)}), self.EventTarget = i}(Object, new WeakMap)}


    document.querySelector('main'); // css div selector
            .removeAttribute('hidden');
    
    function toggleMenu () {
    document.getElementById('menu').toggleAttribute('hidden');
    document.getElementById('m-t').classList.toggle('open');
    }

    document.getElementById('m-t') // css 
            .addEventListener('click', () => {
            document.getElementById('m-t').blur();
            updateMenuSettings(settings);
            toggleMenu();
            });

</script>

