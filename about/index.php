<?php
//This root variable is used for a reference point for the navbar links
$root = "../";
require_once '../util/CisUtil.class.php';


$pageTitle = "JoshuaMC | About";
$headHtml = '
<style>
#tboc {
    position: sticky;
    top: 70px;
}

#photoFig {
    justify-content: center;
}

@media (max-width: 768px) {
#tboc {
 position: static;
}
#picture {
width: 100% !important;

}
#picture picture,#picture img {
justify-content: center;
}

figcaption {

 text-align: start;
}

</style>

';

require_once '../util/Header.class.php';
include '../fragments/startOfPage.php';
include "../fragments/navbar.php";

?>

<?php
/*Header*/
$header = new Header("About ME", array("height" => "158px","classes"=>"container"));
$header->build()
?>
    <div id="main-container" class="container">
        <div class="row">
            <aside class="pt-2  col-md-3 mb-2" style="position: sticky">
                <div id="tboc" class="card">
                    <h5 class="px-1 bg-dark-subtle py-1 text-center">Table Of Contents</h5>
                    <ol class="list-group-numbered">
                        <li class="list-group-item"><a href="#">About Me</a></li>
                        <li class="list-group-item"><a href="#Skills">Skills</a></li>
                        <li class="list-group-item"><a href="#Experience">Experience</a></li>
                        <li class="list-group-item"><a href="#References">References</a></li>
                        <li class="list-group-item"><a href="#Programming-Languages">Programming Languages</a></li>
                    </ol>
                </div>
            </aside>
            <main id="" class="body-color pt-2 col-md-9">
                <article class="">
                    <h2 class="bg-dark-subtle px-2 pb-1 m-0">About Me</h2>
                    <section id="About-Me" class="overflow-hidden">
                        <figure id="picture" class=" figure float-end border-2 border-dark py-2 px-2  mx-2 mb-2 mt-1"
                                style="width: fit-content; height: fit-content;">
                            <picture style="height: fit-content; width: fit-content;">
                               <!-- <source media="(min-width: 1200px)" srcset="photos/profile_250x333.jpg">-->
                                <source media="(min-width: 992px)" srcset="photos/profile_200x267.jpg">
                                <source media="(min-width: 992px)" srcset="photos/profile_150x200.jpg">
