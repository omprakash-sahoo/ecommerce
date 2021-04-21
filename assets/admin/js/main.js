$(document).ready(function(){
    $('#submit').click(function(){
        // e.preventDefault();
        var uname = $('#username').val();
        var email = $('#email').val();
        var emp_id = $('#emp_id').val();
        var pwd = $('#password').val();
        var cpwd = $('#cpassword').val();
        var terms = $('#terms').val();
        var checked = document.forms["myForm"]["terms"].checked;
        var form_status = 1;
        $('#er_uname').hide();
        $('#er_email').hide();
        $('#er_emp').hide();
        $('#er_pwd').hide();
        $('#er_cpwd').hide();
        $('#er_terms').hide();

        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i ;
        if((uname == '') || (uname == null)){
            $('#er_uname').html('**User name is missing');
            $('#er_uname').show();
            form_status = 0;
        }else if((uname.length < 4 ) || (uname.length > 10)){
            $('#er_uname').html('**User Name should be 4 to 10 charecter');
            $('#er_uname').show();
            form_status = 0;
        }

        if(email == ''){
            $('#er_email').html('**Email is missing');
            $('#er_email').show();  
            form_status = 0;
        }else if(!pattern.test(email)){
            $('#er_email').html('**Please enter a valid email');
            $('#er_email').show();   
            form_status = 0;

        }
        
        if((emp_id == '') || (emp_id == null)){
            $('#er_emp').html('**Employee Id is Missing');
            $('#er_emp').show();
            form_status = 0;
        }else if((emp_id.length < 3 ) || (emp_id.length > 10)){
            $('#er_emp').html('** Please Enter a valid Employee Id');
            $('#er_emp').show();
            form_status = 0;
        }
        
        if((pwd == '') || (pwd == null)){
            $('#er_pwd').html('**Password is Missing');
            $('#er_pwd').show();
            form_status = 0;
        }
        if((cpwd == '') || (cpwd == null)){
            $('#er_cpwd').html('**Password is Missing');
            $('#er_cpwd').show();
            form_status = 0;
        }else if(pwd !== cpwd){
            $('#er_cpwd').html('**Password not matched');
            $('#er_cpwd').show(); 
            form_status = 0;
        }
        if(!checked){
            $('#er_terms').html('**Accept Terms and condition');
            $('#er_terms').show();  
            form_status = 0;
        }

        if(form_status == 0){
            return false;
        }
        
    });
// fade alert message
// $(".fade-msg").fadeOut(3000);


});

