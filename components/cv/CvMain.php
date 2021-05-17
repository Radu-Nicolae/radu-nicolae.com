<?php
include 'CvItem.php';
include 'CvDatabase.php';
require_once 'components/cv/CvUtils.php';
$cvUtils = new cvUtils();
$cvDatabase = new CvDatabase();
?>


<html>
<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <nav id="navi">
                    <ul>
                        <li><a href="#page-1"><?= $cvCategories[0][$lang] ?></a></li>
                        <li><a href="#page-2"><?= $cvCategories[1][$lang] ?></a></li>
                        <li><a href="#page-21"><?= $cvCategories[2][$lang] ?></a></li>
                        <li><a href="#page-3"><?= $cvCategories[3][$lang] ?></a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-9">
                <div id="page-1" class="page one">
                    <h2 class="heading"><?= $cvCategories[0][$lang] ?></h2>


                    <?php

                    echo $cvUtils->generateCode($cvDatabase->getEducationCv());
                    ?>


                    <div id="page-2" class="page two">
                        <h2 class="heading"> <?= $cvCategories[1][$lang] ?> </h2>


                        <?= $cvUtils->generateCode($cvDatabase->getDevelopingCv()) ?>


                        <div id="page-21" class="page two">
                            <h2 class="heading"><?= $cvCategories[2][$lang] ?></h2>

                            <?= $cvUtils->generateCode($cvDatabase->getOtherExperienceCv()) ?>


                        </div>


                        <div id="page-3" class="page three">
                            <div id="page-3" class="page three">
                                <h2 class="heading"><?= $cvCategories[3][$lang] ?></h2>

                                <?php include 'skills/SkillsMain.php'?>

                            </div>

                        </div>

                        <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">

                            <h2 class="heading">IELTS Academic</h2>

                            <div class="container-fluid px-md-5">
                                <div class="row d-md-flex align-items-center">
                                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate paddingCounter">
                                        <div class="block-18 shadow">
                                            <div class="text">
                                                <strong class="number" style="color: #50C878">8.5</strong>
                                                <span>Listening</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate paddingCounter">
                                        <div class="block-18 shadow">
                                            <div class="text">
                                                <strong class="number" style="color: #50C878">8.5</strong>
                                                <span>Reading</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="container-fluid px-md-5">
                                <div class="row d-md-flex align-items-center">
                                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate paddingCounter">
                                        <div class="block-18 shadow">
                                            <div class="text">
                                                <strong class="number" style="color: #FFDF00">6.5</strong>
                                                <span>Writing</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate paddingCounter">
                                        <div class="block-18 shadow">
                                            <div class="text">
                                                <strong class="number" style="color: #AAFF00">7.0</strong>
                                                <span>Speaking</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="container-fluid px-md-5">
                                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate paddingCounter">
                                    <div class="block-18 shadow">
                                        <div class="text">
                                            <strong class="number" style="color: #44ff00 ">7.5</strong>
                                            <span>Overall</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </section>
                    </div>
                </div>
            </div>
        </div>
</section>




</html>