<html>
<head>
<style>
.bg-img {
  background-image: url("7.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height:100%;
}
.btn{ 
 font-size: 20px;
 font-family:Serif;
 background:#008cba;
 color:#FFFFFF; 
 padding: 5px 5px;
 }
.btn1{ 
 font-size: 20px;
 font-family:Serif;
 background:#ff0000;
 color:#FFFFFF; 
 padding: 5px 5px;
 }
</style>
<script src="main1.js" language="Javascript" type="text/javascript"></script>
<body>
<div class="bg-img">
<form method="POST">
     <div id="dynamicInput">
          skill 1<br><select  name="skills[]">
    <optgroup label="IT skills">
    <option value="c">c</option>
    <option value="c++">c++</option>
    <option value="java">java</option>
    <option value="html">html</option>
    </optgroup>
    <optgroup label="Non-IT skills">
    <option value="Accounting">Accounting</option>
    <option value="Banking">Banking</option>
    <option value="Sales">Sales</option>
    <option value="HR management">HR management</option>
    </optgroup>
  </select>
     </div>
     <input type="button" class="btn" value="Add onther skills" onClick="addInput('dynamicInput');">
<input type="submit"class="btn1" value="Find Jobs">
</div>
</form>
</body>
</html>
