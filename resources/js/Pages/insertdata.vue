<template>
<div class="main">
    <div class="register">
        <h2>Registration Form</h2>
    <form >
        <div class="register grid grid-cols-2 gap-20">
        <div>
        <label>First name</label>
        <input  class="form-control" type="text" placeholder="Enter first name" >
        </div>
        <div>
        <label>Last name name</label>
        <input  class="form-control" type="text" placeholder="Enter Last name" >
        </div>
        <div>
        <label>Father's name</label>
        <input  class="form-control" type="text" placeholder="Enter Father's name" >
        </div>
        <div>
        <label>Email name</label>
        <input  class="form-control" type="text" placeholder="Enter Email name" >
        </div>
        <div>
        <label>Password</label>
        <input  class="form-control" type="text" placeholder="Enter Password" >
        </div>
        <div>
        <label>Mobile Number</label>
        <input  class="form-control" type="text" placeholder="Enter Mobile number" >
        </div>
        <div>
        <label>DOB </label><br>
        <input  class="form-control" type="date" placeholder="Enter Date of Birth" >
        </div><br>
        
        </div><br>
       
        <input class="btn" type="submit" value="submit" >
    </form>

    </div>
</div>
</template>

<script>

</script> 

<style scoped>

div.main{
    width: 400px;
    margin: 100px auto 0px auto;

}
h2{
    text-align: center;
    background-color: rgba(0,0,0,0);
    width:100%;
    font-size: 18px;
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.3);
    
    
    
}
form#register{
    margin:40px;
}
.grid{
    display: grid;
    
}
.grid-cols-2{
    grid-template-columns: repeat(2, minmax(0, 1fr));
}
.gap-20{
    gap: 25px;
}
.btn{
    display: flex;
    justify-content:center;
    align-items:center;
    width: 100%;

}
input[type=date]{
    width:90%;
}
</style>