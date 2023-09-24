<style>
    #sidebar {
        height: 100%;
        width: 250px;
        position: fixed;
    }

    #list {
        padding-left: 0px;
    }

    #list a {
        transition: 0.5s;
        display: block;
        line-height: 2.5;
        margin-bottom: 5px;
        color: white;
        text-decoration: none;
        padding-left: 15px;
    }

    .active {
        background-color: rgba(255, 255, 255, 0.1);
        border-right: 2px solid orange;
    }

    #list a:hover {
        background-color: rgba(255, 255, 255, 0.1);

    }

    .content {
        margin-left: 255px;
    }

    .tabcontent {
        transition: 0.7s;
    }
</style>
<div id="sidebar" class="bg-dark shadow">
    <p class="text-white text-center py-3 bg-primary" style="font-size: 21px;font-weight: bold ;">The African Union</p>
    <ul id="list">
        <li>
            <a href="#" onclick="openCity(event, 'About')" class="tablinks" id="defaultOpen">About company</a>
        </li>
        <li>
            <a href="#" onclick="openCity(event, 'address')" class="tablinks">Address</a>
        </li>
        <li>
            <a href="#" onclick="openCity(event, 'email')" class="tablinks">E-mail</a>
        </li>
        <li>
            <a href="#" onclick="openCity(event, 'client')" class="tablinks">Members</a>
        </li>
        <li>
            <a href="#" onclick="openCity(event, 'countries')" class="tablinks">Countries</a>
        </li>
        <li>
            <a href="#" onclick="openCity(event, 'header')" class="tablinks">Headers</a>
        </li>
        <li>
            <a href="#" onclick="openCity(event, 'social')" class="tablinks">Socials</a>
        </li>
        <li>
            <a href="#" onclick="openCity(event, 'solution')" class="tablinks">Solutions</a>
        </li>
        <li>
            <a href="#" onclick="openCity(event, 'streaming')" class="tablinks">Streaming</a>
        </li>
    </ul>
</div>

