var Testimonial = {
	currentTestimonial : 0,
	slideDuration : 500,
	
	init : function() {
        Testimonial.createTestimonials();
		Testimonial.swapTestimonial();
    },
	
	createTestimonials : function() {
		Testimonial.fx = [];
        Testimonial.testimonialFrames = $$('#testimonialSliderContainer blockquote');		
        Testimonial.testimonialFrames.each(function(frame, i) {							
	        Testimonial.fx[i] = new Fx.Style(frame, 'top', {wait: false, duration: Testimonial.slideDuration}); 	        
        });
    },
	
    swapTestimonial : function() {

        if(Testimonial.fx.length > 0)
		    Testimonial.fx[Testimonial.currentTestimonial].start(0,-280);
		
		if(Testimonial.currentTestimonial < Testimonial.testimonialFrames.length - 1)
		{
			Testimonial.fx[Testimonial.currentTestimonial + 1].start(0, 0);
			Testimonial.currentTestimonial++;
		}
		else
		{
			Testimonial.currentTestimonial = 0;
            if(Testimonial.fx.length > 0)
			    Testimonial.fx[Testimonial.currentTestimonial].start(0, 0);
		}
		
		Testimonial.swapTestimonial.delay(10000);
    }
}