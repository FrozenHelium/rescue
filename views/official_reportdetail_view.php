<div class="container">
<?php
    $id = $_GET['reportid'];
    $report = null;
    $found = false;
    while ($row = $reports->fetch_assoc()) {
        if($row['id'] == $id){
            $found=true;
            $report=$row;
            break;
        }
    }
    if($found){
        echo '
            <h2>'.$report['category'].'</h2>
            <p class="detail-location">'.$report['location'].'</p>
            <hr/>
            <p class="detail-description">'.$report['description'].'</p>
            <div class="row detail-report-buttons">
              <div class="col-md-1"></div>
              <div class="col-md-4">
                <a class="btn btn-lg btn-primary btn-block" href="index.php?page=official&tab=reports">Back to reports</a>
              </div>
              <div class="col-md-2"></div>
              <div class="col-md-4">
                <form class="form-reportdetail" action="index.php?page=official&tab=reports" method="post" role="form">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Handle this case
                    </button>
                    <input type="text" style="visibility:hidden;" value="'.$report['id'].'"name="detail-reportid"/>
                </form>
              </div>
            </div>
        ';
    }else{
        header("Location: index.php?page=forbidden");
    }
?>
</div>
