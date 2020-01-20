function validate(){
  if( Date.parse(document.new_event.start_date.value)>=Date.parse(document.new_event.end_date.value))
  {
      alert("Enddate must be greater than start date");
      document.new_event.end_date.focus();
      return false;
   }
   var reg_fees = document.new_event.registration_fees.value;
   var prizes = document.new_event.prize_money.value; 
   var isnum1 = /^\d+$/.test(reg_fees);  
   var isnum2 = /^\d+$/.test(prizes);  

   if(reg_fees=="" && prizes==""){
     return true;
   }
   else if(reg_fees != "" && prizes==""){
      if(!isnum1){
        alert("Regitration fees should have only numerical value!");
        document.new_event.registration_fees.focus();
        return false;
      }
   }
  else if(prizes !="" && reg_fees==""){
   if(!isnum2){
     alert("Prize field should have only numerical value!");
     document.new_event.prize_money.focus();
     return false;
   }
  }
  else{
    if(!isnum1 || !isnum2){
      alert("Registration fees and prize field should have numerical values");
      document.new_event.registration_fees.focus();
        return false;
    }
  }
}
  
function clear_input(){
  document.new_event.reset();
}