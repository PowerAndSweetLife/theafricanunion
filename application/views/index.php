<!-- carouselle -->

<div style="margin-top: 100px" id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo base_url(); ?>public/images/sunset-3750152_1280.png" alt="Los Angeles" class="d-block" style="width:100%">


        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url(); ?>public/images/sunset-3750152_1280.jpg" alt="Chicago" class="d-block" style="width:100%">
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url(); ?>public/images/52.png" alt="New York" class="d-block" style="width:100%">
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<br>
<div class="container mt-4" id="apropos">
    <h1 style="text-align: center;color: rgb(155, 106, 50); font-weight: bold ;">WELCOME TO THE AFRICAN UNION</h1>

</div>
<br>
<!-- content -->

<div class="container-fluid ">
    <div class="container ">
        <div class="row">
            <div class="col-md-4 p-3 ">
                <div class="card card-reform bg-light text-dark" style="width:400px">

                    <img class="card-img-top" src="<?php echo base_url(); ?>public/images/logo.png" alt="Card image" style="width: 355px">


                </div>
            </div>
            <div class="col-md-8 p-3 ">
                <div class="card card-reform bg-light text-dark">


                    <h2 class="">MISSIONS</h2>
                    <p style="min-height: 100px;">
                        <?php echo $header[0]->mission; ?>
                    </p>
                    <h2> GOALS, VISION</h2>

                    <p style="min-height: 130px;">
                        <?php echo $header[0]->objectif; ?>
                    </p>


                </div>
            </div>

        </div>

    </div>

</div>

<!-- content 2 -->
<div class="container-fluid bg-light text-dark mt-4">

    <div class="container">

        <h2 class="mt-5 py-3" style="text-align: center; color: rgb(155, 106, 50);font-weight: bold;">CITIZENS & DIFFERENT CULTURES
        </h2>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 pt-1 pb-3">
                <p style="text-align: justify!important;" class=""><?php echo $header[0]->culture; ?></p>
            </div>
            <div class="col-md-2 p-3 "></div>
        </div>
    </div>
</div>
<!-- slect -->
<section class="pt-5 pb-5">
    <div class="container">

        <div class="row">
            <div class="col-6">

            </div>
            <br>
            <div class="col-6 text-end w-100">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <?php for ($i = 0; $i < $nbre_carousel; $i++) : ?>
                            <?php if ($i == 0) : ?>
                                <div class="carousel-item active">
                                    <div class="row">
                                        <?php for ($j = 0; $j < count($countries[$i]); $j++) : ?>
                                            <div class="col-md-3 mb-3">
                                                <div class="card" data-aos="fade-up-right">
                                                    <div style="height: 200px;background-image: url('public/<?php echo $countries[$i][$j]->flag_country; ?>');background-repeat: no-repeat; background-position:center; background-size:cover;" class="card-header">
                                                    </div>
                                                    <!-- <img class="img-fluid" alt="" src="public/images/AlgeriaFlag.jpg"> -->
                                                    <div class="card-body">
                                                        <h4 class="card-title p-1" style="font-weight: bold;"><?php echo $countries[$i][$j]->country_name; ?></h4>
                                                        <div class="card-text p-1" style="height: 200px;overflow-y: hidden">
                                                            <?php echo $countries[$i][$j]->description; ?>
                                                        </div>
                                                        <a class="btn btn-outline-primary" href="<?php base_url(); ?>show_more/<?php echo $countries[$i][$j]->slug_country; ?>"> Read more<i class="fas fa-arrow-right ml-2"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="carousel-item">
                                    <div class="row">
                                        <?php for ($j = 0; $j < count($countries[$i]); $j++) : ?>
                                            <div class="col-md-3 mb-3">
                                                <div class="card" data-aos="fade-up-right">
                                                    <div style="height: 200px;background-image: url('public/<?php echo $countries[$i][$j]->flag_country; ?>');background-repeat: no-repeat; background-position:center; background-size:cover;" class="card-header">
                                                    </div>
                                                    <!-- <img class="img-fluid" alt="" src="public/images/AlgeriaFlag.jpg"> -->
                                                    <div class="card-body">
                                                        <h4 class="card-title p-1" style="font-weight: bold;"><?php echo $countries[$i][$j]->country_name; ?></h4>
                                                        <p class="card-text p-1" style="height: 200px;overflow-y: hidden">
                                                            <?php echo $countries[$i][$j]->description; ?>
                                                        </p>
                                                        <a class="btn btn-outline-primary" href="<?php base_url(); ?>show_more/<?php echo $countries[$i][$j]->slug_country; ?>"> Read more <i class="fas fa-arrow-right ml-2"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- carte afrique -->
