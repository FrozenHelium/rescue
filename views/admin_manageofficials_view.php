<div class="container">
    <div class="row">
        <div class="col-md-12 main">
            <div class="col-md-7">
                <h1 class="page-header">Officials List</h1>
                <table class="table">
    				<tr>
    					<th>S.N.</th>
    					<th>Name</th>
    					<th>Designation</th>
    				</tr>
                    <?php
                        $user = $GLOBALS['g_user'];
                        $result = $user->GetOfficials();
                        $count = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr><td>'.$count++.'</td><td>'.$row['name'].'</td><td>'.$row['designation'].' at '.$row['organization'].'</td></tr>';
                        }
                    ?>
                </table>
            </div>
            <div class="col-md-5">
                <h1 class="page-header">Add an Official</h1>
                <form class="form-add-official" action="index.php?page=admin&amp;tab=manageofficials" method="post" name="registration_form" role="form">
                    <input type='text' class="form-control" placeholder="Username" name='username' id='username' required >
                    <input type='password' class="form-control" placeholder="Password" name='password' id='password' required >
    	            <input type='text' class="form-control" placeholder="Name" name='name' id='name' required >
        			<input type="text" class="form-control" placeholder="Organization" name="organization" id="organization" required>
                    <input type="text" class="form-control" placeholder="Designation" name="designation" id="designation" required>
                    <input type="text" class="form-control" placeholder="Accessible Location" name="location" id="location" required>
                    <input type='text' class="form-control" placeholder="Contact" name='contact' id='contact' required >
                    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Add Offical"/>
                </form>
            </div>
        </div>

    </div>
</div>
