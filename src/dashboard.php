<?php
 require_once('php/database.php');
 $database = new Database();
  $investments = $database->read();
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class ="min-h-screen flex bg-black">


<nav class=" ">

    
    <section class="bg-black h-[100vh] fixed">
    
        
        <div class="border-b border-b-[#363636] ">
        <section class="p-8 "> 
        <div class=" text-white flex space-x-4">
        <div class="">
            <img src="./img/invest.png" alt="" width="20" height="20">
        </div>
        <p> Dashboard</p>
    
        </div>
    </div>
    <section class="p-8"> 
    <div class="flex text-white text-sm mt-4 space-x-1"> 
        <p class="text-white"><a href="./index.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 cursor-pointer">
            <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
          </svg></p>
         <a href="./index.php">Profile</a></a> 
    </div>
     
    <div class="flex text-white text-sm mt-9 space-x-2"> 
        <p class="text-white"><a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4 cursor-pointer">
            <path d="M13.024 9.25c.47 0 .827-.433.637-.863a4 4 0 0 0-4.094-2.364c-.468.05-.665.576-.43.984l1.08 1.868a.75.75 0 0 0 .649.375h2.158ZM7.84 7.758c-.236-.408-.79-.5-1.068-.12A3.982 3.982 0 0 0 6 10c0 .884.287 1.7.772 2.363.278.38.832.287 1.068-.12l1.078-1.868a.75.75 0 0 0 0-.75L7.839 7.758ZM9.138 12.993c-.235.408-.039.934.43.984a4 4 0 0 0 4.094-2.364c.19-.43-.168-.863-.638-.863h-2.158a.75.75 0 0 0-.65.375l-1.078 1.868Z" />
            <path fill-rule="evenodd" d="m14.13 4.347.644-1.117a.75.75 0 0 0-1.299-.75l-.644 1.116a6.954 6.954 0 0 0-2.081-.556V1.75a.75.75 0 0 0-1.5 0v1.29a6.954 6.954 0 0 0-2.081.556L6.525 2.48a.75.75 0 1 0-1.3.75l.645 1.117A7.04 7.04 0 0 0 4.347 5.87L3.23 5.225a.75.75 0 1 0-.75 1.3l1.116.644A6.954 6.954 0 0 0 3.04 9.25H1.75a.75.75 0 0 0 0 1.5h1.29c.078.733.27 1.433.556 2.081l-1.116.645a.75.75 0 1 0 .75 1.298l1.117-.644a7.04 7.04 0 0 0 1.523 1.523l-.645 1.117a.75.75 0 1 0 1.3.75l.644-1.116a6.954 6.954 0 0 0 2.081.556v1.29a.75.75 0 0 0 1.5 0v-1.29a6.954 6.954 0 0 0 2.081-.556l.645 1.116a.75.75 0 0 0 1.299-.75l-.645-1.117a7.042 7.042 0 0 0 1.523-1.523l1.117.644a.75.75 0 0 0 .75-1.298l-1.116-.645a6.954 6.954 0 0 0 .556-2.081h1.29a.75.75 0 0 0 0-1.5h-1.29a6.954 6.954 0 0 0-.556-2.081l1.116-.644a.75.75 0 0 0-.75-1.3l-1.117.645a7.04 7.04 0 0 0-1.524-1.523ZM10 4.5a5.475 5.475 0 0 0-2.781.754A5.527 5.527 0 0 0 5.22 7.277 5.475 5.475 0 0 0 4.5 10a5.475 5.475 0 0 0 .752 2.777 5.527 5.527 0 0 0 2.028 2.004c.802.458 1.73.719 2.72.719a5.474 5.474 0 0 0 2.78-.753 5.527 5.527 0 0 0 2.001-2.027c.458-.802.719-1.73.719-2.72a5.475 5.475 0 0 0-.753-2.78 5.528 5.528 0 0 0-2.028-2.002A5.475 5.475 0 0 0 10 4.5Z" clip-rule="evenodd" />
          </svg>
          </p>
         <p> Settings</p></a> 
    </div>
</section>

