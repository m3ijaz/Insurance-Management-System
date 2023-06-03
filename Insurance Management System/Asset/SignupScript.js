function validation()
{
 let name = document.getElementById('name').value;
 let gender = document.getElementById('gender').value;  
 let email = document.getElementById('email').value;
 let dob = document.getElementById('dob').value;
 let blood_Group = document.getElementById('blood_Group').value;
 let degree = document.getElementById('degree').value;
 let occupation = document.getElementById('occupation').value;
 let user_Name = document.getElementById('user_Name').value;
 let password = document.getElementById('password').value;
 let confirm_password = document.getElementById('confirm_password').value;

   if(name == "")
      {
        document.getElementById('names').innerHTML= "**Name not valid**";
        return false;
      }  
        if(name.length<3)
        {
            document.getElementById('names').innerHTML= "**At least 3 character needed**";
            return false;
        }
        if(!isNaN(name))
        {
            document.getElementById('names').innerHTML= "**Numbers are not allowed**";
            return false;
        }
        else
        {
            document.getElementById('names').innerHTML= " ";
        }
      

    if(gender == "")
      {
        document.getElementById('genders').innerHTML= "**gender not valid**";
        return false;
      }

      if(email == "")
      {
        document.getElementById('emails').innerHTML= "**Email not valid**";
        return false;
      }

      if(dob == "")
      {
        document.getElementById('dobs').innerHTML= "**DOB not valid**";
        return false;
      }

      if(blood_Group == "")
      {
        document.getElementById('blood_Groups').innerHTML= "**Blood_Group not valid**";
        return false;
      }

      if(degree == "")
      {
        document.getElementById('degrees').innerHTML= "**Degree not valid**";
        return false;
      }

      if(occupation == "")
      {
        document.getElementById('occupations').innerHTML= "**Occupation not valid**";
        return false;
      }

      if(user_Name == "")
      {
        document.getElementById('user_names').innerHTML= "**User_Name not valid**";
        return false;
      }

      if(password == "")
      {
        document.getElementById('passwordss').innerHTML= "**Password not valid**";
        return false;
      }

      if(confirm_password == "")
      {
        document.getElementById('confirm_passwords').innerHTML= "**Confirm_Password not valid**";
        return false;
      }

      

}