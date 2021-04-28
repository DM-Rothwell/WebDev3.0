
<div class="card">
            <img src="Images/erik-mclean-ByjIzFupcHo-unsplash.jpg" style="width: 100%"></a>
            <h1><?php $sql = "SELECT * FROM data WHERE id = 1"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoe"];
                    }
                }
                $conn == null;
                ?>
            </h1>
            <p class="price">€<?php $sql = "SELECT * FROM data WHERE id = 1"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["price"];
                    }
                }
                $conn == null;
                ?></p>
            <p><?php $sql = "SELECT * FROM data WHERE id = 1"; $result = $conn->query($sql);
                if (!empty (($result) && $result->rowCount() > 0)) {
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo $row["shoedesc"];
                    }
                }
                $conn == null;
                ?></p>
            <p><button>Add to Cart</button></p>
        </div>




