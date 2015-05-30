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
        ';
    }else{
        header("Location: index.php?page=forbidden");
    }
?>
</div>
