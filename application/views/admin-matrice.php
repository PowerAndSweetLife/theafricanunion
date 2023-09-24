    <div class="container-fluid">
        <h2 class="text-center mb-2">The African Union Dashboard</h2>
        <div class="row">
            <div class="col-md-2 p-3">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'About')" id="defaultOpen">About</button>
                    <button class="tablinks" onclick="openCity(event, 'address')">Address</button>
                    <button class="tablinks" onclick="openCity(event, 'client')">Client</button>

                    <button class="tablinks" onclick="openCity(event, 'countries')" id="">Countries</button>
                    <!-- <button class="tablinks" onclick="openCity(event, 'email')">E-mail</button> -->
                    <button class="tablinks" onclick="openCity(event, 'header')">Header</button>

                    <button class="tablinks" onclick="openCity(event, 'social')" id="defaultOpen">Socials</button>
                    <button class="tablinks" onclick="openCity(event, 'solution')">Solution</button>
                    <button class="tablinks" onclick="openCity(event, 'streaming')">Streaming</button>


                </div>


            </div>
            <div class="col-md-10 p-3">

                <div id="About" class="tabcontent">
                    <h3>About</h3>
                    <div class="container mt-3">


                        <!-- <form action=""> -->
                        <?php echo form_open("admin/editcontent"); ?>
                        <div class="mb-3 mt-3">
                            <label for="comment">Content:</label>
                            <textarea class="form-control" rows="5" id="comment" name="content"><?php echo $about[0]->content; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>







                </div>

                <div id="address" class="tabcontent">
                    <h3>Address</h3>
                    <div class="container mt-3">


                        <!-- <form action=""> -->
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

                <div id="client" class="tabcontent">
                    <h3>Clients</h3>
                    <div class="container mt-3">


                        <table class="table table-striped table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Surname</th>
                                    <th>Address</th>
                                    <th>Street Number</th>
                                    <th>State or Province</th>
                                    <th>Country</th>
                                    <th>Zip Code or Postal Code</th>
                                    <th>Occupation</th>
                                    <th>Highest Educational Level</th>
                                    <th>Telephone Number</th>
                                    <th>Country Code</th>
                                    <th>Local Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($client); $i++) : ?>
                                    <tr>
                                        <td><?php echo $client[$i]->first_name ; ?></td>
                                        <td><?php echo $client[$i]->middle_name ; ?></td>
                                        <td><?php echo $client[$i]->surname ; ?></td>
                                        <td><?php echo $client[$i]->address ; ?></td>
                                        <td><?php echo $client[$i]->street_number ; ?></td>
                                        <td><?php echo $client[$i]->state ; ?></td>
                                        <td><?php echo $client[$i]->country ; ?></td>
                                        <td><?php echo $client[$i]->zipcode ; ?></td>
                                        <td><?php echo $client[$i]->occupation ; ?></td>
                                        <td><?php echo $client[$i]->highest ; ?></td>
                                        <td><?php echo $client[$i]->telephone ; ?></td>
                                        <td><?php echo $client[$i]->country_code ; ?></td>
                                        <td><?php echo $client[$i]->local_number ; ?></td>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="countries" class="tabcontent">
                    <h3>Countries</h3>
                    <div class="container mt-3">
                        <form action="">
                            <div class="mb-3 mt-3">
                                <label for="country name" class="form-label">Country name:</label>
                                <select class="form-select" name="" id="">
                                    <option value="">Select a country</option>
                                </select>


                                <label for="uname" class="form-label">Description:</label>
                                <textarea class="form-control" id="uname" placeholder="Enter Description" name="uname" required></textarea>
                                <label for="Economique" class="form-label">Economic:</label>
                                <textarea class="form-control" id="uname" placeholder="Enter Economique" name="uname" required></textarea>
                                <label for="Economique" class="form-label">Politic:</label>
                                <textarea class="form-control" id="uname" placeholder="Enter politic" name="uname" required></textarea>
                                <label for="Economique" class="form-label">Flag country:</label>
                                <input type="file" class="form-control" id="uname" placeholder="Enter flag country" name="uname" required>
                                <label for="Economique" class="form-label">Culture description:</label>
                                <input type="text" class="form-control" id="uname" placeholder="Enter politicculture description">
                                <label for="Economique" class="form-label">Culture photo:</label>
                                <input type="file" class="form-control" id="uname" placeholder="photo culture">


                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>



                </div>

                <div id="email" class="tabcontent">
                    <h3>email</h3>
                    <div class="container mt-3">

                        <form action="">
                            <div class="mb-3 mt-3">


                                <label for="uname" class="form-label">E-mail:</label>
                                <input type="email" class="form-control" id="uname" placeholder="Enter E-mail" name="uname" required>
                                <label for=">objet" class="form-label">objet:</label>
                                <input type="text" class="form-control" id="uname" placeholder="Enter objet" name="uname" required>
                                <label for=">content" class="form-label">content:</label>
                                <input type="text" class="form-control" id="uname" placeholder="Enter content" name="uname" required>



                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>

                <div id="header" class="tabcontent">
                    <h3>Header</h3>
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



                <div id="social" class="tabcontent">
                    <h3>Social</h3>
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

                <div id="solution" class="tabcontent">
                    <h3>Solutions</h3>
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

                <div id="streaming" class="tabcontent">
                    <h3>YouTube Streaming</h3>
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

    </div>