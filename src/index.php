<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('php/database.php');

if (!empty($_POST)) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $investname = $_POST['investname'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $country = $_POST['country'];
    $res = $database->create($fname, $email, $investname, $amount, $date, $country);

    
if ($res) {
    echo "<div id='success-message' style='background-color: #4CAF50; color: white; padding: 10px; text-align: center;'>NEW DATA CREATED!</div>";
} else {
    echo "<div id='error-message' style='background-color: #f44336; color: white; padding: 10px; text-align: center;'>Failed to create data!</div>";
}
}

?>


<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class ="min-h-screen flex flex-col ">
<nav class="bg-gray-800">
  
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-6">
    
    <div class="relative flex h-16 items-center justify-between">
      
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button id="menu-toggle" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg id="menu-open-icon" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg id="menu-close-icon" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        
        <div class="hidden sm:ml-6 sm:block">
          
          <div class="flex space-x-4">
            
            <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium items-center flex"  aria-current="page"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 pr-1">
   <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
   </svg>
    Profile</a>
            <a href="./dashboard.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Dashboard</a>
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <span class="sr-only">View notifications</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
          </svg>
        </button>
        <!-- Profile dropdown -->
        <div class="relative ml-3">
          <div>
            <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
    <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium items-center flex"  aria-current="page"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 pr-1">
  <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
</svg>
Profile</a>
      <a href="./dashboard.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Dashboard</a>
    </div>
  </div>
</nav>



 <main class="flex-grow pb-20 bg-[#09090b] ">
  
 <div class="mt-5 ml-3 flex items-center space-x-1"> <img src="./img/invest.png" alt="" srcset="" width ="30" height="30"> <p class=" font-bold font-mono text-white" >Investment Profile</p></div>
 
 <div class="flex justify-center text-white text-justify sm:mx-5 max-md:mx-5 max-md:mt-10 ">
  
    
<h3>Create an Investment Plan and Check the Dashboard for Leading Investors</h3>

 </div>

 <form action="" method="post">

 <div class=" flex justify-center">
<section class=" sm:block md:flex lg:flex  "> 
  <div class =" block space-y-3 text-white m-2 bg-[#18181b] p-5 rounded-lg"> 
    <div class=" flex space-x-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
  <path d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z" />
</svg>
<label for="username"> Fullname
 </label>
</div>
 
 <input type="name" name="fname" id="username" placeholder ="" class ="block w-96 h-10 border border-[#333336] rounded-md bg-[#242427] p-3 text-sm " required> </input>
 </div>
 
 <div class =" block space-y-3 text-white m-2 bg-[#18181b] p-5 rounded-lg">
  <div class=" flex space-x-2"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
  <path fill-rule="evenodd" d="M5.404 14.596A6.5 6.5 0 1 1 16.5 10a1.25 1.25 0 0 1-2.5 0 4 4 0 1 0-.571 2.06A2.75 2.75 0 0 0 18 10a8 8 0 1 0-2.343 5.657.75.75 0 0 0-1.06-1.06 6.5 6.5 0 0 1-9.193 0ZM10 7.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z" clip-rule="evenodd" />
</svg><label for="email"> Email
 </label></div>
 

 
 <input type="email" name="email" id="email" placeholder ="" class ="block w-96 h-10 border border-[#333336] rounded-md bg-[#242427] p-3 text-sm " required> </input>
 </div>
</section>
</div>

<div class=" flex justify-center">
<section class=" sm:block md:flex lg:flex  "> 
 <div class =" block space-y-3 text-white m-2 bg-[#18181b] p-5 rounded-lg">
 <div class= "flex space-x-2"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
  <path d="M15.5 2A1.5 1.5 0 0 0 14 3.5v13a1.5 1.5 0 0 0 1.5 1.5h1a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 16.5 2h-1ZM9.5 6A1.5 1.5 0 0 0 8 7.5v9A1.5 1.5 0 0 0 9.5 18h1a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 10.5 6h-1ZM3.5 10A1.5 1.5 0 0 0 2 11.5v5A1.5 1.5 0 0 0 3.5 18h1A1.5 1.5 0 0 0 6 16.5v-5A1.5 1.5 0 0 0 4.5 10h-1Z" />
</svg>
<label for="investname"> Investment Name
 </label>
 </div>

 <input type="name" name="investname" id="investname" placeholder ="" class ="block w-96 h-10 border border-[#333336] rounded-md bg-[#242427] p-3 text-sm " required> </input>
 </div>
 
 <div class =" block space-y-3 text-white m-2 bg-[#18181b] p-5 rounded-lg">
  <div class= "flex space-x-2"> 
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
  <path fill-rule="evenodd" d="M10 1c3.866 0 7 1.79 7 4s-3.134 4-7 4-7-1.79-7-4 3.134-4 7-4Zm5.694 8.13c.464-.264.91-.583 1.306-.952V10c0 2.21-3.134 4-7 4s-7-1.79-7-4V8.178c.396.37.842.688 1.306.953C5.838 10.006 7.854 10.5 10 10.5s4.162-.494 5.694-1.37ZM3 13.179V15c0 2.21 3.134 4 7 4s7-1.79 7-4v-1.822c-.396.37-.842.688-1.306.953-1.532.875-3.548 1.369-5.694 1.369s-4.162-.494-5.694-1.37A7.009 7.009 0 0 1 3 13.179Z" clip-rule="evenodd" />

