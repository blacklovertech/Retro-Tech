
<?php session_start(); include("include/conn.php"); ?>

<?php include('include/head.php'); ?>
<?php echo'<html> <body>'?>


    <div id="__next">
        <div class="" id="color">
            <?php include('include/header.php'); ?>

        
            <div class="md:px-40 dark:bg-gray-900">
                <div class="Toastify"></div>
                <div class="container px-5 py-12 mx-auto flex flex-wrap items-center">
                    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
                        <h1 class="title-font font-medium text-3xl text-gray-900 dark:text-white">We are hiring!</h1>
                        <p class="leading-relaxed mt-4 dark:text-gray-400">We are looking for freelance Developers,
                            Subtitle writers, Content writers and Video editors. If you think you are fit for the role.
                            Submit the form. Make sure you have a valid email so we can contact you back in case your
                            application gets selected. Cheers!</p>
                    </div>
                    <div
                        class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-6 md:p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 dark:bg-slate-800">
                        <label for="email" class="leading-6 text-sm text-gray-400">India Only</label>
                        <h2 class="text-gray-900 text-lg font-medium title-font mb-5 dark:text-white">Apply Now!</h2>
                        <form class="text-gray-600 body-font">
                            <div class="relative mb-4"><label for="name"
                                    class="leading-7 text-sm text-gray-600 dark:text-gray-400">Full Name</label><input
                                    type="text" id="name" name="name"
                                    class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                    value=""></div>
                            <div class="relative mb-4"><label for="email"
                                    class="leading-7 text-sm text-gray-600 dark:text-gray-400">Email</label><input
                                    type="email" id="email" name="email"
                                    class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                    value=""></div>
                            <div class="relative mb-4"><label for="number"
                                    class="leading-7 text-sm text-gray-600 dark:text-gray-400">Phone
                                    Number</label><input type="tel" pattern="[0-9]{10}" required="" id="number"
                                    name="number"
                                    class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                    value=""></div>
                            <div class="relative mb-4"><label for="resume"
                                    class="leading-7 text-sm text-gray-600 dark:text-gray-400">Link to your
                                    Resume</label><input type="url" id="resume" name="resume"
                                    class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                    value=""></div>
                            <div class="relative dark:text-gray-400">Skill:<div class="grid grid-cols-2">
                                    <div class="flex flex-col mt-1 ml-4">
                                        <div><input id="default-radio-1" type="radio" name="skill"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                value="Subtitle Writer"><label for="default-radio-1"
                                                class=" ml-2 leading-7 text-sm text-gray-600 dark:text-gray-400">Subtitle
                                                Writer</label></div>
                                        <div><input id="default-radio-2" type="radio" name="skill"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                value="Content Writer"><label for="default-radio-2"
                                                class=" ml-2 leading-7 text-sm text-gray-600 dark:text-gray-400">Content
                                                Writer</label></div>
                                        <div><input id="default-radio-3" type="radio" name="skill"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                value="Video Editor"><label for="default-radio-3"
                                                class=" ml-2 leading-7 text-sm text-gray-600 dark:text-gray-400">Video
                                                Editor</label></div>
                                        <div><input id="default-radio-4" type="radio" name="skill"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                value="MERN Developer"><label for="default-radio-4"
                                                class=" ml-2 leading-7 text-sm text-gray-600 dark:text-gray-400">MERN
                                                Dev</label></div>
                                    </div>
                                    <div class="flex flex-col mt-1 ml-4">
                                        <div><input id="default-radio-5" type="radio" name="skill"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                value="Python Developer"><label for="default-radio-5"
                                                class=" ml-2 leading-7 text-sm text-gray-600 dark:text-gray-400">Python
                                                Dev</label></div>
                                        <div><input id="default-radio-6" type="radio" name="skill"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                value="PHP Developer"><label for="default-radio-6"
                                                class=" ml-2 leading-7 text-sm text-gray-600 dark:text-gray-400">PHP
                                                Dev</label></div>
                                        <div><input id="default-radio-7" type="radio" name="skill"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                value="JavaScript Developer"><label for="default-radio-7"
                                                class=" ml-2 leading-7 text-sm text-gray-600 dark:text-gray-400">JavaScript
                                                Dev</label></div>
                                        <div><input id="default-radio-8" type="radio" name="skill"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                value="Java Developer"><label for="default-radio-8"
                                                class=" ml-2 leading-7 text-sm text-gray-600 dark:text-gray-400">Java
                                                Dev</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="recaptcha my-5">
                                <div></div>
                            </div><button
                                class="text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg disabled:bg-gray-200 disabled:text-gray-400 disabled:cursor-default">Submit</button>
                        </form>
                        <p class="text-xs text-gray-500 mt-3 dark:text-gray-400">We will be in touch soon!</p>
                    </div>
                </div>
            </div>
   
            <?php include('include/footer.php'); ?>
<?php echo'</body> </html>'?>   </div>
    </div>