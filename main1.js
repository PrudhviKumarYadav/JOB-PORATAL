let counter = 1;
let limit = 10;
function addInput(divName){
     if (counter >= limit)  {
          alert("You have reached the limit of adding " + counter + " ingredients");
     }
     else {
          let newdiv = document.createElement('div');
          newdiv.innerHTML = "skill" + (counter + 1) +'<br><select  name="skills[]"><optgroup label="IT skills"><option value="c">c</option> <option value="c++">c++</option><option value="java">java</option><option value="html">html</option></optgroup> <optgroup label="Non-IT skill"><option value="Accounting">Accounting</option><option value="Banking">Banking</option><option value="Sales">Sales</option><option value="HR management">HR management</option></optgroup></select>';
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}
