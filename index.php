<!DOCTYPE html>
<html>
<body>
<form action="show.php"> 

    what is your name: <select name="prefix">
        <option value="">--เลือก--</option>
        <option value="ดช.">--ดช.--</option>
        <option value="ดญ.">--ดญ.--</option>
        <option value="นาย">--นาย--</option>
        <option value="นาง">--นาง--</option>
        <option value="นางสาว">--นางสาว--</option> 
            
    </select>  <input type="text"name="name"><br>
    what is your age:    <input type="text"name="age"><br>
    what is your sex:    <select name="sex">
        <option value="">--เลือก--</option>
        <option value="ชาย">--ชาย--</option>
        <option value="หญิง">--หญิง--</option>
            
    </select>
    <br>
    what is your status: <input type="text"name="status"><br>
    <input type="submit" value="submit"> 
    
</form>


</body>
</html>
