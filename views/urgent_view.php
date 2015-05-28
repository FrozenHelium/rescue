
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <h1>Rescue</h1>
                <p><strong>Urgent:</strong> Report your suspicion that requires immediate attention</p>
            </div>
            <div class="col-md-1">
                <a href="index.php?page=home">Home</a>
            </div>
        </div>
     </div>
</div>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="container">
    <form class="form-urgent" action="index.php?page=urgent" method="post" name="urgent_form" role="form">
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Location" name="location" id="location" required/>
            </div>
            <div class="col-md-3">
                <div class="map-modal">
                    <!-- Button (to Trigger Modal) -->
                   <button type="button" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#myModal">Select from Mappy</button>      
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
                                    <div id="googleMap" style="width:540px;height:380px;"></div>
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
                <select class="form-control" placeholder="Select the type of suspicion" name="type" id ="type" required>
                    <option value="1">Human Trafficking</option>
                    <option value="2">Child Labour</option>
                    <option value="3">Kidnapping</option>
                </select>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-12">
                <p> Enter a breif description about your suspicion </p>
                <textarea class="form-control" required></textarea>
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
