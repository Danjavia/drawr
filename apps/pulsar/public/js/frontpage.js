jQuery( document ).on( 'ready', ev );

// Called on "ready" event 
function ev( event ) {

	// Main view instance
	var View = Gillie.Handler.extend({

	        initialize: function() {

	        	this.init();
	        	
	        }

	    ,   events: {
	            	// 'mousedown #draw-zone': 'drawBox'
	            	'click .draw-container': 'newBox'	
	        }

	    ,	init: function() {
	    		var TargetDate = "03/01/2014 12:00 AM"
				,	CountActive = true
				,	CountStepper = -1
				,	LeadingZero = true
				,	DisplayFormat = "%%D%% Days, %%H%% Hours, %%M%% Minutes, %%S%% Seconds."
				,	FinishMessage = "It is finally here!";
	    	}

	});

	// Create instance
	var myView = new View();

}
