<?php session_start(); include("include/conn.php"); ?>

<?php include('include/head.php'); ?>
<?php echo'<body>'?>


    <div id="__next">
        <div class="" id="color">
            <?php include('include/header.php'); ?> 
            <div class="min-h-screen dark:bg-gray-900">
                <h1 class="text-center text-3xl pt-8 pb-4 font-semibold text-purple-700 dark:text-purple-400 ">Download
                    Notes by Retro Tech</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 ">
                    <div class="p-6 flex justify-center">
                        <div
                            class="w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-slate-800 dark:border-black">
                            <div class="flex flex-col items-center p-6 "><img
                                    class="mb-3 w-24 h-24 rounded-full shadow-lg" src="./note_files/python.webp"
                                    alt="PythonNotes">
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Python Notes</h5>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Download Notes Here</span>
                                <div class="grid  mt-4  "><a
                                        class="inline-block text-white bg-purple-700 rounded-full px-3 py-2 text-sm font-semibold mr-2 my-1 cursor-pointer hover:bg-purple-900 text-center"
                                        href="./downloads/videos/python-tutorial-easy-for-beginners/Python_Complete_Notes.pdf"><button
                                            class="font-semibold">PDF Notes</button></a><a
                                        class="inline-block text-white bg-purple-700 rounded-full px-3 py-2 text-sm font-semibold mr-2 my-1 cursor-pointer hover:bg-purple-900 text-center"
                                        href="./downloads/videos/python-tutorial-easy-for-beginners/Python_ChapterWise_Notes.rar"><button
                                            class="font-semibold">Chapterwise Notes</button></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 flex justify-center">
                        <div
                            class="w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-slate-800 dark:border-black">
                            <div class="flex flex-col items-center p-6 "><img class="mb-3 w-24 h-24 rounded-full "
                                    src="./note_files/c.webp" alt="CNotes">
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">C Notes</h5><span
                                    class="text-sm text-gray-500 dark:text-gray-400">Download Notes Here</span>
                                <div class="grid  mt-4  "><a
                                        class="inline-block text-white bg-purple-700 rounded-full px-3 py-2 text-sm font-semibold mr-2 my-1 cursor-pointer hover:bg-purple-900 text-center"
                                        href="./downloads/videos/c-tutorial-in-hindi-with-notes/C_Complete_Notes.pdf"><button
                                            class="font-semibold">PDF Notes</button></a><a
                                        class="inline-block text-white bg-purple-700 rounded-full px-3 py-2 text-sm font-semibold mr-2 my-1 cursor-pointer hover:bg-purple-900 text-center"
                                        href="./downloads/videos/c-tutorial-in-hindi-with-notes/C_ChapterWise_Notes.rar"><button
                                            class="font-semibold">Chapterwise Notes</button></a></div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
            <?php include('include/footer.php'); ?>
<?php echo'</body> </html>'?>
        </div>
    </div>
  