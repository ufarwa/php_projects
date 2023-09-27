// $(document).ready(function(){
//     $(".form1").hide();
  
//     $("#optionSelect").on('change', function(){
//       var selectedOption = $(this).val();
//       $(".form1").hide();

//       $("." + selectedOption).fadeIn(500);
//     }).change();  
   
   
//   });
  
function select(

) {
    a = document.getElementById("optionSelect");
    if(a.value == 'Teacher'){
        $("#Teacher_form").show(); 
        $("#Student_form1").hide(); 
        $("#HOD_form1").hide();      

    }
    else if(a.value == 'Student'){
        $("#Student_form1").show();
        $("#Teacher_form").hide();   
        $("#HOD_form1").hide();          

    }else if(a.value == 'HOD'){
        $("#HOD_form1").show();   
        $("#Student_form1").hide();
        $("#Teacher_form").hide();  
 
    }
    else{}
  }
  