/**
 * Addax 2.0 front-end behaviour: scrolled header state, back-to-top, reveal on scroll.
 * Vanilla JS, no dependencies.
 */
( function () {
	'use strict';

	var root = document.documentElement;
	var body = document.body;
	var toTop = document.querySelector( '.addax-to-top' );
	var ticking = false;

	function onScroll() {
		var y = window.scrollY || window.pageYOffset;
		body.classList.toggle( 'addax-is-scrolled', y > 24 );
		if ( toTop ) {
			toTop.classList.toggle( 'is-visible', y > 600 );
		}
		ticking = false;
	}

	window.addEventListener(
		'scroll',
		function () {
			if ( ! ticking ) {
				window.requestAnimationFrame( onScroll );
				ticking = true;
			}
		},
		{ passive: true }
	);
	onScroll();

	// Expose the header height for blocks that sit under an overlay header.
	var header = document.querySelector( '.addax-header' );
	if ( header && 'ResizeObserver' in window ) {
		new window.ResizeObserver( function () {
			root.style.setProperty( '--addax-header-h', header.offsetHeight + 'px' );
		} ).observe( header );
	}

	if ( toTop ) {
		toTop.addEventListener( 'click', function ( event ) {
			event.preventDefault();
			window.scrollTo( { top: 0, behavior: window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches ? 'auto' : 'smooth' } );
			var target = document.getElementById( 'wp--skip-link--target' );
			if ( target ) {
				target.setAttribute( 'tabindex', '-1' );
				target.focus( { preventScroll: true } );
			}
		} );
	}

	// Reveal on scroll.
	var reveal = document.querySelectorAll( '.addax-reveal, .addax-reveal-stagger > *' );
	if ( ! reveal.length ) {
		return;
	}
	document.querySelectorAll( '.addax-reveal-stagger > *' ).forEach( function ( el ) {
		el.classList.add( 'addax-reveal' );
	} );

	if ( ! ( 'IntersectionObserver' in window ) || body.classList.contains( 'addax-no-reveal' ) ) {
		reveal.forEach( function ( el ) {
			el.classList.add( 'is-revealed' );
		} );
		return;
	}

	var observer = new window.IntersectionObserver(
		function ( entries ) {
			entries.forEach( function ( entry ) {
				if ( entry.isIntersecting ) {
					entry.target.classList.add( 'is-revealed' );
					observer.unobserve( entry.target );
				}
			} );
		},
		{ rootMargin: '0px 0px -8% 0px', threshold: 0.12 }
	);
	reveal.forEach( function ( el ) {
		observer.observe( el );
	} );
} )();
