<!DOCTYPE html>
<html lang="en">
<body>
    <div class="scale-up-top" >
        <div >
            <p >
                <?php echo $pokenea['name']; ?>
            </p>
            <p>
                <?php echo $pokenea['phrase']; ?>
            </p>
            <p>
                <?php echo "Container ID: " . $docker_container; ?>
            </p>
        </div>
        <div >
            <img src="<?php echo $pokenea['image']; ?>" width="35%" />
        </div>
    </div>
</body>
</html>