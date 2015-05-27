<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <h1>Rescue</h1>
            </div>
            <div class="col-md-1">
                <a href="index.php?page=home">Home</a>
            </div>
        </div>
     </div>
</div>

<div class="container">
    <form class="form-urgent" action="index.php?page=urgent" method="post" name="urgent_form" role="form">
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Location" name="location" id="location" required/>
            </div>
            <div class="col-md-3">
                <input type="button" class="btn btn-lg btn-primary btn-block" value="Select from Map"/>
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
