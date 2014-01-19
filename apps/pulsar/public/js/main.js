jQuery( document ).on( 'ready', ev );

// Called on "ready" event 
function ev( event ) {

	// Main view instance
	var View = Gillie.Handler.extend({

	        initialize: function() {

	        	History.Adapter.bind( window, 'statechange', this.buildBreadcrumb );
	        	this.foundation; // Adding foundation to the project

				i = 0; // Valor dinumeracion div inicial
				pin = 0;
				drawZone = document.getElementById( 'draw-zone' ); 
				// this.drawZone.onmousedown = drawBox;

				
            	this.contextMenu();
            	this.shortcuts;
            	this.themeActions;

				/**
				 * Shortcuts
				 */
				
				Mousetrap.bind( [ 'ctrl+n' ], this.newTheme );
				Mousetrap.bind( [ 'del' ], this.removeBox );
				Mousetrap.bind( [ 'esc' ], this.closeModal );
				Mousetrap.bind( [ 'ctrl+c' ], this.copyBox );
				Mousetrap.bind( [ 'ctrl+x' ], this.cutBox );
				Mousetrap.bind( [ 'ctrl+v' ], this.pasteBox );
				Mousetrap.bind( [ 'ctrl+alt+c' ], this.setDrawer );
				Mousetrap.bind( [ 'ctrl++' ], this.zoomPlus );

				/* Long polling */
				// Long Polling (Recommened Technique - Creates An Open Connection To Server ∴ Fast)
				// (function poll(){
				//     $.ajax({ url: "/", success: function(data){
				//         //Update your dashboard gauge
				//         salesGauge.setValue(data.value);
				//     }, dataType: "json", complete: poll, timeout: 30000 });
				// })();

	        }

	    ,   events: {
	            	// 'mousedown #draw-zone': 'drawBox'
	            	'click .draw-container': 'newBox'	
	            ,	'click .begin': 'newDraw'	
	            ,	'click .draw-image': 'newImage'	
	            ,	'click .draw-film': 'newVideo'	
	            ,	'click .draw-youtube': 'newExternalVideo'	
	            ,	'click .draw-text': 'newText'	
	            ,	'click .newDraw': 'newDrawModal'	
	            ,	'click .close-reveal-modal': 'closeModal'
	            ,	'change .zoom input': 'zoom'
	        }

	        /**
			 * [drawBox Divs Creator Function]
			 * @param  { obj } event [Use de click to begin to draw a box container]
			 * @return { avoid }      this function doesn't return 
			 */
	    ,   drawBox: function( event ) {

	    		realPosition = jQuery( '#draw-zone' ).offset();
				yc = realPosition.top;
				xc = realPosition.left;

		        if ( event.which == 1 ) {
					if ( pin == 0 ) { 
						var x = event.pageX - xc;
						var y = event.pageY - yc;
						switch ( sessionStorage.boxType ) {
							case 'img':
								var div = document.createElement( 'img' );
								div.src = 'http://fc05.deviantart.net/fs6/i/2005/100/1/0/Master_Universe_by_ANTIFAN_REAL.jpg';
							break;
							case 'iframe':
								var div = document.createElement( 'iframe' );
								div.src = '//www.youtube.com/embed/JmcA9LIIXWw';
							break;
							case 'video':
								var div = document.createElement( 'video' );
							break;
							default:
								var div = document.createElement( 'div' );
							break
						}
						jQuery( div ).addClass( 'box pulsar-zone-' + i );
						jQuery( div ).attr( 'boxname', '.pulsar-zone-' + i );
						jQuery( div ).attr( 'boxnumber', i );
						i++;
						div.style.position = 'absolute';
						div.style.zIndex = 3;
						div.style.left = x + 'px';
						div.style.top = y + 'px';
						div.style.backgroundColor = 'rgba(0, 125, 230, .85)';
						drawZone.appendChild( div );
						drawZone.onmousemove = function ( event ) {
							div.style.width = ( event.pageX - xc - x ) + 'px';
							div.style.height = ( event.pageY - yc - y ) + 'px';
						}
						pin = 1;
					}else{
						pin = 0;
						drawZone.onmousemove = false;
						drawZone.onclick = false;
					}
				}

				/**
				 * Attach the content to the action trigger. Use for context menu
				 */
				
				jQuery( '.box' ).bind( 'mousemove', function () {
					sessionStorage.selector = jQuery( this ).attr( 'boxname' );
				});

				jQuery( '.box' ).bind( 'click', function () {
					// pin = 1;
					jQuery( '.box:not(' + sessionStorage.selector + ')').removeClass('selected');
					jQuery( this ).addClass('selected');
					jQuery( '.colors .sub-tools' ).show();
				});

				sessionStorage.theme = jQuery( '.draw-zone' ).html();
				
				Mousetrap.bind( [ 'enter' ], function() {
					// pin = 0;
					jQuery( '.box' ).removeClass('selected').css({ cursor: 'default' });
					jQuery.pep.toggleAll( false );
					jQuery( '.colors .sub-tools' ).hide();
				});
	        }

	        /**
	         * Stop to draw boxes
	         */
	    , 	noDrawBox: function() {
	    		console.log( 'noDrawBox' );
	    		drawZone.onclick = false;
	    		drawZone.onmousemove = false;
	    	}

	        /**
	         * New Draw
	         */
	    , 	newDraw: function( e ) {

	    		e.preventDefault();
	    		// Variables
	    		var drawName = jQuery( 'input[name="theme_name"]' ).val()
	    		,	drawWidth = jQuery( 'input[name="theme_width"]' ).val()
	    		,	drawHeight = jQuery( 'input[name="theme_height"]' ).val()
	    		,	drawZone = jQuery( '.draw-zone' )
	    		,	newDrawAlert = '.new-draw-alert'
	    		,	winWidth = jQuery( window ).width()
	    		,	winHeight = jQuery( window ).height();

	    		if( ! drawName || ! drawWidth || ! drawHeight  ) {

	    			jQuery( newDrawAlert )
	    				.removeClass( 'info' )
	    				.addClass( 'warning' )
	    				.html( 'Pls, complete all the fields.' );

	    			jQuery( '.notifications input[required]' ).each( function() {

	    				if( jQuery( this ).val() == '' ) {
	    					jQuery( this ).addClass( 'danger' );
	    				}

	    				else if( jQuery( this ).val() != '' ) {
	    					jQuery( this ).removeClass( 'danger' );
	    				}
	    			});
	    			return;
	    		}
	    		else if( drawName && drawWidth && drawHeight ) {

	    			jQuery( '.notifications input[required]' ).removeClass( 'danger' )

	    		}


	    		if( jQuery( newDrawAlert ).hasClass( 'warning' ) ) {

	    			jQuery( newDrawAlert )
	    				.addClass( 'info' )
	    				.removeClass( 'warning' )
	    				.html( ' Your draw will be centered on your website. ' );

	    		}

	    		this.closeModal();

	    		jQuery( '#loading' ).show();

	    		// Set the draw-zone
	    		setTimeout( function() {
	    			jQuery( '#loading' ).hide();

	    			jQuery( '.main-panel' ).height( winHeight );

		    		drawZone.css({
		    				height: drawHeight
		    			// ,	marginLeft: - ( drawWidth / 2 + 75 )
		    			,	marginLeft: - ( drawWidth / 2 )
		    			,	marginTop: - ( drawHeight / 2 )
		    			,	width: drawWidth
		    			,	zoom: '100%'
		    		}).show();

		    		if( drawWidth > ( winWidth - 250 ) || drawHeight > ( winHeight - 50 ) ) {
		    			drawZone.css({ 
		    				zoom: '66%'
		    			});
		    		}

		    		jQuery( '.zoom input' ).val( Math.ceil( drawZone.css( 'zoom' ) * 100 ) );

		    		History.pushState( {}, null, '/draw/' + drawName ); // window.location.origin before '/'

	    		},1500);
	    		
	    	}

	        /**
	         * Set drawer
	         */
	    , 	setDrawer: function() {
	    		jQuery( '.notifications' ).foundation('reveal', 'open');
	    	}

	        /**
	         * New Box
	         */
	    , 	newBox: function() {
				sessionStorage.boxType = 'box';
				drawZone.onclick = this.drawBox;
			}

	        /**
	         * New Image
	         */
	    , 	newImage: function() {
				sessionStorage.boxType = 'img';
				drawZone.onclick = this.drawBox;
			}

	        /**
	         * New Video
	         */
	    , 	newVideo: function() {
				sessionStorage.boxType = 'video';
				drawZone.onclick = this.drawBox;
			}

	        /**
	         * New Video from Youtube
	         */
	    , 	newExternalVideo: function() {
				sessionStorage.boxType = 'iframe';
				drawZone.onclick = this.drawBox;
			}

	        /**
	         * New text from font
	         */
	    , 	newText: function() {
				sessionStorage.boxType = 'span';
				drawZone.onclick = this.drawBox;
			}
	
			/**
			 * Use for give border radius to the element
			 */
		,	radius: function ( e ) {
				e.preventDefault();
				this.noDrawBox;
				var el = jQuery( sessionStorage.selector );
				el.css({
					borderRadius : '50%'
				});
			}

			/**
			 * Use for remove an specific element from the drawer-zone
			 */
		,	removeBox: function ( e ) {
				// e.preventDefault();
				this.noDrawBox;
				var el = jQuery( '.selected' );
				el.remove();
			}

			/**
			 * Use for move an specific element from the drawer-zone
			 */
		,	moveBox: function ( e ) {
				e.preventDefault();
				this.noDrawBox;
				jQuery.pep.toggleAll( true );
				var el = jQuery( '.selected' );
				el.css({
					cursor: 'move'
				});
				el.pep({
					droppable:   '.box',
				  	// drag: function(ev, obj){
				  	// }
				});
			}

			/**
			 * Use for move an specific element from the drawer-zone
			 */
		,	cloneBox: function ( e ) {
				e.preventDefault();
				this.noDrawBox;
				var el = jQuery( '.selected' )
				,	valNumber = parseInt( el.attr( 'boxnumber' ) )
				,	nextVal = parseInt( el.attr( 'boxnumber' ) ) + 1;

				el.clone().attr( { 'boxname': '.pulsar-zone-' + nextVal, 'boxnumber': nextVal } )
					.addClass( 'pulsar-zone-' + nextVal )
					.removeClass( 'pulsar-zone-' + valNumber )
					.appendTo( '.draw-zone' );

				this.moveBox;
			}

		,	contextMenu: function() {
				/**
				 * Context menu
				 */

				context.init({
						fadeSpeed: 50
					,	filter: function ( $obj ){}
					,	above: 'auto'
					,	preventDoubleContext: true
					,	compress: false
				});

				context.attach('.selected', [
						{ header: 'Box Options' }

					,	{
								text: 'Move'
							,	action: this.moveBox
						}	

					,	{
								text: 'Clone'
							,	action: this.cloneBox
						}

					,	{
								text: 'Remove'
							,	action: this.removeBox
						}	
				]);
			}

			/**
			 * [copyBox Copy the selected element to the clipboard]
			 */
		,	copyBox: function() {

				var box = sessionStorage.selector;

				if ( jQuery( box ).hasClass( 'disabled' ) ) 
					jQuery( box ).removeClass( 'disabled' );

				sessionStorage.clipboard = box;
			}

			/**
			 * [copyBox Cut the selected element and put in to the clipboard]
			 */
		,	cutBox: function() {

				var box = sessionStorage.selector;

				jQuery( box ).addClass( 'disabled' );

				sessionStorage.clipboard = box;
			}

			/**
			 * Attach the content of clipboard to the selected box
			 */
		,	pasteBox: function() {

				var pasteVal = sessionStorage.clipboard
				,	pasteIn = sessionStorage.selector;

				jQuery( pasteVal ).appendTo( pasteIn );

				jQuery( pasteVal ).css( {
						left: 0
					,	top: 0
				} );

				if ( jQuery( pasteVal ).hasClass( 'disabled' ) ) 
					jQuery( pasteVal ).removeClass( 'disabled' );

			}

			/**
			 * New Draw Modal
			 */
		,	newDrawModal: function() {

				jQuery( '.notifications' ).foundation('reveal', 'open');

			}

			/**
			 * Close modals
			 */
		,	closeModal: function() {

				jQuery( '.pulsar-modal' ).foundation('reveal', 'close');

			}

			/**
			 * zoom plus
			 */
		,	zoomPlus: function() {
				jQuery( '.pulsar-modal' ).foundation('reveal', 'close');

			}

		, 	zoom: function( e ) {
				e.preventDefault();
				jQuery( '.zoom input' ).on( 'change', function () {
				    jQuery( '.draw-zone' ).css({
				    		zoom: jQuery( this ).val() + '%'
				    });
				});
			}

	});

	// Create instance
	var myView = new View();

}
