<?php

loadPartials('header');

?>
    <div class="page-wrapper toggled">


            <div class="container-fluid relative px-3">
                <div class="layout-specing">
                    <!-- Start Content -->
                    <div class="md:flex justify-between items-center">
                        <h5 class="text-lg font-semibold">Filiallar</h5>

                        <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                            <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                <a href="/admin">Dashboard</a></li>

                            <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                        </ul>
                        <ul class="navigation-menu list-none flex items-center mb-0 space-x-4">

                            <li>
                                <a href="/" class="text-gray-700 dark:text-white hover:text-green-600 transition">Home</a>
                            </li>
                        </ul>
                    </div>

                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-6">
                        <?php
                        /**
                         * @var $branches
                         */

                        foreach ($branches as $branch):?>
                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="<?php
                                    echo \App\Image::show($branch?->image) ?>" alt="">

                                    <div class="absolute top-4 end-4">
                                        <a href="javascript:void(0)"
                                           class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i
                                                class="mdi mdi-heart text-[20px]"></i></a>
                                    </div>
                                </div>

                                <div class="p-6">
                                    <div class="pb-6">
                                        <a href="/branches/<?= $branch->id?>"
                                           class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"><?= $branch->name; ?></a>
                                    </div>

                                    <ul class="pt-6 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">Manzil</span>
                                            <p class="text-lg font-medium"><?= $branch->address ?></p>
                                        </li>

                                    </ul>
                                </div>
                            </div><!--end property content-->
                        <?php
                        endforeach; ?>
                    </div><!--en grid-->


                    <!-- End Content -->
                </div>
            </div><!--end container-->

        </main>
        <!--End page-content" -->
    </div>
    <!-- page-wrapper -->

