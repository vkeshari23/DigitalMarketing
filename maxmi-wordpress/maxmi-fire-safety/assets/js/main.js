/* =========================================================================
   MAX MI Fire Safety Solution — front-end interactions
   ========================================================================= */
(function () {
	'use strict';

	/* ---------- Page loader ---------- */
	var loader = document.getElementById('maxmiLoader');
	function hideLoader() {
		if (loader) {
			loader.classList.add('is-done');
			window.setTimeout(function () {
				if (loader && loader.parentNode) { loader.style.display = 'none'; }
			}, 600);
		}
	}
	window.addEventListener('load', function () { window.setTimeout(hideLoader, 500); });
	// Safety net: never keep the loader forever.
	window.setTimeout(hideLoader, 3500);

	document.addEventListener('DOMContentLoaded', function () {

		/* ---------- Header shadow on scroll ---------- */
		var header = document.getElementById('site-header');
		function onScroll() {
			if (header) { header.classList.toggle('is-scrolled', window.scrollY > 20); }
			var top = document.getElementById('maxmiToTop');
			if (top) { top.classList.toggle('is-visible', window.scrollY > 400); }
		}
		window.addEventListener('scroll', onScroll, { passive: true });
		onScroll();

		/* ---------- Mobile drawer ---------- */
		var burger = document.getElementById('maxmiBurger');
		var drawer = document.getElementById('maxmiDrawer');
		var backdrop = document.getElementById('maxmiBackdrop');
		var closeBtn = document.getElementById('maxmiDrawerClose');

		function openDrawer() {
			if (!drawer) return;
			drawer.classList.add('is-open');
			if (backdrop) backdrop.classList.add('is-open');
			if (burger) burger.setAttribute('aria-expanded', 'true');
			document.body.style.overflow = 'hidden';
		}
		function closeDrawer() {
			if (!drawer) return;
			drawer.classList.remove('is-open');
			if (backdrop) backdrop.classList.remove('is-open');
			if (burger) burger.setAttribute('aria-expanded', 'false');
			document.body.style.overflow = '';
		}
		if (burger) burger.addEventListener('click', openDrawer);
		if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
		if (backdrop) backdrop.addEventListener('click', closeDrawer);
		if (drawer) {
			drawer.querySelectorAll('a').forEach(function (a) {
				var li = a.parentNode;
				var isParent = li && li.classList && li.classList.contains('menu-item-has-children') && li.querySelector('.sub-menu');
				if (isParent) {
					// Tapping Products / Services toggles its dropdown instead of navigating.
					a.addEventListener('click', function (e) {
						e.preventDefault();
						var wasOpen = li.classList.contains('is-open');
						// close only same-level siblings (keeps parent menus open for nested items)
						Array.prototype.forEach.call(li.parentNode.children, function (sib) {
							if (sib !== li && sib.classList && sib.classList.contains('is-open')) {
								sib.classList.remove('is-open');
							}
						});
						li.classList.toggle('is-open', !wasOpen);
					});
				} else {
					// Real navigation links close the drawer.
					a.addEventListener('click', closeDrawer);
				}
			});
		}
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape') closeDrawer();
		});

		/* ---------- Back to top ---------- */
		var toTop = document.getElementById('maxmiToTop');
		if (toTop) {
			toTop.addEventListener('click', function () {
				window.scrollTo({ top: 0, behavior: 'smooth' });
			});
		}

		/* ---------- Scroll reveal ---------- */
		var reveals = document.querySelectorAll('[data-reveal]');
		if ('IntersectionObserver' in window && reveals.length) {
			var io = new IntersectionObserver(function (entries) {
				entries.forEach(function (entry, i) {
					if (entry.isIntersecting) {
						var el = entry.target;
						// gentle stagger for grids
						var delay = Math.min((Array.prototype.indexOf.call(el.parentNode.children, el) % 6) * 70, 420);
						window.setTimeout(function () { el.classList.add('is-in'); }, delay);
						io.unobserve(el);
					}
				});
			}, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
			reveals.forEach(function (el) { io.observe(el); });
		} else {
			reveals.forEach(function (el) { el.classList.add('is-in'); });
		}

		/* ---------- Stat counters ---------- */
		var counters = document.querySelectorAll('[data-count]');
		function animateCount(el) {
			var target = parseInt(el.getAttribute('data-count'), 10) || 0;
			var suffix = el.getAttribute('data-suffix') || '';
			var dur = 1600, start = null;
			function step(ts) {
				if (!start) start = ts;
				var p = Math.min((ts - start) / dur, 1);
				var eased = 1 - Math.pow(1 - p, 3);
				el.textContent = Math.floor(eased * target).toLocaleString() + suffix;
				if (p < 1) requestAnimationFrame(step);
				else el.textContent = target.toLocaleString() + suffix;
			}
			requestAnimationFrame(step);
		}
		if ('IntersectionObserver' in window && counters.length) {
			var cio = new IntersectionObserver(function (entries) {
				entries.forEach(function (entry) {
					if (entry.isIntersecting) { animateCount(entry.target); cio.unobserve(entry.target); }
				});
			}, { threshold: 0.4 });
			counters.forEach(function (el) { cio.observe(el); });
		}

		/* ---------- Desktop flyout: flip to the left near the screen edge ---------- */
		document.querySelectorAll('.maxmi-menu__list .sub-menu > li.menu-item-has-children').forEach(function (li) {
			li.addEventListener('mouseenter', function () {
				var fly = li.querySelector('.sub-menu');
				if (!fly) return;
				fly.classList.remove('is-flipped');
				var rect = li.getBoundingClientRect();
				var width = fly.offsetWidth || 250;
				if (rect.right + width + 20 > window.innerWidth) {
					fly.classList.add('is-flipped');
				}
			});
		});

		/* ---------- Auto-sliding hero banner (no controls) ---------- */
		var banner = document.getElementById('maxmiBanner');
		if (banner) {
			var bslides = banner.querySelectorAll('.maxmi-banner__slide');
			var bcaps = banner.querySelectorAll('.maxmi-banner__caption');
			if (bslides.length > 1) {
				var bi = 0;
				window.setInterval(function () {
					bslides[bi].classList.remove('is-active');
					if (bcaps[bi]) bcaps[bi].classList.remove('is-active');
					bi = (bi + 1) % bslides.length;
					bslides[bi].classList.add('is-active');
					if (bcaps[bi]) bcaps[bi].classList.add('is-active');
				}, 5000);
			}
		}

		/* ---------- Scroll progress bar ---------- */
		var progress = document.getElementById('maxmiProgress');
		if (progress) {
			var onProg = function () {
				var h = document.documentElement;
				var max = (h.scrollHeight - h.clientHeight) || 1;
				progress.style.width = (window.scrollY / max * 100) + '%';
			};
			window.addEventListener('scroll', onProg, { passive: true });
			onProg();
		}

		/* ---------- Testimonials slider ---------- */
		var slider = document.getElementById('maxmiTesti');
		if (slider) {
			var slides = slider.querySelectorAll('.maxmi-testi');
			var dotsWrap = slider.querySelector('.maxmi-testi-dots');
			var idx = 0, timer;
			if (slides.length > 1 && dotsWrap) {
				slides.forEach(function (s, i) {
					var b = document.createElement('button');
					b.setAttribute('aria-label', 'Testimonial ' + (i + 1));
					if (i === 0) b.classList.add('is-active');
					b.addEventListener('click', function () { go(i); reset(); });
					dotsWrap.appendChild(b);
				});
				var dots = dotsWrap.querySelectorAll('button');
				function go(n) {
					slides[idx].classList.remove('is-active');
					dots[idx].classList.remove('is-active');
					idx = (n + slides.length) % slides.length;
					slides[idx].classList.add('is-active');
					dots[idx].classList.add('is-active');
				}
				function next() { go(idx + 1); }
				function reset() { window.clearInterval(timer); timer = window.setInterval(next, 5000); }
				reset();
			}
		}
	});
})();
