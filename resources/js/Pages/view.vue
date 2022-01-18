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
        <h1 class="my-5 text-2xl font-semibold ">Register User Data View</h1>
        <div class="container">
       
    <div class="grid grid-cols-4 gap-5">
        <div>
          <input type="text" class="px-4 py-2 w-full border border-gray-200 rounded-md" placeholder="Search by name...">
        </div>
        <div>
          <input type="text" class="px-4 py-2 w-full border border-gray-200 rounded-md" placeholder="Search by father's name...">
        </div>
        <div>
          <input type="text" class="px-4 py-2 w-full border border-gray-200 rounded-md" placeholder="Search by mobile...">
        </div>
        <div class="flex justify-end items-center">
          <a href="/create" class="text-white bg-blue-500 rounded-md px-10 py-2 5 text-sm font-medium">Add User</a>
        </div>
    </div>
    <div class="mt-5">
      <table id="customers" class="min-w-full divide-y divide-gray-200 mt-1">
              <thead>
              <tr>
                <th class="px-4 py-2.5 uppercase">Sr.No <i class="fa fa-sort" style="font-size:16px"></i></th>
                <th class="px-4 py-2.5 uppercase">Name <i class="fa fa-sort" style="font-size:16px"></i></th>
                <th class="px-4 py-2.5 uppercase">Email <i class="fa fa-sort" style="font-size:16px"></i></th>
                <th class="px-4 py-2.5 uppercase">Mobile <i class="fa fa-sort" style="font-size:16px"></i></th>
                <th class="px-4 py-2.5 uppercase">Age <i class="fa fa-sort" style="font-size:16px"></i></th>
                <th class="px-4 py-2.5 uppercase">Address <i class="fa fa-sort" style="font-size:16px"></i></th>
                <th class="px-4 py-2.5 uppercase">City <i class="fa fa-sort" style="font-size:16px"></i></th>
                <th class="px-4 py-2.5 uppercase">State <i class="fa fa-sort" style="font-size:16px"></i></th>
                <th class="px-4 py-2.5 uppercase">Pin <i class="fa fa-sort" style="font-size:16px"></i></th>
                
                <th class="px-4 py-2.5 uppercase">Actions <i class="fa fa-sort" style="font-size:16px"></i></th>
               
              </tr>
              </thead>
              <tbody class="divide-y divide-gray-200">
                <tr v-for="(item, index) in tableData" :key="index">
                  <td class="px-4 py-2.5">{{index+1}}</td>
                  <td class="px-4 py-2.5">{{item.name}}</td>
                  <td class="px-4 py-2.5">{{item.email}}</td>
                  <td class="px-4 py-2.5">{{item.mobile}}</td>
                  <td class="px-4 py-2.5">{{item.age}}</td>
                  <td class="px-4 py-2.5">{{item.address}}</td>
                   <td class="px-4 py-2.5">{{item.city}}</td>
                  <td class="px-4 py-2.5">{{item.state}}</td>
                   <td class="px-4 py-2.5">{{item.pin}}</td>
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



    <div class="flex">
    <nav aria-label="Page navigation example">
    <ul class="flex list-style-none">
      <li class="page-item disabled">
        <a class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-500 pointer-events-none focus:shadow-none" href="#" tabindex="-1" aria-disabled="true">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z" />
        </svg>
          </a></li>
      <li class="page-item"><a
          class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
          href="#">1</a></li>
      <li class="page-item active"><a
          class="page-link relative block py-1.5 px-3 border-0 bg-blue-600 outline-none transition-all duration-300 rounded-full text-white hover:text-white hover:bg-blue-600 shadow-md focus:shadow-md"
          href="#">2 <span class="visually-hidden"></span></a></li>
      <li class="page-item"><a
          class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
          href="#">3</a></li>
      <li class="page-item"><a
          class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
          href="#">4</a></li>
      <li class="page-item"><a
          class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
          href="#">5</a></li>
      <li class="page-item"><a
          class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
          href="#">6</a></li>
      <li class="page-item"><a
          class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
          href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.933 12.8a1 1 0 000-1.6L6.6 7.2A1 1 0 005 8v8a1 1 0 001.6.8l5.333-4zM19.933 12.8a1 1 0 000-1.6l-5.333-4A1 1 0 0013 8v8a1 1 0 001.6.8l5.333-4z" />
          </svg>
          </a></li>
      
    </ul>
  </nav>
</div>

</template>

<script>
export default {
  name:"view",
  data(){
    return{
      tableData:[
        {id:1,name:'Adarsh',email:'Sharma@gmail.com',mobile:'7877777545454',age:'23', address:'chhindwara',city:'chhindwara',state:'madhya pradesh',pin:'875645454'},
        {id:1,name:'Adarsh',email:'Sharma@gmail.com',mobile:'7877777545454',age:'23', address:'chhindwara',city:'chhindwara',state:'madhya pradesh',pin:'875645454'},
        {id:1,name:'Adarsh',email:'Sharma@gmail.com',mobile:'7877777545454',age:'23', address:'chhindwara',city:'chhindwara',state:'madhya pradesh',pin:'875645454'},
        {id:1,name:'Adarsh',email:'Sharma@gmail.com',mobile:'7877777545454',age:'23', address:'chhindwara',city:'chhindwara',state:'madhya pradesh',pin:'875645454'},
        {id:1,name:'Adarsh',email:'Sharma@gmail.com',mobile:'7877777545454',age:'23', address:'chhindwara',city:'chhindwara',state:'madhya pradesh',pin:'875645454'},

       
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