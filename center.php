<?php
$connection = mysqli_connect('localhost','root','','blood_donation');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD DONATION</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" style="zoom:20%;">
        <img src="images/blood-donation-svgrepo-com.png" alt="" >
        <span class="ml-3 text-xl"></span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-gray-900" href="index.php">Home</a>
        <a class="mr-5 hover:text-gray-900" href="checker/index.php">Survey</a>
        <a class="mr-5 hover:text-gray-900" href="center.php">Blood Donation</a>
   
      </nav>
      <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"><a href="contact.php">Contact Us</a>
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>
    </div>
  </header>
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
          <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
            <h1 class="title-font font-medium text-3xl text-gray-900">Search for Blood Donation Center</h1>
            <p class="leading-relaxed mt-4">Get Details about blood donation center just select location and city and the system will provides the detail about the blood donation center.</p>
          </div>
          <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
            <h2 class="text-gray-900 text-lg font-medium title-font mb-5"></h2>
            <form action="center.php" method="post">
              
       
            <div class="relative mb-4">
              <label for="full-name" class="leading-7 text-sm text-gray-600">Select City</label>
            <select name="City" id="" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              <option value="Dubai">Dubai</option>
              <option value="Abu Dhabi">Abu Dhabi</option>
              <option value="Sharjah">Sharjah</option>

        
            </select>
     
            </div>
           
            <button type="submit" name="search" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Search</button>
            <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
          </div>
          </form>
        </div>
      </section>
      <?php
      if(isset($_POST['search'])){
        $city = $_POST['City'];
        $query = "SELECT * FROM center WHERE City='$city'";
        $query_run = mysqli_query($connection,$query);

if(mysqli_num_rows($query_run) > 0){
    while(($row = mysqli_fetch_assoc($query_run))){

      ?>
        <div class="container px-5 py-24 mx-auto flex flex-wrap">

      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4"><?php echo $row['Location']; ?></h1>
    </div>

      <?php
    }}}
    ?>
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="flex w-full mb-20 flex-wrap">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4">Gallery</h1>
          </div>
          <div class="flex flex-wrap md:-m-2 -m-1">
            <div class="flex flex-wrap w-1/2">
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="images/1.jpg">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="images/2.jpg">
              </div>
              <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block" src="images/3.jpg">
              </div>
            </div>
            <div class="flex flex-wrap w-1/2">
              <div class="md:p-2 p-1 w-full">
                <img alt="gallery" class="w-full h-full object-cover object-center block" src="images/4.jpg">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="images/5.jpg">
              </div>
              <div class="md:p-2 p-1 w-1/2">
                <img alt="gallery" class="w-full object-cover h-full object-center block" src="images/7.jpg">
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900" style="zoom: 20%;">
           <img src="images/blood-donation-svgrepo-com.png" alt="" >
            <span class="ml-3 text-xl"></span>
          </a>
          <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">?? 2022 Blood Donate ???
            <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@Blood DOnate</a>
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </footer>
</body>
</html>