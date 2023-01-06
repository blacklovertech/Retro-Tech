<?php session_start(); include("include/conn.php"); ?>

<?php include('include/head.php'); ?>
<?php echo'<html>'?>
<body>

    <div id="__next">
        <div class="" id="color">
            <?php include('include/header.php'); ?>
    
            

               
                <div class="px-6 py-8 bg-gray-100 dark:bg-gray-900">
                    <div class="container flex justify-between mx-auto dark:bg-gray-900"> 
                        <div class="w-full lg:w-9/12 ">
                            <h1 class="text-2xl font-bold text-gray-700 md:text-3xl text-center md:text-left md:ml-11 dark:text-gray-200 ">
                                <center>  Blogs</center></h1>
                            <div class="infinite-scroll-component__outerdiv">
                                <div class="infinite-scroll-component " style="height: auto; overflow: auto;">
                               
                                    <div class="mt-6">
                                        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md dark:bg-slate-700">
                                            <div class="flex items-center justify-between">
                                                <span class="font-light text-gray-600 dark:text-gray-400">Text</span>
                                            </div>
                                            <div class="mt-2">
                                                <span class="text-2xl font-bold text-gray-700 dark:text-white">
                                                    <a href="./blogpost/best-laptop-to-buy-in-2022/">Blogger Idea and Tips</a>
                                                </span>
                                                <p class="mt-2 text-gray-600 dark:text-gray-400"></p>
                                            </div>
                                            <div class="flex items-center justify-between mt-4 text-purple-900 dark:text-purple-600">
                                                <a href="./blogpost/best-laptop-to-buy-in-2022/">Visit here...</a>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="mt-6">
                                        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md dark:bg-slate-700">
                                            <div class="flex items-center justify-between">
                                                <span class="font-light text-gray-600 dark:text-gray-400">Video</span>
                                            </div>
                                            <div class="mt-2">
                                                <span class="text-2xl font-bold text-gray-700 dark:text-white">
                                                    <a href="#">Youtube</a>
                                                </span>
                                                <p class="mt-2 text-gray-600 dark:text-gray-400"></p>
                                            </div>
                                            <div class="flex items-center justify-between mt-4 text-purple-900 dark:text-purple-600">
                                                <a href="#">Visit here...</a>
                                            </div>
                                        </div>
                                    </div>
                                
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
   
               
            

                <?php include('include/footer.php'); ?>
<?php echo'</body> </html>'?>
   
            </div>
        </div>