<div class="content">
    <div class="container-fluid">


        <div id="About" class="tabcontent" style="display: none">
            <div class="w-100 pt-3" style="height: 50px;">

                <p style="font-weight: bold ;">About Company</p>

            </div>
            <hr>
            <div class="container mt-3">
                <?php echo form_open("admin/editcontent"); ?>
                <div class="mb-3 mt-3">
                    <label for="comment">Content:</label>
                    <textarea class="form-control" rows="5" id="comment" name="content"><?php echo $about[0]->content; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div id="address" class="tabcontent" style="display: none">
            <div class="w-100 pt-3" style="height: 50px;">

                <p style="font-weight: bold ;">Address</p>

            </div>
            <hr>
            <div class="container mt-3">
                <?php echo form_open("admin/alterAddress"); ?>
                <div class="mb-3 mt-3">
                    <label for="adress" class="form-label">Address:</label>
                    <input type="text" class="form-control" id="adress" placeholder="Enter address" name="address" required value="<?php echo $address[0]->address; ?>">
                    <label for="uname" class="form-label">E-mail:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter E-mail" name="email" required value="<?php echo $address[0]->email; ?>">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter your phone" name="phone" required value="<?php echo $address[0]->phone; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <div id="client" class="tabcontent" style="display: none">
            <div class="w-100 pt-3" style="height: 50px;">

                <p style="font-weight: bold ;">Members</p>

            </div>
            <hr>
            <div class="container mt-3">


                <table class="table table-striped table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Surname</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($client); $i++) : ?>
                            <tr>
                                <td><?php echo $client[$i]->first_name; ?></td>
                                <td><?php echo $client[$i]->middle_name; ?></td>
                                <td><?php echo $client[$i]->surname; ?></td>
                                <td><?php echo $client[$i]->address; ?></td>
                                <td>
                                    <a href="#" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalInfoMember-<?php echo $client[$i]->id_clients; ?>">Show</a>
                                    <a href="<?php echo base_url(); ?>Admin/deleteMember/<?php echo $client[$i]->id_clients; ?>" class="btn btn-outline-danger">Delete</a>
                                    <div class="modal fade" id="modalInfoMember-<?php echo $client[$i]->id_clients; ?>">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Member informations</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            First Name: <br>
                                                            Middle Name: <br>
                                                            Surname: <br>
                                                            Address: <br>
                                                            Street Number: <br>
                                                            State or Province: <br>
                                                            Country: <br>
                                                            Zip Code or Postal Code: <br>
                                                            Occupation: <br>
                                                            Highest Educational Level: <br>
                                                            Telephone Number: <br>
                                                            Country Code: <br>
                                                            Local Number: <br>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <?php echo $client[$i]->first_name; ?> <br>
                                                            <?php echo $client[$i]->middle_name; ?> <br>
                                                            <?php echo $client[$i]->surname; ?> <br>
                                                            <?php echo $client[$i]->address; ?> <br>
                                                            <?php echo $client[$i]->street_number; ?> <br>
                                                            <?php echo $client[$i]->state; ?> <br>
                                                            <?php echo $client[$i]->country; ?> <br>
                                                            <?php echo $client[$i]->zipcode; ?> <br>
                                                            <?php echo $client[$i]->occupation; ?> <br>
                                                            <?php echo $client[$i]->highest; ?> <br>
                                                            <?php echo $client[$i]->telephone; ?> <br>
                                                            <?php echo $client[$i]->country_code; ?> <br>
                                                            <?php echo $client[$i]->local_number; ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="countries" class="tabcontent" style="display: none">
            <div class="w-100 pt-3" style="height: 50px;">

                <p style="font-weight: bold ;">Countries</p>

            </div>
            <hr>
            <div class="container mt-3">
                <!-- <form action="" style=""> -->
                <?php echo form_open_multipart("Admin/addCountry", array("style" => "height: 250px; overflow-y: scroll")); ?>
                <div class="mb-3 mt-3">
                    <label for="country name" class="form-label">Country name:</label>
                    <input type="text" class="form-control" name="country_name" placeholder="Country name">
                    <label for="country name">Country Slug</label>
                    <select class="form-select" name="slug_country" id="">
                        <option value="">Select a country</option>
                        <option value="madagascar">Madagascar</option>
						<option value="cap-vert">Cape Verde</option>
						<option value="comores">Comoros</option>
                        <option value="eswatini">Eswatini</option>
						<option value="mauritius">Mauritius</option>
						<option value="sao-tome">Sao Tome</option>
						<option value="seychelles">Seychelles</option>
                        <option value="namibie">Namibia</option>
                        <option value="ouest-sahara">West Sahara</option>
                        <option value="kenya">Kenya</option>
                        <option value="algeria">Algeria</option>
                        <option value="ethiopie">Ethiopia</option>
                        <option value="tunisie">Tunisia</option>
                        <option value="lesotho">Lesotho</option>
                        <option value="mauritania">Mauritania</option>
                        <option value="mali">Mali</option>
                        <option value="senegal">Senegal</option>
                        <option value="gambia">Gambia</option>
                        <option value="guina-bissau">Guinea-bissau</option>
                        <option value="guinea">Guinea</option>
                        <option value="sierra-leone">Sierra-leone</option>
                        <option value="liberia">Liberia</option>
                        <option value="cote-ivoire">Ivory Coast</option>
                        <option value="ghana">Ghana</option>
                        <option value="burkina">Burkina</option>
                        <option value="togo">Togo</option>
                        <option value="benin">Benin</option>
                        <option value="niger">Niger</option>
                        <option value="chad">Chad</option>
                        <option value="nigeria">Nigeria</option>
                        <option value="sudan">Sudan</option>
                        <option value="eritrea">Eritrea</option>
                        <option value="camerron">Camerron</option>
                        <option value="central-africa-republic">Central Africa Republic</option>
                        <option value="suthern-sudan">Southern Sudan</option>
                        <option value="equatorial-guinea">Equatorial Guinea</option>
                        <option value="gabon">Gabon</option>
                        <option value="rep-of-congo">Republic of Congo</option>
                        <option value="angola">Angola</option>
                        <option value="dem-rep-of-congo">Democratic Republic Of Congo</option>
                        <option value="zambia">Zambia</option>
                        <option value="malawi">Malawi</option>
                        <option value="botswana">Botswana</option>
                        <option value="zimbabwe">Zimbabwe</option>
                        <option value="south-africa">South Africa</option>
                        <option value="mozambique">Mozambic</option>
                        <option value="tanzania">Tanzania</option>
                        <option value="somalia">Somalia</option>
                        <option value="uganda">Uganda</option>
                        <option value="djibouti">Djibouti</option>
                        <option value="burundi">Burundi</option>
                        <option value="rwanda">Rwanda</option>
                        <option value="swaziland">Swaziland</option>
                        <option value="egypt">Egypt</option>
                        <option value="libia">Libia</option>
                    </select>

                    <label for="uname" class="form-label">Description:</label>
                    <textarea class="form-control" id="uname" placeholder="Enter Description" name="description" required></textarea>
                    <label for="uname" class="form-label">Biography:</label>
                    <textarea class="form-control" id="uname" placeholder="Enter Biography" name="biography" required></textarea>
                    <label for="Economique" class="form-label">Economic:</label>
                    <textarea class="form-control" id="uname" placeholder="Enter Economique" name="economic" required></textarea>
                    <label for="Economique" class="form-label">Politic:</label>
                    <textarea class="form-control" id="uname" placeholder="Enter politic" name="politic" required></textarea>
                    <label for="Economique" class="form-label">Historic:</label>
                    <textarea class="form-control" id="uname" placeholder="Enter politic" name="historic" required></textarea>
                    <label for="Economique" class="form-label">Flag country:</label>
                    <input type="file" class="form-control" id="uname" placeholder="Enter flag country" name="flag_country" required>
                    <label for="Economique" class="form-label">Culture description:</label>
                    <textarea type="text" class="form-control" name="culture_description" id="uname" placeholder="Enter politic culture description" required></textarea>
                    <label for="Economique" class="form-label">Culture photo:</label>
                    <input type="file" class="form-control" required name="photo_culture" id="uname" placeholder="photo culture">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <hr>
            <table class="table table-striped">
                <thead class="bg-primary text-white">
                    <tr>
                        <td>Country Image</td>
                        <td>Country Name</td>
                        <td>Slug country</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($country = 0; $country < count($countries); $country++) : ?>
                        <tr>
                            <td>
                                <img style="height: 50px; width: 50px;object-fit: cover;" src="<?php echo base_url() ; ?>public/<?php echo $countries[$country]->flag_country ; ?>" alt="">
                            </td>
                            <td><?php echo $countries[$country]->country_name ; ?></td>
                            <td><?php echo $countries[$country]->slug_country ; ?></td>
                            <td>
                                <a href="<?php echo base_url() ; ?>Admin/deleteCountry/<?php echo $countries[$country]->id_countries ; ?>" class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>



        </div>

        <div id="email" class="tabcontent" style="display: none">
            <div class="w-100 pt-3" style="height: 50px;">

                <p style="font-weight: bold ;">E-mail</p>

            </div>
            <hr>
            <div class="container mt-3">
                <table class="table-striped table ">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>E-mail</th>
                            <th>Object</th>
                            <th>Content</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($e = 0; $e < count($emails); $e++) : ?>
                            <tr>
                                <td><?php echo $emails[$e]->email ?></td>
                                <td><?php echo $emails[$e]->objet ?></td>
                                <td><?php echo $emails[$e]->content ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>Admin/deleteEmail/<?php echo $emails[$e]->id_emails; ?>" class="btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>

        </div>

        <div id="header" class="tabcontent" style="display: none">
            <div class="w-100 pt-3" style="height: 50px;">

                <p style="font-weight: bold ;">Headers</p>

            </div>
            <hr>
            <div class="container mt-3">
                <!-- <form action=""> -->
                <?php echo form_open("admin/editHeader"); ?>
                <div class="mb-3 mt-3">
                    <label for="mission" class="form-label">Mission:</label>
                    <textarea class="form-control" id="uname" placeholder="Enter mission" name="mission" required><?php echo $header[0]->mission; ?></textarea>
                    <label for="objectif" class="form-label">Objectif:</label>
                    <textarea class="form-control" id="uname" placeholder="Enter objectif" name="objectif" required><?php echo $header[0]->objectif; ?></textarea>
                    <label for="culture" class="form-label">Culture:</label>
                    <textarea class="form-control" id="uname" placeholder="Enter culture" name="culture" required><?php echo $header[0]->culture; ?></textarea>



                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <div id="social" class="tabcontent" style="display: none">
            <div class="w-100 pt-3" style="height: 50px;">

                <p style="font-weight: bold ;">Socials</p>

            </div>
            <hr>
            <div class="container mt-3">
                <!-- <form action=""> -->
                <?php echo form_open("admin/editSocial"); ?>
                <div class="mb-3 mt-3">
                    <label for="facebook" class="form-label">Facebook:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter facebook" name="fb" required value="<?php echo $social[0]->facebook; ?>">
                    <label for=">twitter" class="form-label">Twitter:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter twitter" name="twitter" required value="<?php echo $social[0]->twitter; ?>">
                    <label for=">youtube" class="form-label">YouTube:</label>
                    <input type="text" class="form-control" id="uname" value="<?php echo $social[0]->youtube; ?>" placeholder="Enter youtube" name="yt" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <div id="solution" class="tabcontent" style="display: none">
            <div class="w-100 pt-3" style="height: 50px;">

                <p style="font-weight: bold ;">Solutions</p>

            </div>
            <hr>
            <div class="container mt-3">

                <!-- <form action=""> -->
                <?php echo form_open("admin/editSolution"); ?>
                <div class="mb-3 mt-3">

                    <label for="facebook" class="form-label">Content:</label>
                    <textarea class="form-control" id="uname" placeholder="Enter content" name="content" required><?php echo $solution[0]->content; ?></textarea>
                    <label for="organisation et fonction" class="form-label">Organization and Function:</label>
                    <textarea type="text" class="form-control" id="uname" placeholder="Enter Organization and Function" name="oaf" required><?php echo $solution[0]->organisation_et_fonction; ?></textarea>
                    <label for="developpement_economique" class="form-label">Economique Development:</label>
                    <textarea type="text" class="form-control" id="uname" placeholder="Enter developpement economique" name="ed" required><?php echo $solution[0]->developpement_economique; ?></textarea>
                    <label for="organisation des comits regionaux:" class="form-label">organisation des comits
                        regionaux:</label>
                    <textarea class="form-control" id="uname" placeholder="Enter organisation des comits regionaux:" name="ocr" required><?php echo $solution[0]->organisation_des_comites_regionaux; ?></textarea>
                    <label for="organisation des comits regionaux:" class="form-label">organisation des comits
                        district:</label>
                    <textarea class="form-control" id="uname" placeholder="Enter organisation des comits district:" name="ocd" required><?php echo $solution[0]->organisation_des_comites_district; ?></textarea>
                    <label for=">resolution des differents:" class="form-label">resolution des differents
                        resolution des differents:</label>
                    <textarea class="form-control" id="uname" placeholder="Enter resolution des differents:" name="rd" required><?php echo $solution[0]->resolution_des_differents; ?></textarea>
                    <label for=">interpretation conctitutionnelle:" class="form-label">interpretation
                        conctitutionnelle
                        interpretation conctitutionnelle:</label>
                    <textarea class="form-control" id="uname" placeholder="Enter interpretation conctitutionnelle:" name="ic" required><?php echo $solution[0]->interpretation_constitutionnelle; ?></textarea>

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>




        </div>

        <div id="streaming" class="tabcontent" style="display: none">
            <div class="w-100 pt-3" style="height: 50px;">

                <p style="font-weight: bold ;">Youtube Streaming</p>

            </div>
            <hr>
            <div class="container mt-3">
                <!-- <form action=""> -->
                <?php echo form_open("admin/editStreaming"); ?>
                <div class="mb-3 mt-3">


                    <label for="link" class="form-label">Link from YouTube:</label>
                    <textarea class="form-control" id="uname" placeholder="Enter link" name="yt" required><?php echo $streaming[0]->link; ?></textarea>

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>