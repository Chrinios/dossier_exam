<?php
    if(isset($_POST['suppr_product'])){
        $categorie = $_POST['select_products'];
        $new_id = $_POST['id_new'];

        suppr_produit(
            $categorie, 
            $new_id
        );
    }
?>