<!--                                <source media="(min-width: 576px)" srcset="photos/profile_100x133.jpg">-->
                                <img src="photos/profile_150x200.jpg" class="figure-img img-fluid rounded"
                                     alt="A picture of Joshua">
                            </picture>
                            <p class="px-2 mt-0 m-0">
                            <figcaption id="photoFig" class="figure-caption fs-6">A picture of Joshua Mckenna</figcaption>
                        </figure>

                        <span class="text-indent lh-lg fs-6" style="word-break: break-all">
                        Joshua Mckenna, who is he? Well, I am just a guy who is 21 years old and loves making
                        and
                        creating things from my imagination, starting from the time I was young and building things
                        like
                        a
                        house module out of lego... then switching to Minecraft. Eventually, I got into building and
                        moderating Minecraft servers like Lifeboat Network. I also ran my own Minecraft server
                        called
                        Swiftraid, a faction server with its own custom plugins. In my free time, I also play Call
                        of
                        Duty
                        <span>
                        on PS4 and a lot of other games. I enjoy mountain biking, four-wheeling, snorkeling, and a
                        lot
                        more.
                        </span>
                        </span>
                        </p>
                    </section>
                    <section id="Skills">
                        <h2 class="bg-dark-subtle px-2 pb-1">Skills</h2>
                        <p class="mb-0">These are thing that I learned from school or from work experience that i'm able
                            to do!</p>
                        <ul class="list-group ms-5 mb-3 mt-0">
                            <li class="">Business Analysis</li>
                            <li>Software Programmer</li>
                            <li>Networking</li>
                            <li>(In Training) Light Equipment Operator</li>
                            <li>Lawn detailing (lawn Maintenance)</li>
                            <li>Car Detailing</li>
                        </ul>
                    </section>
                    <section id="Experience">
                        <h2 class="bg-dark-subtle px-2 pb-1">Experience</h2>
                        <div class="mt-4">
                            <h4 class="pb-0 mb-0 ">Curran & Briggs</h4>
                            <h6 class="pb-0">Construction Laborer</h6>
                            <p class="py-0 mb-0">May 2023 - August 2023 (4 months)</p>
                            <p>Summerside, Prince Edward Island, Canada
                                I mostly drove a 20-ton roller and I would sometimes
                                operate the skid steer and mini excavator. I had to learn patient because there was alot
                                of
                                sitting around.</p>
                        </div>
                        <div class="mt-4">
                            <h4 class="pb-0 mb-0">Centennial Carstar</h4>
                            <h6 class="pb-0">Car Detailer</h6>
                            <p class="py-0 mb-0">June 2019 - May 2023 (4 years)</p>
                            <p>Learned to take my time to clean cars with great detail</p>
                        </div>

                        <div class="mt-4">
                            <h4 class="pb-0 mb-0">Master Packaging Inc.</h4>
                            <h6 class="pb-0">General Laborer</h6>
                            <p class="py-0 mb-0">May 2022 - August 2022 (4 months)</p>
                            <p>General Labour doing 2 day and then 2 nights - 12 hour shifts</p>
                        </div>

                        <div class="mt-4">
                            <h4 class="pb-0 mb-0">Sobeys</h4>
                            <h6 class="pb-0">Meat Associate</h6>
                            <p class="py-0 mb-0">September 2021 - May 2022 (9 months)</p>
                            <!-- Add job details here -->
                            <p>
                                I mostly Cleaned the tools and saws for meat department.
                                Also use the meat grinder and packaged for ground beef
                            </p>
                        </div>

                        <div class="mt-4">
                            <h4 class="pb-0 mb-0">Walmart Canada</h4>
                            <h6 class="pb-0">Fresh Associate</h6>
                            <p class="py-0 mb-0">October 2020 - September 2021 (1 year)</p>
                            <!-- Add job details here -->
                            <p>I worked all the fesh departments</p>
                            <ul>
                                <li>Meats and deli</li>
                                <li>Freezer & Cooler Department (Dairy kinda)</li>
                                <li>Produce</li>
                                <li>Bakery</li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <h4 class="pb-0 mb-0">Grass Cutting</h4>
                            <h6 class="pb-0">Self employeed</h6>
                            <p class="py-0 mb-0">2018 - 2023 (4 years)</p>
                            <!-- Add job details here -->
                            <p>
                                I used a 0 zero turn and saved 7 hours or more each week on one guy's yard. I took
                                delight in my lawn mowing, and it remains my favourite pastime.
                                work.
                            </p>
                        </div>
                    </section>
                    <section id="References">
                        <h2 class="bg-dark-subtle px-2 pb-1">References</h2>
                        <p>I need to update this...</p>
                    </section>
                    <section id="Programming-Languages">
                        <h2 class="bg-dark-subtle px-2 pb-1">Program Languages</h2>
                        <div class="px-2">
                            In this section, I discuss the programming languages that I have previously used. I also
                            provide
                            examples.
                            <ul>
                                <li>C# (Used for Mobile and PC applications)
                                    <ul>
                                        <li>Windows Form Applications</li>
                                    </ul>
                                </li>
                                <li>HTML,CSS, Javascript (Used for web design)
                                    <ul>
                                        <li>Bootstrap</li>
                                    </ul>
                                </li>
                                <li>Javascript
                                    <ul>
                                        <li>Bootstrap</li>
                                        <li>JQuery</li>
                                        <li>React</li>
                                        <li>React Native
                                    </ul>
                                </li>
                                <li>php</li>
                                <li>Java
                                    <ul>
                                        <li>Minecraft Server Plugins (Any Bukkit Based)</li>
                                        <li>Console Applications</li>
                                        <li>Spring framework</li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </section>

                </article>
            </main>
        </div>
    </div>
<?php
include '../fragments/footer.php';
$jsLinks = array("../js/colorMode.js");
include '../fragments/endOfPage.php';
