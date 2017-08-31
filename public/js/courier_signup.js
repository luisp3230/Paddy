$(document).ready(function(){

    $('input[type=checkbox]').removeAttr('checked');

    var e = jQuery.Event("keydown", { keyCode: 20 });

    $('input:first').focus();

    $('input').focus(
        function(){
            $(this).parents('li').css('opacity','1');

             var el = $(this);
             var elOffset = el.offset().top;
             var elHeight = el.height();
             var windowHeight = $(window).height();
             var offset;

             if (elHeight < windowHeight) {
             offset = elOffset - ((windowHeight / 2) - (elHeight / 2));
            }
            else {
            offset = elOffset;         
            }
             var speed = 500;
             $('html, body').animate({scrollTop:offset}, speed);
        }).blur(
        function(){
            $(this).parents('li').css('opacity','0.5');
        });

        $('select').focus(
        function(){

            $(this).parents('li').css('opacity','1');

             var el = $(this);
             var elOffset = el.offset().top;
             var elHeight = el.height();
             var windowHeight = $(window).height();
             var offset;

             if (elHeight < windowHeight) {
             offset = elOffset - ((windowHeight / 2) - (elHeight / 2));
            }
            else {
            offset = elOffset;         
            }
             var speed = 500;
             $('html, body').animate({scrollTop:offset}, speed);
        }).blur(
        function(){
            $(this).parents('li').css('opacity','0.5');
        });

        $('#fecnac_dia_moto').keydown(function(e){
           if (!e.shiftKey && ((e.keyCode < 48 || e.keyCode > 57) && 
              (e.keyCode != 8 && e.keyCode != 9 && e.keyCode != 13 && e.keyCode != 16 && 
               e.keyCode != 17 && e.keyCode != 18 && e.keyCode != 45 && e.keyCode != 46))
            && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });

        $('#fecnac_mes_moto').keydown(function(e){
           if (!e.shiftKey && ((e.keyCode < 48 || e.keyCode > 57) && 
              (e.keyCode != 8 && e.keyCode != 9 && e.keyCode != 13 && e.keyCode != 16 && 
               e.keyCode != 17 && e.keyCode != 18 && e.keyCode != 45 && e.keyCode != 46))
            && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });

        $('#fecnac_anio_moto').keydown(function(e){
           if (!e.shiftKey && ((e.keyCode < 48 || e.keyCode > 57) && 
              (e.keyCode != 8 && e.keyCode != 9 && e.keyCode != 13 && e.keyCode != 16 && 
               e.keyCode != 17 && e.keyCode != 18 && e.keyCode != 45 && e.keyCode != 46))
            && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });                

});

function OnClick(arg){
    var id = arg.getAttribute('id');
        x  = arg.value;

    switch(id){    
      case "begin_signup":
            $('#part1').fadeOut( "slow" );
            $('#part2' ).fadeIn();            
      break;
    }
}

function OnBlur(arg){
    var id = arg.getAttribute('id');
        x  = arg.value;

    switch(id){
        case "dni_moto":
            if (x) {
                if (x.length != 8) {
                    document.getElementById('moto_e3').innerHTML="El DNI debe tener 8 dígitos";
                }else{
                    document.getElementById('moto_e3').innerHTML = "";
                }
            }

            break;

        case "cel_moto":   
            if (x) {
                if (x.length != 9) {
                    document.getElementById('moto_e5').innerHTML="El nro celular debe tener 9 dígitos";
                }else{
                    document.getElementById('moto_e5').innerHTML = "";
                }
            }
        break;

        case "mail_moto":     
            if (x) {
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if (re.test(x)) {                   
                    document.getElementById('moto_e6').innerHTML = "";                    
                }else{
                    document.getElementById('moto_e6').innerHTML="Formato incorrecto";
                }               
            }
        break;
    }

}

function AlDejar(arg,event){

    var id = arg.getAttribute('id');
         x = arg.value;
            
    switch(id){
        case "nombres_moto":

            numero = x.match(/[^a-z A-Z]/);
            if (numero) {
                offset = x.indexOf(numero);
                arg.value = x.substr(0, offset);
            }

            break; 

        case "apellidos_moto":

            numero = x.match(/[^a-z A-Z]/);
            if (numero) {
                offset = x.indexOf(numero);
                arg.value = x.substr(0, offset);
            }

            break;   

        case "dni_moto":

            if (x.length > 8) {
                arg.value = x.slice(0,8); 
            }

            texto = x.match(/[^0-9]/);
            if (texto) {
                offset = x.indexOf(texto);
                arg.value = x.substr(0, offset);
            }

            break;

        case "operador_moto":

            element=document.getElementById('otros_operador');

            if (arg.value=='3'){
                element.style.display='block';
            }else{
               element.style.display='none';
            }

            break;

        case "cel_moto":

            $( "#prueba" ).stop(true,true);

            // cel_left_aux = document.getElementById('prueba').offsetLeft;

            // if (cel_left < cel_left_aux) {
            //     alert("izquierda");

            //     cel_left_aux = cel_left_aux - cel_left;
            //     left_org = cel_left_aux + "px";
            //     $('#prueba').animate({"left": left_org}, 'fast');

            // }else if (cel_left > cel_left_aux) {

            //     alert("derecha");                
            //     alert(cel_left_aux);                
            //     cel_left_aux = cel_left - cel_left_aux;
            //     right_org = cel_left_aux + "px";
            //     alert(right_org);
            //     $('#prueba').animate({"right": right_org}, 'fast');

            // } 

            if (x.length > 9) {
                arg.value = x.slice(0,9); 
            }

            break;

        case "fecnac_dia_moto":        

            if ((event.which >= 48 && event.which <= 57) || (event.which >= 96 && event.which <= 105)) {   
                res = String.fromCharCode(event.which);
                if (x.substring(0,1) == '0' && x.length == 2) {
                    y = x.substring(1) + res;
                    arg.value = y;                    
                }

                x = arg.value;
                if (x.length > 1) {
                    arg.value = x.slice(0,1);
                }
            }

            break;

        case "fecnac_mes_moto":

            if ((event.which >= 48 && event.which <= 57) || (event.which >= 96 && event.which <= 105)) {   
                res = String.fromCharCode(event.which);
                if (x.substring(0,1) == '0' && x.length == 2) {
                    y = x.substring(1) + res;
                    arg.value = y;                    
                }

                x = arg.value;
                if (x.length > 1) {
                    arg.value = x.slice(0,1);
                }
            }

            break;

        case "fecnac_anio_moto":

            if ((event.which >= 48 && event.which <= 57) || (event.which >= 96 && event.which <= 105)) {   

                x = arg.value;
                if (x.length > 3) {
                    arg.value = x.slice(0,3);
                }
            }

            break;
                                
    }

}

function OnKeyUp(arg){
    var id = arg.getAttribute('id');

    switch(id){

        case "cel_moto":
            x = arg.value;
            // if (x.substring(0,1) != 9) {
            //     arg.value = "";
            //     $( "#prueba" ).effect( "shake", {direction: "right", times:1, distance:5}, 250 );
            // }

            texto = x.match(/[^0-9]/);
            if (texto) {
                offset = x.indexOf(texto);
                arg.value = x.substr(0, offset);
            }

            break;

        case "fecnac_dia_moto":

            if (arg.value > 31 || arg.value == 0){
                arg.value = "";
            }

            x = arg.value;
            if (x.length == 1){
                arg.value = "0" + arg.value ;
            }

            break;

        case "fecnac_mes_moto":

            dia = document.getElementById('fecnac_dia_moto').value;            
            anio = document.getElementById('fecnac_anio_moto').value;

            if (arg.value > 12 || arg.value == 0){
                arg.value = "";
            }

            x = arg.value;
            if (x.length == 1){
                arg.value = "0" + arg.value ;
            }

            if (arg.value == '01' || arg.value == '03' || arg.value == '05' || arg.value == '07' ||
                arg.value == '08' || arg.value == '10' || arg.value == '11') {

            }else if (arg.value == '04' || arg.value == '06' ||
                      arg.value == '09' || arg.value == '11' ) {


                if (dia > 30) {
                    dia = 30;
                    document.getElementById("fecnac_dia_moto").value = dia;                   
                }
            }else if (arg.value == '02'){
                if (dia > 29) {
                    dia = 29;
                    document.getElementById("fecnac_dia_moto").value = dia;    
                }
            }

        case "fecnac_anio_moto":

            dia = document.getElementById('fecnac_dia_moto').value;            
            mes = document.getElementById('fecnac_mes_moto').value; 
 
                if (mes == '02') {
                    if (dia == 29) {
                        if (arg.value >= 1900) {
                            // mes = 2;
                            var date = new Date(arg.value, mes - 1, dia);
                            // alert(mes);
                            // alert(date.getMonth());
                            if ( (mes - 1) != date.getMonth()) {
                                dia = 28;
                                document.getElementById("fecnac_dia_moto").value = dia;
                            }
                        }                   
                    }
                }

            break;
    }

}

function SubmitForm(){
    if ( (document.getElementById('dni_moto').value && document.getElementById('moto_e3').innerHTML == "") &&
         (document.getElementById('cel_moto').value && document.getElementById('moto_e5').innerHTML == "") &&
         (document.getElementById('mail_moto').value && document.getElementById('moto_e6').innerHTML == "")){
         document.getElementById("formPaddy").submit();
    }else{
        alert("completa!!");
    }
}