<!-- <div class="container">
    <div style="height: 500px;">
        <h1>image afrique</h1>
    </div>

</div> -->
<section id="">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="overflow-x: auto;">
                <!-- <iframe src="https://www.nationsonline.org/oneworld/africa_map.htm" style="width:100%;height:500px"></iframe> -->
                <!-- Image Map Generated by http://www.image-map.net/ -->
                <img src="<?php echo base_url(); ?>public/images/map.jpg" usemap="#image-map" id="africaMap">
                <map name="image-map">
                    <area data-state="MAD" : target="_blank" alt="Madagascar" title="Madagascar" href="<?php echo base_url(); ?>show_more/madagascar" coords="1080,909,1074,914,1075,925,1063,934,1056,946,1041,957,1029,967,1012,973,1002,979,996,994,999,1019,996,1033,987,1045,976,1059,976,1078,982,1092,980,1106,994,1119,1007,1118,1018,1116,1032,1099,1048,1063,1068,1021,1074,996,1083,980,1087,966,1093,963,1089,932" shape="poly">
                    <area data-state="MOR" target="_blank" alt="Maroc" title="Maroc" href="<?php echo base_url(); ?>show_more/maroc" coords="167,269,175,260,199,251,220,232,225,214,237,197,256,186,274,176,291,153,298,161,318,163,336,176,334,198,339,209,333,213,284,234,297,233,269,244,226,262,223,272,214,272" shape="poly">
                    <area data-state="NAM" target="_blank" alt="Namibie" title="Namibie" href="<?php echo base_url(); ?>show_more/namibie" coords="559,1136,559,1123,557,1113,549,1093,548,1082,554,1072,545,1057,533,1040,522,1024,515,1011,512,987,508,992,537,987,559,992,589,991,605,992,622,1000,640,1000,645,1006,647,1032,647,1062,630,1061,628,1082,628,1105,628,1125,631,1151,631,1158,618,1163,605,1161,596,1158,586,1150,579,1158" shape="poly">
                    <area data-state="WSA" target="_blank" alt="Ouest Sahara" title="Ouest Sahara" href="<?php echo base_url(); ?>show_more/ouest-sahara" coords="95,365,148,370,154,348,168,336,176,301,221,300,224,275,204,271,167,270,149,289" shape="poly">
                    <area data-state="KEN" target="_blank" alt="Kenya" title="Kenya" href="<?php echo base_url(); ?>show_more/kenya" coords="910,772,932,788,946,776,951,758,969,740,962,730,959,671,971,652,961,652,947,651,939,660,913,659,884,646,857,645,857,652,869,694,858,708,855,717,866,725,857,728,862,735" shape="poly">
                    <area data-state="ALG" target="_blank" alt="Algerie" title="Algerie" href="<?php echo base_url(); ?>show_more/algeria" coords="421,413,448,392,511,354,506,340,493,337,480,312,487,301,485,293,489,271,481,251,475,226,458,202,457,187,469,176,471,154,477,149,463,144,455,149,437,151,422,148,404,148,387,151,364,156,353,159,340,167,332,170,340,209,335,216,320,213,313,218,301,221,301,232,290,235,281,242,261,247,250,247,227,260,226,273,229,283,335,373,347,385,355,390,361,396,370,402,380,410,382,416,388,419" shape="poly">
                    <area data-state="ETH" target="_blank" alt="Ethiopie" title="Ethiopie" href="<?php echo base_url(); ?>show_more/ethiopie" coords="956,646,962,650,970,649,988,644,1003,634,1021,631,1063,581,1047,584,1023,576,999,570,989,555,978,546,982,535,966,537,967,522,973,516,964,507,955,497,947,487,926,486,919,490,907,481,902,492,896,491,887,491,885,499,882,510,875,517,870,530,867,543,857,551,854,565,852,577,841,585,839,593,856,600,863,611,869,626,881,632,884,642,897,648,913,658,926,658,938,657" shape="poly">
                    <area data-state="EGP" target="_blank" alt="Egypt" title="Egypt" href="<?php echo base_url(); ?>show_more/egypt" coords="706,375,717,375,746,376,782,375,814,375,826,372,832,374,836,367,845,364,849,358,860,352,854,343,858,337,842,315,830,298,821,283,812,273,802,250,812,259,819,267,827,275,834,270,836,253,830,242,824,229,803,231,782,225,759,237,737,233,719,227,706,228,700,230,700,238,696,251" shape="poly">
                    <area data-state="TUN" target="_blank" alt="Tunisia" title="Tunisia" href="<?php echo base_url(); ?>show_more/tunisie" coords="483,249,493,240,493,231,513,216,511,205,505,198,495,194,503,180,507,167,505,153,500,149,494,143,484,141,477,148,473,155,472,170,467,179,458,188,459,202" shape="poly">
                    <area data-state="LIB" target="_blank" alt="Libia" title="Libia" href="<?php echo base_url(); ?>show_more/libia" coords="543,362,527,354,514,353,508,342,497,337,491,330,479,311,489,302,483,294,489,285,488,274,485,261,483,252,492,241,494,231,508,219,515,215,527,213,538,210,555,216,566,222,569,236,588,235,601,240,619,249,632,238,627,221,644,214,658,216,669,223,680,226,695,225,695,235,697,244,694,252,699,265,699,278,699,293,701,308,701,321,702,335,702,345,704,361,705,378,705,391,706,406,692,405,689,412,673,404,639,387,574,353,561,361,550,364" shape="poly">
                    <area data-state="LES" target="_blank" alt="Lesotho" title="Lesotho" href="<?php echo base_url(); ?>show_more/lesotho" coords="738,1193,747,1189,757,1183,766,1169,753,1160,744,1166,732,1177" shape="poly">
                    <area data-state="MAU" target="_blank" alt="Mauritania" title="Mauritania" href="<?php echo base_url(); ?>show_more/mauritania" coords="268,321,249,320,247,364,248,422,247,453,252,460,246,469,237,469,221,467,206,469,195,468,190,464,188,470,179,470,168,470,161,464,153,471,145,476,133,461,134,455,127,452,117,443,108,441,101,447,90,443,96,427,100,412,97,399,101,382,95,368,106,370,126,368,142,370,151,372,152,347,167,337,177,301,221,303,228,285,244,297,257,307,266,316" shape="poly">
                    <area data-state="MAL" target="_blank" alt="Mali" title="Mali" href="<?php echo base_url(); ?>show_more/mali" coords="234,552,244,549,241,542,249,534,247,526,255,525,262,511,265,504,272,507,277,502,283,499,292,493,304,487,316,481,333,482,345,484,350,476,363,477,378,476,390,471,395,459,397,448,397,442,397,434,395,419,383,419,381,412,374,405,361,397,354,390,348,387,274,320,249,322,250,370,248,427,248,455,252,461,249,470,235,470,224,470,209,470,196,468,187,470,170,470,157,464,155,475,146,480,149,488,148,497,157,507,159,518,170,519,180,521,189,515,197,528,197,537,203,550,217,550" shape="poly">
                    <area data-state="SEN" target="_blank" alt="Senegal" title="Senegal" href="<?php echo base_url(); ?>show_more/senegal" coords="82,508,95,508,111,506,127,506,135,514,144,517,154,515,157,505,148,496,148,486,145,477,133,460,127,452,117,444,104,444,92,444,89,452,79,464,76,470,78,482,82,492,92,489,103,489,112,493,121,497,112,500,104,495,97,495,89,498,79,498" shape="poly">
                    <area data-state="GAM" target="_blank" alt="The gambia" title="The gambia" href="<?php echo base_url(); ?>show_more/gambia" coords="87,497,92,496,98,494,105,496,114,499,121,500,119,493,110,491,102,487,94,488,87,489,82,491,78,496" shape="poly">
                    <area data-state="GBI" target="_blank" alt="Guinea Bissau" title="Guinea Bissau" href="<?php echo base_url(); ?>show_more/guina-bissau" coords="101,528,107,526,121,521,112,523,118,513,122,507,116,507,106,505,100,507,94,507,83,510,85,518,93,519,94,529" shape="poly">
                    <area data-state="GUI" target="_blank" alt="Guinea" title="Guinea" href="<?php echo base_url(); ?>show_more/guinea" coords="165,577,177,579,182,585,182,594,185,600,193,593,200,586,196,579,205,579,203,568,200,560,204,551,199,541,199,532,195,524,189,515,181,521,172,519,168,523,161,521,153,514,144,517,135,514,128,509,123,514,122,520,116,525,108,527,103,533,103,541,111,550,119,560,125,565,131,560,136,555,148,553,157,558,163,565" shape="poly">
                    <area data-state="SIE" target="_blank" alt="Sierra Leone" title="Sierra Leone" href="<?php echo base_url(); ?>show_more/sierra-leone" coords="151,601,159,589,162,579,165,566,157,557,146,553,135,553,127,564,126,572,126,580,129,586,133,593,139,596,144,601" shape="poly">
                    <area data-state="LIB" target="_blank" alt="Liberia" title="Liberia" href="<?php echo base_url(); ?>show_more/liberia" coords="150,605,158,615,168,617,176,627,186,636,202,643,205,633,207,626,201,618,190,617,195,606,193,594,187,599,180,596,180,585,174,578,165,579,163,586,158,593,152,598" shape="poly">
                    <area data-state="CIV" target="_blank" alt="Cote Divoir" title="Cote Divoir" href="<?php echo base_url(); ?>show_more/cote-ivoire" coords="209,645,222,636,240,635,261,635,278,636,281,628,274,619,272,609,279,605,277,595,283,587,285,582,283,571,279,561,268,558,260,560,252,558,244,551,235,552,232,547,226,547,221,551,211,551,204,554,202,564,202,573,201,579,198,587,194,595,195,604,191,614,197,618,204,621,205,631,204,640" shape="poly">
                    <area data-state="GHA" target="_blank" alt="Ghana" title="Ghana" href="<?php echo base_url(); ?>show_more/ghana" coords="295,640,307,635,316,632,326,627,337,624,333,614,334,593,334,585,329,577,334,571,328,565,329,552,325,543,319,545,307,545,298,543,289,539,283,546,280,556,281,566,284,577,283,586,280,595,278,603,274,612,275,622,281,628,283,635,289,641" shape="poly">
                    <area data-state="BUR" target="_blank" alt="Burkina" title="Burkina" href="<?php echo base_url(); ?>show_more/burkina" coords="290,539,306,543,320,545,328,541,336,547,343,539,356,536,361,526,356,522,350,518,342,510,348,507,339,502,331,490,331,481,323,478,309,484,302,490,298,493,290,492,283,500,279,504,269,505,263,510,263,517,257,525,250,527,245,537,243,548,248,554,257,561,265,559,274,559,281,564,280,557,280,548" shape="poly">
                    <area data-state="TOG" target="_blank" alt="Togo" title="Togo" href="<?php echo base_url(); ?>show_more/togo" coords="338,622,348,620,345,611,345,602,350,592,350,578,350,568,343,565,338,555,332,544,325,542,324,551,326,558,329,565,330,572,331,581,333,590,332,602,331,612" shape="poly">
                    <area data-state="BEN" target="_blank" alt="Benin" title="Benin" href="<?php echo base_url(); ?>show_more/benin" coords="353,618,364,617,365,593,365,583,371,577,371,569,383,555,382,542,381,534,376,526,371,522,362,525,358,535,351,538,343,543,337,552,343,562,349,572,350,581,349,591,347,601,344,611,348,619" shape="poly">
                    <area data-state="NIG" target="_blank" alt="Niger" title="Niger" href="<?php echo base_url(); ?>show_more/niger" coords="357,524,364,525,371,523,378,530,381,520,389,514,393,505,406,503,424,505,432,515,447,510,462,517,477,519,489,511,498,509,508,514,517,514,534,505,533,495,562,453,566,431,563,405,568,402,559,388,558,363,546,366,535,358,517,353,449,390,423,412,397,419,395,432,395,443,396,455,387,468,372,476,350,476,343,484,333,484,333,495,340,505,343,512,352,520" shape="poly">
                    <area data-state="CHA" target="_blank" alt="Chad" title="Chad" href="<?php echo base_url(); ?>show_more/chad" coords="554,525,552,535,560,558,547,561,541,565,541,574,549,580,557,587,561,598,565,604,580,599,585,604,593,600,609,598,617,592,622,585,619,580,629,580,640,576,651,569,659,560,663,552,672,550,678,550,679,543,673,534,672,525,664,521,662,515,666,510,666,504,672,500,669,493,674,491,677,485,679,474,695,473,693,464,693,437,692,412,574,354,558,360,559,386,569,401,564,409,565,427,563,453,538,488,533,494,534,504,541,512,546,516" shape="poly">
                    <area data-state="NGA" target="_blank" alt="Nigeria" title="Nigeria" href="<?php echo base_url(); ?>show_more/nigeria" coords="422,651,442,648,451,643,456,644,458,634,463,625,474,617,486,611,494,617,501,616,509,603,515,589,524,582,521,576,530,570,529,563,534,556,543,548,553,538,551,530,545,528,542,518,535,509,511,516,498,513,482,516,476,517,465,519,452,511,437,512,430,515,423,505,410,505,395,505,391,513,382,520,379,530,382,544,384,553,380,561,372,569,372,580,366,584,367,595,367,605,365,615,375,618,386,618,398,627,402,633,409,643,414,648" shape="poly">
                    <area data-state="SUD" target="_blank" alt="Sudan" title="Sudan" href="<?php echo base_url(); ?>show_more/sudan" coords="775,558,775,552,785,547,790,554,797,556,807,557,815,543,827,535,822,528,819,519,829,519,831,512,840,515,837,527,839,538,846,546,851,551,852,559,857,547,862,545,866,531,870,520,880,513,880,504,884,495,886,485,883,477,886,464,890,450,901,443,908,431,896,420,892,414,889,401,887,389,886,378,881,371,876,362,868,356,859,353,849,359,839,368,833,373,827,374,816,371,786,374,751,375,720,375,708,377,705,388,707,403,692,405,694,439,694,465,695,474,681,475,676,489,670,494,671,501,667,508,662,520,670,525,674,532,679,539,679,549,689,563,695,557,701,551,709,546,718,546,719,556,728,560,747,557,754,565,765,560" shape="poly">
                    <area data-state="ERI" target="_blank" alt="Eritrea" title="Eritrea" href="<?php echo base_url(); ?>show_more/eritrea" coords="973,514,982,510,975,507,972,499,962,495,955,485,944,482,936,473,931,469,927,465,924,460,921,454,920,447,918,437,908,430,907,436,898,440,893,444,889,451,887,458,883,467,883,476,883,486,892,489,900,492,906,481,915,487,923,484,931,486,939,486,945,490,953,494,957,500,964,506,969,510" shape="poly">
                    <area data-state="CAM" target="_blank" alt="Cameroon" title="Cameroon" href="<?php echo base_url(); ?>show_more/camerron" coords="474,683,529,687,544,682,559,689,571,691,575,677,568,670,558,661,554,647,551,637,547,624,563,601,553,585,543,577,541,570,544,562,561,561,558,549,551,536,545,546,536,554,529,564,529,571,523,575,523,583,513,591,510,601,501,616,495,619,489,610,484,613,474,617,466,621,462,628,457,636,454,643,459,655,468,662,478,671" shape="poly">
                    <area data-state="CAR" target="_blank" alt="Central Africa Republic" title="Central Africa Republic" href="<?php echo base_url(); ?>show_more/central-africa-republic" coords="572,673,581,663,596,663,612,664,618,647,628,639,640,648,653,653,671,655,679,647,687,647,703,641,715,642,729,639,742,639,745,631,736,627,733,618,725,610,716,603,715,593,698,589,700,583,690,583,686,576,692,569,685,559,675,550,663,553,660,560,648,569,637,580,623,583,614,594,602,598,587,602,579,601,566,604,552,619,547,624,551,634,551,647,558,658" shape="poly">
                    <area data-state="SSD" target="_blank" alt="Suthern Sudan" title="Suthern Sudan" href="<?php echo base_url(); ?>show_more/suthern-sudan" coords="803,662,793,652,783,648,776,647,768,650,760,651,756,644,746,639,746,633,737,626,733,621,729,611,716,602,713,592,697,588,700,582,689,582,686,574,689,568,696,563,699,553,702,545,715,546,718,555,724,561,731,561,746,560,754,566,763,563,777,558,783,549,793,555,802,557,816,542,826,536,823,525,819,521,831,521,830,513,840,516,837,526,837,541,845,547,852,554,848,561,851,570,850,580,839,586,837,595,844,596,854,603,859,612,866,620,871,628,880,632,882,641,857,643,850,653,843,656,831,660" shape="poly">
                    <area data-state="EQG" target="_blank" alt="Equatorial Guinea" title="Equatorial Guinea" href="<?php echo base_url(); ?>show_more/equatorial-guinea" coords="472,703,496,705,498,684,477,684,469,693,467,704" shape="poly">
                    <area data-state="GAB" target="_blank" alt="Gabon" title="Gabon" href="<?php echo base_url(); ?>show_more/gabon" coords="470,705,460,730,465,746,476,758,488,773,493,781,500,775,507,774,501,768,504,754,513,755,520,747,527,757,535,752,540,758,548,730,538,720,541,713,545,707,540,699,530,701,527,686,499,685,499,703,478,704,486,704,469,712,465,721" shape="poly">
                    <area data-state="RTC" target="_blank" alt="Rep Of The Congo" title="Rep Of The Congo" href="<?php echo base_url(); ?>show_more/rep-of-congo" coords="539,755,532,755,521,750,514,754,506,756,503,763,507,772,505,778,494,778,500,791,509,798,517,789,529,791,545,787,546,795,556,794,560,787,571,779,577,760,590,736,602,714,604,693,612,677,614,666,605,665,589,662,579,671,573,682,571,691,563,691,546,684,532,686,526,693,527,699,541,700,545,708,537,718,543,727,547,736,544,747" shape="poly">
                    <area data-state="ANG" target="_blank" alt="Angola" title="Angola" href="<?php echo base_url(); ?>show_more/angola" coords="514,808,517,801,525,795,520,789,508,795,509,801" shape="poly">
                    <area data-state="DRC" target="_blank" alt="Democratic Republic Of The Congo" title="Democratic Republic Of The Congo" href="<?php echo base_url(); ?>show_more/dem-rep-of-congo" coords="516,808,516,797,524,793,532,797,543,790,545,798,554,798,560,794,563,786,575,780,575,757,593,733,603,712,603,695,609,682,614,666,615,653,622,641,631,640,641,646,669,655,679,646,688,646,703,644,717,641,731,640,745,638,758,645,763,653,779,652,786,646,795,659,800,666,802,681,807,687,800,695,793,702,784,726,781,739,778,750,772,758,778,768,779,778,777,798,779,819,790,831,794,840,799,847,789,848,772,854,765,864,767,879,765,891,764,903,772,911,781,912,786,916,786,927,774,928,767,918,760,915,742,898,740,905,721,903,715,893,706,897,700,892,693,892,684,892,669,895,669,885,665,872,663,838,645,834,629,830,626,840,612,844,596,845,584,827,583,813,546,811,527,813" shape="poly">
                    <area data-state="AGO" target="_blank" alt="Angola" title="Angola" href="<?php echo base_url(); ?>show_more/angola" coords="542,993,607,993,622,999,640,1000,661,998,679,993,665,974,664,920,680,924,697,918,696,893,677,893,668,895,671,886,665,873,662,835,644,836,630,830,624,843,609,848,600,849,590,836,582,813,527,814,514,816,521,828,531,848,531,859,527,868,537,888,539,899,532,912,520,931,517,942,513,953,509,969,507,979,510,986,523,985,534,985" shape="poly">
                    <area data-state="ZMB" target="_blank" alt="Zambia" title="Zambia" href="<?php echo base_url(); ?>show_more/zambia" coords="739,997,753,981,767,979,772,968,790,963,787,954,836,936,830,931,835,921,840,910,840,897,845,885,841,868,829,859,816,858,809,856,800,845,788,848,774,853,767,862,767,874,766,890,765,904,773,912,783,909,786,927,773,928,764,914,753,909,743,902,728,907,716,896,704,898,697,892,697,916,686,921,666,925,663,969,681,992,700,990,711,993,729,1001" shape="poly">
                    <area data-state="MLW" target="_blank" alt="Malawi" title="Malawi" href="<?php echo base_url(); ?>show_more/malawi" coords="860,978,866,968,873,964,873,955,869,945,859,940,854,927,853,917,853,905,855,891,855,879,849,868,841,867,843,878,842,891,841,900,837,915,833,926,831,934,838,941,846,948,854,945,857,958,855,967" shape="poly">


                    <area data-state="BTS" target="_blank" alt="Botswana" title="Botswana" href="<?php echo base_url(); ?>show_more/botswana" coords="647,1060,644,1004,680,1000,688,1006,697,997,713,1000,719,1010,728,1023,739,1027,747,1038,751,1052,764,1056,771,1064,762,1070,756,1071,750,1079,742,1086,736,1089,728,1100,718,1107,714,1116,698,1119,688,1119,677,1114,670,1125,659,1130,648,1135,641,1130,643,1118,638,1109,631,1104,628,1062,640,1061" shape="poly">
                    <area data-state="ZIM" target="_blank" alt="Zimbabwe" title="Zimbabwe" href="<?php echo base_url(); ?>show_more/zimbabwe" coords="783,1065,796,1066,805,1060,818,1046,825,1029,825,1016,832,990,823,979,810,973,791,970,791,963,782,962,772,968,768,979,752,987,741,998,736,1005,717,999,721,1011,727,1018,732,1028,746,1034,750,1048,761,1057,773,1063" shape="poly">
                    <area data-state="SAF" target="_blank" alt="South Africa" title="South Africa" href="<?php echo base_url(); ?>show_more/south-africa" coords="631,1252,640,1248,651,1248,666,1243,678,1243,694,1246,707,1241,715,1240,727,1236,748,1217,765,1208,778,1192,788,1178,802,1164,814,1146,812,1137,805,1140,796,1143,785,1138,790,1126,799,1118,804,1111,804,1093,796,1068,770,1066,757,1071,745,1083,732,1097,719,1103,714,1116,689,1120,678,1112,672,1122,663,1131,650,1136,637,1132,643,1120,632,1107,629,1142,631,1155,620,1161,599,1162,590,1154,584,1153,583,1159,584,1171,588,1186,597,1200,605,1214,600,1223,607,1236,604,1244,613,1248,620,1250" shape="poly">
                    <area data-state="MOZ" target="_blank" alt="Mozambique" title="Mozambique" href="<?php echo base_url(); ?>show_more/mozambique" coords="809,1136,817,1132,817,1124,826,1115,839,1110,854,1102,861,1090,860,1063,858,1046,856,1028,898,1001,934,980,945,963,952,952,951,935,951,919,949,898,948,879,921,892,902,899,889,899,875,893,866,898,861,911,863,924,869,939,874,950,874,966,867,970,863,978,852,968,856,957,847,944,836,935,790,952,792,971,809,971,829,986,825,1014,827,1029,818,1043,798,1067,804,1092,804,1112,804,1119,804,1128" shape="poly">
                    <area data-state="TAN" target="_blank" alt="Tanzania" title="Tanzania" href="<?php echo base_url(); ?>show_more/tanzania" coords="891,897,911,892,928,892,947,878,939,865,933,852,937,844,938,829,932,820,928,812,930,801,934,793,910,773,911,765,855,734,844,746,849,754,846,760,838,756,826,754,822,758,818,748,821,734,800,735,803,745,803,757,803,766,798,778,788,790,792,804,790,816,799,828,803,842,816,857,830,863,847,868,857,873,859,888,865,896,876,895" shape="poly">
                    <area data-state="SOM" target="_blank" alt="Somalia" title="Somalia" href="<?php echo base_url(); ?>show_more/somalia" coords="971,739,961,730,960,671,970,658,977,648,999,633,1019,633,1065,582,1047,582,998,568,980,544,990,531,1006,545,1019,544,1028,538,1040,538,1049,531,1075,525,1093,520,1101,515,1107,515,1107,527,1107,537,1105,547,1104,564,1096,575,1085,604,1079,618,1063,649,1051,659,1032,678,1014,694,993,717,982,727" shape="poly">
                    <area data-state="UGA" target="_blank" alt="Uganda" title="Uganda" href="<?php echo base_url(); ?>show_more/uganda" coords="798,735,817,735,823,724,832,718,840,716,847,712,852,718,856,708,866,696,871,680,855,649,845,653,835,659,828,661,819,657,799,664,802,677,807,684,792,704,784,723,784,740,792,740" shape="poly">
                    <area data-state="DJI" target="_blank" alt="Djibouti" title="Djibouti" href="<?php echo base_url(); ?>show_more/djibouti" coords="987,534,978,534,968,538,966,527,972,519,983,511,989,515,988,524" shape="poly">
                    <area data-state="BUR" target="_blank" alt="Burundi" title="Burundi" href="<?php echo base_url(); ?>show_more/burundi" coords="787,788,794,778,803,770,798,758,792,757,785,764,776,761,779,774,779,783" shape="poly">
                    <area data-state="RWA" target="_blank" alt="Rwanda" title="Rwanda" href="<?php echo base_url(); ?>show_more/rwanda" coords="785,762,791,756,799,756,803,750,797,739,791,740,785,741,779,745,778,751,774,755,774,761" shape="poly">
                    <area data-state="SWA" target="_blank" alt="Swaziland" title="Swaziland" href="<?php echo base_url(); ?>show_more/swaziland" coords="799,1144,807,1140,805,1131,804,1123,797,1119,790,1122,788,1128,786,1136,790,1143" shape="poly">
                    <!-- <area data-state="SWA" target="_blank" alt="Swaziland" title="Swaziland" href="home-" coords="799,1144,807,1140,805,1131,804,1123,797,1119,790,1122,788,1128,786,1136,790,1143" shape="poly"> -->
                </map>
            </div>
        </div>
    </div>
