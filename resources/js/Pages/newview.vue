<template>
    <div class="container mx-auto ">
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
                <h1 class="my-5 text-2xl font-semibold text-center">Register User Data View</h1>
                 <div class="container bg-blend-lighten hover:bg-blend-darken">
                     <table class="min-w-full hover:table-fixed bg-cyan-500 shadow-lg shadow-cyan-500/50">
                    <thead  class="bg-pink-300">
                        <tr>
                        <th class="px-6 py-3 text-left  font-semibold  uppercase tracking-wider">Full Name</th>
                        <th class="px-6 py-3 text-left  font-semibold  uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left  font-semibold  uppercase tracking-wider">Mobile</th>
                        <th class="px-6 py-3 text-left  font-semibold  uppercase tracking-wider">Gender</th>
                        <th class="px-6 py-3 text-left  font-semibold  uppercase tracking-wider">Address</th>
                        <th class="px-6 py-3 text-left  font-semibold  uppercase tracking-wider">City</th>
                        <th class="px-6 py-3 text-left  font-semibold  uppercase tracking-wider">State</th>
                        <th class="px-6 py-3 text-left  font-semibold  uppercase tracking-wider">Pin</th> 
                        </tr>
                    </thead>
                    <tbody class="bg-amber-50 divide-y divide-gray-200 ">
                        <tr v-for="(item, index) in datatable">
                        <td class="px-6 py-4 whitespace-nowrap" >{{item.fname}} </td>
                        <td class="px-6 py-4 whitespace-nowrap" >{{item.email}}</td>
                        <td class="px-6 py-4 whitespace-nowrap" >{{item.mobile}}</td>
                        <td class="px-6 py-4 whitespace-nowrap" >{{item.gender}}</td>
                        <td class="px-6 py-4 whitespace-nowrap" >{{item.address}}</td>
                        <td class="px-6 py-4 whitespace-nowrap" >{{item.city}}</td>
                        <td class="px-6 py-4 whitespace-nowrap" >{{item.state}} </td>
                        <td class="px-6 py-4 whitespace-nowrap" >{{item.pin}}</td>

                        </tr>                       
                    </tbody>
                    </table>

                </div>


             </div>

                </div>
</template>
<script>
export default {
    name:"newview",
    data() {
        return{
            datatable:[
                {fname:'Aadrsh sharma',email:'superadmin@gmail.com',mobile:'7974119832',gender:'m',address:'chhindwara',city:'chhindwara',state:'Madhya pradesh',pin:'480001'},
                {fname:'Raj deshmukh',email:'rajdesh@gmail.com',mobile:'7854589654',gender:'m',address:'parasia',city:'Parasia',state:'Madhya pradesh',pin:'480051'},
                {fname:'pankaj kumar',email:'panku678@gmail.com',mobile:'8545698545',gender:'m',address:'Indore',city:'Indore',state:'Madhya pradesh',pin:'4800451'},
                {fname:'Rajnesh parchai',email:'rajneshhar78@gmail.com',mobile:'2565415263',gender:'m',address:'Delhi',city:'Delhi',state:'Madhya pradesh',pin:'480651'},
                {fname:'Farukh Aali',email:'farukhali788@gmail.com',mobile:'8978456987',gender:'m',address:'Amawara',city:'Amarwara',state:'Madhya pradesh',pin:'480562'},
                {fname:'Shubham sharma',email:'shubhamkaroti@gmail.com',mobile:'4578966525',gender:'m',address:'Chandameta',city:'Parasia',state:'Madhya pradesh',pin:'480895'},
            ]
        }
    }
}
</script>