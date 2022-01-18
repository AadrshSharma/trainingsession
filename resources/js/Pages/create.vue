<template>
    <div class="lg:container lg:mx-auto">
      <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
    <span class="font-semibold text-xl tracking-tight">Noetics</span>
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
        Docs
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
        Examples
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
        Blog
      </a>
    </div>
    <div>
      <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Download</a>
    </div>
  </div>
</nav>
<h1>Registration Form</h1>

        <div class="container shadow-xs mt-6">
            <form class="w-full max-w-lg">
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
               Name
              </label>
         <input v-model="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Enter your name">


             <!-- <noetic-inputs :value="name" label="Name" inp_type="text" placeholder="Enter full name"></noetic-inputs> -->
            </div>
            <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
               Email
              </label>
           <input v-model="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="email" placeholder="Enter your email">
       <!--noetic-inputs label="Email name" inp_type="email" placeholder="Enter your email"></noetic-inputs-->
            </div>
          </div>
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <!--noetic-inputs label="Mobile" inp_type="number" placeholder="Enter your Mobile"></noetic-inputs-->
             <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
               Mobile
              </label>
           <input v-model="mobile" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Enter your number">
            </div>
            <div class="w-full md:w-1/2 px-3">
            <!--noetic-inputs label="Age" inp_type="text" placeholder="Enter your Age"></noetic-inputs-->
             <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
               Age
              </label>
           <input v-model="age" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Enter your age">
         </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <!--noetic-inputs label="Password" inp_type="password" placeholder="Enter your password"></noetic-inputs-->
             <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
               Password 
              </label>
           <input v-model="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="password" placeholder="Enter your password">
       
            </div>
            <div class="w-full md:w-1/2 px-3">
            <!--noetic-inputs label="Address" inp_type="text" placeholder="Enter your Address"></noetic-inputs-->
             <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
               Address
              </label>
           <input v-model="address" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Enter your address">
       
            </div>
          </div>
          
          <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
             <!--noetic-single-select label="City" :dropdown="myDropdown2" placeholder="Select your city"></noetic-single-select-->
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >
               City
              </label>
              <div class="relative">
                <select v-model="city" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                 <option selected value="">Select One</option>
                 <option v-for="ele  in myDropdown" :value="ele.id">{{ele.name}}</option>
              
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
              </div>
     
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
             <!--noetic-single-select label="State" :dropdown="myDropdown" placeholder="Select your state"></noetic-single-select-->
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >
               State
              </label>
              <div class="relative">
                <select v-model="state" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option selected value="">Select One</option>
                 <option v-for="ele  in myDropdown2" :value="ele.id">{{ele.name}}</option>
                
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
              </div>
     
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <!--noetic-inputs label="Zip" inp_type="number"  placeholder="Enter your Zip"></noetic-inputs-->
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
               Zip
              </label>
           <input v-model="pincode" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="Enter your pin">
       
            </div>
          </div>
          <!-- Extracting component classes: -->
        <!-- Using utilities: -->

        <button @click.prevent="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
        Submit
        </button>

        </form>
            </div>
    </div>
</template>
<script>
    import NoeticInputs from "../components/NoeticInputs";
    import NoeticSingleSelect from "../components/NoeticSingleSelect";
    export default {
        name: "Create",
        components: {NoeticSingleSelect, NoeticInputs},
        data(){
            return{
                
                myDropdown:[
                    {id:1,name:'Madhya pradesh'},
                    {id:2,name:'Uttar pradesh'},
                    {id:3,name:'Gujrat'},
                    {id:4,name:'Punjab'},
                    {id:5,name:'Haryana'},
                ],
                 myDropdown2:[
                    {id:1,name:'Mumbai'},
                    {id:2,name:'Mumbai'},
                    {id:3,name:'Pune'},
                    {id:4,name:'Hyderabad'},
                    {id:5,name:'Indore'},
                ],
                name:'',
                email:'',
                mobile:'',
                age:'',
                password:'',
                address:'',
                city:'',
                state:'',
                pincode:'',
            }
        },
        methods:{
          submit(){
            console.log('check');
            // console.log(this.name);
            // console.log(this.email);
            // console.log(this.mobile);
            // console.log(this.age);
            
            const payload ={
              name: this.name,
              email: this.email,
              mobile: this.mobile,
              age: this.age,
              password: this.password,
              address:this.address,
              city:this.city,
              state:this.state,
              pincode:this.pincode

            }
            axios.post('/api/student/create', payload).then(response =>{
              if(response.status === 200){
                this.$inertia.get('/view');
              }
            })
          }
        }
    }
</script>
<style scoped>

.container{
    display: flex;
    justify-content: center;
    width:100%;
    height:auto;
    margin-left: 50px;
}
h1{
    text-align:center;
    margin-top:20px;
    font-size: 2rem;;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

</style>
