<template>
    <div>
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
      <div class="p-6">
        <h1 class="my-5 text-2xl font-semibold">Register User Data View</h1>
        <div class="container">
          <div>
          
            <table id="customers" class="min-w-full divide-y divide-gray-200">
              <thead>
              <tr>
                <th class="px-4 py-2.5">Sr.No</th>
                <th class="px-4 py-2.5">First name</th>
                <th class="px-4 py-2.5">Last name</th>
                <th class="px-4 py-2.5">Father's name</th>
                <th class="px-4 py-2.5">Email</th>
                <th class="px-4 py-2.5">Mobile</th>
                <th class="px-4 py-2.5">DOB</th>
                <th class="px-4 py-2.5">Actions</th>
               
              </tr>
              </thead>
              <tbody class="divide-y divide-gray-200">
                <tr v-for="(item, index) in tableData">
                  <td class="px-4 py-2.5">{{index+1}}</td>
                  <td class="px-4 py-2.5">{{item.fname}}</td>
                  <td class="px-4 py-2.5">{{item.lname}}</td>
                  <td class="px-4 py-2.5">{{item.fathers_name}}</td>
                  <td class="px-4 py-2.5">{{item.email}}</td>
                  <td class="px-4 py-2.5">{{item.mobile}}</td>
                  <td class="px-4 py-2.5">{{item.dob}}</td>
                  <td class="px-4 py-2.5">
                      <div style="display: flex; align-items: center;">
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" style="color: red; " width="20" height="20" fill="currentColor">
                              <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                              <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                              </svg>
                          </div>
                          <div href="#" >
                              <svg xmlns="http://www.w3.org/2000/svg" style="color: red; " width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg>
                          </div>
                      </div>
                  </td>
                </tr>
            
              </tbody>
              
            </table>
          </div>
        </div>
      </div>
  </div>
</template>

<script>
export default {
  name:"view",
  data(){
    return{
      tableData:[
        {id:1, fname:'Adarsh', lname:'Sharma', fathers_name:'Ashok', email:'superadmin@gmail.com', dob:'December 22, 2002', mobile:'971987546'},
        {id:2, fname:'Xyz', lname:'Abc', fathers_name:'Ashok', email:'superadmin@gmail.com', dob:'January 22, 2002', mobile:'971987546'},
        {id:3, fname:'Adarsh', lname:'Sharma', fathers_name:'Ashok', email:'superadmin@gmail.com', dob:'December 22, 2002', mobile:'971987546'},
        {id:4, fname:'Adarsh', lname:'Sharma', fathers_name:'Ashok', email:'superadmin@gmail.com', dob:'December 22, 2002', mobile:'971987546'},
        {id:2, fname:'Xyz', lname:'Abc', fathers_name:'Ashok', email:'superadmin@gmail.com', dob:'January 22, 2002', mobile:'971987546'},
        {id:2, fname:'Xyz', lname:'Abc', fathers_name:'Ashok', email:'superadmin@gmail.com', dob:'January 22, 2002', mobile:'971987546'},
        {id:2, fname:'Xyz', lname:'Abc', fathers_name:'Ashok', email:'superadmin@gmail.com', dob:'January 22, 2002', mobile:'971987546'},
      ]
    }
  }
}
</script>

<style scoped>

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>