<div class="relative top-[450px]  border-t border-b-[#303030]"> 
    <div class="mt-auto text-white  p-4">
        <div class="flex space-x-4"> <p> <img class="h-9 w-9 rounded-md" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""></p> <div class=" space-y-1"><p class="text-xs">Gbolahan</p>
            <p class="text-xs">useremail@dmain.com</p></div>
        </div>
      
    </div>
</div>

    </section>
</nav>
<main class="ml-[250px] h-[100vh]  bg-[#18181b] my-2 text-white w-full shadow-2xl rounded-l-2xl "> 
    
    <div class="p-10">
      <div class=" mb-4" > <P class="text-sm font-medium">OVERVIEW</P></div>
      <section class="flex space-x-12  ">
      <div class="border-t border-t-white pt-2"> 
        <p class="text-sm py-1">Total revenue</p>
        <p class="text-2xl my-2">$2.6M</p>
        <p class="text-xs text pt-2"><span class="bg-[#45503e] p-1 rounded-md text-[#d2fb3d] mr-2">+4.5%</span>from last week</p>
      
      </div>
      <div class="border-t border-t-white pt-2"> 
        <p class="text-sm py-1">Total revenue</p>
        <p class="text-2xl my-2">$2.6M</p>
        <p class="text-xs text pt-2"><span class="bg-[#45503e] p-1 rounded-md text-[#d2fb3d] mr-2">+4.5%</span>from last week</p>
      
      </div>
      <div class="border-t border-t-white pt-2"> 
        <p class="text-sm py-1">Average value
 revenue</p>
        <p class="text-2xl my-2">$465</p>
        <p class="text-xs text pt-2"><span class="bg-[#372632] p-1 rounded-md text-[#9b2e9b] mr-2">04.5%</span>from last week</p>
      
      </div>
      <div class="border-t border-t-white pt-2"> 
        <p class="text-sm py-1">weekly revenue</p>
        <p class="text-2xl my-2">$296</p>
        <p class="text-xs text pt-2"><span class="bg-[#528270] p-1 rounded-md text-[#49e146] mr-2">+4.5%</span>from last week</p>
      
      </div>
      </section>
       
    </div>

    <div>
        <section>
            <h1 class="text-2xl font-bold mb-4">Investment Dashboard</h1>
            <div class="overflow-x-auto">
              <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead>
                  <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-center">Investment</th>
                    <th class="py-3 px-6 text-center">Fullname</th>
                    <th class="py-3 px-6 text-center">Email</th>
                    <th class="py-3 px-6 text-center">Invest Date</th>
                    <th class="py-3 px-6 text-center">country</th>
                    <th class="py-3 px-6 text-center">Amount</th>
                  </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">

                  <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-center">Real Estate</td>
                    <td class="py-3 px-6 text-center">Property SAMP</td>
                    <td class="py-3 px-6 text-center">Property@samp.co</td>
                    <td class="py-3 px-6 text-center">2024-2-17</td>
                    <td class="py-3 px-6 text-center">Canada</td>
                    <td class="py-3 px-6 text-center">
                      <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">$150,000</span>
                    </td>
                  </tr>
                  <?php foreach ($investments as $investment) : ?>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-center"><?php echo ($investment['investname']); ?></td>
                                <td class="py-3 px-6 text-center"><?php echo ($investment['fname']); ?></td>
                                <td class="py-3 px-6 text-center"><?php echo ($investment['email']); ?></td>
                                <td class="py-3 px-6 text-center"><?php echo ($investment['date']); ?></td>
                                <td class="py-3 px-6 text-center"><?php echo ($investment['country']); ?></td>
                                <td class="py-3 px-6 text-center">
    <?php if ($investment['amount'] < 5000): ?>
        <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs"><?php echo ('$' . number_format($investment['amount'], 2)); ?></span>
    <?php else: ?>
        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs"><?php echo ('$' . number_format($investment['amount'], 2)); ?></span>
    <?php endif; ?>
</td>
                            </tr>
                        <?php endforeach; ?>
             
<!-- // Include database connection -->


        
                  <!-- Add more rows as needed -->
                </tbody>
              </table>
            </div>
    </div>

</main>


<script src="./javascript/script.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>