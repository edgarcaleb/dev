 $(document).on("ready",function () {

    $('.jxqenviar').on('click', function () {
    $('#form_parenteral').jqxValidator('validate');
        
});
              
    $('#form_parenteral').jqxValidator({
        rules: [
            { input: '#nit', message: 'por favor ingresar Nit', action: 'keyup, blur', rule: 'required' },
            { input: '#educ', message: 'por favor ingresar el NOMBRE DE LA ENTIDAD', action: 'keyup, blur', rule: 'required' },
            { input: '#codicfes', message: 'por favor ingresar el CODIGO ICFES', action: 'keyup, blur', rule: 'required' },
            { input: '#resolucion', message: 'por favor ingresar la RESOLUCION ', action: 'keyup, blur', rule: 'required' },
            { input: '#domicilio', message: 'por favor ingresar el DOMICILIO ', action: 'keyup, blur', rule: 'required' },
            { input: '#email', message: 'por favor ingresar el EMAIL ', action: 'keyup, blur', rule: 'required' },
            { input: '#email', message: 'e-mail no valido!', action: 'keyup', rule: 'email' },

            { input: '#patrono', message: 'PATRONO de la IETA ', action: 'keyup, blur', rule: 'required' },
        ]
    });
});

$(function() {
    $( ".navigationItem" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( ".navigationItem li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
   
  });
$(function() {
    $( "#accordion" ).accordion({
      heightStyle: "content"
    });
  });


                              
                              

                              
                            