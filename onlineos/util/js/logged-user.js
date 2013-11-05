/*Carrega as dicas/testimonials que ficam exibindo dentro do sistema*/
        function loadXMLdoc() {

            var xmlDoc;

            if (window.XMLHttpRequest)
              {
              xmlDoc=new window.XMLHttpRequest();
              xmlDoc.open("GET","util/xml/testimonials.xml",false);
              xmlDoc.send("");
              return xmlDoc.responseXML;
              }
            // IE 5 and IE 6
            else if (window.ActiveXObject)
              {
              xmlDoc=new ActiveXObject("Microsoft.XMLDOM");
              xmlDoc.async=false;
              xmlDoc.load("util/xml/testimonials.xml");
              return xmlDoc;
              }
            alert("Error loading document");
            return null;
            }

        function rndnumber(){
                var randscript = -1;
                while (randscript < 0 || randscript > elementList.length - 1) {
                    randscript = parseInt(Math.random()*(elementList.length + 1))
                } return randscript
        }

        var x;
        x = loadXMLdoc();
        var rndm;
        var elementList;

        if(x != null) {

            elementList = x.getElementsByTagName("id");
            rndm = rndnumber();
            document.getElementById("testimonials_txt").innerHTML= x.getElementsByTagName("quote")[rndm].childNodes[0].nodeValue;
            document.getElementById("testimonials_name").innerHTML= x.getElementsByTagName("author")[rndm].childNodes[0].nodeValue;
            document.getElementById("testimonials_department").innerHTML= x.getElementsByTagName("department")[rndm].childNodes[0].nodeValue;

            function displayQuote() {
                    document.getElementById("testimonials_txt").innerHTML= x.getElementsByTagName("quote")[rndm].childNodes[0].nodeValue;
                    document.getElementById("testimonials_name").innerHTML= x.getElementsByTagName("author")[rndm].childNodes[0].nodeValue;
                    document.getElementById("testimonials_department").innerHTML= x.getElementsByTagName("department")[rndm].childNodes[0].nodeValue;
            }

            function displayTestimonial()  {
                $('#testimonials_container').fadeOut("slow");
                rndm = rndnumber();
                setTimeout(displayQuote, 500);
                $('#testimonials_container').fadeIn("slow");
            }

            setInterval(displayTestimonial, 10000);
        }

        $('#imageR').click(function(){
        if(rndm == elementList.length)
            rndm = -1
        rndm++;
        displayQuote();
        });
        $('#imageL').click(function(){
        if(rndm == 0)
            rndm = elementList.length + 1
        rndm--;
        displayQuote();
        });

        Testimonial.createTestimonials();
        Testimonial.swapTestimonial();

        $.featureList(
			$("#tabs li a"),
			$("#output li")/*, {
				start_item	:	0
			}*/
		);
        
        if(uri == 'home') {//Fazer uma validação se o usuario acabou de entrar no sistema
	        $('#contact').contato();
	
	        $('#carregaHistorico').click(function () {
	            new Ajax.Updater('output','/OS/historico/linkhistorico',{asynchronous:true,evalScripts:true});return false;
	        });
	
	       $('#carregaHistorico').click();
        }
        
        $('.verPerfil').tipTip({maxWidth: "auto",defaultPosition: "top", edgeOffset: 42});
