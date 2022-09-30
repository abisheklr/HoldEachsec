function validator(){
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var msg = document.getElementById('msg').value;
  
    if(name==' '|| email==' ' || msg==' ')
    {
      alert("All Fiels must be filled");
      return false;
    }
    else if(name.length<6 || name.length>15){
      alert('Name must contain 6-15 characters');
      return false;
    }
    else if(msg.length<10 || password.length>200){
      alert("Message must contain 10-200 characters");
      return false;
    }
    else{
      alert("submitted");
      return true;
    }
  }