<?php session_start(); include("include/conn.php"); ?>

<?php include('include/head.php'); ?>
<?php echo'<html>'?>
<body>

    <div id="__next">
        <div class="" id="color">
            <?php include('include/header.php'); ?>

            <div class="dark:bg-gray-900">
                <div class="Toastify"></div>
                <div class="flex bg-white h-96 container mx-auto dark:bg-gray-900">
                    <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                        <div>
                            <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl dark:text-white">Welcome to
                                <!-- --><span class="text-purple-700 dark:text-purple-600">Retro Tech</span>
                            </h2>
                            <h4 class="text-xl font-semibold text-gray-800 md:text-2xl dark:text-white">Learn to
                                <!-- --><span class="text-purple-700 dark:text-purple-600">Code</span>
                            </h4>
                            <p class="mt-2 text-sm text-gray-500 md:text-base dark:text-gray-400">Confused on which
                                course to take? we have got you covered. Browse courses and find out the best course for
                                you. Its free ! Retro Tech is my attempt to teach basics and coding techniques
                                to people in short time which took me years to learn.</p>
                            <div class="flex justify-center lg:justify-start mt-6"><button
                                    class="px-3 py-2 lg:px-4 lg:py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:text-white hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-600 dark:hover:bg-gray-300"
                                    onclick="location.href='./courses.php'">Explore Courses</button><button
                                    class="px-3 py-2 mx-4 lg:px-4 lg:py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400"
                                    onclick="location.href='./consulting'" >  Consulting</button></div>

                        </div>
                    </div>
                    <div class="hidden lg:block lg:w-1/2"
                        style="clip-path:polygon(10% 0px, 100% 0%, 100% 100%, 0px 100%)">
                        <div class="h-full object-cover"
                            style="background-image:url(&quot;https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1352&amp;q=80&quot;)">
                            <div class="h-full bg-black opacity-25"></div>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto lg:my-2">
        <hr class="dark:border-gray-500">
                    <h2 class="text-3xl font-medium title-font text-gray-900 my-10 text-center dark:text-purple-600">
                        Recommended Courses</h2>
                    <div class="flex flex-wrap justify-center mx-6">
                        <div class="p-4 md:w-1/3 flex justify-center">
                            <div class="max-w-sm rounded-2xl overflow-hidden shadow-lg dark:bg-slate-800"><span
                                    style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                                        style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                                            style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0"
                                            alt="" aria-hidden="true"
                                            src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27384%27%20height=%27216%27/%3e"></span><img
                                        </span>
                                    <div class="px-6 md:my-11 lg:my-0 md:h-72 lg:h-64 lg:py-4 xl:h-52"><span
                                            class="tracking-widest text-xs title-font font-medium mb-1 dark:text-gray-400">FREE
                                            COURSE</span>
                                        <div
                                            class="title-font flex text-lg font-medium text-gray-900 mb-3 dark:text-white">
                                            Python Tutorials - 100 Days of Code </div>
                                        <p class="text-gray-700 text-base dark:text-gray-400">Python is one of the most
                                            demanded programming languages in the job market. Surprisingly, it is
                                            equally
                                            easy to learn and master Python. Let's commit our 100 days of code to
                                            python!
                                        </p>
                                    </div>
                                    <div class="px-6 pt-4 pb-2"><span
                                            class="inline-block text-white bg-purple-700 rounded-full px-3 py-2 text-sm font-semibold mr-2 my-2 cursor-pointer hover:bg-purple-600">
                                            Start Watching </span></div>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/3 flex justify-center">
                            <div class="max-w-sm rounded-2xl overflow-hidden shadow-lg dark:bg-slate-800"><span
                                    style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                                        style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                                            style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0"
                                            alt="" aria-hidden="true"
                                            src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27384%27%20height=%27216%27/%3e"></span><img
                                        alt="img" src="./index_files/JS-Thumb.jpeg" decoding="async"
                                        data-nimg="intrinsic" class="lg:h-48 md:h-36 w-full object-cover object-center"
                                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                                        srcset="/_next/image/?url=https%3A%2F%2Fcwh-full-next-space.fra1.digitaloceanspaces.com%2Fvideoseries%2Fultimate-js-tutorial-hindi-1%2FJS-Thumb.jpg&amp;w=384&amp;q=75 1x, /_next/image/?url=https%3A%2F%2Fcwh-full-next-space.fra1.digitaloceanspaces.com%2Fvideoseries%2Fultimate-js-tutorial-hindi-1%2FJS-Thumb.jpg&amp;w=828&amp;q=75 2x"><noscript><img
                                            alt="img"
                                            srcSet="/_next/image/?url=https%3A%2F%2Fcwh-full-next-space.fra1.digitaloceanspaces.com%2Fvideoseries%2Fultimate-js-tutorial-hindi-1%2FJS-Thumb.jpg&amp;w=384&amp;q=75 1x, /_next/image/?url=https%3A%2F%2Fcwh-full-next-space.fra1.digitaloceanspaces.com%2Fvideoseries%2Fultimate-js-tutorial-hindi-1%2FJS-Thumb.jpg&amp;w=828&amp;q=75 2x"
                                            src="/_next/image/?url=https%3A%2F%2Fcwh-full-next-space.fra1.digitaloceanspaces.com%2Fvideoseries%2Fultimate-js-tutorial-hindi-1%2FJS-Thumb.jpg&amp;w=828&amp;q=75"
                                            decoding="async" data-nimg="intrinsic"
                                            style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                                            class="lg:h-48 md:h-36 w-full object-cover object-center"
                                            loading="lazy" /></noscript></span>
                                <div class="px-6 md:my-11 lg:my-0 md:h-72 lg:h-64 lg:py-4 xl:h-52"><span
                                        class="tracking-widest text-xs title-font font-medium mb-1 dark:text-gray-400">FREE
                                        COURSE</span>
                                    <div class="title-font flex text-lg font-medium text-gray-900 mb-3 dark:text-white">
                                        Ultimate JavaScript Course</div>
                                    <p class="text-gray-700 text-base dark:text-gray-400">This latest JavaScript course
                                        comes with premium curriculum that covers everything from basics to advance. On
                                        top of that, you will get my handwritten notes of JS for completely free. What
                                        are you waiting for? Just Enroll Buddy</p>
                                </div>
                                <div class="px-6 pt-4 pb-2"><span
                                        class="inline-block text-white bg-purple-700 rounded-full px-3 py-2 text-sm font-semibold mr-2 my-2 cursor-pointer hover:bg-purple-600">
                                        Start Watching </span></div>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/3 flex justify-center">
                            <div class="max-w-sm rounded-2xl overflow-hidden shadow-lg dark:bg-slate-800"><span
                                    style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%"><span
                                        style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%"><img
                                            style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0"
                                            alt="" aria-hidden="true"
                                            src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27384%27%20height=%27216%27/%3e"></span><img
                                        alt="img" src="./index_files/090fefe24d23d47584f6ddc7eb5a241e.png"
                                        decoding="async" data-nimg="intrinsic"
                                        class="lg:h-48 md:h-36 w-full object-cover object-center"
                                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                                        srcset="/_next/image/?url=/ 1x, /_next/image/?url=/%2Fassets%2F090fefe24d23d47584f6ddc7eb5a241e.png&amp;w=828&amp;q=75 2x"><noscript><img
                                            alt="img"
                                            srcSet="/_next/image/?url=/ 1x, /_next/image/?url=/%2Fassets%2F090fefe24d23d47584f6ddc7eb5a241e.png&amp;w=828&amp;q=75 2x"
                                            src="/_next/image/?url=/%2Fassets%2F090fefe24d23d47584f6ddc7eb5a241e.png&amp;w=828&amp;q=75"
                                            decoding="async" data-nimg="intrinsic"
                                            style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                                            class="lg:h-48 md:h-36 w-full object-cover object-center"
                                            loading="lazy" /></noscript></span>
                                <div class="px-6 md:my-11 lg:my-0 md:h-72 lg:h-64 lg:py-4 xl:h-52"><span
                                        class="tracking-widest text-xs title-font font-medium mb-1 dark:text-gray-400">FREE
                                        COURSE</span>
                                    <div class="title-font flex text-lg font-medium text-gray-900 mb-3 dark:text-white">
                                        React JS Tutorials For Beginners</div>
                                    <p class="text-gray-700 text-base dark:text-gray-400">React is a free and
                                        open-source front-end JavaScript library. This series will cover React from
                                        starting to the end. We will learn react from the ground up!</p>
                                </div>
                                <div class="px-6 pt-4 pb-2"><span
                                        class="inline-block text-white bg-purple-700 rounded-full px-3 py-2 text-sm font-semibold mr-2 my-2 cursor-pointer hover:bg-purple-600">
                                        Start Watching </span></div>
                            </div>
                        </div>
                    </div>
                </div>


                <hr class="dark:border-gray-500">
                <?php include('testimonials.php'); ?>
                <?php include('include/footer.php'); ?>
            </div>


        </div>



<?php echo'</body> </html>'?>