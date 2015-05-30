<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <h1>Rescue</h1>
                <p><strong>Notify:</strong> Report your suspicion</p>
            </div>
            <div class="col-md-1">
                <a href="index.php?page=home">Home</a>
            </div>
        </div>
     </div>
</div>
<div class="container">
     <?php
        if(isset($formSubmissionSuccess)){
            if($formSubmissionSuccess == false){
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Error! </strong>'.$formSubmissionMsg.'
                </div>';
            }else{
                echo '<div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Successful! </strong>'.$formSubmissionMsg.'
                    </div>';
            }
        }
    ?>
    <form class="form-notify" action="index.php?page=notify" method="post" name="notify_form" role="form">
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Location" name="location" id="location" required/>
            </div>
            <div class="col-md-3">
                <div class="map-modal">
                    <!-- Button (to Trigger Modal) -->
                   <button type="button" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#myModal">Locate on Map</button>
                    <!-- Modal HTML -->
                    <div id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Select Location</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure about this location?</p>
                                    <iframe src="map_view.php" width="560px" height="400px"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-lg btn-primary btn-block">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class = "col-md-6">
                <select class="form-control" placeholder="Select the type of suspicion" name="category" id ="category" required>
                    <option value="Human Trafficking">Human Trafficking</option>
                    <option value="Child Labour">Child Labour</option>
                    <option value="Bonded Labour">Bonded Labour</option>
                    <option value="Kidnapping">Kidnapping</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-12">
                <p> Enter a brief description about your suspicion </p>
                <textarea class="form-control" name="description" id="description" required></textarea>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-5">
                <input type='text' class="form-control" placeholder="Name (optional if submitted anonymously)" name='name' id='name' >
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <input type='text' class="form-control" placeholder="Contact (optional if submitted anonymously)" name='contact' id='contact'>
            </div>
        </div>
        <div class="checkbox ">
          <label>
            <input type="checkbox" value="anonymous"> Submit anonymously
          </label>
        </div>
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit"/>
            </div>
        </div>
    </form>
    <footer class="footer">
        <p class="text-muted">&copy; Copyright shit, C-Company 2015</p>
    </footer>
</div>