</section>
<!-- solution -->
<div class="container-fluid bg-light text-dark" id="solutions">

    <div class="container">
        <br>
        <h2 class="mt-5" style="text-align: center; color: rgb(155, 106, 50); font-weight: bold ;">OUR SOLUTIONS
        </h2>
        <div class="row">
            <div class="col-md-2 p-3 "></div>
            <div class="col-md-8 p-3 ">
                <p style="text-align: justify!important;">
                    <?php echo $solution[0]->content; ?>
                </p>
            </div>
            <div class="col-md-2 p-3 "></div>
        </div>
    </div>
</div>
<!-- video -->
<div class="container-fluid ">
    <div class="container ">
        <div class="row">
            <div class="col-md-4 p-3 ">
                <div class="card card-reform bg-light text-dark" style="height:600px">

                    <ul class="list-group">
                        <li id="developpement_economique" class="list-group-item active solution_check">ECONOMIC AND COMMERCIAL DEVELOPMENT</li>
                        <li id="organisation_et_fonction" class="list-group-item solution_check" style="height: 90px;">ORGANIZATION AND FUNCTIONS OF THE AFRICAN UNION</li>
                        <li id="organisation_des_comites_regionaux" class="list-group-item solution_check" style="height: 90px;">ORGANIZATION OF REGIONAL COMMITTEES</li>
                        <li id="organisation_des_comites_district" class="list-group-item solution_check" style="height: 90px;">ORGANIZATION OF DISTRICT COMMITTEES</li>
                        <li id="resolution_des_differents" class="list-group-item solution_check" style="height: 90px;">CITIZEN DISPUTE RESOLUTION</li>
                        <li id="interpretation_constitutionnelle" class="list-group-item solution_check" style="height: 90px;">CONSTITUTIONAL INTERPRETATION</li>
                    </ul>


                </div>
            </div>
            <div class="col-md-8 p-3 ">
                <div class="card card-reform bg-light text-dark">
                    <div class="section_solution p-1" style="height: 545px;overflow-y: auto;text-align: justify!important" data-target="developpement_economique">
                        <?php echo $solution[0]->developpement_economique; ?>
                    </div>
                    <div class="section_solution p-1" style="height: 545px;overflow-y: auto;text-align: justify!important" data-target="organisation_et_fonction">
                        <?php echo $solution[0]->organisation_et_fonction; ?>
                    </div>
                    <div class="section_solution p-1" style="height: 545px;overflow-y: auto;text-align: justify!important" data-target="organisation_des_comites_regionaux">
                        <?php echo $solution[0]->organisation_des_comites_regionaux; ?>
                    </div>
                    <div class="section_solution p-1" style="height: 545px;overflow-y: auto;text-align: justify!important" data-target="organisation_des_comites_district">
                        <?php echo $solution[0]->organisation_des_comites_district; ?>
                    </div>
                    <div class="section_solution p-1" style="height: 545px;overflow-y: auto;text-align: justify!important" data-target="resolution_des_differents">
                        <?php echo $solution[0]->resolution_des_differents; ?>
                    </div>
                    <div class="section_solution p-1" style="height: 545px;overflow-y: auto;text-align: justify!important" data-target="interpretation_constitutionnelle">
                        <?php echo $solution[0]->interpretation_constitutionnelle; ?>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center w-100">
                <?php echo $streaming[0]->link; ?>
            </div>
        </div>
    </div>
</div>