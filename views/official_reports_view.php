<div class="container">
    <?php
       if(isset($handleMsg)){
               echo '<div class="alert alert-info alert-dismissible" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <strong>Success! </strong>'.$handleMsg.'
               </div>';
       }
        if(isset($reports)){
            $nReports = 0;
            while ($row = $reports->fetch_assoc()) {
                ++$nReports;
                echo '<a href="index.php?page=official&tab=reports&reportid='.$row['id'].'"class="list-group-item '.($row['urgent']==1?'report-urgent':'report-normal').'">
                        <div class="row">
                            <div class="col-md-9">
                                <p class="list-group-item-title">'.$row['location'].'</p>
                                <p class="list-group-item-text">'.$row['description'].'</p>
                            </div>
                            <div class="col-md-3">
                                <p class="list-group-item-text">'.date('M j, Y - g:i A', strtotime($row['time'])).'</p>
                            </div>
                        </div>
                    </a>';
                }
                if($nReports == 0){
                    echo '<label> no recent reports found </label>';
                }
        }else echo '<label> failed to fetch reports, please try again later</label>';
    ?>
</div>
