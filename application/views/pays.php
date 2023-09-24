<?php if (count($countries) == 0) : ?>
    <div class="container-fluid" style="margin-top: 120px;min-height: 500px;">
        <div class="container d-flex align-items justify-content-center" style="height: 500px;">
            <h1>No content at this time</h1>
        </div>
    </div>
<?php else : ?>
    <div class="container-fluid" style="margin-top: 120px;">
        <div class="container">
            <h1 style="text-align: center; margin-top: 50px;font-weight: bold">
                <?php echo $countries[0]->country_name; ?>
            </h1>
            <div class="row mt-3">
                <div class="col-md-4 col-sm-12">
                    <div class="card card-reform bg-light text-dark" style="width:400px">

                        <img class="card-img-top" src="<?php echo base_url(); ?>public/<?php echo $countries[0]->flag_country; ?>" alt="Card image" style="height:300px">
                        <br>
                        <p class="mt-1">
                            <?php echo $countries[0]->description; ?>
                        </p>
                    </div>
                    <div class="card card-reform bg-light text-dark mt-4" style="width:400px">

                        <img class="card-img-top" src="<?php echo base_url(); ?>public/<?php echo $countries[0]->photo_culture ?>" alt="Card image" style="height:100%">
                        <br>
                        <p>
                            <?php echo $countries[0]->culture_description ?>
                        </p>
                    </div>


                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="card card-reform bg-light text-dark">


                        <h2 class="mt-5" style="text-align: center; color: rgb(155, 106, 50);font-weight: bold">BIOGRAPHY</h2>
                        <p>
                            <?php echo $countries[0]->biography; ?>
                        </p>
                        <br>
                        <h2 style="text-align: center;color: rgb(155, 106, 50);font-weight: bold"> HISTORICAL</h2>
                        <p>
                            <?php echo $countries[0]->historic ?>
                        </p>
                        <br>
                        <h2 style="text-align: center; color: rgb(155, 106, 50);font-weight: bold"> ECONOMIC</h2>

                        <p>
                            <?php echo $countries[0]->economic ?>
                        </p>
                        <br>
                        <h2 style="text-align: center; color: rgb(155, 106, 50);font-weight: bold">POLITICS</h2>

                        <p>
                            <?php echo $countries[0]->politic ?>
                        </p>


                    </div>


                </div>
            </div>

        </div>

    </div>

<?php endif; ?>