</svg>
<label for="amount">
  investing Amount</label>
</div>
 

 <input type="number" name="amount" inputmode="numeric"  id="amount" placeholder ="" class ="block w-96 h-10 border border-[#333336] rounded-md bg-[#242427] p-3 text-sm" required > </input>
 </div>
</section>
</div>

<div class=" flex justify-center ">
<section class=" sm:block md:flex lg:flex  "> 
 <div class =" block space-y-3 text-white m-2 bg-[#18181b] p-5 rounded-lg">
<div class= "flex space-x-2"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
  <path d="M5.25 12a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H6a.75.75 0 0 1-.75-.75V12ZM6 13.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V14a.75.75 0 0 0-.75-.75H6ZM7.25 12a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H8a.75.75 0 0 1-.75-.75V12ZM8 13.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V14a.75.75 0 0 0-.75-.75H8ZM9.25 10a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H10a.75.75 0 0 1-.75-.75V10ZM10 11.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V12a.75.75 0 0 0-.75-.75H10ZM9.25 14a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H10a.75.75 0 0 1-.75-.75V14ZM12 9.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V10a.75.75 0 0 0-.75-.75H12ZM11.25 12a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H12a.75.75 0 0 1-.75-.75V12ZM12 13.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V14a.75.75 0 0 0-.75-.75H12ZM13.25 10a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H14a.75.75 0 0 1-.75-.75V10ZM14 11.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V12a.75.75 0 0 0-.75-.75H14Z" />
  <path fill-rule="evenodd" d="M5.75 2a.75.75 0 0 1 .75.75V4h7V2.75a.75.75 0 0 1 1.5 0V4h.25A2.75 2.75 0 0 1 18 6.75v8.5A2.75 2.75 0 0 1 15.25 18H4.75A2.75 2.75 0 0 1 2 15.25v-8.5A2.75 2.75 0 0 1 4.75 4H5V2.75A.75.75 0 0 1 5.75 2Zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75Z" clip-rule="evenodd" />
</svg>
<label for="username"> Investment Date
 </label>
</div>
  
 <input type="date" name="date" id="" class ="block w-96 h-10 border border-[#333336] rounded-md bg-[#242427] p-3 text-sm " required>
 <p class = "text-base/6 text-zinc-500 pt-5 sm:text-sm/6 "> Choose the date to start investing</p>
 </div>
 
 <div class =" block space-y-3 text-white m-2 bg-[#18181b] p-5 rounded-lg">
  <div class="flex space-x-2 "> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
  <path d="M3.5 2.75a.75.75 0 0 0-1.5 0v14.5a.75.75 0 0 0 1.5 0v-4.392l1.657-.348a6.449 6.449 0 0 1 4.271.572 7.948 7.948 0 0 0 5.965.524l2.078-.64A.75.75 0 0 0 18 12.25v-8.5a.75.75 0 0 0-.904-.734l-2.38.501a7.25 7.25 0 0 1-4.186-.363l-.502-.2a8.75 8.75 0 0 0-5.053-.439l-1.475.31V2.75Z" />
</svg>
<label for="country"> Country
 </label>
</div>
 
 <select name="country" id="country" class ="block w-96 h-10 border border-[#333336] rounded-md bg-[#242427] p-3 text-sm" >
  <option value="USA"> USA</option>
  <option value="Canada">Canada</option>
  
 </select>
 <p class = "text-base/6 text-zinc-500 pt-5 sm:text-sm/6 "> We are only available in 2 countries</p>
 <!-- <input type="name" name="username" id="username" placeholder ="" class ="block w-96 h-10 border border-[#333336] rounded-md bg-[#242427] p-3 text-sm" > </input> -->
</div>

</section>

</div>
  <div class=" flex justify-center"> <button class="text-white h-10 rounded-lg w-36 bg-yellow-700"> Invest Now</button> </div>

 

 </form>
 </main>
 <footer class="bg-gradient-to-r from-[#3c3c3c] via-slate-950 to-black w-full max-h-min text-white py-3">
     
  <section class=" md:flex lg:flex  block justify-between min-w-mi mx-20 items-center py-4">
        <P class="text-lg font-semibold r"> <img src="./img/invest.png" width="30" height="30" alt="" srcset=""></P>
    <ul class=" flex min-w-max space-x-20 text-justify">
        <section class=" space-y-3 text-sm">
        <h3 class="text-xl font-bold">Quick Links</h3>
       <a href="#"><li>investment chart</li></a> 
        <a href="#"><li>Dashboar</li></a>
        <a href="#"><li>shares</li></a>
    </section>

    <section class="space-y-3 text-sm">
        <h3 class="text-xl font-bold">Legals</h3>
       <a href="#"><li>Terms of Service</li></a> 
        <a href="#"><li>Disclaimer</li></a>
        <a href="#"><li>FAQ</li></a>
    </section>
    </ul>
  </section>
  <p class="text-center">&copy; 2024 | Gbolahan Abdulrahman | Georgian college 2025 canada</p>
  </footer>
 
<script src="./javascript/script.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
